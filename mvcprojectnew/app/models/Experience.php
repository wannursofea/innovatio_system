<?php 

class Experience
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

    public function findAllExperiences()
    {
        $this->db->query('SELECT * FROM experience ');
    
        $result = $this->db->resultSet();

        return $result;
    }


    public function addExperience($data)
{
    $this->db->query('INSERT INTO experience (profile_id, jobtitle, company, from_date, to_date,email) VALUES (:profile_id, :jobtitle, :company, :from_date, :to_date,:email)');
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':profile_id', $data['profile_id']);
    $this->db->bind(':jobtitle', $data['jobtitle']);
    $this->db->bind(':company', $data['company']);
    $this->db->bind(':from_date', $data['from_date']);
    $this->db->bind(':to_date', $data['to_date']);

    if ($this->db->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}


    public function findExperienceById($experience_id)
    {
        $this->db->query('SELECT * FROM experience WHERE experience_id = :experience_id');
        $this->db->bind(':experience_id', $experience_id);

        $row = $this->db->single();

        return $row;
    }

    public function updateExperience($data)
{
    $this->db->query('UPDATE experience SET jobtitle = :jobtitle, company=:company, from_date= :from_date, to_date= :to_date WHERE experience_id = :experience_id');
    $this->db->bind(':experience_id', $data['experience_id']);
    $this->db->bind(':jobtitle', $data['jobtitle']);
    $this->db->bind(':company', $data['company']);
    $this->db->bind(':from_date', $data['from_date']);
    $this->db->bind(':to_date', $data['to_date']);

    if ($this->db->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}


public function deleteExperience($experience_id)
{
    $this->db->query('DELETE FROM experience WHERE experience_id = :experience_id');
    $this->db->bind(':experience_id', $experience_id);

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