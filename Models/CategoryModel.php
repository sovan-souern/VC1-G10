<!-- code for get data  -->

<?php
require_once 'Databases/database.php';

class CategoryModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new Database();
    }

    function getCategories()
    {
        $users=$this->pdo->query("SELECT * FROM categories ");
        return $users->fetchAll();
    }
}
// new code
