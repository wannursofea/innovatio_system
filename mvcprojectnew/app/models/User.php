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
        $user_id ="";
        //insert value for user registration
        //insert value for profile detail
        if ($data['user_role'] == "Student") {
            
            //student users and profile
            $this->db->query("INSERT INTO user (username, email, password, user_role, datetime_register, user_reg_status) 
            VALUES(:username, :email, :password, :user_role, :datetime_register, :user_reg_status)");
            // $this->db->query("INSERT INTO user (username, email, password, user_role, datetime_register, user_reg_status) 
            // VALUES(:username, :email, :password, :user_role, :datetime_register, :user_reg_status);

             //Bind values for users table
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':user_role', $data['user_role']);
            $this->db->bind(':datetime_register', $user_datetime);
            $this->db->bind(':user_reg_status', $user_reg_status);

            if($this->db->execute()){
                $user_id = $this->db->lastInsertId();
            }
            
            $this->db->query("INSERT INTO student (user_id, DOB, phoneNum, email, name, gender, race, education, course, bio, image, country, city) 
            VALUES(:user_id, :DOB, :phoneNum, :email, :name, :gender, :race, :education , :course , :bio , :image, :country, :city);");

            //Bind values for st_profiles table
            

         //Bind values for st_profiles table
            $this->db->bind(':user_id', $user_id);
            $this->db->bind(':email', $data['email']);
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
      
           

            

        } elseif ($data['user_role'] == "Partner") {
          //student users and profile
          $this->db->query("INSERT INTO user (username, email, password, user_role, datetime_register, user_reg_status) 
          VALUES(:username, :email, :password, :user_role, :datetime_register, :user_reg_status);");
        

        //Bind values for users table
          $this->db->bind(':username', $data['username']);
          $this->db->bind(':email', $data['email']);
          $this->db->bind(':password', $data['password']);
          $this->db->bind(':user_role', $data['user_role']);
          $this->db->bind(':datetime_register', $user_datetime);
          $this->db->bind(':user_reg_status', $user_reg_status);

          if($this->db->execute()){
            $user_id = $this->db->lastInsertId();
        }

          $this->db->query("INSERT INTO partnerclient (user_id, companyName, companyDescription, city, country, officeNum, email) 
          VALUES(:user_id, :companyName, :companyDescription, :city, :country, :officeNum, :email );");

          //Bind values for partnerclient table
          $companyName = $data['companyName']??'';
          $companyDescription = "";
          $city = "";
          $country = "";
          $officeNum = $data['officeNum']??'';
          
          
            //Bind values for partnerclient table
            $this->db->bind(':user_id', $user_id);
           $this->db->bind(':companyName', $companyName);
           $this->db->bind(':companyDescription', $companyDescription);
           $this->db->bind(':city', $city);
           $this->db->bind(':country', $country);
           $this->db->bind(':officeNum', $officeNum);
           $this->db->bind(':email', $data['email']);

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
        $this->db->bind(':reset_token_hash', $data['reset_token_hash']);
        $this->db->bind(':reset_token_expired', $data['reset_token_expired']);
        $this->db->bind(':email', $data['email']);
        
        //Check if email is already registered
       if ($this->db->execute()) {
            $mail = createMailerInstance();
            $mail->setFrom("noreply@gmail.com");
            $mail->addAddress($data['email']);
            $mail->Subject = "Password Reset";
            $mail->Body = <<<END

                Click <a href="{$data['URLROOT']}/users/new_password.php?token={$data['token']}">here</a>
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

    public function findByResetToken($reset_token_hash){
        $this->db->query('SELECT * FROM user WHERE reset_token_hash = :reset_token_hash');

        $this->db->bind(':reset_token_hash',$reset_token_hash);
        $result = $this->db->single();
        if($this->db->execute()){
            return $result;
        }
        else{
            return false;
        }
    }

    public function updateNewPassword($data) {
        $this->db->query('UPDATE user SET password = :password WHERE reset_token_hash = :reset_token_hash');
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':reset_token_hash', $data['reset_token_hash']);

        // Execute the query
        if ($this->db->execute()) {
            return true; // Password updated successfully
        } else {
            return false; // Error updating password
        }
    }

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
    public function getUserImage($email, $role) {
        if ($role == 'Student') {
            //Query to get student image
            $this->db->query('SELECT image FROM student WHERE email= :email');
 
        } elseif ($role == 'Partner') {
            //Query to get partner image
            $this->db->query('SELECT pc_image FROM partnerclient WHERE pc_email= :email');
        }  else {
            //Default case or handle other roles
            return null;
        } 
        
        // Bind the email parameter
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        return $row ? ($role == 'Student' ? $row->image : $row->pc_image) : null;
    }
}
