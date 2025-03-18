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
        $sql = "UPDATE admins SET name = ?, email = ?";
        $params = [$data['name'], $data['email']];

        if ($data['profile_picture'] !== null) {
            $sql .= ", profile_picture = ?";
            $params[] = $data['profile_picture'];
        }

        $sql .= " WHERE admin_ID = ?";
        $params[] = $admin_ID;

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function getAllAdmins() {
        $sql = "SELECT admin_id, name, email, profile_picture, created_at FROM admins"; // Include profile_picture
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
