<?php 
require_once 'Models/UserModel.php';

class UserController extends BaseController {
    private $users;

    function __construct() {
        $this->users = new UserModel();
    }

    // Login page view
    public function login() {
        $this->views('/authentication/login.php');
    }

    // Signup page view
    public function signup() {
        $this->views('/authentication/signup.php');
    }

    // Store new user (SignUp)
    public function store() {
        if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
            echo "All fields are required.";
            return;
        }

        $firstName = htmlentities($_POST['firstName']);
        $lastName = htmlentities($_POST['lastName']);
        $email = htmlentities($_POST['email']);
        $password = htmlentities($_POST['password']);
        $confirmPassword = htmlentities($_POST['confirmPassword']);

        if ($password !== $confirmPassword) {
            echo "Passwords do not match.";
            return;
        }

        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

        // Create the user and redirect
        $this->users->createUser($firstName, $lastName, $email, $encrypted_password);
        echo "Account created successfully!";
        header("Location: /login");
    }

    // Authenticate user (Login)
    public function authenticate() {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            echo "Email and password are required.";
            return;
        }

        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $user = $this->users->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            // Set session variables
            session_start();
            $_SESSION['user_name'] = $user['first_name'];
            $_SESSION['user_id'] = $user['id'];
            echo "Welcome back, " . $user['first_name'];
            header("Location: /dashboard");
        } else {
            echo "Invalid email or password.";
        }
    }
}
?>
