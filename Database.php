<?php

class Database
{
    private $host = 'localhost';
    private $db_name = "api_dfs25";
    private $username ="root";
    private $password = "";
    private $conn;

    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            dump("connected");
            die();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}