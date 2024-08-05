<?php

class Database {
    private $connection;

    public function connect() {
        $this->connection = new PDO('mysql:host=localhost;dbname=etalase_buku', 'root', '');
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Usage
$db = new Database();
$db->connect();
$conn = $db->getConnection();

?>
