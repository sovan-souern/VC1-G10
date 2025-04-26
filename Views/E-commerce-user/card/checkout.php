<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Checkout Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .form-control,
        .form-select {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #ced4da;
            border-radius: var(--border-radius);
            transition: var(--transition);
            font-size: 14px;
            height: 38px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.15rem rgba(0, 102, 204, 0.25);
        }

        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: var(--danger-color);
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.2rem;
            font-size: 12px;
            color: var(--danger-color);
        }

        .form-control.is-invalid~.invalid-feedback,
        .form-select.is-invalid~.invalid-feedback {
            display: block;
        }

        .order-summary {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 25px;
            position: sticky;
            top: 15px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 10px;
        }

        .order-header h5 {
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
            font-size: 18px;
        }

        .edit-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 13px;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }

        .edit-link i {
            margin-right: 4px;
        }

        .edit-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .order-items-container {
            max-height: 200px;
            overflow-y: auto;
            margin-bottom: 15px;
            padding-right: 4px;
        }

        .order-items-container::-webkit-scrollbar {
            width: 4px;
        }

        .order-items-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 8px;
        }

        .order-items-container::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 8px;
        }

        .product-item {
            display: flex;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f1f1;
        }

        .product-image {
            width: 60px;
            height: 60px;
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
            margin-right: 12px;
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
            margin-bottom: 4px;
            color: var(--dark-color);
            font-size: 14px;
        }

        .product-quantity {
            font-size: 13px;
            color: var(--gray-color);
        }

        .product-price {
            font-weight: 600;
            text-align: right;
            white-space: nowrap;
            color: var(--dark-color);
            font-size: 14px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
            color: #495057;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            font-size: 18px;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid #e9ecef;
            color: var(--dark-color);
        }

        .nav-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 25px;
            gap: 12px;
        }

        .next-btn {
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

        .next-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
        }

        .next-btn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
            opacity: 0.65;
            transform: none;
            box-shadow: none;
        }

        .secure-checkout {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            color: var(--gray-color);
            font-size: 13px;
        }

        .secure-checkout i {
            margin-right: 6px;
            color: var(--success-color);
        }

        @media (max-width: 768px) {
            .checkout-container {
                margin: 10px auto;
            }

            .form-row {
                flex-direction: column;
                gap: 10px;
            }

            .form-control,
            .form-select {
                padding: 7px 10px;
                font-size: 13px;
                height: 36px;
            }

            .form-label {
                font-size: 12px;
            }

            .form-group {
                margin-bottom: 12px;
            }

            .nav-buttons {
                flex-direction: column;
                gap: 8px;
            }

            .next-btn {
                width: 100%;
                text-align: center;
            }

            .order-summary {
                position: static;
                margin-top: 15px;
            }
        }

        @media (max-width: 480px) {
            .form-section {
                padding: 15px;
            }

            .form-control,
            .form-select {
                padding: 6px 8px;
                font-size: 12px;
                height: 34px;
            }

            .form-label {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>
    <div class="container checkout-container">
        <div class="row">
            <div class="col-md-7">
                <form action="/checkout/store?id=<?php foreach ($users as $user) {
                                                        if ($user['name'] == $_SESSION['name']) {
                                                            echo $user['admin_id'];
                                                        }
                                                    }
                                                    ?>" method="POST" id="checkout-form">
                    <input type="hidden" name="admin_id" value="">
                    <input type="hidden" name="items" id="items">
                    <input type="hidden" name="total" id="total_input">
                    <input type="hidden" name="product_id" id="product_id">
                    <input type="hidden" name="buy_at" id="buy_at">

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
                        <div class="nav-buttons">
                            <button type="submit" class="next-btn" id="submit-btn" aria-label="Submit Checkout Form"><a href="https://t.me/skincareshop2026">Submit</a></button>
                            <button type="button" class="next-btn" onclick="history.back()" aria-label="Go Back">Back</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <div class="order-summary">
                    <div class="order-header">
                        <h5>Order Summary (<span id="order-item-count">0</span>)</h5>
                        <a href="/cart" class="edit-link" aria-label="Edit Cart">
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
                        <div id="delivery-cost">To be determined</div>
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

    <!-- Loading Modal -->
    <div class="modal fade" id="loadingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content loading-modal">
                <div class="loading-spinner"></div>
                <div class="loading-text">Telegram contact......</div>
            </div>
        </div>
    </div>

    <style>
        .modal-dialog {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .loading-modal,
        .modal-content {
            background-color: #ffffff;
            border: none;
            box-shadow: var(--box-shadow);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 30px;
            border-radius: var(--border-radius);
            /* min-height: 180px; */
        }

        .loading-spinner {
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
            /* position: relative;
            left: 100px; */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-text {
            font-size: 18px;
            color: var(--dark-color);
            font-weight: 500;
            text-align: center;
            line-height: 1.5;
        }
    </style>

    <script>
        const sampleCart = [{
            id: 1,
            name: "William Shirt",
            price: 2.50,
            quantity: 2,
            image: "https://via.placeholder.com/60"
        }];

        let cart = [];
        try {
            const storedCart = localStorage.getItem('cart');
            cart = storedCart ? JSON.parse(storedCart) : sampleCart;
        } catch (e) {
            console.error("Error parsing cart from localStorage:", e);
            cart = sampleCart;
        }

        const renderOrderSummary = () => {
            const orderItemsContainer = document.getElementById('order-items');
            orderItemsContainer.innerHTML = cart.length === 0 ?
                '<p class="text-center py-3">Your cart is empty.</p>' :
                cart.map(item => `
                    <div class="product-item">
                        <div class="product-image">
                            <img src="${item.image}" alt="${item.name}">
                        </div>
                        <div class="product-details">
                            <div class="product-name">${item.name}</div>
                            <div class="product-quantity">Qty: ${item.quantity}</div>
                        </div>
                        <div class="product-price">$${(item.price * item.quantity).toFixed(2)}</div>
                    </div>
                `).join('');
            updateOrderSummary();
        };

        const updateOrderSummary = () => {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const subtotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
            const deliveryCost = 0;
            const total = subtotal + deliveryCost;
            document.getElementById('order-item-count').textContent = totalItems;
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('delivery-cost').textContent = deliveryCost ? `$${deliveryCost.toFixed(2)}` : 'To be determined';
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
            document.getElementById('items').value = JSON.stringify(cart);
            document.getElementById('product_id').value = cart.map(item => item.id).filter(id => id).join(',');
            document.getElementById('total_input').value = total.toFixed(2);
        };

        const validateSection = () => {
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
        };

        document.querySelector('#checkout-form').addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent default form submission
            if (!validateSection()) {
                console.log('Form validation failed');
                return;
            }
            if (!cart.length) {
                alert('Your cart is empty. Please add items before checking out.');
                return;
            }

            // Show loading modal
            const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'), {
                backdrop: 'static',
                keyboard: false
            });
            loadingModal.show();

            // Disable submit button
            document.getElementById('submit-btn').disabled = true;

            // Configurable loading delay (in milliseconds)
            const loadingDelay = 3000; // 10 seconds (change to 20000 for 20 seconds)

            // Simulate processing with setTimeout before submitting the form
            setTimeout(() => {
                // Submit the form programmatically
                document.getElementById('checkout-form').submit();
            }, loadingDelay);
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>