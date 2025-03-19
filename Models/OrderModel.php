<?php
require_once 'Databases/database.php';

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getCategories()
    {
        $stmt = $this->pdo->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }
}