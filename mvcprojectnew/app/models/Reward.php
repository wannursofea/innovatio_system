<?php 

class Reward{
    private $db; //connect with db
    private $table; // table name

    public function __construct(){
        $this->db = new Database; //$this->db new Database;
    }


    public function AmanageAllBadge(){
        $this->db->query(
        'SELECT  s.*,b.*,u.*
        FROM
            Student s 
        JOIN 
            User u ON s.user_id = u.user_id
        JOIN
            RewardnBadge b ON b.profile_id = s.profile_id;'
        );

        $results = $this->db->resultSet();

        return $results;
    }

    public function getStudentByUserId(){
        $this->db->query(
        'SELECT s.* 
        FROM Student s
        JOIN User u ON s.user_id = u.user_id
        WHERE s.user_id = u.user_id;
        ');

        $results = $this->db->single();

        return $results;
    }


    public function addReward($data)
    {
        $this->db->query('INSERT INTO RewardnBadge (goldBadge, silverBadge, bronzeBadge, claimStatus, dateAwarded) 
       VALUES (:goldBadge, :silverBadge, :bronzeBadge, :claimStatus, :dateAwarded)
        ');
        
        $this->db->bind(':goldBadge', $data['goldBadge']);
        $this->db->bind(':silverBadge', $data['silverBadge']);
        $this->db->bind(':bronzeBadge', $data['bronzeBadge']);
        $this->db->bind(':claimStatus', $data['claimStatus']);
        $this->db->bind(':dateAwarded', $data['dateAwarded']);

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function findRewardById($badge_id)
    {
        $this->db->query('SELECT rb.*, s.name AS student_name 
        FROM RewardnBadge rb
        JOIN Student s ON rb.profile_id = s.profile_id 
        WHERE rb.badge_id = :badge_id');
        $this->db->bind(':badge_id', $badge_id);

        $row = $this->db->single(); // return all the rows that have the user_id pass in

            var_dump($row);
        return $row;
    }

    public function updateReward($data)
    {
        $this->db->query('UPDATE RewardnBadge SET goldBadge = :goldBadge, silverBadge = :silverBadge, bronzeBadge = :bronzeBadge, claimStatus = :claimStatus, dateAwarded = :dateAwarded 
        WHERE badge_id = :badge_id');

        $this->db->bind(':badge_id', $data['badge_id']);
        $this->db->bind(':goldBadge', $data['goldBadge']);
        $this->db->bind(':silverBadge', $data['silverBadge']);
        $this->db->bind(':bronzeBadge', $data['bronzeBadge']);
        $this->db->bind(':claimStatus', $data['claimStatus']);
        $this->db->bind(':dateAwarded', $data['dateAwarded']);

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