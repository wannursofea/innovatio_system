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

        $this->db->query("SELECT * FROM st_profile WHERE email = :email");

        $this->db->bind(':email', $_SESSION['email']);

        $result = $this->db->resultSet();

        return $result;
    }


    // public function universitySelection()
    // {

    //     $this->db->query("SELECT * FROM uni_details");

    //     $result = $this->db->resultSet();

    //     return $result;
    // }

    // public function universitySelectionDetails()
    // {

    //     if ($_SESSION['user_role'] == "student") {

    //     $user_code = $_SESSION['user_code'];

    //     $this->db->query("SELECT * FROM uni_details
    //     INNER JOIN st_profile ON uni_details.uni_code=st_profile.univ_code  WHERE st_code = :st_code");

    //     $this->db->bind(':st_code', $user_code);

    //     }elseif($_SESSION['user_role'] == "supervisor"){

    //     $user_code = $_SESSION['user_code'];

    //     $this->db->query("SELECT * FROM uni_details
    //     INNER JOIN sv_profile ON uni_details.uni_code=sv_profile.univ_code  WHERE sv_code = :sv_code");

    //     $this->db->bind(':sv_code', $user_code);

    //     }

    //     $result = $this->db->resultSet();

    //     return $result;
    // }


    public function updateStudentProfile($data)
    {

 
        if (isset($data['image'])) {

        $this->db->query("UPDATE st_profile 
        SET email = :email, phoneNum = :phoneNum, name = :name, gender = :gender,
        race = :race, institution  = :institution, address  = :address, image  = :image WHERE email   = :email;");

        $this->db->bind(':email', $_SESSION['email']);
        $this->db->bind(':phoneNum', $data['phoneNum']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':race', $data['race']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':institution', $data['institution']);
        $this->db->bind(':image', $data['image']);

        }else{

        $this->db->query("UPDATE st_profile 
        SET email = :email, phoneNum = :phoneNum, name = :name, gender = :gender,
        race = :race, institution  = :institution, address  = :address, image  = :image WHERE email   = :email;");

        $this->db->bind(':email', $_SESSION['email']);
        $this->db->bind(':phoneNum', $data['phoneNum']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':race', $data['race']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':institution', $data['institution']);
        $this->db->bind(':image', $data['image']);
            
        }
        
        //execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

 
}
