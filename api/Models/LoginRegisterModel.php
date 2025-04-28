<?php
require_once 'Databases/database.php';

class LoginRegisterModel {
    private $db;

    public function __construct() {
        $this->db = new Database("localhost", "beauty_store", "root", "");
    }

    public function registerAdmin($name, $identifier, $password, $profilePicture = null, $role = 'user') {
        try {
            // Check if identifier (email or phone) already exists
            $stmt = $this->db->query("SELECT admin_ID FROM admins WHERE phone = :identifier OR email = :identifier", [':identifier' => $identifier]);
            if ($stmt->rowCount() > 0) {
                throw new Exception("Email or phone number already registered!");
            }

            // Determine if identifier is email or phone
            $isPhone = preg_match('/^\+?[0-9]{9,15}$/', $identifier);
            $isEmail = filter_var($identifier, FILTER_VALIDATE_EMAIL);

            if (!$isPhone && !$isEmail) {
                throw new Exception("Invalid email or phone number format!");
            }

            // Insert new admin
            $sql = "INSERT INTO admins (name, phone, email, password, profile_picture, role, created_at) 
                    VALUES (:name, :phone, :email, :password, :profile_picture, :role, NOW())";

            $params = [
                ':name' => $name,
                ':phone' => $isPhone ? $identifier : null, // Set phone to NULL if identifier is an email
                ':email' => $isEmail ? $identifier : null, // Set email to NULL if identifier is a phone
                ':password' => password_hash($password, PASSWORD_DEFAULT),
                ':profile_picture' => $profilePicture,
                ':role' => $role
            ];

            $stmt = $this->db->query($sql, $params);

            if ($stmt->rowCount() > 0) {
                return true;
            }

            return false;

        } catch (PDOException $e) {
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

    public function authenticateAdmin($identifier, $password) {
        try {
            // Update query to check both email and phone
            $sql = "SELECT admin_ID, name, phone, email, password, profile_picture, role 
                    FROM admins 
                    WHERE phone = :identifier OR email = :identifier 
                    LIMIT 1";
            $result = $this->db->query($sql, [':identifier' => $identifier]);
            $user = $result->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                return false;
            }

            if (password_verify($password, $user['password'])) {
                return $user;
            }

            return false;

        } catch (PDOException $e) {
            return false;
        }
    }
}