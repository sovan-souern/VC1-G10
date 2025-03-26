<?php
require_once 'Models/LoginRegisterModel.php';
require_once 'BaseController.php';

class LoginRegisterController extends BaseController {
    private $user;

    public function __construct() {
        $this->user = new LoginRegisterModel();
    }

    public function register() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['admin_ID'])) {
            header("Location: /dashboard");
            exit();
        }
        require_once "Views/auth/register.php";
    }

    public function login() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['admin_ID'])) {
            header("Location: /dashboard");
            exit();
        }
        require_once "Views/auth/login.php";
    }

    public function store() {
        header('Content-Type: application/json');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $name = htmlspecialchars($_POST['name'] ?? '');
                $phone = htmlspecialchars($_POST['phone'] ?? '');
                $password = htmlspecialchars($_POST['password'] ?? '');
                $profilePicture = null;

                // Validate required fields
                if (empty($name) || empty($phone) || empty($password)) {
                    throw new Exception("All fields are required!");
                }

                // Handle profile picture upload
                if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
                    $uploadDir = "uploads/profiles/"; // Changed directory structure
                    
                    // Create directory if it doesn't exist
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }

                    // Generate unique filename
                    $fileExtension = strtolower(pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION));
                    $uniqueFileName = uniqid('profile_') . '.' . $fileExtension;
                    $targetFilePath = $uploadDir . $uniqueFileName;

                    // Validate file type
                    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
                    if (!in_array($fileExtension, $allowedTypes)) {
                        throw new Exception("Invalid file type. Only JPG, JPEG, PNG & GIF files are allowed.");
                    }

                    // Move the uploaded file
                    if (!move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFilePath)) {
                        throw new Exception("Failed to upload profile picture.");
                    }

                    $profilePicture = $targetFilePath;
                    error_log("Profile picture saved at: " . $profilePicture);
                }
                
                // Register user
                $result = $this->user->registerAdmin($name, $phone, $password, $profilePicture);
                
                if (!$result) {
                    throw new Exception("Registration failed!");
                }

                echo json_encode([
                    "status" => "success",
                    "message" => "Registration successful! Please login.",
                    "redirect" => "/login"
                ]);

            } catch (Exception $e) {
                error_log("Registration error: " . $e->getMessage());
                echo json_encode([
                    "status" => "error",
                    "message" => $e->getMessage()
                ]);
            }
        }
        exit();
    }

    public function authenticate() {
        header('Content-Type: application/json');
        
        try {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Invalid request method');
            }

            $phone = trim($_POST['phone'] ?? '');
            $password = trim($_POST['password'] ?? '');

            error_log("Debug - Login attempt with phone: " . $phone);

            if (empty($phone) || empty($password)) {
                throw new Exception('Phone number and password are required');
            }

            // Additional phone validation if needed
            if (!preg_match("/^[0-9]{10}$/", $phone)) {
                throw new Exception('Invalid phone number format');
            }

            $user = $this->user->authenticateAdmin($phone, $password);
            error_log("Debug - Authentication result: " . ($user ? 'success' : 'failed'));

            if ($user) {
                // Start session if not already started
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                // Set session variables
                $_SESSION['admin_ID'] = $user['admin_ID'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['profile_picture'] = $user['profile_picture'];

                error_log("Debug - Login successful for user: " . $user['name']);

                echo json_encode([
                    "status" => "success",
                    "message" => "Login successful!",
                    "redirect" => "/dashboard"
                ]);
            } else {
                throw new Exception('Invalid phone number or password');
            }

        } catch (Exception $e) {
            error_log("Login error: " . $e->getMessage());
            echo json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]);
        }
    }

    public function logout() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header("Location: /login");
        exit();
    }
}