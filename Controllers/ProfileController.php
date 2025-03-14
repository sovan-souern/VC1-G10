<?php
require_once 'Controllers/BaseController.php';
require_once 'c:\Users\Panha.Nhean\Desktop\VC1-G10\Models\ProfileModel.php'; // Correct the path

class ProfileController extends BaseController {
    private $profileModel;
    
    function update() {
        // Initialize model here to avoid constructor issues
        $this->profileModel = new ProfileModel();
        
        // Get admin ID from session
        $admin_id = $_SESSION['admin_id'] ?? 0;
        
        // Get current profile data
        $profile = $this->profileModel->getProfileByAdminId($admin_id);
        
        // Pass data to the view
        $data['profile'] = $profile;
        $data['title'] = 'Update Profile';
        
        // Load the layout with the profile update form
        $this->views('layout/header.php', $data);
        $this->views('layout/nav.php', $data);
        $this->views('accountSetting/updateProfile.php', $data);
        $this->views('layout/footer.php', $data);
    }
    
    function updateProfile() {
        // Initialize model
        $this->profileModel = new ProfileModel();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get admin ID from session
            $admin_id = $_SESSION['admin_id'] ?? 0;
            
            // Validate form data
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
            
            // Validate required fields
            if (empty($name) || empty($username) || empty($email)) {
                $_SESSION['error'] = "Name, username, and email are required fields.";
                header("Location: /update");
                exit;
            }
            
            // Handle image upload
            $image_path = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $upload_dir = 'Views/assets/img/avatars/';
                $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $filename = 'profile_' . $admin_id . '_' . time() . '.' . $file_extension;
                $target_path = $upload_dir . $filename;
                
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                    $image_path = $target_path;
                }
            }
            
            // Prepare data for update
            $data = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'gender' => $gender
            ];
            
            // Update profile in database
            $result = $this->profileModel->updateProfile($data, $admin_id, $image_path);
            
            if ($result) {
                $_SESSION['success'] = "Profile updated successfully!";
                header("Location: /update");
                exit;
            } else {
                $_SESSION['error'] = "Failed to update profile. Please try again.";
                header("Location: /update");
                exit;
            }
        }
        
        // If not POST request, redirect to update form
        header("Location: /update");
        exit;
    }
    
    function reset() {
        $data['title'] = 'Reset Password';
        $this->views('layout/header.php', $data);
        $this->views('layout/nav.php', $data);
        $this->views('accountSetting/resetPassword.php', $data);
        $this->views('layout/footer.php', $data);
    }
    
    function viewlogin() {
        $data['title'] = 'View Login';
        $this->views('layout/header.php', $data);
        $this->views('layout/nav.php', $data);
        $this->views('accountSetting/viewLogin.php', $data);
        $this->views('layout/footer.php', $data);
    }
}
?>

