<?php 

class Reward{
    private $db; //connect with db
    private $table; // table name

    public function __construct(){
        $this->db = new Database; //$this->db new Database;
    }

    public function manageAllReward(){
        $this->db->query(
        'SELECT
        s.*, e.*, b.*, r.*
    FROM
        Student s
    JOIN
        Registration r ON s.profile_id = r.profile_id
    JOIN
        events e ON e.user_id = r.user_id
    JOIN
        RewardnBadge b ON e.event_id = b.event_id;
    ');

        $results = $this->db->resultSet();

        return $results;
    }

   /* public function manageAllBadge(){
        $this->db->query('SELECT badgeName FROM RewardnBadge');

        $result = $this->db->resultSet();

        return $result;
    }*/
}

?>