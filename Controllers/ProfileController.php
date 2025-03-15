<?php
require_once 'Controllers/BaseController.php';
require_once 'c:\Users\Panha.Nhean\Desktop\VC1-G10\Models\ProfileModel.php';

class ProfileController extends BaseController {
    private $profileModel;

    public function __construct() {
        $this->profileModel = new ProfileModel();
    }
    
    public function update() {
        session_start();
        $admin_ID = $_SESSION['admin_ID'] ?? null;
    
        if ($admin_ID === null) {
            // Redirect to login or handle unauthorized access
            header("Location: /login");
            exit();
        }
    
        $profile = $this->profileModel->getAdminById($admin_ID);
    
        if (!$profile) {
            // Handle case where profile is not found
            echo "Profile not found.";
            return;
        }
    
        $this->views('/layout/header.php');
        $this->views('/layout/nav.php');
        $this->views('/accountSetting/updateProfile.php', ['profile' => $profile]);
        $this->views('/layout/footer.php');
    }

    public function updateProfile() {
        session_start();
        $admin_ID = $_SESSION['admin_ID'] ?? null;
    
        if ($admin_ID === null) {
            // Redirect to login or handle unauthorized access
            header("Location: /login");
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $gender = htmlspecialchars($_POST['gender']);
    
            // Validate required fields
            if (empty($name) || empty($username) || empty($email)) {
                echo "All fields are required.";
                return;
            }
    
            // Handle image upload
            $profilePicture = null;
            if (!empty($_FILES['image']['name'])) {
                $uploadDir = "uploads/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = time() . "_" . basename($_FILES["image"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
    
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                    $profilePicture = $targetFilePath;
                } else {
                    echo "Failed to upload profile picture.";
                    return;
                }
            }
    
            // Update user data
            $data = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'gender' => $gender,
                'profile_picture' => $profilePicture
            ];
    
            $result = $this->profileModel->updateAdmin($admin_ID, $data);
    
            if ($result) {
                // Update session variables
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['profile_picture'] = $profilePicture;
    
                echo "Profile updated successfully!";
                header("Location: /update");
                exit();
            } else {
                echo "Failed to update profile.";
            }
        } else {
            echo "Invalid request.";
        }
    }

    public function reset() {
        $this->views('/accountSetting/resetPassword.php');
    }
}
?>


