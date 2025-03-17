<?php
require_once "Models/AdminModel.php";
require_once 'BaseController.php';

class AdminController extends BaseController {
    private $user;

    public function __construct() {
        $this->user = new AdminModel();
    }

    public function register() {
        // Display the registration form
        require_once "Views/auth/register.php";
    }

    public function login() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['admin_ID'])) {
            header("Location: /");
            exit();
        }
        // Display the login form
        require_once "Views/auth/login.php";
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $profilePicture = null;
    
            if (empty($name) || empty($email) || empty($password)) {
                $message = "All fields are required!";
                error_log($message);
                echo json_encode(["status" => "error", "message" => $message]);
                exit();
            }
    
            if ($this->user->getUserByEmail($email)) {
                $message = "Email already exists!";
                error_log($message);
                echo json_encode(["status" => "error", "message" => $message]);
                exit();
            }
    
            if (!empty($_FILES['profile_picture']['name'])) {
                $uploadDir = "uploads/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
    
                $fileName = time() . "_" . basename($_FILES["profile_picture"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
    
                if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFilePath)) {
                    $profilePicture = $targetFilePath;
                } else {
                    $message = "Failed to upload profile picture!";
                    error_log($message);
                    echo json_encode(["status" => "error", "message" => $message]);
                    exit();
                }
            }
    
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $result = $this->user->addUser($name, $email, $hashedPassword, $profilePicture);
    
            if ($result) {
                $message = "Registration successful!";
                echo json_encode(["status" => "success", "message" => $message, "redirect" => "/login"]);
                exit();
            } else {
                $message = "Registration failed!";
                error_log($message);
                echo json_encode(["status" => "error", "message" => $message]);
            }
            exit();
        }
    }
    

    public function authenticate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $password = $_POST['password'];
    
                // Debug logging
                error_log("Login attempt for email: " . $email);
    
                if (empty($email) || empty($password)) {
                    echo json_encode(["status" => "error", "message" => "Email and password are required!"]);
                    exit();
                }
    
                $user = $this->user->getUserByEmail($email);
                
                if (!$user) {
                    error_log("No user found with email: " . $email);
                    echo json_encode(["status" => "error", "message" => "Invalid email or password!"]);
                    exit();
                }
    
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['admin_ID'] = $user['admin_id']; // Note: case sensitive column name
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['profile_picture'] = $user['profile_picture'];
    
                    error_log("Login successful for user: " . $user['email']);
                    echo json_encode([
                        "status" => "success",
                        "message" => "Login successful!",
                        "redirect" => "/dashboard"
                    ]);
                } else {
                    error_log("Invalid password for user: " . $email);
                    echo json_encode(["status" => "error", "message" => "Invalid email or password!"]);
                }
            } catch (Exception $e) {
                error_log("Login error: " . $e->getMessage());
                echo json_encode(["status" => "error", "message" => "An error occurred during login"]);
            }
            exit();
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
?>
