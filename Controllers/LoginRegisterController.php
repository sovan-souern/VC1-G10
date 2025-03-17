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
            $name = htmlspecialchars($_POST['name'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');
            $profilePicture = null;

            error_log("Store method called - Name: $name, Email: $email");

            if (empty($name) || empty($email) || empty($password)) {
                $message = "All fields are required!";
                error_log($message);
                echo json_encode(["status" => "error", "message" => $message]);
                exit();
            }

            if ($this->user->getAdminByEmail($email)) {
                $message = "Email already exists!";
                error_log($message);
                echo json_encode(["status" => "error", "message" => $message]);
                exit();
            }

            if (!empty($_FILES['profile_picture']['name'])) {
                $uploadDir = "uploads/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                    error_log("Created uploads directory: $uploadDir");
                }

                $fileName = time() . "_" . basename($_FILES["profile_picture"]["name"]);
                $targetFilePath = $uploadDir . $fileName;

                error_log("Attempting to move file to: $targetFilePath");
                if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFilePath)) {
                    $profilePicture = $targetFilePath;
                    error_log("File uploaded successfully: $profilePicture");
                } else {
                    $message = "Failed to upload profile picture! Error: " . print_r($_FILES, true);
                    error_log($message);
                    echo json_encode(["status" => "error", "message" => $message]);
                    exit();
                }
            }

            $result = $this->user->registerAdmin($name, $email, $password, $profilePicture);

            if ($result) {
                $message = "Registration successful! Please login.";
                error_log($message . " - User: $name, Email: $email");
                echo json_encode(["status" => "success", "message" => $message, "redirect" => "/login"]);
            } else {
                $message = "Registration failed!";
                error_log($message . " - User: $name, Email: $email");
                echo json_encode(["status" => "error", "message" => $message]);
            }
            exit();
        } else {
            error_log("Invalid request method: " . $_SERVER['REQUEST_METHOD']);
            echo json_encode(["status" => "error", "message" => "Invalid request method"]);
            exit();
        }
    }

    public function authenticate() {
        header('Content-Type: application/json');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = htmlspecialchars($_POST['email'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');

            if (empty($email) || empty($password)) {
                echo json_encode(["status" => "error", "message" => "Email and password are required!"]);
                exit();
            }

            $user = $this->user->authenticateAdmin($email, $password);
            if ($user) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['admin_ID'] = $user['admin_ID'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['profile_picture'] = $user['profile_picture'];

                echo json_encode([
                    "status" => "success",
                    "message" => "Login successful!",
                    "redirect" => "/dashboard"
                ]);
            } else {
                echo json_encode(["status" => "error", "message" => "Invalid email or password!"]);
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