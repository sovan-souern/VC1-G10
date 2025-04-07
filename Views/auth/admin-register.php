<style>
        .container{
            margin-top: -40px;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            
           
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            padding: 1.5rem;
            text-align: center;
            color: white;
        }
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #ced4da;
            transition: all 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .profile-upload {
            position: relative;
            width: 120px;
            height: 120px;
            margin: 0 auto;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .profile-pic:hover {
            transform: scale(1.05);
        }
        .upload-btn {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 35px;
            height: 35px;
            background: #007bff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: white;
        }
        .upload-btn:hover {
            transform: scale(1.1);
            background: #0056b3;
        }
        .upload-btn i {
            color: white;
        }
        .btn-submit {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
        }
        .form-label {
            font-weight: 500;
            color: #666;
            margin-bottom: 8px;
        }
        .input-group {
            position: relative;
        }
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            z-index: 10;
        }
        .input-with-icon {
            padding-left: 40px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-form {
            animation: fadeIn 0.5s ease forwards;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
            animation: fadeIn 0.5s ease forwards;
        }
        .progress-bar {
            height: 4px;
            background: #FFB6C1;
            width: 0;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-10 animate-form">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-white mb-0">Create Shop Owner Account</h4>
                        <p class="text-white mb-0">Please fill out this form to create a new account.</p>
                        <div class="progress-bar mt-2"></div>
                    </div>
                    <div class="card-body p-4">
                        <form action="/users/store-admin" method="POST" enctype="multipart/form-data" id="adminRegisterForm">
                            <!-- Step 1: Basic Info -->
                            <div class="form-step active" id="step1">
                                <div class="profile-upload mb-4">
                                    <img id="profilePreview" src="/Views/assets/img/avatars/1.png" class="profile-pic">
                                    <label for="profile_picture" class="upload-btn">
                                        <i class="bi bi-camera-fill"></i>
                                    </label>
                                    <input type="file" name="profile_picture" id="profile_picture" class="d-none" accept="image/*">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Shop Owner Name</label>
                                    <div class="input-group">
                                        <i class="bi bi-person-fill input-icon"></i>
                                        <input type="text" name="name" class="form-control input-with-icon" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Contact (Phone or Email)</label>
                                    <div class="input-group">
                                        <i class="bi bi-envelope-fill input-icon"></i>
                                        <input type="text" name="identifier" class="form-control input-with-icon" placeholder="Enter phone number or email" required>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary btn-submit w-100" onclick="nextStep()">
                                    Continue
                                </button>
                            </div>

                            <!-- Step 2: Security -->
                            <div class="form-step" id="step2">
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <i class="bi bi-lock-fill input-icon"></i>
                                        <input type="password" name="password" class="form-control input-with-icon" placeholder="Create a strong password" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <i class="bi bi-shield-lock-fill input-icon"></i>
                                        <input type="password" name="confirm_password" class="form-control input-with-icon" placeholder="Confirm your password" required>
                                    </div>
                                </div>

                                <!-- Hidden role input -->
                                <input type="hidden" name="role" value="shopowner">

                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-outline-secondary w-50" onclick="previousStep()">
                                        Back
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-submit w-50">
                                        Create Shop Account
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('profile_picture').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profilePreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('adminRegisterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch('/users/store-admin', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Account Created!',
                        text: data.message,
                        confirmButtonColor: '#FF69B4'
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                } else {
                    throw new Error(data.message);
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: error.message,
                    confirmButtonColor: '#FF69B4'
                });
            });
        });

        let currentStep = 1;
        const totalSteps = 2;

        function updateProgressBar() {
            const progress = (currentStep - 1) / (totalSteps - 1) * 100;
            document.querySelector('.progress-bar').style.width = `${progress}%`;
        }

        function nextStep() {
            const currentStepElement = document.getElementById(`step${currentStep}`);
            const inputs = currentStepElement.querySelectorAll('input[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (currentStep === 1) {
                const identifier = document.querySelector('input[name="identifier"]').value.trim();
                const phoneRegex = /^[0-9]{9,10}$/;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!phoneRegex.test(identifier) && !emailRegex.test(identifier)) {
                    isValid = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Invalid Contact',
                        text: 'Please enter a valid phone number (9-10 digits) or email address.',
                        confirmButtonColor: '#FF69B4'
                    });
                    return;
                }
            }

            if (currentStep === 2) {
                const password = document.querySelector('input[name="password"]').value.trim();
                const confirmPassword = document.querySelector('input[name="confirm_password"]').value.trim();

                if (password !== confirmPassword) {
                    isValid = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Passwords do not match!',
                        confirmButtonColor: '#FF69B4'
                    });
                    return;
                }
            }

            if (!isValid) return;

            document.getElementById(`step${currentStep}`).classList.remove('active');
            currentStep++;
            document.getElementById(`step${currentStep}`).classList.add('active');
            updateProgressBar();
        }

        function previousStep() {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            currentStep--;
            document.getElementById(`step${currentStep}`).classList.add('active');
            updateProgressBar();
        }

        // Initialize progress bar
        updateProgressBar();
    </script>
</body>
</html>
