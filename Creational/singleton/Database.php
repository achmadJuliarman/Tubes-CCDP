<?php

class Database {
    private static $instance;
    private $connection;

    private function __construct() {
        $this->connection = new PDO('mysql:host=localhost;dbname=bukubekas', 'root', '');
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>
