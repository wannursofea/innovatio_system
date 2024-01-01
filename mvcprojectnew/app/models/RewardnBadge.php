<?php 

class RewardnBadge{
    private $db; //connect with db
    private $table; // table name

    public function __construct($table){
        $this->db = new Database; //$this->db new Database;
        $this->$table;
    }

    public function manageAllRewardnBadge(){
        $this->db->query(
        'SELECT s.profile_id, s.studentName, e.event_id, e.eventName
         FROM student s
         JOIN event e ON s.profile_id = e.profile_id
         JOIN rewardnbadge r ON e.event_id = r.event_id');

        $results = $this->db->resultSet();

        return $results;
    }

    public function manageAllBadge(){
        $this->db->query('SELECT badgeName FROM RewardnBadge');

        $result = $this->db->resultSet();

        return $result;
    }
}

?>