<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['admin_ID'])) {
    header("Location: /dashboard");
    exit();
}
require_once __DIR__ . "/../layout/header.php";  
?>

<style>
    /* Page Styling */
    body {
        background: linear-gradient(120deg, #ffb6c1, #ffc0cb);
        background-blend-mode: overlay;
        background-image: url('/Views/assets/img/login/beauty.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        animation: fadeIn 1s ease-out;
    }

    body::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 182, 193, 0.3);
        z-index: -1;
    }

    /* Container */
    .container-2 {
        display: flex;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        width: 80%;
        max-width: 900px;
        overflow: hidden;
        height: 85vh; /* Increased height to fit content better */
        animation: containerAnimation 1s ease-out;
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .left-section {
        background: linear-gradient(135deg, #FFB6C1, #FFC0CB);
        position: relative;
        overflow: hidden;
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
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(255, 192, 203, 0.4), rgba(255, 182, 193, 0.4));
    }

    .left-section * {
        position: relative;
        z-index: 1;
    }

    .left-section img {
        width: 150px;
        height: 150px;
        margin-bottom: 25px;
    }

    .left-section h2 {
        color: white;
        margin-bottom: 15px;
        font-size: 2rem;
    }

    .left-section p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .right-section {
        background: linear-gradient(145deg, #ffffff, #f8faff);
        padding: 30px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 15px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        box-shadow: 4px 0px 20px rgba(0, 0, 0, 0.1);
    }

    /* Form section improvements */
    .form-section {
        width: 100%;
        max-width: 380px;
        margin: 0 auto;
    }

    /* Form Controls */
    .form-control {
        width: 100%;
        padding: 15px 20px;
        margin-bottom: 20px;
        border: none;
        border-radius: 12px;
        font-size: 15px;
        background-color: rgba(255, 255, 255, 0.9);
        transition: all 0.3s ease;
        box-shadow: 0 3px 15px rgba(255, 142, 180, 0.1);
        position: relative;
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(255, 182, 193, 0.3);
        box-shadow: 0 2px 15px rgba(255, 182, 193, 0.1);
    }

    .form-control:focus {
        outline: none;
        transform: translateY(-2px);
        background: #ffffff;
        box-shadow: 0 6px 20px rgba(255, 142, 180, 0.15);
        border-color: #FFB6C1;
        box-shadow: 0 5px 20px rgba(255, 182, 193, 0.2);
    }

    .form-control::placeholder {
        color: #b2b2b2;
        font-size: 14px;
    }

    /* Profile image improvements */
    .profile-image-container {
        margin-bottom: 35px;
    }

    .profile-image {
        border: 8px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 8px 25px rgba(255, 182, 193, 0.4);
    }

    .profile-upload-label {
        bottom: 5px;
        right: 5px;
        width: 45px;
        height: 45px;
        background: linear-gradient(45deg, #FF69B4, #FFB6C1);
        box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
    }

    .profile-upload-label:hover {
        transform: scale(1.1);
        background: linear-gradient(45deg, #FFB6C1, #FF69B4);
        transform: scale(1.1) rotate(5deg);
    }

    .profile-upload-label i {
        color: white;
        font-size: 20px;
    }

    /* Button */
    .btn-primary {
        width: 100%;
        background: linear-gradient(to right, #2980b9, #2c3e50);
        border: none;
        padding: 14px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(41, 128, 185, 0.4);
        margin-top: 20px;
        position: relative;
        overflow: hidden;
        background: linear-gradient(45deg, #FF69B4, #FFB6C1);
        box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(41, 128, 185, 0.6);
        background: linear-gradient(to right, #3498db, #2980b9);
        background: linear-gradient(45deg, #f7a6c7, #ff8eb4);
        background: linear-gradient(45deg, #FFB6C1, #FF69B4);
        box-shadow: 0 6px 25px rgba(255, 105, 180, 0.4);
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            to right,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.3) 50%,
            rgba(255, 255, 255, 0) 100%
        );
        transition: all 0.5s;
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    /* Custom file input styling */
    input[type="file"] {
        background-color: #f0f4f8;
        border: none;
        border-radius: 8px;
        padding: 8px 12px;
        width: 100%;
        margin-bottom: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        background: rgba(236, 240, 245, 0.8);
        display: none;
    }

    /* Profile image preview */
    .profile-image-container {
        position: relative;
        width: 150px;
        height: 150px;
        margin: 0 auto 25px;
    }

    .profile-image {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid white;
        box-shadow: 0 5px 15px rgba(255, 142, 180, 0.3);
        transition: all 0.3s ease;
    }

    .profile-upload-label {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #ff8eb4;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .profile-upload-label:hover {
        transform: scale(1.1);
        background: #f7a6c7;
    }

    .profile-upload-label i {
        color: white;
        font-size: 20px;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .container-2 {
            flex-direction: column;
            height: auto;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .right-section > * {
        animation: fadeInUp 0.5s ease forwards;
    }

    .right-section > *:nth-child(1) { animation-delay: 0.1s; }
    .right-section > *:nth-child(2) { animation-delay: 0.2s; }
    .right-section > *:nth-child(3) { animation-delay: 0.3s; }
    .right-section > *:nth-child(4) { animation-delay: 0.4s; }

    /* Update heading style */
    h3 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 1.8rem;
        background: linear-gradient(45deg, #ff8eb4, #f7a6c7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .mt-3 {
        margin-top: 1rem !important;
    }

    a {
        color: #FF69B4;
        transition: all 0.3s ease;
    }

    a:hover {
        color: #FFB6C1;
        text-decoration: none;
    }
</style>

<div class="container-2">
    <!-- Left Section -->
    <div class="left-section">
        <img src="https://i.pinimg.com/736x/4e/cc/64/4ecc644e07133109fc0e1048e787d1e5.jpg" alt="App Logo">
        <h2>Create Your Account</h2>
        <p>Join our community and discover amazing beauty products.<br>Start your journey with us today.</p>
    </div>

    <!-- Right Section (Registration Form) -->
    <div class="right-section">
        <h3>Sign Up</h3>
        
        <div class="form-section">
            <form id="registrationForm" enctype="multipart/form-data">
                <div class="profile-image-container">
                    <img id="profileImage" src="/Views/assets/images/login.png" alt="Profile Image" class="profile-image">
                    <label for="profilePicture" class="profile-upload-label">
                        <i class="bx bx-camera"></i>
                    </label>
                    <input type="file" name="profile_picture" id="profilePicture" accept="image/*" hidden>
                </div>

                <div class="input-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
                </div>
                <div class="input-group">
                    <input type="tel" class="form-control" name="phone" id="phone" 
                           placeholder="Enter your phone number (10 digits)" 
                           pattern="[0-9]{10}" required>
                </div>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" 
                           placeholder="Choose a password" required>
                </div>
                <input type="hidden" name="role" value="user">

                <button type="submit" class="btn btn-primary">Create Account</button>
            </form>

            <div id="message"></div>

            <div class="mt-3 text-center">
                Already have an account? <a href="/login">Sign in</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("profilePicture").addEventListener("change", function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("profileImage").src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    document.getElementById("registrationForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        let button = document.querySelector(".btn-primary");
        button.disabled = true;
        button.innerHTML = "Creating Account...";

        fetch("/users/store", {
            method: "POST",
            body: formData // FormData will automatically handle file uploads
        })
        .then(response => response.json())
        .then(data => {
            let messageDiv = document.getElementById("message");
            if (data.status === "success") {
                messageDiv.innerHTML = "<div class='alert alert-success'>" + data.message + "</div>";
                setTimeout(() => {
                    window.location.href = "/login";
                }, 2000);
            } else {
                messageDiv.innerHTML = "<div class='alert alert-danger'>" + data.message + "</div>";
                button.disabled = false;
                button.innerHTML = "Create Account";
            }
        })
        .catch(error => {
            console.error("Error:", error);
            document.getElementById("message").innerHTML = 
                "<div class='alert alert-danger'>An error occurred. Please try again.</div>";
            button.disabled = false;
            button.innerHTML = "Create Account";
        });
    });
</script>
