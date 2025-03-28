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
                
                <!-- Customer Details -->
                <div class="form-section">
                    <div class="section-title">Customer details</div>
                    <form>
                        
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
                            <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city" required>
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
                    
                    <!-- Price Summary -->
                    <div class="summary-row">
                        <div>Subtotal</div>
                        <div>$210.00</div>
                    </div>
                    
                    <div class="summary-row">
                        <div>Delivery</div>
                        <div>pay by yourself</div>
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