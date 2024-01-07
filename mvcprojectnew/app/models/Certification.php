<?php 

class Certification 
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findAllCertifications()
    {
        $this->db->query('SELECT * FROM certification ');
    
        $result = $this->db->resultSet();

        return $result;
    }

    public function addCertification($data)
    {
        $this->db->query('INSERT INTO certification (certification_id, user_id, profile_id, resume_id, certName, validity) VALUES (:certification_id, :user_id, :profile_id, :resume_id, :certName, :validity)');
        
        $this->db->bind(':certification_id', $data['certification_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':profile_id', $data['profile_id']);
        $this->db->bind(':resume_id', $data['resume_id']);
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

    public function findCertificationById($id)
    {
        $this->db->query('SELECT * FROM certification WHERE certification_id = :certification_id');
        $this->db->bind(':certification_id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateCertification($data)
    {
        $this->db->query('UPDATE certification SET certName = :certName, validity = :validity WHERE certification_id = :certification_id');

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

    public function deleteCertification($id){
        $this->db->query('DELETE FROM certification WHERE certification_id = :certification_id');

        $this->db->bind(':certification_id', $id);

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