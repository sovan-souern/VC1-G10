<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Checkout Experience with Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        header, .footer, .slideshow-container, .dot-container {
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
            --border-radius: 6px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: var(--light-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
        }

        .checkout-container {
            max-width: 1200px;
            margin: 20px auto;
        }

        .form-section {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--dark-color);
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 10px;
        }

        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 1;
            min-width: 0;
            margin-bottom: 15px;
        }

        .form-label {
            margin-bottom: 6px;
            display: block;
            font-weight: 500;
            font-size: 13px;
            color: #495057;
        }

        .form-control, .form-select {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #ced4da;
            border-radius: var(--border-radius);
            transition: var(--transition);
            font-size: 14px;
            height: 38px;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.15rem rgba(0, 102, 204, 0.25);
        }

        .form-control.is-invalid, .form-select.is-invalid {
            border-color: var(--danger-color);
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.2rem;
            font-size: 12px;
            color: var(--danger-color);
        }

        .form-control.is-invalid~.invalid-feedback, .form-select.is-invalid~.invalid-feedback {
            display: block;
        }

        .order-summary {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            position: sticky;
            top: 20px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 15px;
        }

        .order-header h5 {
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
            font-size: 20px;
        }

        .edit-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }

        .edit-link i {
            margin-right: 5px;
        }

        .edit-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .order-items-container {
            max-height: 250px;
            overflow-y: auto;
            margin-bottom: 20px;
            padding-right: 5px;
        }

        .order-items-container::-webkit-scrollbar {
            width: 5px;
        }

        .order-items-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .order-items-container::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .product-item {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        .product-image {
            width: 70px;
            height: 70px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-right: 15px;
            flex-shrink: 0;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-details {
            flex-grow: 1;
        }

        .product-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-color);
            font-size: 14px;
        }

        .product-quantity {
            font-size: 14px;
            color: var(--gray-color);
        }

        .product-price {
            font-weight: 600;
            text-align: right;
            white-space: nowrap;
            color: var(--dark-color);
            font-size: 16px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 15px;
            color: #495057;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            font-size: 20px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
            color: var(--dark-color);
        }

        .secure-checkout {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            color: var(--gray-color);
            font-size: 14px;
        }

        .secure-checkout i {
            margin-right: 8px;
            color: var(--success-color);
        }

        .nav-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 25px;
            gap: 12px;
        }

        .next-btn, .proceed-payment-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            min-width: 100px;
            text-align: center;
        }

        .next-btn:hover, .proceed-payment-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
        }

        .next-btn:disabled, .proceed-payment-btn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
            opacity: 0.65;
            transform: none;
            box-shadow: none;
        }

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

        .qr-help-btn, .qr-cancel-btn {
            background-color: #f8f9fa;
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
            background-color: #e9ecef;
        }

        .qr-cancel-btn {
            color: var(--danger-color);
        }

        .qr-cancel-btn:hover {
            background-color: rgba(220, 53, 69, 0.1);
            border-color: var(--danger-color);
        }

        .modal-dialog {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .loading-modal, .modal-content {
            background-color: #ffffff;
            border: none;
            box-shadow: var(--box-shadow);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 30px;
            border-radius: var(--border-radius);
        }

        .loading-spinner {
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-text {
            font-size: 18px;
            color: var(--dark-color);
            font-weight: 500;
            text-align: center;
            line-height: 1.5;
        }

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
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; visibility: hidden; }
        }

        .toast.error { border-left-color: var(--danger-color); }
        .toast.success { border-left-color: var(--success-color); }
        .toast.info { border-left-color: var(--accent-color); }

        .toast i {
            margin-right: 12px;
            font-size: 22px;
        }

        .toast.error i { color: var(--danger-color); }
        .toast.success i { color: var(--success-color); }
        .toast.info i { color: var(--accent-color); }

        .toast-message { flex: 1; }
        .toast-title { font-weight: 600; margin-bottom: 5px; font-size: 16px; }
        .toast-body { font-size: 14px; color: var(--gray-color); }

        @media (max-width: 768px) {
            .checkout-container { margin: 10px auto; }
            .form-row { flex-direction: column; gap: 10px; }
            .form-control, .form-select { padding: 7px 10px; font-size: 13px; height: 36px; }
            .form-label { font-size: 12px; }
            .form-group { margin-bottom: 12px; }
            .nav-buttons { flex-direction: column; gap: 8px; }
            .next-btn, .proceed-payment-btn { width: 100%; text-align: center; }
            .order-summary { position: static; margin-top: 20px; }
            .payment-options-container { grid-template-columns: 1fr; }
        }

        @media (max-width: 480px) {
            .form-section { padding: 15px; }
            .form-control, .form-select { padding: 6px 8px; font-size: 12px; height: 34px; }
            .form-label { font-size: 11px; }
            .qr-popup-content { width: 90%; padding: 20px; }
        }
        .qr-amount{
            font-size: 30px;
            font-weight: bold;
            color: var(--dark-color);
            margin-bottom: 15px;
        
        }
    </style>
