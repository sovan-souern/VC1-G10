<?php
require_once 'Databases/database.php';

class UserModel
{
    private $pdo;

    function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnection(); // Get the PDO instance
    }

    function getUsers()
    {
        $stmt = $this->pdo->query("SELECT u.*, r.role_name, a.name as admin_name 
                                   FROM users u 
                                   LEFT JOIN roles r ON u.role_id = r.role_id 
                                   LEFT JOIN admins a ON u.admin_id = a.admin_id 
                                   ORDER BY u.user_id DESC");
        return $stmt->fetchAll();
    }

    function getRoles()
    {
        $stmt = $this->pdo->query("SELECT * FROM roles");
        return $stmt->fetchAll();
    }

    function getAdmins()
    {
        $stmt = $this->pdo->query("SELECT admin_id, name FROM admins");
        return $stmt->fetchAll();
    }

    function createUser($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (role_id, username, email, phone, gender, created_at, admin_id, profile) 
                                     VALUES (:role_id, :username, :email, :phone, :gender, :created_at, :admin_id, :profile)");
        $result = $stmt->execute([
            'role_id' => $data['role_id'],
            'username' => $data['username'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'created_at' => $data['created_at'],
            'admin_id' => $data['admin_id'],
            'profile' => $data['profile']
        ]);
        if (!$result) {
            throw new Exception("Failed to create user: " . implode(", ", $stmt->errorInfo()));
        }
        return true;
    }

    function getUser($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    function updateUser($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE users 
                                     SET role_id = :role_id, username = :username, email = :email, 
                                         phone = :phone, gender = :gender, created_at = :created_at, 
                                         admin_id = :admin_id, profile = :profile 
                                     WHERE user_id = :id");
        $result = $stmt->execute([
            'role_id' => $data['role_id'],
            'username' => $data['username'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'created_at' => $data['created_at'],
            'admin_id' => $data['admin_id'],
            'profile' => $data['profile'],
            'id' => $id
        ]);
        if (!$result) {
            throw new Exception("Failed to update user: " . implode(", ", $stmt->errorInfo()));
        }
        return true;
    }

    function deleteUser($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE user_id = :id");
        $result = $stmt->execute(['id' => $id]);
        if (!$result) {
            throw new Exception("Failed to delete user: " . implode(", ", $stmt->errorInfo()));
        }
        return true;
    }

    public function getUserByUsername($username) {
        $stmt = $this->pdo->prepare("SELECT * FROM admins WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

    public function getAllAdmins() {
        $stmt = $this->pdo->query("SELECT * FROM admins");
        return $stmt->fetchAll();
    }
}
?>