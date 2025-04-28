<?php
// Start the session
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

// Destroy the session
session_destroy();

// Clear any other cookies if needed
setcookie('user_id', '', time()-3600, '/');
setcookie('admin_ID', '', time()-3600, '/');

// Redirect to login page
header("Location: /login");
exit();
?>