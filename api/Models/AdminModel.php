<?php
require_once 'Databases/database.php';

class AdminModel {
    private $db;

    public function __construct() {
        $this->db = new Database("localhost", "beauty_store", "root", "");
    }

    // Get all admins
    public function getAllAdmins() {
        try {
            $result = $this->db->query("SELECT * FROM admins");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("PDOException in getAllAdmins: " . $e->getMessage());
            return [];
        }
    }

    // Get admin by ID
    public function getAdminById($admin_id) {
        try {
            $result = $this->db->query("SELECT * FROM admins WHERE admin_id = :admin_id", [':admin_id' => $admin_id]);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("PDOException in getAdminById: " . $e->getMessage());
            return false;
        }
    }

    // Update admin details
    public function updateAdmin($admin_id, $name, $email, $profilePicture = null) {
        try {
            $params = [':admin_id' => $admin_id, ':name' => $name, ':email' => $email];
            if ($profilePicture) {
                $params[':profile_picture'] = $profilePicture;
                $query = "UPDATE admins SET name = :name, email = :email, profile_picture = :profile_picture WHERE admin_id = :admin_id";
            } else {
                $query = "UPDATE admins SET name = :name, email = :email WHERE admin_id = :admin_id";
            }
            $stmt = $this->db->query($query, $params);
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            error_log("PDOException in updateAdmin: " . $e->getMessage());
            return false;
        }
    }

    // Delete admin
    public function deleteAdmin($admin_id) {
        try {
            $stmt = $this->db->query("DELETE FROM admins WHERE admin_id = :admin_id", [':admin_id' => $admin_id]);
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            error_log("PDOException in deleteAdmin: " . $e->getMessage());
            return false;
        }
    }
}