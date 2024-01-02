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

        $this->db->query("SELECT * FROM st_profile WHERE st_email = :email");

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

 
        if (isset($data['st_image'])) {

        $this->db->query("UPDATE st_profile 
        SET st_email = :email, st_ic = :st_ic, st_fullname = :st_fullname, st_gender = :st_gender,
        st_race = :st_race, univ_code  = :univ_code, st_address  = :st_address, st_image  = :st_image WHERE st_email   = :email;");

        $this->db->bind(':email', $_SESSION['email']);
        $this->db->bind(':st_ic', $data['st_ic']);
        $this->db->bind(':st_fullname', $data['st_fullname']);
        $this->db->bind(':st_gender', $data['st_gender']);
        $this->db->bind(':st_race', $data['st_race']);
        $this->db->bind(':st_address', $data['st_address']);
        $this->db->bind(':univ_code', $data['univ_code']);
        $this->db->bind(':st_image', $data['st_image']);

        }else{

        $this->db->query("UPDATE st_profile 
        SET st_email = :email, st_ic = :st_ic, st_fullname = :st_fullname, st_gender = :st_gender,
        st_race = :st_race, univ_code  = :univ_code, st_address  = :st_address WHERE st_email = :email;");

        $this->db->bind(':email', $_SESSION['email']);
        $this->db->bind(':st_ic', $data['st_ic']);
        $this->db->bind(':st_fullname', $data['st_fullname']);
        $this->db->bind(':st_gender', $data['st_gender']);
        $this->db->bind(':st_race', $data['st_race']);
        $this->db->bind(':st_address', $data['st_address']);
        $this->db->bind(':univ_code', $data['univ_code']);
            
        }
        
        //execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

 
}