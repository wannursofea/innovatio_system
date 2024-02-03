<?php

class Page
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function studentProfile()
    {

        $this->db->query('SELECT * FROM student WHERE email = :email');
       
        $this->db->bind(':email', $_SESSION['email']);

        $result = $this->db->resultSet();

        return $result;
    }

    public function clientProfile()
    {

        $this->db->query('SELECT * FROM partnerclient WHERE email = :email');
       
        $this->db->bind(':email', $_SESSION['email']);

        $result = $this->db->resultSet();

        return $result;
    }


    public function updateStudentProfile($data)
    {

 
        if (isset($data['image'])) {

        $this->db->query("UPDATE student
        SET email = :email, phoneNum = :phoneNum, name = :name, gender = :gender,
        race = :race, education  = :education, city = :city, country = :country, bio = :bio, DOB =:DOB, course = :course, image  = :image WHERE email = :email;");

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

        }else{

        $this->db->query("UPDATE student 
        SET email = :email, phoneNum = :phoneNum, name = :name, gender = :gender,
        race = :race, education  = :education, city = :city, country = :country, bio = :bio, DOB =:DOB, course = :course WHERE email  = :email;");

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
        
            
        }
        
        //execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateClientProfile($data)
    {

        if (isset($data['pr_image'])) {

        $this->db->query("UPDATE partnerclient
        SET companyName = :companyName, companyDescription = :companyDescription, city = :city, country = :country,
        officeNum = :officeNum, pr_image  = :pr_image WHERE email = :email;");




        $this->db->bind(':email', $_SESSION['email']);
        $this->db->bind(':companyName', $data['companyName']);
        $this->db->bind(':companyDescription', $data['companyDescription']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':officeNum', $data['officeNum']);
        $this->db->bind(':pr_image', $data['pr_image']);

        }else{

        $this->db->query("UPDATE partnerclient 
        SET companyName = :companyName, companyDescription = :companyDescription, city = :city, country = :country,
        officeNum = :officeNum WHERE email = :email;");

        $this->db->bind(':email', $_SESSION['email']);
        $this->db->bind(':companyName', $data['companyName']);
        $this->db->bind(':companyDescription', $data['companyDescription']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':officeNum', $data['officeNum']);
        
            
        }
        
        //execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findStudentById($user_id){
        $this->db->query('SELECT * FROM student WHERE user_id = :user_id');
        $this->db->bind(':user_id', $user_id);

        $row_profile = $this->db->single();

        return $row_profile;
    }

    public function findPartnerById($user_id){
        $this->db->query('SELECT * FROM partnerclient WHERE user_id = :user_id');
        $this->db->bind(':user_id', $user_id);

        $row_profile = $this->db->single();

        return $row_profile;
    }


    public function studentInfo($user_id){
        $this->db->query('SELECT * FROM student WHERE user_id = :user_id');

        $this->db->bind(':user_id', $user_id);

        return $this->db->single();
    }
 
    public function badgeInfo($profile_id){
        $this->db->query('SELECT * FROM rewardnbadge WHERE profile_id = :profile_id');

        $this->db->bind(':profile_id', $profile_id);

        return $this->db->single();
    }

    public function eventInfo(){
        $this->db->query('SELECT * FROM events');

        return $this->db->resultSet();
    }

    
 
}
