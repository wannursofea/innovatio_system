<?php

class Profile {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfile(){

    $this->db->query('SELECT * FROM user');

    $results = $this->db->resultSet();

    return $results;
    }

}

?>
