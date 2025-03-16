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

    public function getUserByEmail($email)
    {
        $result = $this->db->query("SELECT * FROM admins WHERE email = :email", [':email' => $email]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($name, $email, $password, $profilePicture = null)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        try {
            $this->db->query(
                "INSERT INTO admins (name, email, password, profile_picture) VALUES (:name, :email, :password, :profile_picture)",
                [
                    ':name' => $name,
                    ':email' => $email,
                    ':password' => $hashedPassword,
                    ':profile_picture' => $profilePicture
                ]
            );
            return true;
        } catch (PDOException $e) {
            // Log the exception message for debugging
            error_log("Failed to add user: " . $e->getMessage());
            return false;
        }
    }
}
?>
