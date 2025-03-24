<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #ffeef2;
            font-family: Arial, sans-serif;
        }
        .cart-container {
            max-width: 1200px;
            margin: 50px auto;
        }
        .section-container {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        .product-image {
            width: 120px;
            height: 160px;
            background-color: #f8d7e3;
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .product-details {
            flex-grow: 1;
        }
        .product-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .product-price {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: fit-content;
        }
        .quantity-btn {
            background: none;
            border: none;
            width: 40px;
            height: 40px;
            font-size: 16px;
            cursor: pointer;
        }
        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            background: transparent;
        }
        .quantity-input:focus {
            outline: none;
        }
        .item-total {
            font-weight: bold;
            font-size: 18px;
            margin-left: 20px;
            min-width: 80px;
            text-align: right;
        }
        .delete-btn {
            background: none;
            border: none;
            color: #aaa;
            font-size: 18px;
            margin-left: 15px;
            cursor: pointer;
        }
        .divider {
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }
        .cart-action {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #333;
            cursor: pointer;
        }
        .cart-action i {
            margin-right: 10px;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .summary-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
        .checkout-btn {
            background-color: #ff9bb3;
            color: #000;
            border: none;
            border-radius: 4px;
            padding: 12px;
            font-weight: bold;
            width: 100%;
            margin-bottom: 15px;
            transition: background-color 0.3s;
        }
        .checkout-btn:hover {
            background-color: #ff8ca8;
        }
        .paypal-btn {
            background-color: #ffc439;
            color: #000;
            border: none;
            border-radius: 4px;
            padding: 12px;
            font-weight: bold;
            width: 100%;
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .secure-checkout {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
            font-size: 14px;
            margin-top: 10px;
        }
        .secure-checkout i {
            margin-right: 8px;
        }
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #333;
        }
        .tax-info {
            color: #666;
            cursor: pointer;
            margin-left: 5px;
        }
        .estimate-link {
            color: #000;
            text-decoration: underline;
            font-weight: bold;
        }
        @media (max-width: 991px) {
            .cart-item {
                flex-wrap: wrap;
            }
            .quantity-selector {
                margin-top: 10px;
            }
            .item-total {
                margin-top: 10px;
                margin-left: auto;
            }
            .delete-btn {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container cart-container">
        <div class="row">
            <!-- Left Column - Cart Items -->
            <div class="col-lg-6">
                <div class="section-container">
                    <h2 class="section-title">My cart</h2>
                    <div class="divider"></div>
                    
                    <!-- Product 1 -->
                    <div class="cart-item">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=150&width=100" alt="Hydrating Serum Cleanser" style="max-width: 100%; max-height: 100%;">
                        </div>
                        <div class="product-details">
                            <div class="product-title">Hydrating Serum Cleanser</div>
                            <div class="product-price">$35.00</div>
                        </div>
                        <div class="quantity-selector">
                            <button class="quantity-btn">−</button>
                            <input type="text" class="quantity-input" value="6" readonly>
                            <button class="quantity-btn">+</button>
                        </div>
                        <div class="item-total">$210.00</div>
                        <button class="delete-btn">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Product 2 -->
                    <div class="cart-item">
                        <div class="product-image">
                            <img src="/placeholder.svg?height=150&width=100" alt="Cica Glow Mist" style="max-width: 100%; max-height: 100%;">
                        </div>
                        <div class="product-details">
                            <div class="product-title">Cica Glow Mist</div>
                            <div class="product-price">$35.00</div>
                        </div>
                        <div class="quantity-selector">
                            <button class="quantity-btn">-</button>
                            <input type="text" class="quantity-input" value="1" readonly>
                            <button class="quantity-btn">+</button>
                        </div>
                        <div class="item-total">$35.00</div>
                        <button class="delete-btn">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </div>
                    
                    <div class="divider"></div>
                    
                    <!-- Cart Actions -->
                    <div class="cart-action">
                        <i class="fa-solid fa-tag"></i>
                        <span>Enter a promo code</span>
                    </div>
                    
                    <div class="cart-action">
                        <i class="fa-regular fa-note-sticky"></i>
                        <span>Add a note</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Order Summary -->
            <div class="col-lg-6">
                <div class="section-container">
                    <h2 class="section-title">Order summary</h2>
                    <div class="divider"></div>
                    
                    <div class="summary-row">
                        <div>Subtotal</div>
                        <div>$245.00</div>
                    </div>
                    
                    <div class="summary-row">
                        <div><a href="#" class="estimate-link">Estimate Delivery & Taxes</a></div>
                    </div>
                    
                    <div class="summary-row">
                        <div>Sales Tax <i class="fa-regular fa-circle-question tax-info"></i></div>
                        <div>$0.00</div>
                    </div>
                    
                    <div class="summary-total">
                        <div>Total</div>
                        <div>$245.00</div>
                    </div>
                    
                    <!-- Checkout Buttons -->
                    <div class="mt-4">
                    <button class="checkout-btn" onclick="window.location.href='checkout';">Checkout</button>
                        <button class="paypal-btn">
                            <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal" height="18"> Checkout
                        </button>
                        <div class="secure-checkout">
                            <i class="fa-solid fa-lock"></i> Secure Checkout
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple quantity buttons functionality
        document.addEventListener('DOMContentLoaded', function() {
            const minusBtns = document.querySelectorAll('.quantity-btn:first-child');
            const plusBtns = document.querySelectorAll('.quantity-btn:last-child');
            
            minusBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                    }
                });
            });
            
            plusBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                });
            });
        });
    </script>
</body>
</html>