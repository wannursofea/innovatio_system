<?php

class Event{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function manageAllEvents(){
        $this->db->query('SELECT * FROM events');

        $results = $this->db->resultSet();

        return $results;
    }

    public function manageCollaborator(){
        //remark:
        //use for checkbox selection in form
        //retrieve name of client in the database
        $this->db->query('SELECT * FROM partnerclient');

        $result = $this->db->resultSet();

        return $result;
    }

    public function findEventById($event_id){
        $this->db->query('SELECT * FROM events WHERE event_id = :event_id');
        $this->db->bind(':event_id', $event_id);

        $row = $this->db->single();

        return $row;
    }

    public function countEvent(){
        $this->db->query('SELECT * FROM events');
    
        $count = $this->db->rowCount();

        return $count;
    }

    public function findInvitationById($event_id){
        //remark:
        //use for function findSelectedClientsById and editInvitation and delete_event 
        //retrieve the row(s) of invitation table according to event_id
        $this->db->query('SELECT * FROM invitation WHERE event_id = :event_id');
        $this->db->bind(':event_id', $event_id);
        $result = $this->db->resultSet();

        return $result;
    }

    public function findSelectedClientsById($event_id){
        //remark:
        //use for model Events
        //retrieve the client_id(s) from specific row(s) of invitation table according to event_id
        $result = $this->findInvitationById($event_id);
        $client_ids = array_column($result, 'client_id');

        return $client_ids;
    }

