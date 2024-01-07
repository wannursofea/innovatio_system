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
        $this->db->query('INSERT INTO certification (certName, validity) VALUES (:certName, :validity)');
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