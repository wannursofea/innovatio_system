<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data)
    {

        // Set timezone 
        date_default_timezone_set("Asia/Taipei");
        $user_datetime = date('Y-m-d H:i:s');
        $user_reg_status = "active";

        //insert value for user registration
        //insert value for profile detail
        if ($data['user_role'] == "Student") {
            
            //student users and profile
            $this->db->query("INSERT INTO user (username, email, password, user_role, datetime_register, user_reg_status) 
            VALUES(:username, :email, :password, :user_role, :datetime_register, :user_reg_status);
            
            INSERT INTO student (DOB, phoneNum, email, name, gender, race, education, course, bio, image, country, city) 
            VALUES(:DOB, :phoneNum, :email, :name, :gender, :race, :education , :course , :bio , :image, :country, :city);");

         //Bind values for st_profiles table

            $this->db->bind(':email', $_SESSION['email']);
            $this->db->bind(':phoneNum', $data['phoneNum']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':gender', $data['gender']);
            $this->db->bind(':race', $data['race']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':country', $data['country']);
            $this->db->bind(':education', $data['education']);
            $this->db->bind(':course', $data['course']);
            $this->db->bind(':DOB', $data['DOB']);
            $this->db->bind(':bio', $data['bio']);
            $this->db->bind(':image', $data['image']);
      
            //Bind values for users table
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':user_role', $data['user_role']);
            $this->db->bind(':datetime_register', $user_datetime);
            $this->db->bind(':user_reg_status', $user_reg_status);

        } elseif ($data['user_role'] == "Partner") {
          //student users and profile
          $this->db->query("INSERT INTO user (username, email, password, user_role, datetime_register, user_reg_status) 
          VALUES(:username, :email, :password, :user_role, :datetime_register, :user_reg_status);
        
          INSERT INTO partnerclient (companyName, companyDescription, city, country, officeNum, email) 
          VALUES(:companyName, :companyDescription, :city, :country, :officeNum, :email );");

          //Bind values for partnerclient table
          $companyName = $data['companyName']??'';
          $companyDescription = "";
          $city = "";
          $country = "";
          $officeNum = $data['officeNum']??'';
          
          
          //Bind values for partnerclient table
           $this->db->bind(':companyName', $companyName);
           $this->db->bind(':companyDescription', $companyDescription);
           $this->db->bind(':city', $city);
           $this->db->bind(':country', $country);
           $this->db->bind(':officeNum', $officeNum);
           $this->db->bind(':email', $data['email']);


          //Bind values for users table
          $this->db->bind(':username', $data['username']);
          $this->db->bind(':email', $data['email']);
          $this->db->bind(':password', $data['password']);
          $this->db->bind(':user_role', $data['user_role']);
          $this->db->bind(':datetime_register', $user_datetime);
          $this->db->bind(':user_reg_status', $user_reg_status);


        } else {
           
        }

        //execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function login($email, $password) {
        $this->db->query('SELECT * FROM user WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($row) {
            $hashedPassword = $row->password;
    
            if (password_verify($password, $hashedPassword)) {
                return $row; // User authenticated successfully
            }
        }
    
        return false; // User not found or authentication failed
    }

    public function getUserImage($email, $role) {
        if($role == 'Student')
        {
            $this->db->query('SELECT image FROM student WHERE email = :email');
        }
        elseif($role == 'Partner')
        {
            $this->db->query('SELECT pr_image FROM partnerclient WHERE email = :email');
        }
        else{
            return null;
        }

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        return $row ? ($role == 'Student' ? $row->image : $row->pr_image) : null;
    }

    public function updateResetToken($data) {
        //Prepared statement
        require_once APPROOT . '/views/users/mailer.php';

        $this->db->query('UPDATE user SET reset_token_hash = :reset_token_hash, reset_token_expired = :reset_token_expired WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':reset_token_hash', $data['resetTokenHash']);
        $this->db->bind(':reset_token_expired', $data['resetTokenExpired']);
        $this->db->bind(':email', $data['email']);
        
        //Check if email is already registered
       if ($this->db->execute()) {
            $mail = createMailerInstance();
            $mail->setFrom("noreply@gmail.com");
            $mail->addAddress($data['email']);
            $mail->Subject = "Password Reset";
            $mail->Body = <<<END

            Click <a href="{URLROOT}/users/new_password.php?token={$data['token']}">here</a>
            to reset your password.

            END;

            try{
                $mail->send();
            }catch(Exception $e){
                echo "Message could not be sent. Mailer error: ($mail->ErrorInfo)";
            }
            
        } 
        echo "Message sent, please check your inbox. ";
         
    }

    // public function getResetToken($reset_token_hash){
    //     $this->db->query('SELECT * FROM user WHERE reset_token_hash = :reset_token_hash');

    //     $this->db->bind(':reset_token_hash',$reset_token_hash);
    //     $this->db->execute();
        
    // }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM user WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);
        $this->db->execute();
        //Check if email is already registered
        return $this->db->rowCount();
         
    }
}
