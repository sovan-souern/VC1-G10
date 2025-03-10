<?php
require_once 'Databases/database.php';
class UserModel
{
    private $pdo;
    function __construct()
    {
        // global $pdo;
        $this->pdo = new Database();

    }
    function getUsers()
    {
        $users=$this->pdo->query("SELECT * FROM users order by id DESC");
        return $users->fetchAll();
       

    }

}