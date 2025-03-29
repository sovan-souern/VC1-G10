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

        .divider::before,
        .divider::after {
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
            <form action="/checkout/store" method="POST" id="checkout-form">
                    <!-- Customer Details -->
                    <div class="form-section">
                        <div class="section-title">Customer Checkout</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>

                    <!-- Delivery Details -->
                    <div class="form-section">
                        <div class="section-title">Delivery details</div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country/Region <span class="text-danger">*</span></label>
                            <div class="dropdown-select">
                                <select class="form-select" id="country" name="country" required>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address1" class="form-label">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address1" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <!-- Hidden inputs for cart items and total -->
                        <input type="hidden" name="items" id="items">
                        <input type="hidden" name="total" id="total_input">
                        <button type="submit" class="continue-btn">Continue</button>
                    </div>

                    <!-- Delivery Method -->
                    <div class="form-section">
                        <div class="section-title">Delivery method</div>
                        <!-- This section is empty in the image -->
                    </div>
                </form>
            </div>

            <!-- Right Column - Order Summary -->
            <div class="col-md-5">
                <div class="order-summary">
                    <div class="order-header">
                        <h5 class="mb-0">Order summary (<span id="order-item-count">0</span>)</h5>
                        <a href="#" class="edit-link">Edit Cart</a>
                    </div>

                    <!-- Show All Button -->
                    <button class="show-all-btn" id="show-all-btn">Show All</button>

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
                    <div class="d-flex align-items-center justify-content-center mt-4" href='confirmation'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill me-2" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                        Secure Checkout
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Checkout -->
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
        console.log("Cart loaded from localStorage in checkout:", cart);

        // Render cart items in the order summary
        function renderOrderSummary() {
            const orderItemsContainer = document.getElementById('order-items');
            orderItemsContainer.innerHTML = '';
            if (cart.length === 0) {
                orderItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
            } else {
                cart.forEach((item, index) => {
                    const collapseId = `product-details-${index}`; // Unique ID for each item
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
            setupShowAllButton(); // Setup the "Show All" button functionality
        }

        // Update order summary (item count, subtotal, total)
        function updateOrderSummary() {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const subtotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
            const total = subtotal; // Add delivery fees or taxes if applicable

            document.getElementById('order-item-count').textContent = totalItems;
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;

            // Update hidden inputs with cart items and total
            document.getElementById('items').value = JSON.stringify(cart);
            document.getElementById('total_input').value = total.toFixed(2);
        }

        // Setup "Show All" button functionality
        function setupShowAllButton() {
            const showAllBtn = document.getElementById('show-all-btn');
            const orderItemsContainer = document.getElementById('order-items');
            let isExpanded = false;

            if (cart.length > 0) { // Only show button if there are items
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
                showAllBtn.style.display = 'none'; // Hide button if cart is empty
            }
        }

        // Initial render
        renderOrderSummary();
    </script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


    <style>
        /* Add this to your existing <style> */
        .order-items-container {
            max-height: 300px;
            /* Limit initial height */
            overflow-y: auto;
            /* Add scrollbar if content exceeds height */
            transition: max-height 0.3s ease;
            /* Smooth transition for expansion */
        }

        .order-items-container.expanded {
            max-height: none;
            /* Remove height restriction when expanded */
        }

        .show-all-btn {
            background: none;
            border: none;
            color: #007bff;
            text-decoration: underline;
            cursor: pointer;
            padding: 0;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .show-all-btn:hover {
            color: #0056b3;
        }
    </style>

</html>