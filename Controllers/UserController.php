<?php

require_once "Models/UserModel.php";
require_once 'BaseController.php';

class UserController extends BaseController
{
    private $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function register()
    {
        // Display the registration form
        require_once "Views/auth/register.php";
    }

    public function login()
    {
        // Display the login form
        require_once "Views/auth/login.php";
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $profilePicture = null;

            if (empty($name) || empty($email) || empty($password)) {
                echo json_encode(["status" => "error", "message" => "All fields are required!"]);
                exit();
            }

            if ($this->user->getUserByEmail($email)) {
                echo json_encode(["status" => "error", "message" => "Email already exists!"]);
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
                    echo json_encode(["status" => "error", "message" => "Failed to upload profile picture!"]);
                    exit();
                }
            }

            $result = $this->user->addUser($name, $email, $password, $profilePicture);
            if ($result) {
                // Automatically log in the user
                session_start();
                $_SESSION['admin_ID'] = $result; // Assuming $result is the user ID
                echo json_encode(["status" => "success", "message" => "Registration successful!", "admin_ID" => $result]);
            } else {
                echo json_encode(["status" => "error", "message" => "Registration failed!"]);
            }
            exit();
        }
    }

    public function authenticate()
    {
        try {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // Input validation
            if (empty($email) || empty($password)) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Email and password are required'
                ]);
                return;
            }
    
            $userModel = new UserModel();
            $user = $userModel->getUserByEmail($email);
    
            if (!$user) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid email or password'
                ]);
                return;
            }
    
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Start session and set user data
                session_start();
                $_SESSION['admin_ID'] = $user['admin_id'];
                $_SESSION['admin_email'] = $user['email'];
                
                // Handle remember me
                if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
                    $token = bin2hex(random_bytes(32));
                    setcookie('remember_token', $token, time() + (86400 * 30), '/'); // 30 days
                    // You should also store this token in the database
                }
    
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'redirect' => '/'
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid email or password'
                ]);
            }
        } catch (Exception $e) {
            error_log("Authentication error: " . $e->getMessage());
            echo json_encode([
                'status' => 'error',
                'message' => 'An error occurred during authentication'
            ]);
        }
    }
    
    

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: /login");
        exit();
    }
}
?>