<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #ffeef2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .cart-container {
            max-width: 1200px;
            width: 100%;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 0 auto;
        }
        .section-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
        }
        .cart-item {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
            background-color: #fff;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 1px 5px rgba(0,0,0,0.05);
        }
        .cart-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .product-image {
            width: 120px;
            height: 160px;
            margin-right: 20px;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .cart-item:hover .product-image {
            transform: scale(1.05);
        }
        .product-details {
            flex-grow: 1;
        }
        .product-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }
        .product-title:hover {
            color: #ff9bb3;
        }
        .product-price {
            font-size: 16px;
            margin-bottom: 10px;
            color: #666;
        }
        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: fit-content;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .quantity-selector:hover {
            border-color: #ff9bb3;
            box-shadow: 0 0 5px rgba(255, 155, 179, 0.3);
        }
        .quantity-btn {
            background: none;
            border: none;
            width: 40px;
            height: 40px;
            font-size: 16px;
            cursor: pointer;
            transition: color 0.3s ease, background-color 0.3s ease;
        }
        .quantity-btn:hover {
            color: #ff9bb3;
            background-color: #f8f8f8;
        }
        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            background: transparent;
            font-size: 16px;
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
            transition: color 0.3s ease;
        }
        .cart-item:hover .item-total {
            color: #ff9bb3;
        }
        .delete-btn {
            background: none;
            border: none;
            color: #aaa;
            font-size: 18px;
            margin-left: 15px;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .delete-btn:hover {
            color: #ff3333;
            transform: scale(1.2);
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
            transition: color 0.3s ease;
        }
        .cart-action:hover {
            color: #ff9bb3;
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
        .checkout-btn, .paypal-btn {
            border: none;
            border-radius: 4px;
            padding: 12px;
            font-weight: bold;
            width: 100%;
            margin-bottom: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .checkout-btn {
            background-color: #ff9bb3;
            color: #000;
        }
        .checkout-btn:hover {
            background-color: #ff8ca8;
            transform: translateY(-2px);
        }
        .paypal-btn {
            background-color: #ffc439;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .paypal-btn:hover {
            background-color: #ffb107;
            transform: translateY(-2px);
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
        .empty-cart {
            text-align: center;
            color: #666;
            font-size: 18px;
            padding: 20px;
        }
        .estimate-link {
            color: #0000EE;
            text-decoration: underline;
        }
        .tax-info {
            color: #666;
            cursor: pointer;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container cart-container">
        <div class="row">
            <!-- Left Column - Cart Items -->
            <div class="col-lg-6">
                <div class="section-container">
                    <h2 class="section-title">My Cart</h2>
                    <div class="divider"></div>
                    <div id="cart-items">
                        <!-- Dynamically populated -->
                    </div>
                    <div class="divider"></div>
                    <div class="cart-action">
                        <i class="fa-regular fa-note-sticky"></i>
                        <span>Add a note</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Order Summary -->
            <div class="col-lg-6">
                <div class="section-container">
                    <h2 class="section-title">Order Summary</h2>
                    <div class="divider"></div>
                    <div class="summary-row">
                        <div>Subtotal</div>
                        <div id="subtotal">$0.00</div>
                    </div>
                    <div class="summary-row">
                        <div><a href="#" class="estimate-link">Estimate Delivery & Taxes</a></div>
                    </div>
                    <div class="summary-row">
                        <div>Sales Tax <i class="fa-regular fa-circle-question tax-info"></i></div>
                        <div id="sales-tax">$0.00</div>
                    </div>
                    <div class="summary-total">
                        <div>Total</div>
                        <div id="total">$0.00</div>
                    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Load cart from localStorage
        let cart = [];
        try {
            cart = JSON.parse(localStorage.getItem('cart')) || [];
        } catch (e) {
            console.error("Error parsing cart from localStorage:", e);
            cart = [];
        }

        // Debug: Log the cart to console to verify data
        console.log("Cart loaded from localStorage in cart.php:", cart);

        // Render cart items
        function renderCart() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';
            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p class="empty-cart">Your cart is empty.</p>';
            } else {
                cart.forEach((item, index) => {
                    const cartItem = document.createElement('div');
                    cartItem.classList.add('cart-item');
                    cartItem.innerHTML = `
                        <div class="product-image">
                            <img src="${item.image}" alt="${item.name}" style="max-width: 100%; max-height: 100%;">
                        </div>
                        <div class="product-details">
                            <div class="product-title">${item.name}</div>
                            <div class="product-price">$${parseFloat(item.price).toFixed(2)}</div>
                        </div>
                        <div class="quantity-selector">
                            <button class="quantity-btn" onclick="updateQuantity(${index}, -1)">−</button>
                            <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                            <button class="quantity-btn" onclick="updateQuantity(${index}, 1)">+</button>
                        </div>
                        <div class="item-total">$${(parseFloat(item.price) * item.quantity).toFixed(2)}</div>
                        <button class="delete-btn" onclick="deleteItem(${index})">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    `;
                    cartItemsContainer.appendChild(cartItem);
                    setTimeout(() => cartItem.classList.add('visible'), 50 * index);
                });
            }
            updateSummary();
        }

        // Update quantity
        function updateQuantity(index, change) {
            if (cart[index].quantity + change >= 1) {
                cart[index].quantity += change;
                localStorage.setItem('cart', JSON.stringify(cart));
                console.log("Cart after quantity update in cart.php:", cart);
                renderCart();
            }
        }

        // Delete item
        function deleteItem(index) {
            const item = document.querySelectorAll('.cart-item')[index];
            item.classList.remove('visible');
            setTimeout(() => {
                cart.splice(index, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                console.log("Cart after deletion in cart.php:", cart);
                renderCart();
            }, 300);
        }

        // Update summary
        function updateSummary() {
            const subtotal = cart.reduce((sum, item) => sum + parseFloat(item.price) * item.quantity, 0);
            const taxRate = 0.1; // Example: 10% sales tax
            const salesTax = subtotal * taxRate;
            const total = subtotal + salesTax;

            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('sales-tax').textContent = `$${salesTax.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        }

        // Initial render
        renderCart();
    </script>
</body>
</html>