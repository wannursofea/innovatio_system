<?php 

class Reward{
    private $db; //connect with db
    public function __construct(){
        $this->db = new Database; //$this->db new Database;
    }

    public function getProfileId(){
        $this->db->query('SELECT profile_id FROM Student');

        $profile_id = $this->db->single();

        return $profile_id;
    }


    public function AmanageAllBadge(){
        $this->db->query(
        'SELECT  s.*,b.*
        FROM
            student s 
        JOIN
        rewardnbadge b ON b.profile_id = s.profile_id;'
        );

        $results = $this->db->resultSet();

        return $results;
    }


    public function addReward($data)
    {
        $this->db->query('INSERT INTO rewardnbadge (goldBadge, silverBadge, bronzeBadge, claimStatus, dateAwarded) 
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
        FROM rewardnbadge rb
        JOIN student s ON rb.profile_id = s.profile_id 
        WHERE rb.badge_id = :badge_id');
        $this->db->bind(':badge_id', $badge_id);

        $row = $this->db->single(); // return all the rows that have the user_id pass in

        return $row;
    }

    public function updateReward($data)
    {
        $this->db->query('UPDATE rewardnbadge SET goldBadge = :goldBadge, silverBadge = :silverBadge, bronzeBadge = :bronzeBadge, claimStatus = :claimStatus, dateAwarded = :dateAwarded 
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
   
    public function findStudentById($user_id){
        //remark:
        //retrieve the student info from table student
        $this->db->query('SELECT * FROM student WHERE user_id = :user_id');
        $this->db->bind(':user_id', $user_id);

        $row_profile = $this->db->single();

        return $row_profile;
    }

    public function initialReward($data){
        $this->db->query('INSERT INTO `rewardnbadge` (`profile_id`, `goldBadge`, `silverBadge`, `bronzeBadge`, `claimStatus`, `dateAwarded`) VALUES (:profile_id , :goldBadge, :silverBadge, :bronzeBadge, NULL, NULL)');

        $this->db->bind(':profile_id', $data['student']->profile_id);
        $this->db->bind(':goldBadge', $data['goldBadge']);
        $this->db->bind(':silverBadge', $data['silverBadge']);
        $this->db->bind(':bronzeBadge', $data['bronzeBadge']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function findExist($profile_id){
        $this->db->query('SELECT * FROM rewardnbadge WHERE profile_id = :profile_id');

        $this->db->bind(':profile_id', $profile_id);

        $profile_exist = $this->db->single();

        if($profile_exist){
            return true;
        } else {
            return false;
        }

    }

    public function findStudentInReward($profile_id){
        $this->db->query('SELECT * FROM rewardnbadge WHERE profile_id = :profile_id');

        $this->db->bind(':profile_id', $profile_id);

        return $this->db->single();

    }


    public function getBadges($profile_id){
        $this->db->query('SELECT goldBadge, silverBadge, bronzeBadge FROM rewardnbadge WHERE profile_id = :profile_id');

        $this->db->bind(':profile_id', $profile_id);

       return $this->db->resultSet();

         
    }

    public function getCategory($event_id){
        $this->db->query('SELECT category FROM events WHERE event_id = :event_id');
        $this->db->bind(':event_id', $event_id);
        // $result = $this->db->single();

        return $this->db->single();
    }



    //amik bilangan event satu2 student dh register
    public function getRegisteredEvent($profile_id){
        $this->db->query('SELECT event_id FROM registration WHERE profile_id = :profile_id');

        $this->db->bind(':profile_id', $profile_id);

        $result = $this->db->resultSet();
        // $new_result = array_column($result, 'event_id');

        return $result;
        //return $new_result;
    }


    public function updateBadgeById($data, $profile_id)
    {
        $this->db->query('UPDATE rewardnbadge SET goldBadge = :goldBadge, silverBadge = :silverBadge, bronzeBadge = :bronzeBadge
        WHERE profile_id = :profile_id');

        $this->db->bind(':profile_id', $profile_id);
        $this->db->bind(':goldBadge', $data['goldBadge']);
        $this->db->bind(':silverBadge', $data['silverBadge']);
        $this->db->bind(':bronzeBadge', $data['bronzeBadge']);

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function takeOnlyProfileId(){
        $this->db->query('SELECT * FROM registration');

        $results = $this->db->resultSet();

        return $results;
    }

    
    public function updateStatus($badge_id, $isChecked){
        $this->db->query('UPDATE rewardnbadge SET claimStatus = :claimStatus WHERE badge_id = :badge_id');
        $this->db->bind(':badge_id', $badge_id);
        $this->db->bind(':claimStatus', $isChecked ? 1 : 0);
        $this->db->execute();
    }
    
}
?>