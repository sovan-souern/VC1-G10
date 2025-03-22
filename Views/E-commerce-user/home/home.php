<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/../layout.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Home</title>
</head>
<body>
    <h1>Welcome to the E-commerce Store</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['name']); ?>!</p>
        <?php if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'shop_owner'): ?>
            <p><a href="/dashboard">Go to Dashboard</a></p>
        <?php endif; ?>
        <p><a href="/logout">Logout</a></p>
    <?php else: ?>
        <p><a href="/login">Login</a> or <a href="/register">Register</a> to start shopping!</p>
    <?php endif; ?>
    <p><a href="/products">View Products</a></p>
    <p><a href="/shop">Shop Now</a></p>
</body>
</html>