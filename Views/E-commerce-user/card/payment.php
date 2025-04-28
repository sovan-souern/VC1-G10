<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method Section</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        
        header {
            display: none;
        }
                .footer {
            display: none;
        }

        .slideshow-container,
        .dot-container {
            display: none;
        }
        :root {
            --primary-color: #0066cc;
            --secondary-color: #f8f9fa;
            --accent-color: #00a3e0;
            --success-color: #28a745;
            --warning-color: #f5c518;
            --danger-color: #dc3545;
            --dark-color: #212529;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
            --border-radius: 10px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: var(--light-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
        }

        .form-section {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 25px;
            color: var(--dark-color);
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 15px;
        }

        /* Payment options */
        .payment-options-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .payment-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border: 2px solid #dee2e6;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            height: 100%;
            position: relative;
            background-color: white;
        }

        .payment-option:hover {
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .payment-option.selected {
            border-color: var(--primary-color);
            background-color: rgba(0, 102, 204, 0.05);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.2);
        }

        .payment-option.selected::after {
            content: '✓';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 25px;
            height: 25px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .payment-logo {
            width: 80px;
            height: 60px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .payment-option:hover .payment-logo {
            transform: scale(1.05);
        }

        .payment-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 5px;
        }

        .payment-details {
            text-align: center;
        }

        .payment-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-color);
            font-size: 16px;
        }

        .payment-description {
            font-size: 0.85rem;
            color: var(--gray-color);
        }

        .payment-radio {
            position: absolute;
            opacity: 0;
        }

        /* Contact options */
        .contact-options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
            margin-bottom: 25px;
        }

        .contact-option {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            cursor: pointer;
            flex: 1;
            min-width: 120px;
            justify-content: center;
            transition: var(--transition);
            background-color: white;
        }

        .contact-option:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-option.selected {
            border-color: var(--primary-color);
            background-color: rgba(0, 102, 204, 0.05);
            box-shadow: 0 3px 10px rgba(0, 102, 204, 0.2);
        }

        .contact-option i {
            margin-right: 10px;
            color: var(--gray-color);
            font-size: 18px;
            transition: var(--transition);
        }

        .contact-option.selected i {
            color: var(--primary-color);
        }

        /* Navigation buttons */
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            gap: 15px;
        }

        .back-btn {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            color: #495057;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            min-width: 120px;
            text-align: center;
        }

        .back-btn:hover {
            background-color: #e9ecef;
            transform: translateY(-2px);
        }

        .proceed-payment-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 14px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            min-width: 120px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .proceed-payment-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
        }

        .proceed-payment-btn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
            opacity: 0.65;
            transform: none;
            box-shadow: none;
        }

        .proceed-payment-btn i {
            margin-right: 8px;
        }

        #complete-payment-btn {
            background-color: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Bank Info Popup */
        .bank-info-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(3px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .bank-info-popup.active {
            opacity: 1;
            visibility: visible;
        }

        .bank-info-content {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            width: 400px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }

        .bank-info-popup.active .bank-info-content {
            transform: scale(1);
        }

        .bank-info-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #f1f1f1;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .bank-info-close:hover {
            background-color: #e9ecef;
            color: var(--dark-color);
            transform: rotate(90deg);
        }

        .bank-info-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .bank-info-logo {
            width: 70px;
            height: 70px;
            object-fit: contain;
            border-radius: 10px;
            margin-right: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .bank-info-name {
            font-size: 24px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .bank-info-details {
            margin-bottom: 20px;
        }

        .bank-info-row {
            display: flex;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f1f1;
        }

        .bank-info-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .bank-info-label {
            width: 120px;
            font-weight: 500;
            color: var(--gray-color);
        }

        .bank-info-value {
            flex: 1;
            font-weight: 500;
            color: var(--dark-color);
        }

        .bank-info-features {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .bank-info-features-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
            font-size: 16px;
        }

        .bank-feature {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .bank-feature i {
            color: var(--success-color);
            margin-right: 10px;
            font-size: 14px;
        }

        .bank-info-select-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bank-info-select-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
        }

        .bank-info-select-btn i {
            margin-right: 8px;
        }

        /* QR Code Popup */
        .qr-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .qr-popup.active {
            opacity: 1;
            visibility: visible;
        }

        .qr-popup-content {
            background-color: #fff;
            border-radius: 20px;
            padding: 35px;
            width: 450px;
            text-align: center;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            transform: scale(0.9);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .qr-popup.active .qr-popup-content {
            transform: scale(1);
        }

        .qr-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .qr-bank-info {
            display: flex;
            align-items: center;
        }

        .qr-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .qr-bank-name {
            margin-left: 15px;
            font-weight: 600;
            font-size: 18px;
            color: var(--dark-color);
            text-align: left;
        }

        .qr-timer {
            display: flex;
            align-items: center;
            font-size: 18px;
            font-weight: 500;
            color: var(--gray-color);
            background-color: #f8f9fa;
            padding: 8px 15px;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .timer-circle {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }

        .timer-circle-bg {
            fill: none;
            stroke: #e0e0e0;
            stroke-width: 3;
        }

        .timer-circle-progress {
            fill: none;
            stroke: var(--accent-color);
            stroke-width: 3;
            stroke-linecap: round;
            transform: rotate(-90deg);
            transform-origin: center;
            stroke-dasharray: 60;
            stroke-dashoffset: 0;
            transition: stroke-dashoffset 1s linear;
        }

        .qr-close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #f1f1f1;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            z-index: 10;
        }

        .qr-close-btn:hover {
            background-color: #e9ecef;
            color: var(--dark-color);
            transform: rotate(90deg);
        }

        .qr-amount {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
        }

        .qr-amount::before {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
            border-radius: 3px;
        }

        .qr-instruction {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 25px;
            color: var(--gray-color);
        }

        .qr-code-container {
            position: relative;
            margin: 0 auto;
            width: 220px;
            padding: 15px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .qr-code-wrapper {
            position: relative;
            width: 100%;
            height: 190px;
        }

        .qr-code-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 8px;
        }

        .qr-footer {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }

        .qr-help-btn {
            background-color: transparent;
            border: 1px solid #dee2e6;
            color: var(--gray-color);
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            font-size: 14px;
        }

        .qr-help-btn:hover {
            background-color: #f8f9fa;
            color: var(--dark-color);
        }

        .qr-cancel-btn {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            color: var(--danger-color);
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            font-size: 14px;
        }

        .qr-cancel-btn:hover {
            background-color: rgba(220, 53, 69, 0.1);
            border-color: var(--danger-color);
        }

        /* Toast notification */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }

        .toast {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            padding: 15px 20px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            animation: slideIn 0.3s ease, fadeOut 0.5s ease 2.5s forwards;
            max-width: 350px;
            border-left: 5px solid;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
                visibility: hidden;
            }
        }

        .toast.error {
            border-left-color: var(--danger-color);
        }

        .toast.success {
            border-left-color: var(--success-color);
        }

        .toast.info {
            border-left-color: var(--accent-color);
        }

        .toast i {
            margin-right: 12px;
            font-size: 22px;
        }

        .toast.error i {
            color: var(--danger-color);
        }

        .toast.success i {
            color: var(--success-color);
        }

        .toast.info i {
            color: var(--accent-color);
        }

        .toast-message {
            flex: 1;
        }

        .toast-title {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .toast-body {
            font-size: 14px;
            color: var(--gray-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Toast container for notifications -->
        <div class="toast-container" id="toast-container"></div>

        <!-- Bank Info Popup -->
        <div class="bank-info-popup" id="bank-info-popup">
            <div class="bank-info-content">
                <button class="bank-info-close" id="bank-info-close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="bank-info-header">
                    <img id="bank-info-logo" src="/placeholder.svg" alt="Bank Logo" class="bank-info-logo">
                    <div class="bank-info-name" id="bank-info-name">Bank Name</div>
                </div>
                <div class="bank-info-details">
                    <div class="bank-info-row">
                        <div class="bank-info-label">Type</div>
                        <div class="bank-info-value" id="bank-info-type">Mobile Banking</div>
                    </div>
                    <div class="bank-info-row">
                        <div class="bank-info-label">Processing Time</div>
                        <div class="bank-info-value" id="bank-info-time">Instant</div>
                    </div>
                    <div class="bank-info-row">
                        <div class="bank-info-label">Fee</div>
                        <div class="bank-info-value" id="bank-info-fee">No additional fees</div>
                    </div>
                </div>
                <div class="bank-info-features">
                    <div class="bank-info-features-title">Features</div>
                    <div class="bank-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Secure payment processing</span>
                    </div>
                    <div class="bank-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Instant transaction confirmation</span>
                    </div>
                    <div class="bank-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>24/7 customer support</span>
                    </div>
                    <div class="bank-feature" id="bank-feature-specific">
                        <i class="fas fa-check-circle"></i>
                        <span>Bank-specific feature</span>
                    </div>
                </div>
                <button class="bank-info-select-btn" id="bank-info-select-btn">
                    <i class="fas fa-check"></i> Select This Payment Method
                </button>
            </div>
        </div>

        <!-- QR Code Popup -->
        <div class="qr-popup" id="qr-popup">
            <div class="qr-popup-content">
                <button class="qr-close-btn" id="qr-close-btn">
                    <i class="fas fa-times"></i>
                </button>
                <div class="qr-header">
                    <div class="qr-bank-info">
                        <img id="qr-payment-logo" src="/placeholder.svg" alt="Bank Logo" class="qr-logo">
                        <div class="qr-bank-name" id="qr-bank-name">ABA Bank</div>
                    </div>
                    <div class="qr-timer">
                        <svg class="timer-circle" width="24" height="24">
                            <circle class="timer-circle-bg" cx="12" cy="12" r="10"></circle>
                            <circle class="timer-circle-progress" cx="12" cy="12" r="10"></circle>
                        </svg>
                        <span id="qr-timer-text">03:00</span>
                    </div>
                </div>
                <div class="qr-amount" id="qr-amount">$5.00</div>
                <div class="qr-instruction">Scan to pay</div>
                <div class="qr-code-container">
                    <div class="qr-code-wrapper">
                        <img id="qr-code-image" src="/placeholder.svg" alt="QR Code" class="qr-code-image">
                    </div>
                </div>
                <div class="qr-footer">
                    <button class="qr-help-btn" id="qr-help-btn">
                        <i class="fas fa-question-circle"></i> Need Help?
                    </button>
                    <button class="qr-cancel-btn" id="qr-cancel-btn">
                        <i class="fas fa-times-circle"></i> Cancel Payment
                    </button>
                </div>
            </div>
        </div>

        <!-- Payment Method Section -->
        <div class="row">
            <div class="col-md-7">
                <form action="/checkout/store" method="POST" id="checkout-form">
                    <!-- Hidden inputs -->
                    <input type="hidden" name="total" id="total_input" value="5.00">
                    <input type="hidden" name="payment_method" id="payment_method" value="aba">
                    <input type="hidden" name="contact_method" id="contact_method" value="phone">

                    <!-- Payment Method Section -->
                    <div class="form-section active" id="payment-section">
                        <div class="section-title">Payment Method</div>
                        <div class="payment-options-container">
                            <!-- ABA PAY -->
                            <div class="payment-option selected" data-payment="aba">
                                <input type="radio" name="payment_option" id="aba_pay" class="payment-radio" checked>
                                <div class="payment-logo">
                                    <img src="https://media.licdn.com/dms/image/v2/C510BAQEnYW7qoK68EQ/company-logo_200_200/company-logo_200_200/0/1630579892170/aba_bank_logo?e=2147483647&v=beta&t=CNGsdiQOwm9PB1VAqw8aqn7Iau72Zen8WZmsqrdC1sY" alt="ABA Pay Logo">
                                </div>
                                <div class="payment-details">
                                    <div class="payment-title">ABA PAY</div>
                                    <div class="payment-description">Scan to pay with ABA Mobile</div>
                                </div>
                            </div>
                            <!-- ACLEDA PAY -->
                            <div class="payment-option" data-payment="acleda">
                                <input type="radio" name="payment_option" id="acleda_pay" class="payment-radio">
                                <div class="payment-logo">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM37KLHTgu31C4LMRGMBzIu7QwwJXVeOC-EA&s" alt="ACLEDA Pay Logo">
                                </div>
                                <div class="payment-details">
                                    <div class="payment-title">ACLEDA PAY</div>
                                    <div class="payment-description">Pay securely with ACLEDA</div>
                                </div>
                            </div>
                            <!-- Wing Bank -->
                            <div class="payment-option" data-payment="wing">
                                <input type="radio" name="payment_option" id="wing_bank" class="payment-radio">
                                <div class="payment-logo">
                                    <img src="https://play-lh.googleusercontent.com/-deHHbwBUh2I4dzTjq9n4ggBGPqJwKzj9pwvPqyaR-hPxzKN9QVJOBsZP_ShlCDmX60" alt="Wing Bank Logo">
                                </div>
                                <div class="payment-details">
                                    <div class="payment-title">Wing Bank</div>
                                    <div class="payment-description">Pay securely with WingPay</div>
                                </div>
                            </div>
                        </div>

                        <!-- Preferred contact line -->
                        <div class="section-title">Preferred contact line</div>
                        <div class="contact-options">
                            <div class="contact-option selected" data-contact="phone">
                                <i class="fas fa-phone"></i>
                                Phone call
                            </div>
                            <div class="contact-option" data-contact="telegram">
                                <i class="fab fa-telegram"></i>
                                Telegram
                            </div>
                            <div class="contact-option" data-contact="facebook">
                                <i class="fab fa-facebook"></i>
                                Facebook
                            </div>
                        </div>

                        <div class="nav-buttons">
                            <button type="button" class="back-btn" data-prev="delivery">
                                Back
                            </button>
                            <button type="submit" id="proceed-payment-btn" class="proceed-payment-btn">
                                <i class="fas fa-lock"></i> Proceed to Secure Payment
                            </button>
                            <button type="button" class="payment-btn" id="complete-payment-btn">
                                <i class="fas fa-credit-card"></i> Complete Payment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Bank information data
        const bankInfo = {
            aba: {
                name: "ABA Bank",
                logo: "https://media.licdn.com/dms/image/v2/C510BAQEnYW7qoK68EQ/company-logo_200_200/company-logo_200_200/0/1630579892170/aba_bank_logo?e=2147483647&v=beta&t=CNGsdiQOwm9PB1VAqw8aqn7Iau72Zen8WZmsqrdC1sY",
                type: "Mobile Banking",
                processingTime: "Instant",
                fee: "No additional fees",
                specificFeature: "ABA Mobile app integration"
            },
            acleda: {
                name: "ACLEDA Bank",
                logo: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM37KLHTgu31C4LMRGMBzIu7QwwJXVeOC-EA&s",
                type: "Mobile & Internet Banking",
                processingTime: "Within 15 minutes",
                fee: "No additional fees",
                specificFeature: "ACLEDA ToanChet app support"
            },
            wing: {
                name: "Wing Bank",
                logo: "https://play-lh.googleusercontent.com/-deHHbwBUh2I4dzTjq9n4ggBGPqJwKzj9pwvPqyaR-hPxzKN9QVJOBsZP_ShlCDmX60",
                type: "Mobile Banking",
                processingTime: "Instant",
                fee: "No additional fees",
                specificFeature: "Wing Money app with cashback rewards"
            }
        };

        // Toast notification function
        function showToast(type, title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            const icon = type === 'error' ? 'fa-exclamation-circle' :
                type === 'success' ? 'fa-check-circle' : 'fa-info-circle';
            toast.innerHTML = `
                <i class="fas ${icon}"></i>
                <div class="toast-message">
                    <div class="toast-title">${title}</div>
                    <div class="toast-body">${message}</div>
                </div>
            `;
            toastContainer.appendChild(toast);
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        // Function to show bank info popup
        function showBankInfo(paymentMethod) {
            const bankInfoPopup = document.getElementById('bank-info-popup');
            const bankInfoLogo = document.getElementById('bank-info-logo');
            const bankInfoName = document.getElementById('bank-info-name');
            const bankInfoType = document.getElementById('bank-info-type');
            const bankInfoTime = document.getElementById('bank-info-time');
            const bankInfoFee = document.getElementById('bank-info-fee');
            const bankFeatureSpecific = document.getElementById('bank-feature-specific');
            const bank = bankInfo[paymentMethod];
            bankInfoLogo.src = bank.logo;
            bankInfoName.textContent = bank.name;
            bankInfoType.textContent = bank.type;
            bankInfoTime.textContent = bank.processingTime;
            bankInfoFee.textContent = bank.fee;
            bankFeatureSpecific.querySelector('span').textContent = bank.specificFeature;
            document.getElementById('bank-info-select-btn').setAttribute('data-payment', paymentMethod);
            bankInfoPopup.style.display = 'flex';
            setTimeout(() => {
                bankInfoPopup.classList.add('active');
            }, 10);
        }

        // Function to close bank info popup
        function closeBankInfo() {
            const bankInfoPopup = document.getElementById('bank-info-popup');
            bankInfoPopup.classList.remove('active');
            setTimeout(() => {
                bankInfoPopup.style.display = 'none';
            }, 300);
        }

        // Timer for QR code popup
        let qrTimerInterval = null;

        // Function to start the QR code timer
        function startQrTimer() {
            let timeLeft = 180; // 3 minutes in seconds
            const timerElement = document.getElementById('qr-timer-text');
            const timerCircle = document.querySelector('.timer-circle-progress');
            const totalTime = 180;
            const circumference = 60;
            qrTimerInterval = setInterval(() => {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                const dashoffset = circumference * (1 - timeLeft / totalTime);
                timerCircle.style.strokeDashoffset = dashoffset;
                if (timeLeft <= 0) {
                    clearInterval(qrTimerInterval);
                    closeQrPopup();
                    showToast('error', 'Payment Expired', 'Your payment session has expired. Please try again.');
                }
                timeLeft--;
            }, 1000);
        }

        // Function to open the QR code popup
    function openQrPopup(paymentMethod) {
    const qrPopup = document.getElementById('qr-popup');
    const qrPaymentLogo = document.getElementById('qr-payment-logo');
    const qrBankName = document.getElementById('qr-bank-name');
    const qrAmount = document.getElementById('qr-amount');
    const qrCodeImage = document.getElementById('qr-code-image');
    const bank = bankInfo[paymentMethod];
    qrPaymentLogo.src = bank.logo;
    qrBankName.textContent = bank.name;
    
    // Get the total amount from the input field
    const totalAmount = document.getElementById('total_input').value;
    qrAmount.textContent = `$${totalAmount}`; // Display the total amount
    
    const basePaymentLink = "https://link.payway.com.kh/aba?id=3EACF56C17F7&code=105187&acc=008471110&dynamic=true";
    const paymentLinkWithAmount = `${basePaymentLink}&amount=${totalAmount}`;
    const qrCodeApiUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(paymentLinkWithAmount)}`;
    qrCodeImage.src = qrCodeApiUrl;
    qrPopup.style.display = 'flex';
    setTimeout(() => {
        qrPopup.classList.add('active');
    }, 10);
    startQrTimer();
}

        // Function to close the QR code popup
        function closeQrPopup() {
            const qrPopup = document.getElementById('qr-popup');
            qrPopup.classList.remove('active');
            setTimeout(() => {
                qrPopup.style.display = 'none';
            }, 300);
            clearInterval(qrTimerInterval);
        }

        // Payment option selection
        const paymentOptions = document.querySelectorAll('.payment-option');
        paymentOptions.forEach(option => {
            option.addEventListener('click', function() {
                const paymentMethod = this.getAttribute('data-payment');
                showBankInfo(paymentMethod);
            });
        });

        // Bank info select button click handler
        document.getElementById('bank-info-select-btn').addEventListener('click', function() {
            const paymentMethod = this.getAttribute('data-payment');
            paymentOptions.forEach(opt => {
                opt.classList.remove('selected');
                opt.querySelector('input[type="radio"]').checked = false;
            });
            const selectedOption = document.querySelector(`.payment-option[data-payment="${paymentMethod}"]`);
            selectedOption.classList.add('selected');
            selectedOption.querySelector('input[type="radio"]').checked = true;
            document.getElementById('payment_method').value = paymentMethod;
            updatePaymentButton();
            closeBankInfo();
            showToast('success', 'Payment Method Selected', `${bankInfo[paymentMethod].name} has been selected as your payment method.`);
        });

        // Close bank info popup
        document.getElementById('bank-info-close').addEventListener('click', closeBankInfo);

        // Close QR code popup
        document.getElementById('qr-close-btn').addEventListener('click', closeQrPopup);
        document.getElementById('qr-cancel-btn').addEventListener('click', closeQrPopup);

        // Help button click handler
        document.getElementById('qr-help-btn').addEventListener('click', function() {
            showToast('info', 'Payment Help', 'Please contact customer support at support@example.com for assistance with your payment.');
        });

        // Contact option selection
        const contactOptions = document.querySelectorAll('.contact-option');
        contactOptions.forEach(option => {
            option.addEventListener('click', function() {
                contactOptions.forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
                const contactMethod = this.getAttribute('data-contact');
                document.getElementById('contact_method').value = contactMethod;
            });
        });

        // Update payment button state
        function updatePaymentButton() {
            const proceedBtn = document.getElementById('proceed-payment-btn');
            const selectedPayment = document.querySelector('.payment-option.selected');
            if (selectedPayment) {
                proceedBtn.disabled = false;
            } else {
                proceedBtn.disabled = true;
            }
        }

        // Form submission handler
        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const paymentMethod = document.querySelector('.payment-option.selected').getAttribute('data-payment');
            const submitBtn = document.getElementById('proceed-payment-btn');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-lock"></i> Proceed to Secure Payment';
                openQrPopup(paymentMethod);
            }, 1000);
        });

        // Complete Payment button click handler
        document.getElementById('complete-payment-btn').addEventListener('click', function() {
            const totalAmount = document.getElementById('total_input').value;
            const basePaymentLink = "https://link.payway.com.kh/aba?id=3EACF56C17F7&code=105187&acc=008471110&dynamic=true";
            const paymentLinkWithAmount = `${basePaymentLink}&amount=${totalAmount}`;
            window.location.href = paymentLinkWithAmount;
        });

        // Initial state
        updatePaymentButton();
    </script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>
