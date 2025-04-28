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
        header('Content-Type: application/json');
        
        try {
            if (!isset($_SESSION['admin_ID'])) {
                throw new Exception('Not authenticated');
            }

            $admin_ID = $_SESSION['admin_ID'];
            $name = htmlspecialchars($_POST['name'] ?? '');
            
            // Only process phone updates from dashboard
            $phone = null;
            $isDashboard = isset($_POST['is_dashboard']) && $_POST['is_dashboard'] === 'true';
            if ($isDashboard) {
                $phone = htmlspecialchars($_POST['phone'] ?? '');
            }

            // Handle profile picture
            $profilePicture = null;
            if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = "uploads/profiles/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $fileExtension = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
                $fileName = 'profile_' . time() . '.' . $fileExtension;
                $targetPath = $uploadDir . $fileName;

                if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetPath)) {
                    $profilePicture = $targetPath;
                }
            }

            $updateData = ['name' => $name];
            
            // Only include phone in update if from dashboard
            if ($isDashboard && $phone) {
                $updateData['phone'] = $phone;
            }

            if ($profilePicture) {
                $updateData['profile_picture'] = $profilePicture;
            }

            if ($this->profileModel->updateAdmin($admin_ID, $updateData)) {
                // Update session
                $_SESSION['name'] = $name;
                if ($isDashboard && $phone) {
                    $_SESSION['phone'] = $phone;
                }
                if ($profilePicture) {
                    $_SESSION['profile_picture'] = $profilePicture;
                }

                $response = [
                    'status' => 'success',
                    'message' => 'Profile updated successfully',
                    'data' => [
                        'name' => $name,
                        'profile_picture' => $profilePicture ? '/' . $profilePicture : null
                    ]
                ];
                
                // Include phone in response only if from dashboard
                if ($isDashboard && $phone) {
                    $response['data']['phone'] = $phone;
                }

                echo json_encode($response);
            } else {
                throw new Exception('Failed to update profile');
            }

        } catch (Exception $e) {
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
        exit();
    }

    public function reset() {
        $this->views('accountSetting/resetPassword.php');
    }
}
?>
