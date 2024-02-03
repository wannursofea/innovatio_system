<?php 
class Dashboard{

    private $db; //connect with db
    public function findStudentById($user_id){
        //remark:
        //retrieve the student info from table student
        $this->db->query('SELECT * FROM student WHERE user_id = :user_id');
        $this->db->bind(':user_id', $user_id);

        $row_profile = $this->db->single();

        return $row_profile;
    }

    public function findStudentInReward($profile_id){
        $this->db->query('SELECT * FROM rewardnbadge WHERE profile_id = :profile_id');

        $this->db->bind(':profile_id', $profile_id);

        return ($this->db->single());

    }
}
?>