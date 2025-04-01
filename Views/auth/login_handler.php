<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function checkAdminAccess() {
    if (!isset($_SESSION['user_ID']) || !isset($_SESSION['role'])) {
        return [
            'status' => 'error',
            'redirect' => '/login'
        ];
    }

    $role = strtolower($_SESSION['role']);
    
    if ($role === 'admin' || $role === 'shopowner') {
        $_SESSION['dashboard_access'] = true;
        $_SESSION['is_authenticated'] = true;
        return [
            'status' => 'success',
            'redirect' => '/dashboard',
            'role' => $role
        ];
    }

    return [
        'status' => 'error',
        'redirect' => '/home',
        'message' => 'Access denied'
    ];
}

// Add protection middleware
function protectDashboard() {
    session_start();
    if (!isset($_SESSION['dashboard_access']) || !$_SESSION['dashboard_access']) {
        header('Location: /home');
        exit();
    }
}
?>
