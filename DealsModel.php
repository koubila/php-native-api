<?php

class DealsModels
{
    private $pdo;

    function __construct()
    {
        $this->db = new Database();
        $this->pdo = $database->getConnection();
    }
}