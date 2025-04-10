<div class="container">
    <div class="password-reset-card">
        <div class="card-header">
            <div class="lock-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
                </svg>
            </div>
            <h1 class="text-center">Reset Your Password</h1>
            <p class="text-center">Secure your account with a new password</p>
        </div>
        
        <form id="reset-password-form" action="/resetPassword" method="POST" class="p-4">
            <div class="form-group floating">
                <input type="password" id="current_password" name="current_password" class="form-control" placeholder=" " required>
                <label for="current_password">Current Password</label>
                <span class="toggle-password" data-target="current_password">👁️</span>
            </div>
            
            <div class="form-group floating">
                <input type="password" id="new_password" name="new_password" class="form-control" placeholder=" " required>
                <label for="new_password">New Password</label>
                <span class="toggle-password" data-target="new_password">👁️</span>
            </div>
            
            <div class="form-group floating">
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder=" " required>
                <label for="confirm_password">Confirm Password</label>
                <span class="toggle-password" data-target="confirm_password">👁️</span>
            </div>
            
            <div class="password-strength">
                <div class="strength-meter">
                    <div class="strength-section"></div>
                    <div class="strength-section"></div>
                    <div class="strength-section"></div>
                    <div class="strength-section"></div>
                </div>
                <span class="strength-text">Password Strength</span>
            </div>
            
            <button type="submit" class="btn-submit">
                <span class="btn-text">Reset Password</span>
                <span class="btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                    </svg>
                </span>
            </button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('reset-password-form');
    const newPasswordInput = document.getElementById('new_password');
    const strengthMeter = document.querySelector('.password-strength');
    const strengthSections = document.querySelectorAll('.strength-section');
    const strengthText = document.querySelector('.strength-text');

    // Show strength meter only when new password field is focused
    newPasswordInput.addEventListener('focus', function() {
        strengthMeter.style.opacity = '1';
        strengthMeter.style.transform = 'translateY(0)';
    });

    // Hide strength meter when focus is lost (if field is empty)
    newPasswordInput.addEventListener('blur', function() {
        if (!this.value) {
            strengthMeter.style.opacity = '0';
            strengthMeter.style.transform = 'translateY(10px)';
        }
    });

    // Password strength checker
    newPasswordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;
        
        // Check password length
        if (password.length > 0) strength += 1;
        if (password.length >= 8) strength += 1;
        
        // Check for character variety
        if (/[A-Z]/.test(password)) strength += 1;
        if (/[0-9]/.test(password)) strength += 1;
        if (/[^A-Za-z0-9]/.test(password)) strength += 1;
        
        // Cap at 4
        strength = Math.min(strength, 4);
        
        // Update strength meter
        strengthSections.forEach((section, index) => {
            section.style.backgroundColor = index < strength ? getStrengthColor(strength) : '#eee';
        });
        
        // Update strength text
        const strengthMessages = ['Very Weak', 'Weak', 'Moderate', 'Strong', 'Very Strong'];
        strengthText.textContent = strengthMessages[strength];
        strengthText.style.color = getStrengthColor(strength);
    });

    function getStrengthColor(strength) {
        const colors = ['#ff4d4d', '#ff9966', '#ffcc00', '#66cc00', '#339900'];
        return colors[strength];
    }

    
    form.addEventListener('submit', async function (e) {
        e.preventDefault(); 
        const formData = new FormData(form);

        const currentPassword = formData.get('current_password');
        const newPassword = formData.get('new_password');
        const confirmPassword = formData.get('confirm_password');

        // Validate new password and confirm password
        if (newPassword !== confirmPassword) {
            showError('New password and confirm password do not match.');
            return;
        }

        if (newPassword.length < 8) {
            showError('New password must be at least 8 characters long.');
            return;
        }

        try {
            const response = await fetch('/resetPassword', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Failed to reset password. Please try again later.');
            }

            const result = await response.json();
            if (result.success) {
                showSuccess(result.message);
                setTimeout(() => {
                    window.location.href = '/login'; // Redirect on success
                }, 2000);
            } else {
                showError(result.message || 'An error occurred. Please try again.');
            }
        } catch (error) {
            showError(error.message || 'An unexpected error occurred. Please try again.');
            console.error(error);
        }
    });
    
    function showError(message) {
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        
        const existingError = document.querySelector('.error-message');
        if (existingError) existingError.remove();
        
        form.prepend(errorElement);
        
        // Shake animation
        form.classList.add('shake');
        setTimeout(() => {
            form.classList.remove('shake');
        }, 500);
    }
    
    function showSuccess(message) {
        const successElement = document.createElement('div');
        successElement.className = 'success-message';
        successElement.textContent = message;
        
        const existingSuccess = document.querySelector('.success-message');
        if (existingSuccess) existingSuccess.remove();
        
        form.prepend(successElement);
    }

    const toggleIcons = document.querySelectorAll('.toggle-password');
    toggleIcons.forEach(icon => {
        icon.addEventListener('click', function () {
            const input = document.getElementById(this.dataset.target);
            if (input.type === 'password') {
                input.type = 'text';
                this.textContent = '🙈'; // Change icon to "hide"
            } else {
                input.type = 'password';
                this.textContent = '👁️'; // Change icon to "show"
            }
        });
    });
});
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    :root {
        --primary-color: #6c63ff;
        --primary-light: #a29bfe;
        --error-color: #ff4757;
        --success-color: #2ed573;
        --text-color: #2d3436;
        --light-gray: #f5f6fa;
        --medium-gray: #dfe6e9;
        --dark-gray: #636e72;
        --background-color: #ffffff; /* Set plain white background */
    }
    
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    
    body {
        background-color: var(--background-color); /* Use plain background */
        font-family: 'Poppins', sans-serif;
        color: var(--text-color);
        line-height: 1.6;
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* min-height: 100vh; */ /* Remove this line */
        padding: 20px;
        background: none; /* Remove gradient background */
    }
    
    .password-reset-card {
        background-color: #ffffff; /* Set plain white background for the form */
        width: 100%;
        max-width: 500px;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        transform: translateY(0);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .password-reset-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .card-header {
        padding: 30px;
        text-align: center;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        color: white;
    }
    
    .lock-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 15px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .lock-icon svg {
        width: 30px;
        height: 30px;
        fill: white;
    }
    
    h1 {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    .card-header p {
        font-size: 14px;
        opacity: 0.9;
    }
    
    form {
        padding: 30px;
    }
    
    .form-group {
        position: relative;
        margin-bottom: 25px;
        background: var(--light-gray); /* Subtle background for input fields */
        border-radius: 10px;
        padding: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Add a soft shadow */
    }
    
    .form-group.floating label {
        position: absolute;
        top: 15px;
        left: 45px;
        color: var(--dark-gray);
        font-size: 14px;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    
    .form-group.floating .icon {
        position: absolute;
        top: 15px;
        left: 15px;
        width: 20px;
        height: 20px;
    }
    
    .form-group.floating .icon svg {
        width: 100%;
        height: 100%;
        fill: var(--dark-gray);
        transition: fill 0.3s ease;
    }
    
    .form-control {
        width: 100%;
        padding: 15px 15px 15px 45px; /* Add padding for better spacing */
        border: 2px solid var(--medium-gray); /* Subtle border */
        border-radius: 8px; /* Smooth rounded corners */
        font-size: 14px;
        background-color: white; /* Clear background for better visibility */
        color: var(--text-color); /* Ensure text is readable */
        transition: all 0.3s ease; /* Smooth transitions */
    }
    
    .form-control:focus {
        outline: none;
        border-color: var(--primary-color); /* Highlight border on focus */
        box-shadow: 0 0 5px rgba(108, 99, 255, 0.5); /* Add focus shadow */
        background-color: #fdfdfd; /* Slightly lighter background on focus */
    }
    
    .form-control::placeholder {
        color: var(--medium-gray); /* Subtle placeholder color */
        opacity: 0.8;
    }
    
    .form-control:focus + label,
    .form-control:not(:placeholder-shown) + label {
        top: -10px;
        left: 35px;
        font-size: 12px;
        background: white;
        padding: 0 5px;
        color: var (--primary-color);
    }
    
    .form-control:focus ~ .icon svg {
        fill: var(--primary-color); /* Highlight icon on focus */
    }
    
    .password-strength {
        margin: 20px 0 30px;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }
    
    .strength-meter {
        display: flex;
        gap: 5px;
        margin-bottom: 5px;
    }
    
    .strength-section {
        flex: 1;
        height: 5px;
        background: #eee;
        border-radius: 5px;
        transition: background 0.3s ease;
    }
    
    .strength-text {
        font-size: 12px;
        color: var(--dark-gray);
        transition: color 0.3s ease;
    }
    
    .btn-submit {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 10px;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(108, 99, 255, 0.4);
    }
    
    .btn-submit:active {
        transform: translateY(0);
    }
    
    .btn-submit .btn-icon {
        display: flex;
        align-items: center;
        transition: transform 0.3s ease;
    }
    
    .btn-submit:hover .btn-icon {
        transform: translateX(5px);
    }
    
    .btn-submit .btn-icon svg {
        width: 20px;
        height: 20px;
        fill: white;
    }
    
    .error-message {
        padding: 10px 15px;
        background: rgba(255, 71, 87, 0.1);
        color: var(--error-color);
        border-radius: 8px;
        font-size: 14px;
        margin-bottom: 20px;
        border-left: 4px solid var(--error-color);
        animation: fadeIn 0.3s ease;
    }
    
    .success-message {
        padding: 10px 15px;
        background: rgba(46, 213, 115, 0.1);
        color: var(--success-color);
        border-radius: 8px;
        font-size: 14px;
        margin-bottom: 20px;
        border-left: 4px solid var(--success-color);
        animation: fadeIn 0.3s ease;
    }
    
    .shake {
        animation: shake 0.5s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        20%, 60% { transform: translateX(-5px); }
        40%, 80% { transform: translateX(5px); }
    }
    
    @media (max-width: 576px) {
        .password-reset-card {
            border-radius: 15px;
        }
        
        .card-header {
            padding: 20px;
        }
        
        form {
            padding: 20px;
        }
    }

    .toggle-password {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        cursor: pointer;
        font-size: 16px;
        color: var(--dark-gray);
    }

    .toggle-password:hover {
        color: var(--primary-color);
    }
</style>