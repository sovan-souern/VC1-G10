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
        $stmt = $this->pdo->prepare("SELECT * FROM admins WHERE admin_id = :id");
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
        return $stmt->rowCount() > 0; // Returns true if a row was inserted
    }

    function updateLastActivity($id)
    {
        $stmt = $this->pdo->prepare("UPDATE admins SET last_activity = NOW() WHERE admin_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() > 0; // Returns true if the timestamp was updated
    }

    function getActiveUsers()
    {
        $stmt = $this->pdo->query("SELECT admin_id, name, phone, role, profile_picture, 
                                          last_activity AS login_at, 
                                          TIMESTAMPDIFF(MINUTE, last_activity, NOW()) AS minutes_ago 
                                   FROM admins 
                                   WHERE TIMESTAMPDIFF(MINUTE, last_activity, NOW()) <= 10");
        return $stmt->fetchAll(); // Fetch users active in the last 10 minutes
    }

//     function getRoles()
//     {
//         $stmt = $this->pdo->query("SELECT * FROM roles");
//         return $stmt->fetchAll();
//     }
    
//     function getAdmins()
//     {
//         $stmt = $this->pdo->query("SELECT admin_id, name FROM admins");
//         return $stmt->fetchAll();
//     }

//     function createUser($data)
//     {
//         try {
//             $stmt = $this->pdo->prepare(
//                 "INSERT INTO users (role_id, username, email, phone, gender, admin_id, profile, created_at) 
//                 VALUES (:role_id, :username, :email, :phone, :gender, :admin_id, :profile, :created_at)"
//             );
//             $stmt->execute([
//                 'role_id' => $data['role_id'],
//                 'username' => $data['username'],
//                 'email' => $data['email'],
//                 'phone' => $data['phone'],
//                 'gender' => $data['gender'],
//                 'admin_id' => $data['admin_id'],
//                 'profile' => $data['profile'],
//                 'created_at' => $data['created_at']
//             ]);
//             return true;
//         } catch (Exception $e) {
//             echo "Error creating user: " . $e->getMessage();
//             return false;
//         }
//     }

//     function getUser($id)
//     {
//         $stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_id = :id");
//         $stmt->execute(['id' => $id]);
//         return $stmt->fetch();
//     }

//     function updateUser($id, $data)
//     {
//         $stmt = $this->pdo->prepare("UPDATE users 
//                                      SET role_id = :role_id, username = :username, email = :email, 
//                                          phone = :phone, gender = :gender, created_at = :created_at, 
//                                          admin_id = :admin_id, profile = :profile 
//                                      WHERE user_id = :id");
//         $result = $stmt->execute([
//             'role_id' => $data['role_id'],
//             'username' => $data['username'],
//             'email' => $data['email'],
//             'phone' => $data['phone'],
//             'gender' => $data['gender'],
//             'created_at' => $data['created_at'],
//             'admin_id' => $data['admin_id'],
//             'profile' => $data['profile'],
//             'id' => $id
//         ]);
//         if (!$result) {
//             throw new Exception("Failed to update user: " . implode(", ", $stmt->errorInfo()));
//         }
//         return true;
//     }

//     function deleteUser($id)
//     {
//         $stmt = $this->pdo->prepare("DELETE FROM users WHERE user_id = :id");
//         $result = $stmt->execute(['id' => $id]);
//         if (!$result) {
//             throw new Exception("Failed to delete user: " . implode(", ", $stmt->errorInfo()));
//         }
//         return true;
//     }

//     public function getUserByUsername($username) {
//         $stmt = $this->pdo->prepare("SELECT * FROM admins WHERE username = ?");
//         $stmt->execute([$username]);
//         return $stmt->fetch();
//     }

//     public function getAllAdmins() {
//         $stmt = $this->pdo->query("SELECT * FROM admins");
//         return $stmt->fetchAll();
//     }
}
?>