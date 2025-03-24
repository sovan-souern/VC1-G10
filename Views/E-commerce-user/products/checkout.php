<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .checkout-container {
            max-width: 1200px;
            margin: 30px auto;
        }
        .form-section {
            background-color: white;
            border-radius: 4px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .paypal-btn {
            background-color: #ffc439;
            color: #000;
            font-weight: bold;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
        }
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 15px 0;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        .divider span {
            padding: 0 10px;
            color: #6c757d;
        }
        .product-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .product-image {
            width: 80px;
            height: 80px;
            background-color: #f0f0f0;
            border-radius: 4px;
            margin-right: 15px;
        }
        .product-details {
            flex-grow: 1;
        }
        .product-price {
            font-weight: bold;
            text-align: right;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 18px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #dee2e6;
        }
        .continue-btn {
            background-color: #000;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 4px;
            font-weight: bold;
        }
        .order-summary {
            background-color: white;
            border-radius: 4px;
            padding: 20px;
        }
        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .edit-link {
            color: #000;
            text-decoration: underline;
        }
        .rewards-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin: 15px 0;
        }
        .icon-text {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        .icon-text svg {
            margin-right: 10px;
        }
        .dropdown-select {
            position: relative;
        }
        .dropdown-select select {
            appearance: none;
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            background-color: white;
        }
        .dropdown-select::after {
            content: '▼';
            position: absolute;
            right: 15px;
            top: 12px;
            pointer-events: none;
            font-size: 12px;
        }
        .product-image.pink {
            background-color: #f8d7e3;
        }
    </style>
</head>
<body>
    <div class="container checkout-container">
        <div class="row">
            <!-- Left Column - Forms -->
            <div class="col-md-7">
                <!-- Express Checkout -->
                <div class="form-section">
                    <div class="text-center mb-3">Express checkout</div>
                    <button class="paypal-btn">
                        <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal" height="18"> Checkout
                    </button>
                    
                    <div class="divider">
                        <span>or</span>
                    </div>
                    
                    <div class="mb-3">
                        Have an account? <a href="#" class="fw-bold">Log in</a>
                    </div>
                </div>
                
                <!-- Customer Details -->
                <div class="form-section">
                    <div class="section-title">Customer details</div>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                    </form>
                </div>
                
                <!-- Delivery Details -->
                <div class="form-section">
                    <div class="section-title">Delivery details</div>
                    <form>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country/Region <span class="text-danger">*</span></label>
                            <div class="dropdown-select">
                                <select class="form-select" id="country" required>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="UK">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="address1" class="form-label">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address1" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="address2" class="form-label">Address - line 2</label>
                            <input type="text" class="form-control" id="address2">
                        </div>
                        
                        <div class="mb-3">
                            <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city" required>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="state" class="form-label">State <span class="text-danger">*</span></label>
                                <div class="dropdown-select">
                                    <select class="form-select" id="state" required>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <!-- Add more states as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="zip" class="form-label">Zip / Postal code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="zip" required>
                            </div>
                        </div>
                        
                        <button type="submit" class="continue-btn">Continue</button>
                    </form>
                </div>
                
                <!-- Delivery Method -->
                <div class="form-section">
                    <div class="section-title">Delivery method</div>
                    <!-- This section is empty in the image -->
                </div>
            </div>
            
            <!-- Right Column - Order Summary -->
            <div class="col-md-5">
                <div class="order-summary">
                    <div class="order-header">
                        <h5 class="mb-0">Order summary (6)</h5>
                        <a href="#" class="edit-link">Edit Cart</a>
                    </div>
                    
                    <!-- Product 1 -->
                    <div class="product-item">
                        <div class="product-image pink"></div>
                        <div class="product-details">
                            <div class="fw-bold">Hydrating Serum Cleanser</div>
                            <div class="text-muted">Qty: 5</div>
                        </div>
                        <div class="product-price">$175.00</div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="product-item">
                        <div class="product-image pink"></div>
                        <div class="product-details">
                            <div class="fw-bold">Cica Glow Mist</div>
                            <div class="text-muted">Qty: 1</div>
                            <div class="text-muted">
                                <a href="#" class="text-decoration-none">More Details ▼</a>
                            </div>
                        </div>
                        <div class="product-price">$35.00</div>
                    </div>
                    
                    <!-- Promo Code -->
                    <div class="icon-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                            <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                        </svg>
                        <a href="#" class="text-decoration-none">Enter a promo code</a>
                    </div>
                    
                    <!-- Gift Card -->
                    <div class="icon-text mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
                        </svg>
                        <a href="#" class="text-decoration-none">Redeem a gift card</a>
                    </div>
                    
                    <!-- Rewards Box -->
                    <div class="rewards-box">
                        <div class="d-flex align-items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-warning me-2" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            Earn 210 Glow Coins when you place this order.
                        </div>
                        <div class="small text-muted mb-2">Sign up or log in to collect and redeem points.</div>
                        <a href="#" class="text-decoration-none fw-bold">Log in</a>
                    </div>
                    
                    <!-- Price Summary -->
                    <div class="summary-row">
                        <div>Subtotal</div>
                        <div>$210.00</div>
                    </div>
                    
                    <div class="summary-row">
                        <div>Delivery</div>
                        <div>—</div>
                    </div>
                    
                    <div class="summary-row">
                        <div>Sales Tax</div>
                        <div>$0.00</div>
                    </div>
                    
                    <div class="total-row">
                        <div>Total</div>
                        <div>$210.00</div>
                    </div>
                    
                    <!-- Secure Checkout -->
                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill me-2" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                        Secure Checkout
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>