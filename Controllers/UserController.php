<?php
require_once 'Models/UserModel.php';
require_once 'BaseController.php';

class UserController extends BaseController
{
    private $model;

    function __construct()
    {
        $this->model = new UserModel();
    }

    function trackActivity()
    {
        if (isset($_SESSION['admin_ID'])) {
            $this->model->updateLastActivity($_SESSION['admin_ID']); // Update last activity timestamp
        }
    }

    function index()
    {
        $this->trackActivity(); // Track activity
        $search = $_GET['search'] ?? null; // Get the search query
        $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1; // Get the current page, default to 1
        $limit = 10; // Number of users per page
        $offset = ($page - 1) * $limit; // Calculate the offset

        $users = $this->model->getUsers($search, $limit, $offset); // Fetch paginated users
        $totalUsers = $this->model->getTotalUsers($search); // Get the total number of users
        $totalPages = ceil($totalUsers / $limit); // Calculate total pages

        $this->views('/E-comerce/users/user.php', [
            'users' => $users,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalUsers' => $totalUsers // Pass totalUsers to the view
        ]);
    }

    function getActiveUsers()
    {
        $this->trackActivity(); // Track activity
        $activeUsers = $this->model->getActiveUsers();
        $this->views('/E-comerce/users/user.php', ['users' => $activeUsers]);
    }

    function delete()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            if ($this->model->deleteUser($id)) {
                header("Location: /users?message=User deleted successfully");
                exit;
            } else {
                header("Location: /users?error=Failed to delete user from database");
                exit;
            }
        } else {
            header("Location: /users?error=Invalid user ID");
            exit;
        }
    }

    function edit()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'name' => $_POST['name'],
                    'phone' => $_POST['phone'],
                    'role' => $_POST['role']
                ];
                if ($this->model->updateUser($id, $data)) {
                    header("Location: /users?message=User updated successfully");
                    exit;
                } else {
                    header("Location: /users?error=Failed to update user in database");
                    exit;
                }
            } else {
                $user = $this->model->getUser($id);
                if ($user) {
                    $this->views('/E-comerce/users/edit.php', ['user' => $user]);
                } else {
                    header("Location: /users?error=User not found");
                    exit;
                }
            }
        } else {
            header("Location: /users?error=Invalid user ID");
            exit;
        }
    }

    function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'role' => $_POST['role']
            ];
            if ($this->model->createUser($data)) {
                header("Location: /users?message=User created successfully");
                exit;
            } else {
                header("Location: /users?error=Failed to create user");
                exit;
            }
        } else {
            $this->views('/E-comerce/auth/register.php');
        }
    }

    function profile()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $user = $this->model->getUser($id);
            if ($user) {
                $this->views('/E-comerce/users/profile.php', ['user' => $user]);
            } else {
                header("Location: /users?error=User not found");
                exit;
            }
        } else {
            header("Location: /users?error=Invalid user ID");
            exit;
        }
    }
}