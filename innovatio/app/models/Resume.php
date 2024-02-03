<?php

class Resume
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


    public function findSelectedSoftSkillById($profile_id){
        $result = $this->findSoftSkillById($profile_id);
        $softwareSkill_ids = array_column($result, 'softwareSkill_id');

        return $softwareSkill_ids;
    }

 
    public function findSkillById($profile_id){
        $this->db->query('SELECT * FROM skill WHERE profile_id = :profile_id');
        $this->db->bind(':profile_id', $profile_id);
        $result = $this->db->resultSet();

        return $result;
    }
    
    public function findCertificationByProfileId($profile_id)
    {
        $this->db->query('SELECT * FROM certification WHERE profile_id = :profile_id');
        $this->db->bind(':profile_id', $profile_id);

        $row = $this->db->resultSet();

        return $row;
    }

    public function findExperienceByProfileId($profile_id)
    {
        $this->db->query('SELECT * FROM experience WHERE profile_id = :profile_id');
        $this->db->bind(':profile_id', $profile_id);

        $row = $this->db->resultSet();

        return $row;
    }
    
    public function findSoftSkillById($profile_id){
        $this->db->query('SELECT * FROM softwareskill WHERE profile_id = :profile_id');
        $this->db->bind(':profile_id', $profile_id);
        $result = $this->db->resultSet();

        return $result;
    }
    
    public function findSelectedSkillOptionById($skill_id){
        $this->db->query('SELECT * FROM option_skill WHERE skill_id = :skill_id');
        $this->db->bind(':skill_id', $skill_id);
        $result = $this->db->single();

        return $result;
    }


    public function findSelectedSoftSkillOptionById($softwareSkill_id){
        $this->db->query('SELECT * FROM option_software_skill WHERE softwareSkill_id = :softwareSkill_id');
        $this->db->bind(':softwareSkill_id', $softwareSkill_id);
        $result = $this->db->single();
        
        return $result ?? [];
    }

      
}   
