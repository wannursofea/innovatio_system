<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    // public function register($data) {
    //     $this->db->query('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');

    //     //Bind values
    //     $this->db->bind(':username', $data['username']);
    //     $this->db->bind(':email', $data['email']);
    //     $this->db->bind(':password', $data['password']);

    //     //Execute function
    //     if ($this->db->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


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
            
            INSERT INTO st_profiles (phoneNum, st_email, name, gender, race, institution, address, course, bio, image) 
            VALUES(:phoneNum, :st_email, :name, :gender, :race, :institution, :address , :course , :bio , :image );");

            //Bind values for st_profiles table
            $phoneNum = "";
            $name = "";
            $gender = "";
            $race = "";
            $institution = "";
            $address = "";
            $course = "";
            //$DOB = "";
            $bio = "";
            $image = "";

         //Bind values for st_profiles table

            $this->db->bind(':phoneNum', $phoneNum);
            $this->db->bind(':st_email', $data['email']);
            $this->db->bind(':name', $name);
            $this->db->bind(':gender', $gender);
            $this->db->bind(':race', $race);
            $this->db->bind(':institution', $institution);
            $this->db->bind(':address', $address);
            $this->db->bind(':course', $course);
            //$this->db->bind(':DOB', $DOB);
            $this->db->bind(':bio', $bio);
            $this->db->bind(':image', $image);
      
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
          
          INSERT INTO partnerclient (companyName, companyDesc, city, country, officeNum, pc_email) 
          VALUES(:companyName :companyDesc :city :country :officeNum :pc_email );");

          //Bind values for partnerclient table
          $companyName = "";
          $companyDesc = "";
          $city = "";
          $country = "";
          $officeNum = "";
          
          
          //Bind values for partnerclient table
           $this->db->bind(':companyName', $companyName);
           $this->db->bind(':companyDesc', $companyDesc);
           $this->db->bind(':city', $city);
           $this->db->bind(':country', $country);
           $this->db->bind(':officeNum', $officeNum);
           $this->db->bind(':pc_email', $data['email']);


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

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM user WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
