<?php
require_once 'Databases/database.php';

class UserModel {
    private $pdo;

    function __construct() {
        $this->pdo = new Database();
    }

    function getUsers() {
        $users = $this->pdo->query("SELECT * FROM users order by id DESC");
        return $users->fetchAll();
    }

    function createUser($firstName, $lastName, $email, $password) {
        $stmt = $this->pdo->query("INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)", [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => $password
        ]);
    }

    function getUserByEmail($email) {
        $stmt = $this->pdo->query("SELECT * FROM users WHERE email = :email", ['email' => $email]);
        return $stmt->fetch();
    }
}
?>