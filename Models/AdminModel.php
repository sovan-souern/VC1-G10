<?php
require_once 'Databases/database.php';

class AdminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database("localhost", "beauty_store", "root", "");
    }

    public function getUsers()
    {
        $result = $this->db->query("SELECT * FROM admins");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($admin_id)
    {
        $result = $this->db->query("SELECT * FROM admins WHERE admin_id = :admin_id", [':admin_id' => $admin_id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByEmail($email) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM admins WHERE email = :email LIMIT 1");
            if (!$stmt) {
                error_log("Failed to prepare statement");
                return false;
            }

            $stmt->execute([':email' => $email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($result === false) {
                error_log("No user found with email: " . $email);
            }
            
            return $result;
        } catch (PDOException $e) {
            error_log("Database error in getUserByEmail: " . $e->getMessage());
            return false;
        }
    }

    public function addUser($name, $email, $password, $profilePicture = null) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        try {
            $stmt = $this->db->prepare(
                "INSERT INTO admins (name, email, password, profile_picture) VALUES (:name, :email, :password, :profile_picture)"
            );
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':profile_picture', $profilePicture);
            if (!$stmt->execute()) {
                error_log("Statement execute failed: " . print_r($stmt->errorInfo(), true));
                return false;
            }
            return true;
        } catch (PDOException $e) {
            error_log("PDOException: " . $e->getMessage());
            return false;
        }
    }
}
?>
