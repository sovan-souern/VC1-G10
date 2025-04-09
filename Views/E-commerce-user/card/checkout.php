<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for better icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
          .slideshow-container {
            display: none;
        }
        .dot-container{
            display: none;
        }
        .footer{
            display: none;
        }
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        .checkout-container {
            max-width: 1200px;
            margin: 20px auto;
        }

        /* Stepper styling */
        .checkout-stepper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
        }

        .checkout-stepper::before {
            content: '';
            position: absolute;
            top: 24px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #e9ecef;
            z-index: 1;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }

        .step-number {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 8px;
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .step.active .step-number {
            background-color: #007bff;
            color: white;
        }

        .step.completed .step-number {
            background-color: #28a745;
            color: white;
        }

        .step-label {
            font-size: 14px;
            font-weight: 500;
            color: #6c757d;
            transition: all 0.3s ease;
            text-align: center;
        }

        .step.active .step-label {
            color: #212529;
            font-weight: 600;
        }

        /* Form sections */
        .form-section {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: none;
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #212529;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 10px;
        }

        /* Form fields */
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            position: relative;
        }

        .form-label {
            margin-bottom: 8px;
            display: block;
            font-weight: 500;
            font-size: 14px;
            color: #495057;
        }

        .form-control, .form-select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }

        .form-control.is-invalid, .form-select.is-invalid {
            border-color: #dc3545;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #dc3545;
        }

        .form-control.is-invalid ~ .invalid-feedback {
            display: block;
        }

        /* Payment options */
        .payment-options-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .payment-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s ease;
            height: 100%;
            position: relative;
        }

        .payment-option:hover {
            border-color: #b8daff;
            background-color: #f8f9fa;
        }

        .payment-option.selected {
            border-color: #007bff;
            background-color: #f0f7ff;
        }

        .payment-option.selected::after {
            content: '✓';
            position: absolute;
            top: 10px;
            right: 10px;
            width: 20px;
            height: 20px;
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .payment-logo {
            width: 70px;
            height: 50px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .payment-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .payment-details {
            text-align: center;
        }

        .payment-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: #212529;
        }

        .payment-description {
            font-size: 0.85rem;
            color: #6c757d;
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
            padding: 10px 15px;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            cursor: pointer;
            flex: 1;
            min-width: 120px;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .contact-option:hover {
            border-color: #b8daff;
            background-color: #f8f9fa;
        }

        .contact-option.selected {
            border-color: #007bff;
            background-color: #f0f7ff;
        }

        .contact-option i {
            margin-right: 10px;
            color: #6c757d;
        }

        .contact-option.selected i {
            color: #007bff;
        }

        /* Order summary */
        .order-summary {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            position: sticky;
            top: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
            color: #212529;
            margin: 0;
        }

        .edit-link {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.2s ease;
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
            width: 60px;
            height: 60px;
            background-color: #f8f9fa;
            border-radius: 6px;
            margin-right: 15px;
            flex-shrink: 0;
            overflow: hidden;
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
            color: #212529;
        }

        .product-quantity {
            font-size: 14px;
            color: #6c757d;
        }

        .product-price {
            font-weight: 600;
            text-align: right;
            white-space: nowrap;
            color: #212529;
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
            font-size: 18px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
            color: #212529;
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
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
            min-width: 120px;
            text-align: center;
        }

        .back-btn:hover {
            background-color: #e9ecef;
        }

        .next-btn, .proceed-payment-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
            min-width: 120px;
            text-align: center;
        }

        .next-btn:hover, .proceed-payment-btn:hover {
            background-color: #0069d9;
        }

        .next-btn:disabled, .proceed-payment-btn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
            opacity: 0.65;
        }

        .proceed-payment-btn {
            flex: 1;
            margin-top: 0;
            padding: 12px 24px;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .proceed-payment-btn i {
            margin-right: 8px;
        }

        /* Secure checkout badge */
        .secure-checkout {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            color: #6c757d;
            font-size: 14px;
        }

        .secure-checkout i {
            margin-right: 8px;
            color: #28a745;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .checkout-stepper {
                flex-direction: column;
                align-items: flex-start;
                margin-left: 20px;
            }
            
            .checkout-stepper::before {
                top: 0;
                bottom: 0;
                left: 24px;
                right: auto;
                height: 100%;
                width: 2px;
            }
            
            .step {
                flex-direction: row;
                width: 100%;
                margin-bottom: 20px;
            }
            
            .step-number {
                margin-right: 15px;
                margin-bottom: 0;
            }
            
            .form-row {
                flex-direction: column;
                gap: 15px;
            }
            
            .payment-options-container {
                grid-template-columns: 1fr;
            }
            
            .contact-options {
                flex-direction: column;
            }
            
            .nav-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .back-btn, .next-btn {
                width: 100%;
                text-align: center;
            }
            
            .order-summary {
                position: static;
                margin-top: 20px;
            }
        }

        /* Hide elements that are not needed */
        .mb-3 #buy_at {
            display: none;
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
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            padding: 15px 20px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            animation: slideIn 0.3s ease, fadeOut 0.5s ease 2.5s forwards;
            max-width: 350px;
        }

        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; visibility: hidden; }
        }

        .toast.error {
            border-left: 4px solid #dc3545;
        }

        .toast.success {
            border-left: 4px solid #28a745;
        }

        .toast i {
            margin-right: 10px;
            font-size: 20px;
        }

        .toast.error i {
            color: #dc3545;
        }

        .toast.success i {
            color: #28a745;
        }

        .toast-message {
            flex: 1;
        }

        .toast-title {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .toast-body {
            font-size: 14px;
            color: #6c757d;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .pulse-animation {
            animation: pulse 0.5s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container checkout-container">
        <!-- Toast container for notifications -->
        <div class="toast-container" id="toast-container"></div>

        <!-- Checkout Stepper -->
        <div class="checkout-stepper">
    <div class="step active" data-step="customer">
        <div class="step-number">1</div>
        <div class="step-label">Customer Information</div>
    </div>
    <div class="step" data-step="delivery">
        <div class="step-number">2</div>
        <div class="step-label">Delivery Details</div>
    </div>
    <div class="step" data-step="payment">
        <div class="step-number">3</div>
        <div class="step-label">Payment Method</div>
    </div>
</div>

        <div class="row">
            <!-- Left Column - Forms -->
            <div class="col-md-7">
                <form action="/checkout/store" method="POST" id="checkout-form">
                    <!-- Hidden inputs -->
                    <input type="hidden" name="admin_id" value="<?php echo htmlspecialchars($admin_id ?? ''); ?>">
                    <input type="hidden" name="items" id="items">
                    <input type="hidden" name="total" id="total_input">
                    <input type="hidden" name="product_id" id="product_id">
                    <input type="hidden" name="payment_method" id="payment_method">
                    <input type="hidden" name="buy_at" id="buy_at">
                    <input type="hidden" name="order_status" id="order_status" value="Pending">
                    <input type="hidden" name="contact_method" id="contact_method" value="phone">

                    <!-- Customer Information Section -->
                    <div class="form-section active" id="customer-section">
                        <div class="section-title">Customer Information</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                                <div class="invalid-feedback">Please enter your first name</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                                <div class="invalid-feedback">Please enter your last name</div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            <div class="invalid-feedback">Please enter a valid phone number</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Please enter a valid email address</div>
                        </div>
                        <div class="nav-buttons">
                            <div></div> <!-- Empty div for spacing -->
                            <button type="button" class="next-btn" data-next="delivery">
    Continue to Payment
</button>
                        </div>
                    </div>

                    <!-- Delivery Details Section -->
                    <div class="form-section" id="delivery-section">
                        <div class="section-title">Delivery Details</div>
                        <div class="form-group mb-3">
                            <label for="country" class="form-label">Country/Region <span class="text-danger">*</span></label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="">Select country</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Canada">Canada</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                            <div class="invalid-feedback">Please select a country</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address1" class="form-label">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address1" name="address" required>
                            <div class="invalid-feedback">Please enter your address</div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" required>
                                <div class="invalid-feedback">Please enter your city</div>
                            </div>
                            <div class="form-group">
                                <label for="postal_code" class="form-label">Postal Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                                <div class="invalid-feedback">Please enter your postal code</div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="delivery_notes" class="form-label">Delivery Notes</label>
                            <textarea class="form-control" id="delivery_notes" name="delivery_notes" rows="2" placeholder="Special instructions for delivery (optional)"></textarea>
                        </div>
                        <div class="nav-buttons">
                            <button type="button" class="back-btn" data-prev="customer">
    Back
</button>
                            <button type="button" class="next-btn" data-next="payment">
    Continue to Payment
</button>
                        </div>
                        <!-- Hidden inputs for cart items and total -->
                        <input type="hidden" name="items" id="items">
                        <input type="hidden" name="total" id="total_input">
                        <input type="hidden" name="product_id" id="product_id">
                        <button type="submit" class="continue-btn" onclick="window.location.href='https://pay.ababank.com/efRPcMcXvMLRihKq6'">Continue</button>
                    </div>

                    <!-- Payment Method Section -->
                    <div class="form-section" id="payment-section">
                        <div class="section-title">Payment Method</div>
                        <div class="payment-options-container">
                            <!-- ABA PAY -->
                            <div class="payment-option" data-payment="aba">
                                <input type="radio" name="payment_option" id="aba_pay" class="payment-radio">
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
    <button type="submit" id="proceed-payment-btn" class="proceed-payment-btn" disabled>
        Proceed to Payment
    </button>
</div>
                    </div>
                </form>
            </div>

            <!-- Right Column - Order Summary -->
            <div class="col-md-5">
                <div class="order-summary">
                    <div class="order-header">
                        <h5>Order summary (<span id="order-item-count">0</span>)</h5>
                        <a href="/cart" class="edit-link">
                            <i class="fas fa-edit me-1"></i> Edit Cart
                        </a>
                    </div>

                    <!-- Product Items (Dynamically Populated) -->
                    <div id="order-items" class="order-items-container">
                        <!-- Cart items will be dynamically added here -->
                    </div>

                    <!-- Price Summary -->
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

                    <!-- Secure Checkout -->
                    <div class="secure-checkout">
                        <i class="fas fa-shield-alt"></i>
                        Secure Checkout
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Load cart from localStorage
    let cart = [];
    try {
        cart = JSON.parse(localStorage.getItem('cart')) || [];
    } catch (e) {
        console.error("Error parsing cart from localStorage:", e);
        cart = [];
    }

    console.log("Cart loaded from localStorage in checkout:", cart);

    // Render cart items in the order summary
    function renderOrderSummary() {
        const orderItemsContainer = document.getElementById('order-items');
        orderItemsContainer.innerHTML = '';
        if (cart.length === 0) {
            orderItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cart.forEach((item, index) => {
                const collapseId = `product-details-${index}`;
                const productItem = document.createElement('div');
                productItem.classList.add('product-item');
                productItem.innerHTML = `
                    <div class="product-image">
                        <img src="${item.image}" alt="${item.name}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 4px;">
                    </div>
                    <div class="product-details">
                        <div class="fw-bold">${item.name}</div>
                        <div class="text-muted">Qty: ${item.quantity}</div>
                        <div class="text-muted">
                            <a href="#${collapseId}" class="text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="${collapseId}">
                                More Details ▼
                            </a>
                        </div>
                        <div class="collapse mt-2" id="${collapseId}">
                            <div class="card card-body">
                                <p><strong>Name:</strong> ${item.name}</p>
                                <p><strong>Price per Unit:</strong> $${item.price.toFixed(2)}</p>
                                <p><strong>Quantity:</strong> ${item.quantity}</p>
                                <p><strong>Total:</strong> $${(item.price * item.quantity).toFixed(2)}</p>
                                <img src="${item.image}" alt="${item.name}" style="max-width: 100px; border-radius: 4px;">
                            </div>
                        </div>
                    </div>
                    <div class="product-price">$${(item.price * item.quantity).toFixed(2)}</div>
                `;
                orderItemsContainer.appendChild(productItem);
            });
        }
        updateOrderSummary();
        setupShowAllButton();
    }

    // Update order summary and prepare data for submission
    function updateOrderSummary() {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        const subtotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
        const total = subtotal;

        document.getElementById('order-item-count').textContent = totalItems;
        document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
        document.getElementById('total').textContent = `$${total.toFixed(2)}`;

        const productIds = cart.map(item => item.id).filter(id => id).join(',');
        document.getElementById('items').value = JSON.stringify(cart);
        document.getElementById('product_id').value = productIds;
        document.getElementById('total_input').value = total.toFixed(2);

        console.log("Cart being submitted:", cart);
    }

    // Setup "Show All" button functionality
    function setupShowAllButton() {
        const showAllBtn = document.getElementById('show-all-btn');
        const orderItemsContainer = document.getElementById('order-items');
        let isExpanded = false;

        if (cart.length > 0) {
            showAllBtn.style.display = 'block';
            showAllBtn.addEventListener('click', () => {
                isExpanded = !isExpanded;
                if (isExpanded) {
                    orderItemsContainer.classList.add('expanded');
                    showAllBtn.textContent = 'Hide All';
                } else {
                    orderItemsContainer.classList.remove('expanded');
                    showAllBtn.textContent = 'Show All';
                }
            });
        } else {
            showAllBtn.style.display = 'none';
        }
    }

    // Handle form submission and payment redirect
    document.getElementById('checkout-form').addEventListener('submit', async function (e) {
        e.preventDefault(); // Prevent default form submission

        const form = this;
        const formData = new FormData(form);

        // Add a return URL to the form data (configure this based on your domain)
        formData.append('return_url', window.location.origin + '/checkout/success');

        try {
            // Send form data to server
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData
            });

            if (response.ok) {
                // On success, redirect to payment URL
                window.location.href = 'https://pay.ababank.com/efRPcMcXvMLRihKq6';
            } else {
                const errorText = await response.text();
                console.error('Form submission failed:', errorText);
                alert('There was an error processing your order. Please try again.');
            }
        } catch (error) {
            console.error('Error during form submission:', error);
            alert('An unexpected error occurred. Please try again.');
        }
    });

    // Initial render
    renderOrderSummary();
</script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>