</head>
<body>
    <div class="container checkout-container">
        <div class="toast-container" id="toast-container"></div>
        <div class="row">
            <div class="col-md-7">
                <form action="/checkout/store" method="POST" id="checkout-form">
                    <input type="hidden" name="admin_id" value="">
                    <input type="hidden" name="items" id="items">
                    <input type="hidden" name="total" id="total_input">
                    <input type="hidden" name="product_id" id="product_id">
                    <input type="hidden" name="buy_at" id="buy_at">
                    <input type="hidden" name="payment_method" id="payment_method" value="">

                    <div class="form-section" id="customer-section">
                        <div class="section-title">Customer Information</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required aria-required="true" aria-describedby="firstNameFeedback">
                                <div class="invalid-feedback" id="firstNameFeedback">Please enter your first name.</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required aria-required="true" aria-describedby="lastNameFeedback">
                                <div class="invalid-feedback" id="lastNameFeedback">Please enter your last name.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required aria-required="true" aria-describedby="phoneFeedback">
                                <div class="invalid-feedback" id="phoneFeedback">Please enter a valid phone number.</div>
                            </div>
                            <div class="form-group">
                                <label for="country" class="form-label">Country/Region <span class="text-danger">*</span></label>
                                <select class="form-select" id="country" name="country" required aria-required="true" aria-describedby="countryFeedback">
                                    <option value="">Select a country</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select>
                                <div class="invalid-feedback" id="countryFeedback">Please select a country.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="village" class="form-label">Village <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="village" name="village" required aria-required="true" aria-describedby="villageFeedback">
                                <div class="invalid-feedback" id="villageFeedback">Please enter your village.</div>
                            </div>
                            <div class="form-group">
                                <label for="commune" class="form-label">Commune <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="commune" name="commune" required aria-required="true" aria-describedby="communeFeedback">
                                <div class="invalid-feedback" id="communeFeedback">Please enter your commune.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="district" class="form-label">District <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="district" name="district" required aria-required="true" aria-describedby="districtFeedback">
                                <div class="invalid-feedback" id="districtFeedback">Please enter your district.</div>
                            </div>
                            <div class="form-group">
                                <label for="province" class="form-label">Province/City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="province" name="province" required aria-required="true" aria-describedby="provinceFeedback">
                                <div class="invalid-feedback" id="provinceFeedback">Please enter your province or city.</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="deliveryMethod" class="form-label">Delivery Method <span class="text-danger">*</span></label>
                                <select class="form-select" id="deliveryMethod" name="delivery_method" aria-required="true" aria-describedby="deliveryFeedback">
                                    <option value="">Select delivery method</option>
                                    <option value="J&T">J&T</option>
                                    <option value="Virakbuntang">Virakbuntang</option>
                                </select>
                                <div class="invalid-feedback" id="deliveryFeedback">Please select a delivery method.</div>
                            </div>
                            <div class="form-group">
                                <label for="orderAddress" class="form-label">Order Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="orderAddress" name="order_address" aria-required="true" aria-describedby="orderAddressFeedback">
                                <div class="invalid-feedback" id="orderAddressFeedback">Please enter the order address.</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-section" id="payment-section">
                        <div class="section-title">Payment Method</div>
                        <div class="payment-options-container">
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
                        <div class="nav-buttons">
                            <button type="button" class="next-btn" onclick="history.back()" aria-label="Go Back">Back</button>
                            <button type="button" id="proceed-payment-btn" class="proceed-payment-btn">
                                <i class="fas fa-lock"></i> Proceed to Secure Payment
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <div class="order-summary">
                    <div class="order-header">
                        <h5>Order summary (<span id="order-item-count">0</span>)</h5>
                        <a href="#" class="edit-link">
                            <i class="fas fa-edit"></i> Edit Cart
                        </a>
                    </div>
                    <div id="order-items" class="order-items-container"></div>
                    <div class="summary-row">
                        <div>Subtotal</div>
                        <div id="subtotal">$0.00</div>
                    </div>
                    <div class="summary-row">
                        <div>Delivery</div>
                        <div>pay by yourself</div>
                    </div>
                    <div class="total-row">
                        <div>Total</div>
                        <div id="total">$0.00</div>
                    </div>
                    <div class="secure-checkout">
                        <i class="fas fa-shield-alt"></i> Secure Checkout
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loadingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content loading-modal">
                <div class="loading-spinner"></div>
                <div class="loading-text">Processing payment...</div>
            </div>
        </div>
    </div>

    <div class="qr-popup" id="qr-popup">
        <div class="qr-popup-content">
            <button class="qr-close-btn" id="qr-close-btn">
                <i class="fas fa-times"></i>
            </button>
            <div class="qr-header">
                <div class="qr-bank-info">
                    <img id="qr-payment-logo" src="/placeholder.svg" alt="Bank Logo" class="qr-logo">
                    <div class="qr-bank-name" id="qr-bank-name">Bank Name</div>
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
                <button class="next-btn" id="complete-payment-btn">
                    <i class="fas fa-check"></i> Payment Completed
                </button>
            </div>
        </div>
    </div>

    <script>
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

        let cart = [];
        try {
            const storedCart = localStorage.getItem('cart');
            cart = storedCart ? JSON.parse(storedCart) : [{
                id: 1,
                name: "Germaine Stein",
                price: 677.00,
                quantity: 1,
                image: "https://via.placeholder.com/70"
            }];
        } catch (e) {
            console.error("Error parsing cart from localStorage:", e);
            cart = [{
                id: 1,
                name: "Germaine Stein",
                price: 677.00,
                quantity: 1,
                image: "https://via.placeholder.com/70"
            }];
        }

        let paymentCompleted = false;

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
            setTimeout(() => toast.remove(), 3000);
        }

        function renderOrderSummary() {
            const orderItemsContainer = document.getElementById('order-items');
            orderItemsContainer.innerHTML = '';
            if (cart.length === 0) {
                orderItemsContainer.innerHTML = '<p class="text-center py-3">Your cart is empty.</p>';
            } else {
                cart.forEach(item => {
                    const productItem = document.createElement('div');
                    productItem.classList.add('product-item');
                    productItem.innerHTML = `
                        <div class="product-image">
                            <img src="${item.image}" alt="${item.name}">
                        </div>
                        <div class="product-details">
                            <div class="product-name">${item.name}</div>
                            <div class="product-quantity">Qty: ${item.quantity}</div>
                        </div>
                        <div class="product-price">$${(item.price * item.quantity).toFixed(2)}</div>
                    `;
                    orderItemsContainer.appendChild(productItem);
                });
            }
            updateOrderSummary();
        }

        function updateOrderSummary() {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const subtotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
            const total = subtotal;
            document.getElementById('order-item-count').textContent = totalItems;
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
            document.getElementById('qr-amount').textContent = `$${total.toFixed(2)}`; // Update QR amount
            document.getElementById('items').value = JSON.stringify(cart);
            document.getElementById('product_id').value = cart.map(item => item.id).filter(id => id).join(',');
            document.getElementById('total_input').value = total.toFixed(2);
        }

        function validateSection() {
            const section = document.getElementById('customer-section');
            const requiredFields = section.querySelectorAll('[required]');
            let isValid = true;
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            const phoneField = document.getElementById('phone');
            const phoneRegex = /^\+?\d{8,}$/;
            if (phoneField.value && !phoneRegex.test(phoneField.value.replace(/\s/g, ''))) {
                phoneField.classList.add('is-invalid');
                document.getElementById('phoneFeedback').textContent = 'Please enter a valid phone number (minimum 8 digits).';
                isValid = false;
            } else {
                phoneField.classList.remove('is-invalid');
                document.getElementById('phoneFeedback').textContent = 'Please enter a valid phone number.';
            }
            return isValid;
        }

        let qrTimerInterval = null;

        function startQrTimer() {
            let timeLeft = 180;
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

        function openQrPopup(paymentMethod) {
            const qrPopup = document.getElementById('qr-popup');
            const qrPaymentLogo = document.getElementById('qr-payment-logo');
            const qrBankName = document.getElementById('qr-bank-name');
            const qrCodeImage = document.getElementById('qr-code-image');
            const bank = bankInfo[paymentMethod];
            qrPaymentLogo.src = bank.logo;
            qrBankName.textContent = bank.name;
            const basePaymentLink = `https://link.payway.com.kh/${paymentMethod}?id=3EACF56C17F7&code=105187&acc=008471110&dynamic=true&amount=${document.getElementById('total_input').value}`;
            const qrCodeApiUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(basePaymentLink)}`;
            qrCodeImage.src = qrCodeApiUrl;
            qrPopup.style.display = 'flex';
            setTimeout(() => qrPopup.classList.add('active'), 10);
            startQrTimer();
        }

        function closeQrPopup() {
            const qrPopup = document.getElementById('qr-popup');
            qrPopup.classList.remove('active');
            setTimeout(() => qrPopup.style.display = 'none', 300);
            clearInterval(qrTimerInterval);
        }

        const paymentOptions = document.querySelectorAll('.payment-option');
        paymentOptions.forEach(option => {
            option.addEventListener('click', function() {
                paymentOptions.forEach(opt => {
                    opt.classList.remove('selected');
                    opt.querySelector('input[type="radio"]').checked = false;
                });
                this.classList.add('selected');
                this.querySelector('input[type="radio"]').checked = true;
                document.getElementById('payment_method').value = this.getAttribute('data-payment');
                updatePaymentButton();
                showToast('success', 'Payment Method Selected', `${bankInfo[this.getAttribute('data-payment')].name} selected.`);
            });
        });

        function updatePaymentButton() {
            const proceedBtn = document.getElementById('proceed-payment-btn');
            const selectedPayment = document.querySelector('.payment-option.selected');
            proceedBtn.disabled = !selectedPayment;
        }

        document.getElementById('proceed-payment-btn').addEventListener('click', function() {
            if (!validateSection()) {
                showToast('error', 'Form Incomplete', 'Please fill out all required fields.');
                return;
            }
            if (!cart.length) {
                showToast('error', 'Empty Cart', 'Please add items before checking out.');
                return;
            }
            const paymentMethod = document.querySelector('.payment-option.selected').getAttribute('data-payment');
            this.disabled = true;
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            setTimeout(() => {
                this.disabled = false;
                this.innerHTML = '<i class="fas fa-lock"></i> Proceed to Secure Payment';
                openQrPopup(paymentMethod);
            }, 1000);
        });

        document.getElementById('complete-payment-btn').addEventListener('click', function() {
            paymentCompleted = true;
            closeQrPopup();
            const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'), {
                backdrop: 'static',
                keyboard: false
            });
            loadingModal.show();
            setTimeout(() => {
                document.getElementById('checkout-form').submit();
            }, 3000);
        });

        document.getElementById('qr-close-btn').addEventListener('click', closeQrPopup);
        document.getElementById('qr-cancel-btn').addEventListener('click', closeQrPopup);

        document.getElementById('qr-help-btn').addEventListener('click', function() {
            showToast('info', 'Payment Help', 'Contact support at support@example.com for assistance.');
        });

        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            e.preventDefault();
            if (!paymentCompleted) {
                showToast('error', 'Payment Required', 'Please complete the payment before submitting.');
                return;
            }
            // Form submission logic remains as per original
        });

        document.querySelectorAll('.form-control, .form-select').forEach(field => {
            field.addEventListener('input', () => {
                if (field.hasAttribute('required') && field.value.trim()) {
                    field.classList.remove('is-invalid');
                }
            });
        });

        document.getElementById('buy_at').value = new Date().toISOString().slice(0, 16);
        renderOrderSummary();
        updatePaymentButton();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>