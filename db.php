<?php

require 'config.php';

class Database {

    private $conn;
    private $stmt;
    private $results;

    function __construct($config)
    {
        try {
            $this->conn = new PDO($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(Exception $e) {
            return false;
        }

    }


}