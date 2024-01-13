<?php 

class Certification 
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function studentProfile()
    {

        $this->db->query("SELECT * FROM student WHERE email = :email");

        $this->db->bind(':email', $_SESSION['email']);

        $result = $this->db->resultSet();

        return $result;
    }

    public function findAllCertifications()
    {
        $this->db->query('SELECT * FROM certifications ');
    
        $result = $this->db->resultSet();

        return $result;
    }

    public function addCertification($data)
    {
        $this->db->query('INSERT INTO certifications (profile_id,certName, validity,email) VALUES (:profile_id,:certName, :validity,:email)');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':certName', $data['certName']);
        $this->db->bind(':validity', $data['validity']);
        $this->db->bind(':profile_id', $data['profile_id']);

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function findCertificationById($certification_id)
    {
        $this->db->query('SELECT * FROM certifications WHERE certification_id = :certification_id');
        $this->db->bind(':certification_id', $certification_id);

        $row = $this->db->single();

        return $row;
    }

    public function updateCertification($data)
    {
        $this->db->query('UPDATE certifications SET certName = :certName, validity = :validity WHERE certification_id = :certification_id');

        $this->db->bind(':certification_id', $data['certification_id']);
        $this->db->bind(':certName', $data['certName']);
        $this->db->bind(':validity', $data['validity']);

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteCertification($certification_id){
        $this->db->query('DELETE FROM certifications WHERE certification_id = :certification_id');

        $this->db->bind(':certification_id', $certification_id);

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }

    }


}


?>