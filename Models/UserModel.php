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

    function getUsers($search = null, $limit = 10, $offset = 0)
    {
        $query = "SELECT admin_id, name, phone, role, profile_picture, 
                         IF(TIMESTAMPDIFF(MINUTE, last_activity, NOW()) <= 10, 1, 0) AS status, 
                         created_at 
                  FROM admins 
                  WHERE role IN ('User', 'ShopOwner', 'Admin')";

        if ($search) {
            $query .= " AND (name LIKE :search OR phone LIKE :search)";
        }

        $query .= " LIMIT :limit OFFSET :offset";
        $stmt = $this->pdo->prepare($query);

        if ($search) {
            $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        }
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getTotalUsers($search = null)
    {
        $query = "SELECT COUNT(*) FROM admins WHERE role IN ('User', 'ShopOwner', 'Admin')";

        if ($search) {
            $query .= " AND (name LIKE :search OR phone LIKE :search)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute(['search' => '%' . $search . '%']);
        } else {
            $stmt = $this->pdo->query($query);
        }

        return $stmt->fetchColumn();
    }

    function deleteUser($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM admins WHERE admin_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() > 0; // Returns true if a row was deleted
    }

    function updateUser($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE admins 
                                     SET name = :name, phone = :phone, role = :role ,profile_picture = :profile_picture, 

                                     WHERE admin_id = :id");
        $stmt->execute([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'role' => $data['role'],
            'profile_picture' => $data['profile_picture'],
            'id' => $id
        ]);
        return $stmt->rowCount() > 0; // Returns true if a row was updated
    }

    function getUser($id)
    {
        $stmt = $this->pdo->prepare("SELECT admin_id, name, phone, role, profile_picture, password FROM admins WHERE admin_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    function createUser($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO admins (name, phone, role, status, created_at) 
                                     VALUES (:name, :phone, :role, 1, NOW())");
        $stmt->execute([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'role' => $data['role']
        ]);
        return $stmt->rowCount() > 0; 
    }

    function updateLastActivity($id)
    {
        $stmt = $this->pdo->prepare("UPDATE admins SET last_activity = NOW() WHERE admin_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() > 0; 
    }

    function getActiveUsers()
    {
        $stmt = $this->pdo->query("SELECT admin_id, name, phone, role, profile_picture, 
                                          last_activity AS login_at, 
                                          TIMESTAMPDIFF(MINUTE, last_activity, NOW()) AS minutes_ago 
                                   FROM admins 
                                   WHERE TIMESTAMPDIFF(MINUTE, last_activity, NOW()) <= 10");
        return $stmt->fetchAll(); 
    }

    function updatePassword($id, $hashedPassword) {
        try {
            $stmt = $this->pdo->prepare("UPDATE admins SET password = :password WHERE admin_id = :id");
            $stmt->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true; // Password updated successfully
            } else {
                error_log("No rows affected for admin_id: $id");
                return false; // No rows updated
            }
        } catch (PDOException $e) {
            error_log("Database error while updating password for admin_id $id: " . $e->getMessage());
            return false;
        }
    }
}
?>