<?php
require_once 'Databases/database.php';

class LoginRegisterModel {
    private $db;

    public function __construct() {
        $this->db = new Database("localhost", "beauty_store", "root", "");
    }

    public function registerAdmin($name, $email, $password, $profilePicture = null) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        try {
            $query = "INSERT INTO admins (name, email, password, profile_picture) 
                     VALUES (:name, :email, :password, :profile_picture)";
            $params = [
                ':name' => $name,
                ':email' => $email,
                ':password' => $hashedPassword,
                ':profile_picture' => $profilePicture ?: null
            ];
            $stmt = $this->db->query($query, $params);
            error_log("User registered successfully - Email: $email");
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            error_log("PDOException in registerAdmin: " . $e->getMessage());
            return false;
        }
    }

    public function getAdminByEmail($email) {
        try {
            $result = $this->db->query("SELECT * FROM admins WHERE email = :email", [':email' => $email]);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("PDOException in getAdminByEmail: " . $e->getMessage());
            return false;
        }
    }

    public function authenticateAdmin($email, $password) {
        $user = $this->getAdminByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        error_log("Authentication failed for email: $email");
        return false;
    }
}