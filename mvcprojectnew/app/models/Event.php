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
        $this->db->query('SELECT * FROM partnerclient');

        $result = $this->db->resultSet();

        return $result;
    }

    public function createEvent($data)
    {
        $this->db->query('INSERT INTO events (`eventName`, `category`, `eventDescription`, `date`, `time`, `venue`, `user_id`) 
        VALUES (:eventName, :category, :eventDescription, :date, :time, :venue, :user_id )');
        
       
        $this->db->bind(':eventName', $data['eventName']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':eventDescription', $data['eventDescription']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':time', $data['time']);
        $this->db->bind(':venue', $data['venue']);
        $this->db->bind(':user_id', $data['user_id']);
        
        if ($this->db->execute())
        {
            return $this->db->lastInsertId();
        }
        else
        {
            return false;
        }
    }

    public function createInvitation($invitationData)
    {
    $invitationData['invitation_date'] = date('Y-m-d');
    $this->db->query('INSERT INTO invitation (`event_id`, `client_id`, `invitation_date`) VALUES (:event_id, :client_id, :invitation_date)');
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

     public function findEventById($event_id)
    {
        $this->db->query('SELECT * FROM events WHERE event_id = :event_id');
        $this->db->bind(':event_id', $event_id);

        $row = $this->db->single();

        return $row;
    }


    public function searchEvent($searchTerm){

        $this->db->query('SELECT * FROM events WHERE eventName LIKE :searchTerm');

        $this->db->bind(':searchTerm', '%' . $searchTerm . '%');

        $result = $this->db->resultSet();

        return $result;
       
    }
    

    
}



?>