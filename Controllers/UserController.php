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

    function index()
    {
        $users = $this->model->getUsers();
        $this->views('/E-comerce/users/user.php', ['users' => $users]);
    }

    function create()
    {
        // Fetch roles and admins for the form dropdowns
        $roles = $this->model->getRoles();
        $admins = $this->model->getAdmins();
        $this->views('/E-comerce/users/create.php', [
            'roles' => $roles,
            'admins' => $admins
        ]);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $profile = null;
            if (isset($_FILES['profile']['name']) && $_FILES['profile']['name'] != '') {
                $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $profile = time() . basename($_FILES['profile']['name']);
                $targetPath = $uploadDir . $profile;

                if (!move_uploaded_file($_FILES['profile']['tmp_name'], $targetPath)) {
                    die("File upload failed!");
                }
            }

            $data = [
                'role_id' => $_POST['role_id'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'] ?? null,
                'gender' => $_POST['gender'] ?? null,
                'admin_id' => !empty($_POST['admin_id']) ? $_POST['admin_id'] : null,
                'profile' => $profile,
                'created_at' => date('Y-m-d H:i:s')
            ];

            try {
                $this->model->createUser($data);
                $this->redirect('/users');
            } catch (Exception $e) {
                // Handle error (e.g., duplicate email)
                $this->views('/E-comerce/users/create.php', [
                    'error' => $e->getMessage(),
                    'data' => $data
                ]);
            }
        }
    }

    function edit($id)
    {
        $user = $this->model->getUser($id);
        $roles = $this->model->getRoles();
        $admins = $this->model->getAdmins();
        $this->views('/E-comerce/users/edit.php', [
            'user' => $user,
            'roles' => $roles,
            'admins' => $admins
        ]);
    }

    function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->model->getUser($id);
            $profile = $user['profile'];

            if (isset($_FILES['profile']['name']) && $_FILES['profile']['name'] != '') {
                $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $profile = time() . basename($_FILES['profile']['name']);
                $targetPath = $uploadDir . $profile;

                if (!move_uploaded_file($_FILES['profile']['tmp_name'], $targetPath)) {
                    die("File upload failed!");
                }
            }

            $data = [
                'role_id' => $_POST['role_id'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'] ?? null,
                'gender' => $_POST['gender'] ?? null,
                'admin_id' => !empty($_POST['admin_id']) ? $_POST['admin_id'] : null,
                'profile' => $profile,
                'created_at' => $user['created_at']
            ];

            try {
                $this->model->updateUser($id, $data);
                $this->redirect('/users');
            } catch (Exception $e) {
                $this->views('/E-comerce/users/edit.php', [
                    'error' => $e->getMessage(),
                    'user' => $data,
                    'id' => $id
                ]);
            }
        }
    }

    function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            try {
                $this->model->deleteUser($id);
                $this->redirect('/users');
            } catch (Exception $e) {
                $users = $this->model->getUsers();
                $this->views('/E-comerce/users/user.php', [
                    'users' => $users,
                    'error' => $e->getMessage()
                ]);
            }
        }
    }
}
