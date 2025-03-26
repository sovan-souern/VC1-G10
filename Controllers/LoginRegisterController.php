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
        if (isset($_SESSION['admin_ID']) && isset($_SESSION['role'])) {
            $role = $_SESSION['role'];
            if ($role === 'admin' || $role === 'shopowner') {
                header("Location: /dashboard");
            } else {
                header("Location: /home");
            }
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
                $role = htmlspecialchars($_POST['role'] ?? 'user');
                $profilePicture = null;

                // Validate role
                $validRoles = ['user', 'shopowner', 'admin'];
                if (!in_array($role, $validRoles)) {
                    throw new Exception("Invalid role selected!");
                }

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
                
                // Register user with role
                $result = $this->user->registerAdmin($name, $phone, $password, $profilePicture, $role);
                
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

            if (empty($phone) || empty($password)) {
                throw new Exception('Phone number and password are required');
            }

            $user = $this->user->authenticateAdmin($phone, $password);

            if ($user) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION['admin_ID'] = $user['admin_ID'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['profile_picture'] = $user['profile_picture'];
                $_SESSION['role'] = $user['role'];

                echo json_encode([
                    "status" => "success",
                    "message" => "Login successful!",
                    "role" => $user['role'],
                    "redirect" => ($user['role'] === 'admin' || $user['role'] === 'shopowner') ? '/dashboard' : '/home'
                ]);
            } else {
                throw new Exception('Invalid phone number or password');
            }
        } catch (Exception $e) {
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

        // Store any data you want to keep in database before destroying session
        $user_data = [
            'last_logout' => date('Y-m-d H:i:s'),
            'admin_ID' => $_SESSION['admin_ID'] ?? null
        ];

        // Clear all session variables
        $_SESSION = array();

        // Destroy the session cookie
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600, '/');
        }

        // Destroy the session
        session_destroy();

        // Return JSON response for AJAX calls
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode(['status' => 'success', 'redirect' => '/login']);
            exit;
        }

        // Regular redirect for non-AJAX calls
        header("Location: /login");
        exit();
    }
}