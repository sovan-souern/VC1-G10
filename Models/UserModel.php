<?php
require_once 'Databases/database.php';

class UserModel
{
    private $db;
    private $pdo;

    public function __construct()
    {
        $this->db = new Database();
        $this->pdo = $this->db->getConnection();
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

    public function getUserByEmail($email)
    {
        try {
            // Fix table name from 'admin' to 'admins'
            $sql = "SELECT * FROM admins WHERE email = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if (!$user) {
                error_log("No user found with email: " . $email);
                return false;
            }
            
            error_log("User found with email: " . $email . ". Data: " . json_encode($user));
            return $user;
        } catch (Exception $e) {
            error_log("getUserByEmail error: " . $e->getMessage());
            return false;
        }
    }
    
    

    public function addUser($name, $email, $password, $profilePicture = null)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO admins (name, email, password, profile_picture) VALUES (:name, :email, :password, :profile_picture)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $hashedPassword,
                ':profile_picture' => $profilePicture
            ]);
            return true;
        } catch (PDOException $e) {
            // Log the exception message for debugging
            error_log("Failed to add user: " . $e->getMessage());
            return false;
        }
    }
}
?>
