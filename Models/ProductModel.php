<?php
require_once 'Databases/database.php';

class ProductModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getProduct()
    {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll();
    }
}