    public function createEvent($data){
        $this->db->query('INSERT INTO events (`eventName`, `category`, `eventDescription`, `date`, `time`, `venue`, `user_id`, `feedback`) 
        VALUES (:eventName, :category, :eventDescription, :date, :time, :venue, :user_id, :feedback)');
        
        $this->db->bind(':eventName', $data['eventName']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':eventDescription', $data['eventDescription']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':time', $data['time']);
        $this->db->bind(':venue', $data['venue']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':feedback', $data['feedback']);
        
        if ($this->db->execute()){
            return $this->db->lastInsertId();
        }
        else{
            return false;
        }
    }

    public function editEvent($data){
        $this->db->query('UPDATE events SET event_id = :event_id, eventName = :eventName, category = :category, eventDescription = eventDescription, date = :date, time = :time, venue = :venue, user_id = :user_id, feedback = :feedback WHERE event_id = :event_id');

        $this->db->bind(':event_id', $data['event_id']);
        $this->db->bind(':eventName', $data['eventName']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':eventDescription', $data['eventDescription']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':time', $data['time']);
        $this->db->bind(':venue', $data['venue']);
        $this->db->bind(':user_id', $data['user_id']);
         $this->db->bind(':feedback', $data['feedback']);

        if ($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function createInvitation($invitationData){
        $invitationData['invitation_date'] = date('Y-m-d');
        $this->db->query('INSERT INTO invitation (`event_id`, `client_id`, `invitation_date`) VALUES (:event_id, :client_id, :invitation_date)');
        $this->db->bind(':event_id', $invitationData['event_id']);
        $this->db->bind(':client_id', $invitationData['client_id']);
        $this->db->bind(':invitation_date', $invitationData['invitation_date']);
        
        if ($this->db->execute()){
            return true;
        } 
        else{
            return false;
        }
    }

    public function editInvitation($invitationData){

        // Check if the existing invitation data is different from the new data
        $existingInvitation = $this->findInvitationById($invitationData['event_id']);
        
        if ($existingInvitation && 
            $existingInvitation->client_id != $invitationData['client_id']) {
            
            // Data is different, update the invitation and date
            $invitationData['invitation_date'] = date('Y-m-d');
            $this->db->query('UPDATE `invitation` SET event_id = :event_id, client_id = :client_id, invitation_date = :invitation_date WHERE event_id = :event_id');
            $this->db->bind(':event_id', $invitationData['event_id']);
            $this->db->bind(':client_id', $invitationData['client_id']);
            $this->db->bind(':invitation_date', $invitationData['invitation_date']);
            
            if ($this->db->execute()) {
                return true;
            } 
            else {
                return false;
            }
        }
        else {
            // Data remains the same, no need to update
            return true;
        }
    }

    public function deleteEvent($event_id){
        $this->db->query('DELETE FROM events WHERE event_id = :event_id');
        $this->db->bind(':event_id', $event_id);

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteInvitations($event_id){
        $this->db->query('DELETE FROM invitation WHERE event_id = :event_id');
        $this->db->bind(':event_id', $event_id);

        if ($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteInvitationClient($event_id, $clientToRemove){
        $this->db->query('DELETE FROM invitation WHERE event_id = :event_id AND client_id = :client_id');
        $this->db->bind(':event_id', $event_id);
        $this->db->bind(':client_id', $clientToRemove);

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

    public function findStudentByProfileId($profile_id){
        //remark:
        //retrieve the student info from table student
        $this->db->query('SELECT * FROM student WHERE profile_id = :profile_id');
        $this->db->bind(':profile_id', $profile_id);

        $row_profile = $this->db->single();

        return $row_profile;
    }

    public function createRegisterInfo($registerData){
        $this->db->query ('INSERT INTO `registration` (`event_id`, `profile_id`, `dream`, `passion`, `hiddenTalent`, `presentStatus`, `institution`, `internshipYear`, `graduationYear`, `goal`, `archieveGoal`) 
        VALUES (:event_id, :profile_id, :dream, :passion, :hiddenTalent, :presentStatus, :institution, :internshipYear, :graduationYear, :goal, :archieveGoal)');
        
        $this->db->bind(':event_id', $registerData['event_id']);
        $this->db->bind(':profile_id', $registerData['profile_id']);
        $this->db->bind(':dream', $registerData['dream']);
        $this->db->bind(':passion', $registerData['passion']);
        $this->db->bind(':hiddenTalent', $registerData['hiddenTalent']);
        $this->db->bind(':presentStatus', $registerData['presentStatus']);
        $this->db->bind(':institution', $registerData['institution']);
        $this->db->bind(':internshipYear', $registerData['internshipYear']);
        $this->db->bind(':graduationYear', $registerData['graduationYear']);
        $this->db->bind(':goal', $registerData['goal']);
        $this->db->bind(':archieveGoal', $registerData['archieveGoal']);

        if ($this->db->execute()){
            return true;
        } 
        else{
            return false;
        }
    }

    public function checkRegisterStatus($profile_id, $event_id){
        $this->db->query ('SELECT * FROM registration WHERE profile_id = :profile_id AND event_id = :event_id;');

        $this->db->bind(':profile_id', $profile_id);
        $this->db->bind(':event_id', $event_id);
        $row = $this->db->single();

        if($row){
            return true;
        }
        else{
            return false;
        }
        
    }

    public function findRegisterInfo($profile_id){
        $this->db->query ('SELECT * FROM registration WHERE profile_id = :profile_id ORDER BY register_id DESC LIMIT 1;');

        $this->db->bind(':profile_id', $profile_id);

        $row_profile = $this->db->single();

        return $row_profile;
    }

    public function fetchAllSkill(){
        $this->db->query('SELECT * FROM option_skill');

        $result = $this->db->resultSet();

        return $result;

    }
    
    public function fetchAllSoftwareSkill(){
        $this->db->query('SELECT * FROM option_software_skill');

        $result = $this->db->resultSet();

        return $result;

    }

    public function addSkills($skillData){
        
        $this->db->query('INSERT INTO `skill` (`skill_id`, `profile_id`) VALUES (:skill_id, :profile_id)');
        $this->db->bind(':skill_id', $skillData['skill_id']);
        $this->db->bind(':profile_id', $skillData['profile_id']);
        
        if ($this->db->execute()){
            return true;
        } 
        else{
            return false;
        }
    }

    public function addSoftwareSkills($skillData){
        
        $this->db->query('INSERT INTO `softwareskill` (`softwareSkill_id`, `profile_id`) VALUES (:softwareSkill_id, :profile_id)');
        $this->db->bind(':softwareSkill_id', $skillData['softwareSkill_id']);
        $this->db->bind(':profile_id', $skillData['profile_id']);
        
        if ($this->db->execute()){
            return true;
        } 
        else{
            return false;
        }
    }

    public function findSkillById($profile_id){
        $this->db->query('SELECT * FROM skill WHERE profile_id = :profile_id');
        $this->db->bind(':profile_id', $profile_id);
        $result = $this->db->resultSet();

        return $result;
    }

    public function findSelectedSkillById($profile_id){
        $result = $this->findSkillById($profile_id);
        $skill_ids = array_column($result, 'skill_id');

        return $skill_ids;
    }

    public function findSoftSkillById($profile_id){
        $this->db->query('SELECT * FROM softwareskill WHERE profile_id = :profile_id');
        $this->db->bind(':profile_id', $profile_id);
        $result = $this->db->resultSet();

        return $result;
    }

    public function findSelectedSoftSkillById($profile_id){
        $result = $this->findSoftSkillById($profile_id);
        $softwareSkill_ids = array_column($result, 'softwareSkill_id');

        return $softwareSkill_ids;
    }

    public function findRegisterInfoByEventId($event_id){
         $this->db->query ('SELECT * FROM registration WHERE event_id = :event_id;');

        $this->db->bind(':event_id', $event_id);

        $rows = $this->db->resultSet();

        return $rows;

    }
    public function searchEvent($searchTerm){

        $this->db->query('SELECT * FROM events WHERE eventName LIKE :searchTerm');

        $this->db->bind(':searchTerm', '%' . $searchTerm . '%');

        $result = $this->db->resultSet();

        return $result;
       
    }
    

    
}



?>