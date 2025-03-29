<?php
session_start();

function checkAdminAccess() {
    // Check if user is logged in
    if (!isset($_SESSION['role'])) {
        header('Location: /login');
        exit();
    }

    // Redirect users without admin/shopowner role
    if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'shopowner') {
        header('Location: /home');
        exit();
    }
}
?>
