<?php
session_start();
if (isset($_SESSION['admin_ID'])) {
    header("Location: /dashboard");
    exit();
}
require_once __DIR__ . "/../layout/header.php";
?>

<style>
    /* Centering and Styling the Form */
    body {
        background: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .container-1 {
        width: 100%;
        max-width: 650px;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Input Fields */
    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    /* Button Styling */
    .btn-primary {
        width: 100%;
        background: #007bff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        font-size: 16px;
        color: white;
        cursor: pointer;
    }

    .btn-primary:hover {
        background: #0056b3;
    }

    /* Profile Image */
    .profile-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .text-center {
        text-align: center;
    }
</style>

<div class="container-1">
    <!-- Default Profile Image -->
    <img id="profileImage" src="/Views/assets/images/login.png" alt="Profile Image" class="profile-image">

    <h2>Admin Registration</h2>
    
    <form id="registrationForm">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
        
        <input type="text" class="form-control" name="name" id="username" placeholder="Username" required>
        
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

        <!-- Profile Picture Input -->
        <input type="file" class="form-control" name="profile_picture" id="profilePicture" accept="image/*">

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <div id="message"></div>

    <div class="mt-3 text-center">
        Already have an account? <a href="/login">Login here</a>
    </div>
</div>

<script>
    // Function to handle file input change event and display the selected image
    document.getElementById("profilePicture").addEventListener("change", function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Update the image source with the selected file's data URL
                document.getElementById("profileImage").src = e.target.result;
            }

            reader.readAsDataURL(file);
        }
    });

    // Form submission handling
    document.getElementById("registrationForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        
        fetch("/users/store", {
                method: "POST",
                body: formData
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
                }
            })
            .catch(error => {
                console.error("Error:", error);
                document.getElementById("message").innerHTML = "<div class='alert alert-danger'>An error occurred. Please try again.</div>";
            });
    });
</script>
