<?php
require_once "Models/AdminModel.php";
require_once 'BaseController.php';

class AdminController extends BaseController {
    private $admin;

    public function __construct() {
        $this->admin = new AdminModel();
    }

    // Display admin dashboard or list
    public function index() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['admin_ID'])) {
            header("Location: /users/login");
            exit();
        }
        $admins = $this->admin->getAllAdmins();
        $this->views('admin/dashboard.php', ['admins' => $admins]); // Assuming a view method
    }

    // Edit admin
    public function edit($admin_id) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['admin_ID'])) {
            header("Location: /users/login");
            exit();
        }
        $admin = $this->admin->getAdminById($admin_id);
        if ($admin) {
            $this->views('admin/edit.php', ['admin' => $admin]);
        } else {
            header("Location: /admin");
            exit();
        }
    }

    // Update admin
    public function update($admin_id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $profilePicture = !empty($_FILES['profile_picture']['name']) ? $this->handleProfilePicture() : null;

            if (empty($name) || empty($email)) {
                echo json_encode(["status" => "error", "message" => "Name and email are required!"]);
                exit();
            }

            $result = $this->admin->updateAdmin($admin_id, $name, $email, $profilePicture);
            if ($result) {
                echo json_encode(["status" => "success", "message" => "Admin updated successfully!"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Failed to update admin!"]);
            }
            exit();
        }
    }

    // Delete admin
    public function delete($admin_id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = $this->admin->deleteAdmin($admin_id);
            if ($result) {
                echo json_encode(["status" => "success", "message" => "Admin deleted successfully!"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Failed to delete admin!"]);
            }
            exit();
        }
    }

    private function handleProfilePicture() {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = time() . "_" . basename($_FILES["profile_picture"]["name"]);
        $targetFilePath = $uploadDir . $fileName;
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFilePath)) {
            return $targetFilePath;
        }
        return null;
    }
}