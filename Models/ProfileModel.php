<?php
class ProfileModel {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function getAdminById($admin_ID) {
        // Fix table name from 'admin' to 'admins'
        $sql = "SELECT * FROM admins WHERE admin_ID = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$admin_ID]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAdmin($admin_ID, $data) {
        try {
            $fields = [];
            $params = [];

            // Add name if provided
            if (isset($data['name'])) {
                $fields[] = "name = ?";
                $params[] = $data['name'];
            }

            // Add phone if provided
            if (isset($data['phone'])) {
                $fields[] = "phone = ?";
                $params[] = $data['phone'];
            }

            // Add profile picture if provided
            if (!empty($data['profile_picture'])) {
                $fields[] = "profile_picture = ?";
                $params[] = $data['profile_picture'];
            }

            // Add admin_ID to params
            $params[] = $admin_ID;

            // Build the SQL query
            $sql = "UPDATE admins SET " . implode(", ", $fields) . " WHERE admin_ID = ?";
            
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            error_log("Error updating admin profile: " . $e->getMessage());
            return false;
        }
    }

    public function getAllAdmins() {
        $sql = "SELECT admin_id, name, email, profile_picture, created_at FROM admins"; // Include profile_picture
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
