


    <div class="signup-container">
        <!-- Circular Image Preview -->
        <div class="image-preview" id="imagePreview">
            <span>👤</span>
        </div>

        <h2>Sign Up</h2>
        <p>Complete the steps to register</p>

        <form id="signupForm">
            <!-- Step 1: Name & Email -->
            <div class="form-step active">
                <div class="mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <button type="button" class="btn btn-custom next-step">Next</button>
            </div>

            <!-- Step 2: Password -->
            <div class="form-step">
                <button type="button" class="btn btn-back prev-step">← Back</button>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                </div>
                <button type="button" class="btn btn-custom next-step">Next</button>
            </div>

            <!-- Step 3: Upload Image -->
            <div class="form-step">
                <button type="button" class="btn btn-back prev-step">← Back</button>
                <div class="mb-3">
                    <label class="form-label">Upload Profile Picture</label>
                    <input type="file" class="form-control" id="imageInput" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-custom">Sign Up</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let currentStep = 0;
        const formSteps = document.querySelectorAll(".form-step");
        const nextButtons = document.querySelectorAll(".next-step");
        const prevButtons = document.querySelectorAll(".prev-step");

        // Show current step
        function showStep(step) {
            formSteps.forEach((formStep, index) => {
                formStep.classList.toggle("active", index === step);
            });
        }

        // Next step
        nextButtons.forEach(button => {
            button.addEventListener("click", () => {
                if (currentStep < formSteps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        // Previous step
        prevButtons.forEach(button => {
            button.addEventListener("click", () => {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });

        // Image preview function
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('imagePreview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" alt="Profile Picture">';
                };
                reader.readAsDataURL(file);
            } else {
                preview.innerHTML = '<span>👤</span>';
            }
        });

        // Form submission
        document.getElementById("signupForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Sign up successful!");
        });
    </script>


