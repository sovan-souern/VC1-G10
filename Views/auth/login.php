<?php
session_start();
if (isset($_SESSION['admin_ID'])) {
    header("Location:/login");
    exit();
}
require_once __DIR__ . "/../layout/header.php";
?>

<style>
    /* Page Styling */
    body {
        background: #f0f2f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* Container */
    .container-1 {
        width: 100%;
        max-width: 650px;
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.1);
        text-align: center;
        height: 80vh;
        transform: translateY(30px);
        animation: slideUp 0.5s ease-out forwards;
    }

    @keyframes slideUp {
        0% { transform: translateY(30px); }
        100% { transform: translateY(0); }
    }

    h2 {
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 2rem;
    }

    /* Input Fields */
    .form-control {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 2px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);

    }

    /* Button Styling */
    .btn-primary {
        width: 100%;
        background: #007bff;
        border: none;
        padding: 12px;
        border-radius: 5px;
        font-size: 18px;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
        margin-top: 20px;   
    }

    .btn-primary:hover {
        background: #0056b3;
    }

    .btn-primary:disabled {
        background: #aaa;
        cursor: not-allowed;
    }

    /* Forgot Password */
    .forgot-password {
        display: block;
        text-align: center;
        font-size: 14px;
        margin-top: 20px;
    }

    .forgot-password a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .forgot-password a:hover {
        text-decoration: underline;
    }

    /* Profile Image */
    .profile-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 20px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .text-center {
        text-align: center;
    }

    /* Loader Styling */
    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #007bff;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        animation: spin 1s linear infinite;
        margin: 20px auto;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div class="container-1">
    <h2>Admin Login</h2>
    
    <form id="loginForm">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
        
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

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

<script>
    document.getElementById("loginForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        let button = document.querySelector(".btn-primary");
        let messageDiv = document.getElementById("message");

        button.disabled = true;
        button.innerHTML = "Logging in... <div class='loader'></div>";

        fetch("/users/authenticate", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    messageDiv.innerHTML = "<div class='alert alert-success'>" + data.message + "</div>";
                    setTimeout(() => {
                        window.location.href = "/";
                    }, 2000);
                } else {
                    messageDiv.innerHTML = "<div class='alert alert-danger'>" + data.message + "</div>";
                    button.disabled = false;
                    button.innerHTML = "Login";
                }
            })
            .catch(error => {
                console.error("Error:", error);
                messageDiv.innerHTML = "<div class='alert alert-danger'>An error occurred. Please try again.</div>";
                button.disabled = false;
                button.innerHTML = "Login";
            });
    });
</script>
