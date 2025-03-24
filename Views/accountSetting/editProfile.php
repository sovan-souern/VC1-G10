<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f5f5;
        color: #333;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content-wrapper {
        width: 100%;
        max-width: 1000px;
        margin: 2rem auto;
        padding: 0 20px;
    }

    .card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        padding: 2rem;
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }

    .card-header {
        margin: -2rem -2rem 2rem;
        padding: 2rem;
        background: #0d6efd;
        border-bottom: none;
        border-radius: 12px 12px 0 0;
        position: relative;
        overflow: hidden;
    }

    .card-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
        pointer-events: none;
    }

    .card-header h4 {
        color: black;
        margin: 0;
        font-size: 1.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);

    }

    .profile-picture {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .profile-picture img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #495057;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        transition: border-color 0.2s ease;
    }

    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        outline: none;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        font-size: 0.95rem;
        font-weight: 500;
        border-radius: 6px;
        transition: all 0.2s ease;
    }

    .btn-primary {
        background-color: #0d6efd;
        border: none;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
        transform: translateY(-1px);
    }

    .btn-outline-secondary {
        border: 1px solid #6c757d;
        color: #6c757d;
        background: transparent;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: white;
    }

    .btn-upload {
        background-color: #0d6efd;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.9rem;
    }

    .btn-upload:hover {
        background-color: #0b5ed7;
    }

    .text-muted {
        color: #6c757d !important;
        font-size: 0.875rem;
    }

    .alert {
        padding: 1rem;
        border-radius: 6px;
        margin-bottom: 1rem;
    }

    .alert-success {
        background-color: #d1e7dd;
        border: 1px solid #badbcc;
        color: #0f5132;
    }

    .alert-danger {
        background-color: #f8d7da;
        border: 1px solid #f5c2c7;
        color: #842029;
    }
</style>

<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php 
                    echo $_SESSION['error']; 
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success" role="alert">
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <h4 class="text-center">
                    <i class="fas fa-user-edit me-2"></i>
                    Edit Profile
                </h4>
            </div>
            <div class="card-body">
                <form action="/updateProfile" method="POST" enctype="multipart/form-data">
                    <div class="profile-picture">
                        <img
                            src="<?php echo !empty($profile['profile_picture']) ? '/' . $profile['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>"
                            alt="user-avatar"
                            id="uploadedAvatar"
                        />
                        <label for="image" class="btn-upload">
                            Upload new photo
                            <input type="file" id="image" name="image" hidden accept="image/png, image/jpeg" />
                        </label>
                        <p class="text-muted">Allowed JPG or PNG. Max size: 2MB</p>
                    </div>
                    <hr class="my-4" />
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input
                            class="form-control"
                            type="text"
                            id="name"
                            name="name"
                            value="<?php echo htmlspecialchars($profile['name'] ?? ''); ?>"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input
                            class="form-control"
                            type="email"
                            id="email"
                            name="email"
                            value="<?php echo htmlspecialchars($profile['email'] ?? ''); ?>"
                            required />
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                        <button type="button" onclick="window.location.href='/'" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('uploadedAvatar').src = e.target.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    });

    document.querySelector('form').addEventListener('submit', function(e) {
        // Remove e.preventDefault() to allow form submission
        let formData = new FormData(this);

        fetch('/updateProfile', {
            method: 'POST',
            body: formData
        })  
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Profile updated successfully');
                window.location.reload();
            } else {
                alert('Error updating profile: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });
</script>
