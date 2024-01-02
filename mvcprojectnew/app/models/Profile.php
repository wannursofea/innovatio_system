<?php

class Profile {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfile(){

    $this->db->query('SELECT * FROM users');

    $results = $this->db->resultSet();

    return $results;
    }

}

?>