<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/ProfileModel.php';

class ProfileController extends BaseController {
    private $profileModel;

    public function __construct() {
        $this->profileModel = new ProfileModel();
    }
    
    public function edit() {
        // session_start();
        $admin_ID = $_SESSION['admin_ID'] ?? null;
    
        if ($admin_ID === null) {
            header("Location: /login");
            exit();
        }
    
        $profile = $this->profileModel->getAdminById($admin_ID);
    
        if (!$profile) {
            echo "Profile not found.";
            return;
        }
    
        $this->views('/layout/header.php');
        $this->views('/layout/nav.php');
        $this->views('/accountSetting/editProfile.php', ['profile' => $profile]);
        $this->views('/layout/footer.php');
    }

    public function editProfile() {
        // session_start();
        $admin_ID = $_SESSION['admin_ID'] ?? null;
    
        if ($admin_ID === null) {
            header("Location: /login");
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Enable error reporting for debugging
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            $name = htmlspecialchars($_POST['name'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $username = htmlspecialchars($_POST['username'] ?? '');

            // Validate required fields
            if (empty($name) || empty($email)) {
                echo "All required fields must be filled.";
                return;
            }

            $profilePicture = null;

            // Check if a new profile picture is uploaded
            if (!empty($_FILES['image']['name'])) {
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                $uploadDir = "uploads/";

                // Ensure the upload directory exists
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Get file info
                $fileType = mime_content_type($_FILES['image']['tmp_name']);
                $fileSize = $_FILES['image']['size'];
                $fileName = time() . "_" . basename($_FILES["image"]["name"]);
                $targetFilePath = $uploadDir . $fileName;

                // Validate file type
                if (!in_array($fileType, $allowedTypes)) {
                    echo "Invalid file type. Only JPG, PNG, and GIF are allowed.";
                    return;
                }

                // Validate file size (max 5MB)
                if ($fileSize > 5 * 1024 * 1024) {
                    echo "File size too large. Max allowed size is 5MB.";
                    return;
                }

                // Move file to uploads directory
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                    $profilePicture = $targetFilePath;
                } else {
                    echo "Failed to upload profile picture.";
                    return;
                }
            }

            // Prepare update data
            $updateData = [
                'name' => $name,
                'username' => $username,
                'email' => $email
            ];

            // Add profile picture only if a new one is uploaded
            if ($profilePicture) {
                $updateData['profile_picture'] = $profilePicture;
            }

            // Update profile
            if ($this->profileModel->updateAdmin($admin_ID, $updateData)) {
                $_SESSION['success'] = "Profile updated successfully.";
                header("Location: /accountSetting/editProfile.php");
                exit();
            } else {
                echo "Error updating profile.";
            }
        }
    }

    public function updateProfile() {
        $admin_ID = $_SESSION['admin_ID'] ?? null;

        if ($admin_ID === null) {
            header("Location: /login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Collect form data
            $data = [
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'profile_picture' => null
            ];

            // Handle file upload
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $allowedTypes = ['image/png', 'image/jpeg'];
                $maxFileSize = 2 * 1024 * 1024; // 2MB

                $fileType = $_FILES['image']['type'];
                $fileSize = $_FILES['image']['size'];

                if (!in_array($fileType, $allowedTypes)) {
                    echo json_encode(['status' => 'error', 'message' => 'Invalid file type. Only JPG and PNG are allowed.']);
                    exit();
                }

                if ($fileSize > $maxFileSize) {
                    echo json_encode(['status' => 'error', 'message' => 'File size exceeds the maximum limit of 2MB.']);
                    exit();
                }

                $uploadDir = 'uploads/profile_pictures/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $fileName = uniqid() . '-' . basename($_FILES['image']['name']);
                $uploadPath = $uploadDir . $fileName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
                    $data['profile_picture'] = $uploadPath;
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to upload profile picture.']);
                    exit();
                }
            }

            // Update the profile in the database
            if ($this->profileModel->updateAdmin($admin_ID, $data)) {
                echo json_encode(['status' => 'success', 'message' => 'Profile updated successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update profile.']);
            }

            exit();
        }
    }
}
?>
