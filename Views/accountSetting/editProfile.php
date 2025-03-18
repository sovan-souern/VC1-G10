<style>
    body {
        font-family: 'Poppins', sans-serif;
        color: #333;
    }

    .content-wrapper {
        margin: 0 300px;
        padding: 40px 20px;
        display: flex;
        justify-content: center;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
        padding: 25px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        transition: 0.3s ease-in-out;
        max-width: 600px;
        width: 100%;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .fw-bold {
        color: rgb(255, 69, 0);
        text-align: center;
        font-size: 28px;
    }

    .alert {
        border-radius: 10px;
        font-size: 16px;
        text-align: center;
        padding: 10px 20px;
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 8px;
        border: 2px solid #ff4500;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
        padding: 12px;
        transition: 0.3s;
        font-size: 16px;
    }

    .form-control:focus {
        border-color: #cc3700;
        box-shadow: 0 0 12px rgba(255, 69, 0, 0.5);
        outline: none;
    }

    .btn-primary {
        background: linear-gradient(45deg, #ff4500, #ff7f50);
        border: none;
        padding: 12px 20px;
        transition: 0.3s;
        border-radius: 10px;
        font-size: 18px;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #cc3700, #ff4500);
        transform: scale(1.05);
    }

    .btn-outline-secondary {
        border-radius: 10px;
        border: 2px solid #ff4500;
        color: #ff4500;
        transition: 0.3s;
        padding: 12px 20px;
        font-size: 18px;
    }

    .btn-outline-secondary:hover {
        background-color: #ff4500;
        color: white;
    }

    .profile-picture {
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }

    .profile-picture img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease-in-out;
        border: 4px solid #ff4500;
    }

    .profile-picture img:hover {
        transform: scale(1.1);
    }

    .btn-upload {
        background: linear-gradient(45deg, #ff4500, #ff7f50);
        color: white;
        padding: 10px 15px;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
        text-align: center;
        font-size: 16px;
    }

    .btn-upload:hover {
        background: linear-gradient(45deg, #cc3700, #ff4500);
        transform: scale(1.05);
    }

    .text-muted {
        font-size: 14px;
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
            <h5 class="card-header text-center">Edit Profile</h5>
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
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="name" class="form-label">Name</label>
                            <input
                                class="form-control"
                                type="text"
                                id="name"
                                name="name"
                                value="<?php echo htmlspecialchars($profile['name'] ?? ''); ?>"
                                required />
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input
                                class="form-control"
                                type="email"
                                id="email"
                                name="email"
                                value="<?php echo htmlspecialchars($profile['email'] ?? ''); ?>"
                                required />
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
