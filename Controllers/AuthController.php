<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/UserModel.php';

class AuthController extends BaseController {
    private $user;

    public function __construct() {
        $this->user = new UserModel(); // Initialize the UserModel
    }

    public function reset() {
        $this->views('auth/UserReset.php');
    }

    public function resetPassword() {
        header('Content-Type: application/json');
        try {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Invalid request method.');
            }

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $adminId = $_SESSION['admin_ID'] ?? null;
            if (!$adminId) {
                throw new Exception('Unauthorized access.');
            }

            $currentPassword = trim($_POST['current_password'] ?? '');
            $newPassword = trim($_POST['new_password'] ?? '');
            $confirmPassword = trim($_POST['confirm_password'] ?? '');

            if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
                throw new Exception('All fields are required.');
            }

            if ($newPassword !== $confirmPassword) {
                throw new Exception('New password and confirm password do not match.');
            }

            if (strlen($newPassword) < 8) {
                throw new Exception('New password must be at least 8 characters long.');
            }

            $user = $this->user->getUser($adminId);
            if (!$user || !isset($user['password'])) {
                throw new Exception('User not found or password not set.');
            }

            if (!password_verify($currentPassword, $user['password'])) {
                throw new Exception('Current password is incorrect.');
            }

            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $isUpdated = $this->user->updatePassword($adminId, $hashedPassword);

            if (!$isUpdated) {
                error_log("Failed to update password for admin_id: $adminId");
                throw new Exception('Failed to update password. Please try again.');
            }

            echo json_encode([
                'success' => true,
                'message' => 'Password reset successfully.'
            ]);
        } catch (Exception $e) {
            error_log("Password reset error: " . $e->getMessage());
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
        exit();
    }
}