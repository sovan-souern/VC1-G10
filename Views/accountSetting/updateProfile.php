
   
    <style>
        .profile-card {
            border: 2px solid #007bff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .card {
            border-radius: 10px;
        }
        .btn-save {
            background-color: #d63384;
            color: white;
        }
        .btn-save:hover {
            background-color: #c2185b;
        }
    </style>


<div class="container mt-5">
    <div class="row">
        <!-- Profile Section -->
        <div class="col-md-3">
            <div class="profile-card p-3" id="profile-card">
                <img src="/Views/assets/img/avatars/" alt="Profile Image">
                <h5 class="mt-2" id="profile-name">@User-Name</h5>
                <p class="text-muted" id="profile-email">user@email.com</p>
            </div>

            <div class="card mt-3 p-3">
                <h6>Information</h6>
                <p><strong>Name:</strong> <span id="info-name">Name, Last Name</span></p>
                <p><strong>Email:</strong> <span id="info-email">user@email.com</span></p>
                <p><strong>Tel:</strong> <span id="info-tel">+51 966 696 123</span></p>
            </div>
        </div>

        <!-- User Settings Form -->
        <div class="col-md-9">
            <div class="card p-4">
                <h5>User Settings</h5>

                <!-- User Details -->
                <h6 class="mt-3">Details</h6>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="name-input" value="Pepito Rodrick ...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last-name-input" value="Coronel Sifuentes ...">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email-input" value="pepito.c.sifuentes@uni.pe">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tel - Number</label>
                        <div class="d-flex">
                            <input type="text" class="form-control w-25 me-2" id="tel-country-input" value="+51" placeholder="+XX">
                            <input type="text" class="form-control" id="tel-number-input" value="966 696 123" placeholder="Phone number">
                        </div>
                    </div>
                </div>

                <button class="btn btn-save mt-3" onclick="updateProfile()">Save changes</button>

                <!-- Password Change -->
                <h6 class="mt-4">Password</h6>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Change password</label>
                        <input type="password" class="form-control" placeholder="Put your password...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Confirm password</label>
                        <input type="password" class="form-control" placeholder="Confirm password...">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">New password</label>
                        <input type="password" class="form-control" placeholder="Put your new password...">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Confirm new password</label>
                        <input type="password" class="form-control" placeholder="Confirm new password...">
                    </div>
                </div>

                <button class="btn btn-save mt-3">Save changes</button>
                <a href="#" class="ms-3 text-muted">Forgot your password?</a>
            </div>
        </div>
    </div>
</div>

<script>
    function updateProfile() {
        // Get the values from the input fields
        var name = document.getElementById("name-input").value;
        var lastName = document.getElementById("last-name-input").value;
        var email = document.getElementById("email-input").value;
        var telCountry = document.getElementById("tel-country-input").value;
        var telNumber = document.getElementById("tel-number-input").value;

        // Standardize phone number format: ensure no spaces, or format is strictly correct
        telNumber = telNumber.replace(/\D/g, ""); // Remove non-numeric characters
        if (telNumber.length > 9) {
            telNumber = telNumber.slice(0, 9); // Limit to 9 digits
        }

        // Update the profile card and information
        document.getElementById("profile-name").innerText = name + " " + lastName;
        document.getElementById("profile-email").innerText = email;
        document.getElementById("info-name").innerText = name + ", " + lastName;
        document.getElementById("info-email").innerText = email;
        document.getElementById("info-tel").innerText = telCountry + " " + telNumber;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
