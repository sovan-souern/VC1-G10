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
                $identifier = htmlspecialchars($_POST['identifier'] ?? '');
                $password = htmlspecialchars($_POST['password'] ?? '');
                $role = htmlspecialchars($_POST['role'] ?? 'user');
                $profilePicture = null;

                // Validate role
                $validRoles = ['user', 'shopowner', 'admin'];
                if (!in_array($role, $validRoles)) {
                    throw new Exception("Invalid role selected!");
                }

                // Validate required fields
                if (empty($name) || empty($identifier) || empty($password)) {
                    throw new Exception("All fields are required!");
                }

                // Validate identifier
                if (empty($identifier) || (!filter_var($identifier, FILTER_VALIDATE_EMAIL) && !preg_match('/^\+?[0-9]{9,15}$/', $identifier))) {
                    throw new Exception("Invalid email or phone number format!");
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
                $result = $this->user->registerAdmin($name, $identifier, $password, $profilePicture, $role);
                
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

            $identifier = trim($_POST['identifier'] ?? '');
            $password = trim($_POST['password'] ?? '');

            error_log("Attempting admin login with identifier: $identifier");

            if (empty($identifier) || empty($password)) {
                throw new Exception('Identifier and password are required');
            }

            $user = $this->user->authenticateAdmin($identifier, $password);

            if ($user) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION['admin_ID'] = $user['admin_ID'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['profile_picture'] = $user['profile_picture'];
                $_SESSION['role'] = $user['role'];

                // Check if this is an admin login from modal
                $isAdminLogin = isset($_POST['admin_login']) && $_POST['admin_login'] === 'true';

                if ($isAdminLogin && ($user['role'] !== 'admin' && $user['role'] !== 'shopowner')) {
                    throw new Exception('Access denied. Admin privileges required.');
                }

                echo json_encode([
                    "status" => "success",
                    "message" => "Login successful!",
                    "role" => $user['role'],
                    "redirect" => ($user['role'] === 'admin' || $user['role'] === 'shopowner') ? '/dashboard' : '/home'
                ]);
            } else {
                throw new Exception('Invalid identifier or password');
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

        // Clear any other custom cookies if they exist
        setcookie('user_id', '', time()-3600, '/');
        setcookie('remember_me', '', time()-3600, '/');

        // Destroy the session
        session_destroy();

        // For AJAX requests
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode([
                'status' => 'success',
                'redirect' => '/login',
                'forceRedirect' => true
            ]);
            exit;
        }

        // For regular requests, always redirect to login
        header("Location: /login");
        exit();
    }

    public function adminRegister() {
       $this->views('auth/admin-register.php') ;
    }

    public function storeAdmin() {
        header('Content-Type: application/json');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $name = htmlspecialchars($_POST['name'] ?? '');
                $identifier = htmlspecialchars($_POST['identifier'] ?? '');
                $password = htmlspecialchars($_POST['password'] ?? '');
                $confirmPassword = htmlspecialchars($_POST['confirm_password'] ?? '');
                $role = htmlspecialchars($_POST['role'] ?? '');
                $profilePicture = null;

                // Validate passwords match
                if ($password !== $confirmPassword) {
                    throw new Exception("Passwords do not match!");
                }

                // Validate role
                $allowedRoles = ['admin', 'shopowner'];
                if (!in_array($role, $allowedRoles)) {
                    throw new Exception("Invalid role selected!");
                }

                // Validate identifier (phone or email)
                $phoneRegex = '/^\+?[0-9]{9,15}$/';
                $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                if (!preg_match($phoneRegex, $identifier) && !preg_match($emailRegex, $identifier)) {
                    throw new Exception("Invalid email or phone number format!");
                }

                // Handle profile picture upload if provided
                if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
                    $uploadDir = "uploads/admin_profiles/";
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }

                    $fileExtension = strtolower(pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION));
                    $uniqueFileName = uniqid('admin_') . '.' . $fileExtension;
                    $targetFilePath = $uploadDir . $uniqueFileName;

                    if (!move_uploaded_file($_FILES['profile_picture']['tmp_name'], $targetFilePath)) {
                        throw new Exception("Failed to upload profile picture.");
                    }

                    $profilePicture = $targetFilePath;
                }

                // Register admin
                $result = $this->user->registerAdmin($name, $identifier, $password, $profilePicture, $role);
                
                if (!$result) {
                    throw new Exception("Registration failed!");
                }

                echo json_encode([
                    "status" => "success",
                    "message" => "registration successful!",
                    "redirect" => "/login"
                ]);

            } catch (Exception $e) {
                echo json_encode([
                    "status" => "error",
                    "message" => $e->getMessage()
                ]);
            }
        }
        exit();
    }
}