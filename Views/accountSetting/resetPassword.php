<style>
        .container {
            max-width: 900px;
            width: 100%;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 0 auto;
            margin-top: 50px;
            height:70vh;
        }
        
        .icon-container {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .icon {
            width: 100%;
            height: 100%;
        }
        
        h2 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 28px;
            font-weight: 600;
        }
        
        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 25px;
            line-height: 1.5;
        }
        
        .subtitle {
            color: #777;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 25px;
        }
        
        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color:rgb(173, 136, 68);
            outline: none;
            box-shadow: 0 0 0 2px rgba(142, 68, 173, 0.2);
        }

        input[type="tel"] {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background-color: #fff;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        input[type="tel"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        input[type="tel"]::placeholder {
            color: #aaa;
            font-style: italic;
        }
        
        .code-inputs {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 25px;
        }
        
        .code-input {
            width: 60px;
            height: 60px;
            text-align: center;
            font-size: 24px;
            border: 2px solid #ddd;
            border-radius: 50%;
            padding: 0;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        .code-input:focus {
            border-color: #8E44AD;
            outline: none;
            box-shadow: 0 0 0 2px rgba(142, 68, 173, 0.2);
        }
        
        button {
            background:rgb(255, 174, 0);
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            font-size: 16px;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: 500;
        }
        
        button:hover {
            background:rgb(45, 51, 67);
        }
        
        .error {
            color: #e74c3c;
            font-size: 14px;
            margin-bottom: 15px;
            background-color: rgba(231, 76, 60, 0.1);
            padding: 10px;
            border-radius: 5px;
            border-left: 3px solid #e74c3c;
            display: none;
        }
        
        .password-container {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #777;
            cursor: pointer;
            width: auto;
            padding: 0;
        }
        
        .toggle-password:hover {
            color: #333;
        }
        
        /* Reset Link */
        .reset-link {
            margin-top: 20px;
            font-size: 12px;
        }
        
        .reset-link a {
            color: #999;
            text-decoration: none;
        }
        
        .reset-link a:hover {
            text-decoration: underline;
        }
        
        /* Checkmark Icon */
        .checkmark {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .checkmark svg {
            width: 100%;
            height: 100%;
        }

        /* Step visibility */
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        /* Update form colors to match the app theme */
        input[type="tel"],
        input[type="password"],
        .code-input {
            border: 1px solid #ccc;
            background-color: #f8f9fa;
            color: #333;
        }

        input[type="tel"]:focus,
        input[type="password"]:focus,
        .code-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
        }

        button {
            background: #007bff;
            color: #fff;
        }

        button:hover {
            background: #0056b3;
        }

        .error {
            background-color: rgba(220, 53, 69, 0.1);
            border-left: 3px solid #dc3545;
            color: #dc3545;
        }

        .reset-link a {
            color: #007bff;
        }

        .reset-link a:hover {
            color: #0056b3;
        }

        .checkmark svg {
            stroke: #007bff;
        }
    </style>

    <div class="container">
        <div id="error-message" class="error"></div>
        
        <!-- Step 1: Phone Number or Email Form -->
        <div id="step1" class="step active">
            <div class="checkmark">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="11" stroke="#4CAF50" stroke-width="2"/>
                    <path d="M7 13l3 3 7-7" stroke="#4CAF50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h2>Reset Password</h2>
            <p>Forgot your password? No worries, we'll send you a 4-digit code.</p>
            
            <form id="contact-form">
                <div class="form-group">
                    <input type="text" id="contact" name="contact" placeholder="Enter your Phone Number or Email" required>
                </div>
                <button type="submit">Get a 4-digit Code</button>
            </form>
        </div>
        
        <!-- Step 2: Confirmation Code Form -->
        <div id="step2" class="step">
            <div class="checkmark">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="11" stroke="#4CAF50" stroke-width="2"/>
                    <path d="M7 13l3 3 7-7" stroke="#4CAF50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h2>Enter Your Confirmation Code</h2>
            <p>We sent you on your phone number <span id="phone-display"></span></p>
            
            <form id="code-form">
                <div class="code-inputs">
                    <input type="text" class="code-input" name="digit1" maxlength="1" pattern="[0-9]" inputmode="numeric" required autofocus>
                    <input type="text" class="code-input" name="digit2" maxlength="1" pattern="[0-9]" inputmode="numeric" required>
                    <input type="text" class="code-input" name="digit3" maxlength="1" pattern="[0-9]" inputmode="numeric" required>
                    <input type="text" class="code-input" name="digit4" maxlength="1" pattern="[0-9]" inputmode="numeric" required>
                </div>
                <button type="submit">Continue</button>
            </form>
        </div>
        
        <!-- Step 3: New Password Form -->
        <div id="step3" class="step">
            <div class="checkmark">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="11" stroke="#4CAF50" stroke-width="2"/>
                    <path d="M7 13l3 3 7-7" stroke="#4CAF50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h2>Create a New Password</h2>
            <p>Please choose a password that hasn't been used before. Must be at least 8 characters.</p>
            
            <form id="password-form">
                <div class="form-group password-container">
                    <input type="password" id="password" name="password" placeholder="Set new password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword('password')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
                <div class="form-group password-container">
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm New Password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword('confirm_password')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
                <button type="submit">Reset Password</button>
            </form>
        </div>
        
        <!-- Step 4: Success Message -->
        <div id="step4" class="step">
            <div class="checkmark">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="11" stroke="#4CAF50" stroke-width="2"/>
                    <path d="M7 13l3 3 7-7" stroke="#4CAF50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h2>Password Reset</h2>
            <p>Your password has been successfully reset.</p>
            <p class="subtitle">Click to login magically.</p>
            <a href="/" style="display: inline-block; text-decoration: none; width: 100%;">
                <button type="button">Continue</button>
            </a>
        </div>
        
        <!-- For testing: Reset link -->
        <div class="reset-link">
            <a href="#" id="reset-flow"><<-Back<<-</a>
        </div>
    </div>

    <script>
        // DOM Elements
        const steps = document.querySelectorAll('.step');
        const errorMessage = document.getElementById('error-message');
        const contactForm = document.getElementById('contact-form');
        const codeForm = document.getElementById('code-form');
        const passwordForm = document.getElementById('password-form');
        const resetFlowLink = document.getElementById('reset-flow');
        const phoneDisplay = document.getElementById('phone-display'); // Update to display phone number
        
        // Current step
        let currentStep = 1;
        
        // Show a specific step
        function showStep(stepNumber) {
            steps.forEach((step, index) => {
                if (index + 1 === stepNumber) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
            currentStep = stepNumber;
        }
        
        // Show error message
        function showError(message) {
            errorMessage.textContent = message;
            errorMessage.style.display = 'block';
        }
        
        // Hide error message
        function hideError() {
            errorMessage.style.display = 'none';
        }
        
        // Contact form submission (handles both phone and email)
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const contact = document.getElementById('contact').value.trim();
            const phoneRegex = /^\d{10,15}$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Validate input as either phone number or email
            if (!phoneRegex.test(contact) && !emailRegex.test(contact)) {
                showError('Please enter a valid phone number or email address');
                return;
            }

            // Send the code to the server
            fetch('/user/resetPassword', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ contact })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('phone-display').textContent = contact;
                    hideError();

                    // Display the reset code for debugging or testing purposes
                    alert(`Your reset code is: ${data.resetCode}`);

                    showStep(2);
                } else {
                    showError(data.message || 'Failed to send the code. Please try again.');
                }
            })
            .catch(() => {
                showError('An error occurred. Please try again.');
            });
        });
        
        // Code form submission
        codeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const inputs = document.querySelectorAll('.code-input');
            let code = '';
            
            inputs.forEach(input => {
                code += input.value;
            });
            
            // In a real app, you would verify the code with an API
            // For demo purposes, we'll accept any 4-digit code
            if (code.length === 4 && /^\d{4}$/.test(code)) {
                hideError();
                showStep(3);
            } else {
                showError('Invalid code. Please try again.');
            }
        });
        
        // Password form submission
        passwordForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password.length < 8) {
                showError('Password must be at least 8 characters');
                return;
            }
            
            if (password !== confirmPassword) {
                showError('Passwords do not match');
                return;
            }
            
            // In a real app, you would call an API to reset the password
            hideError();
            showStep(4);
        });
        
        // Reset flow
        resetFlowLink.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Reset forms
            contactForm.reset();
            codeForm.reset();
            passwordForm.reset();
            
            // Hide error
            hideError();
            
            // Show step 1
            showStep(1);
        });
        
        // Auto-focus next input in code verification
        const codeInputs = document.querySelectorAll('.code-input');
        
        codeInputs.forEach((input, index) => {
            input.addEventListener('input', function() {
                // Remove non-numeric characters
                this.value = this.value.replace(/[^0-9]/g, '');
                
                if (this.value.length === 1) {
                    if (index < codeInputs.length - 1) {
                        codeInputs[index + 1].focus();
                    } else {
                        // If it's the last input, blur to hide keyboard on mobile
                        this.blur();
                    }
                }
            });
            
            input.addEventListener('keydown', function(e) {
                // Handle backspace
                if (e.key === 'Backspace' && this.value === '' && index > 0) {
                    codeInputs[index - 1].focus();
                    codeInputs[index - 1].value = '';
                    e.preventDefault();
                }
                
                // Handle left arrow
                if (e.key === 'ArrowLeft' && index > 0) {
                    codeInputs[index - 1].focus();
                    e.preventDefault();
                }
                
                // Handle right arrow
                if (e.key === 'ArrowRight' && index < codeInputs.length - 1) {
                    codeInputs[index + 1].focus();
                    e.preventDefault();
                }
            });
            
            // Handle paste event for the code
            input.addEventListener('paste', function(e) {
                e.preventDefault();
                const pasteData = e.clipboardData.getData('text').trim();
                
                // Check if pasted data is numeric and has appropriate length
                if (/^\d+$/.test(pasteData)) {
                    // Fill in the inputs with the pasted digits
                    for (let i = 0; i < Math.min(pasteData.length, codeInputs.length - index); i++) {
                        codeInputs[index + i].value = pasteData.charAt(i);
                    }
                    
                    // Focus the next empty input or the last one
                    const nextIndex = Math.min(index + pasteData.length, codeInputs.length - 1);
                    codeInputs[nextIndex].focus();
                }
            });
        });
        
        // Toggle password visibility
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const button = input.nextElementSibling;
            
            if (input.type === 'password') {
                input.type = 'text';
                button.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                        <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                `;
            } else {
                input.type = 'password';
                button.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                `;
            }
        }
    </script>
