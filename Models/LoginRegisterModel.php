<?php
require_once 'Databases/database.php';

class LoginRegisterModel {
    private $db;

    public function __construct() {
        $this->db = new Database("localhost", "beauty_store", "root", "");
    }

    public function registerAdmin($name, $phone, $password, $profilePicture = null) {
        try {
            error_log("Starting registration for phone: $phone");
            error_log("Profile picture path: " . ($profilePicture ?? 'none'));
            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            $query = "INSERT INTO admins (name, phone, password, profile_picture) 
                     VALUES (:name, :phone, :password, :profile_picture)";
            
            $params = [
                ':name' => $name,
                ':phone' => $phone,
                ':password' => $hashedPassword,
                ':profile_picture' => $profilePicture
            ];

            $stmt = $this->db->query($query, $params);
            
            if ($stmt->rowCount() > 0) {
                error_log("Successfully registered user with phone: $phone");
                return true;
            }
            
            error_log("Failed to insert user into database");
            return false;
            
        } catch (PDOException $e) {
            error_log("Database error in registerAdmin: " . $e->getMessage());
            throw $e;
        }
    }

    public function getAdminByPhone($phone) {
        try {
            $result = $this->db->query("SELECT * FROM admins WHERE phone = :phone", [':phone' => $phone]);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("PDOException in getAdminByPhone: " . $e->getMessage());
            return false;
        }
    }

    public function authenticateAdmin($phone, $password) {
        try {
            error_log("Debug - Attempting to authenticate with phone: " . $phone);
            
            // Modify query to be more explicit
            $sql = "SELECT admin_ID, name, phone, password, profile_picture FROM admins WHERE phone = :phone LIMIT 1";
            $result = $this->db->query($sql, [':phone' => $phone]);
            $user = $result->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                error_log("Debug - No user found with phone: " . $phone);
                return false;
            }

            error_log("Debug - User found, verifying password");
            error_log("Debug - Stored password hash: " . $user['password']);

            if (password_verify($password, $user['password'])) {
                error_log("Debug - Password verified successfully");
                return $user;
            }

            error_log("Debug - Password verification failed");
            return false;

        } catch (PDOException $e) {
            error_log("Database error in authenticateAdmin: " . $e->getMessage());
            error_log("SQL State: " . $e->errorInfo[0]);
            error_log("Error Code: " . $e->errorInfo[1]);
            error_log("Error Message: " . $e->errorInfo[2]);
            return false;
        }
    }
}