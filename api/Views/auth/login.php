<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Remove the role check from here since we'll get it from database
if (isset($_SESSION['user_ID'])) {
    // Redirect based on role stored in session
    if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'shopowner') {
        header("Location: /dashboard");
    } else {
        header("Location: /home");
    }
    exit();
}
require_once __DIR__ . "/../layout/header.php";
?>

<style>
    /* Page Styling */
body {
    background: linear-gradient(120deg, #2980b9, #8e44ad);
    background-image: url('/Views/assets/img/login/beauty.jpg'); /* Your background image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

/* Container */
.container-2 {
    display: flex;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 10px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    width: 80%;
    max-width: 900px;
    overflow: hidden;
    height: 70vh;
    transform: translateY(20px); /* Slight downward shift */
    animation: containerAnimation 1s ease-out;
}

@keyframes containerAnimation {
    0% { transform: translateY(50px); opacity: 0; }
    100% { transform: translateY(0); opacity: 1; }
}

/* Left Section */
.left-section {
    flex: 1;
    background: linear-gradient(135deg, #FFB6C1, #FFC0CB);
    position: relative;
    overflow: hidden;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 40px;
}

.left-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 192, 203, 0.4), rgba(255, 182, 193, 0.4));
    backdrop-filter: blur(5px);
}

.left-section * {
    position: relative;
    z-index: 1;
}

.left-section img {
    width: 150px; 
    height: 150px; 
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 20px;
    border: 8px solid rgba(255, 255, 255, 0.8);
    box-shadow: 0 8px 25px rgba(255, 182, 193, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.left-section img:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
}

.left-section h2 {
    font-size: 2.2rem;
    margin-bottom: 10px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.left-section p {
    font-size: 1.2rem;
    opacity: 0.9;
}

/* Right Section (Form) */
.right-section {
    flex: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(145deg, #fff, #FFF5F6);
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    box-shadow: 4px 0px 20px rgba(0, 0, 0, 0.1);
}

h3 {
    background: linear-gradient(45deg, #FF69B4, #FFB6C1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 2.2rem;
    margin-bottom: 30px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(255, 182, 193, 0.1);
}

/* Form Controls */
.form-control {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid rgba(255, 182, 193, 0.3);
    border-radius: 8px;
    font-size: 16px;
    background: rgba(255, 255, 255, 0.95);
    transition: all 0.3s ease-in-out;
    box-shadow: 0 2px 15px rgba(255, 182, 193, 0.1);
}

.form-control:focus {
    outline: none;
    background: #ffffff;
    border-color: #FFB6C1;
    box-shadow: 0 5px 20px rgba(255, 182, 193, 0.2);
    transform: translateY(-2px);
}

.form-control::placeholder {
    color: #95a5a6;
    opacity: 0.8;
}

/* Button */
.btn-primary {
    width: 100%;
    background: linear-gradient(45deg, #FF69B4, #FFB6C1);
    border: none;
    padding: 14px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 25px rgba(255, 105, 180, 0.4);
    background: linear-gradient(45deg, #FFB6C1, #FF69B4);
}

/* Forgot Password and Register Text */
.forgot-password {
    display: block;
    text-align: center;
    font-size: 14px;
    margin-top: 20px;
}

.forgot-password a {
    background: linear-gradient(45deg, #3498db, #2980b9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
    transition: all 0.3s ease;
}

.forgot-password a:hover {
    opacity: 0.8;
    transform: translateY(-1px);
}

.text-center {
    text-align: center;
}

/* Alert Styles */
.alert {
    margin-top: 15px;
    padding: 10px;
    border-radius: 5px;
    font-size: 14px;
    text-align: center;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
}

/* Responsive */
@media (max-width: 768px) {
    .container-2 {
        flex-direction: column;
        height: auto;
    }

    .left-section {
        padding: 20px;
    }

    .right-section {
        padding: 20px;
    }
}

</style>

<div class="container-2">
    <!-- Left Section -->
    <div class="left-section">
        <img src="https://i.pinimg.com/736x/4e/cc/64/4ecc644e07133109fc0e1048e787d1e5.jpg" alt="App Logo">
        <h2>Welcome to Our App</h2>
        <p>Manage your tasks easily and efficiently. Sign in to get started.</p>
    </div>

    <!-- Right Section (Login Form) -->
    <div class="right-section">
        <h3>Login</h3>

        <form id="loginForm" method="POST">
            <input type="text" class="form-control" name="identifier" id="identifier" 
                   placeholder="Email or Phone Number" required>
            
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <!-- Remove role selection as it will come from database -->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <div id="message"></div>

        <div class="forgot-password">
            <a href="/reset">Forgot Password?</a>
        </div>

        <div class="mt-3 text-center">
            Don't have an account? <a href="/register">Register here</a>
        </div>
    </div>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        let button = document.querySelector(".btn-primary");
        let messageDiv = document.getElementById("message");

        button.disabled = true;
        button.innerHTML = "Verifying...";

        fetch("/users/authenticate", {
            method: "POST",
            body: formData,
            credentials: 'include'
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const userRole = data.role.toLowerCase();
                
                // Immediate redirect for admin/shopowner
                if (userRole === 'admin' || userRole === 'shopowner') {
                    sessionStorage.setItem('userRole', userRole);
                    sessionStorage.setItem('dashboardAccess', 'true');
                    window.location.replace('/dashboard');
                    return;
                }
                
                // Regular user redirect
                window.location.replace('/home');
            } else {
                throw new Error(data.message || 'Login failed');
            }
        })
        .catch(error => {
            messageDiv.innerHTML = `<div class='alert alert-danger'>${error.message}</div>`;
            button.disabled = false;
            button.innerHTML = "Login";
            sessionStorage.removeItem('dashboardAccess');
        });
    });

    // Check authentication on page load
    document.addEventListener('DOMContentLoaded', function() {
        if (sessionStorage.getItem('isAuthenticated')) {
            const role = sessionStorage.getItem('userRole');
            if (role === 'admin' || role === 'shopowner') {
                window.location.replace('/dashboard');
            } else {
                window.location.replace('/home');
            }
        }
    });
</script>