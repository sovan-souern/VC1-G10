<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="../user/profile.php" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <!-- SVG Logo remains unchanged -->
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder" style="color: #d63384;">User Profile</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2" >Forgot Password? 🔒</h4>
                    <p class="mb-4" >Enter your email and we'll send you instructions to reset your password</p>
                    <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label" >Email</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                autofocus
                                
                            />
                        </div>
                        <button class="btn" style="background-color: #d63384; color: white; width: 100%;">Send Reset Link</button>
                    </form>
                    <div class="text-center">
                        <a href="auth-login-basic.html" class="d-flex align-items-center justify-content-center" style="color:rgb(32, 3, 249);">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>
