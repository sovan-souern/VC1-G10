<!-- cart.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="cart-container">
            <div class="cart-section">
                <h2>My cart</h2>
                <hr>
                <div class="cart-items">
                    <!-- Cart items will be dynamically added here -->
                </div>
                <hr>
                <div class="cart-actions">
                    <div class="promo-code">
                        <i class="fa-solid fa-tag"></i>
                        <span>Enter a promo code</span>
                    </div>
                    <div class="add-note">
                        <i class="fa-solid fa-note-sticky"></i>
                        <span>Add a note</span>
                    </div>
                </div>
            </div>
            
            <div class="summary-section">
                <h2>Order summary</h2>
                <hr>
                <div class="summary-row">
                    <span>Subtotal</span>
                    <span class="subtotal">$0.00</span>
                </div>
                <div class="summary-row">
                    <span>Delivery</span>
                    <span class="delivery-cost">$5.99</span>
                </div>
                <div class="location">
                    <span>Arkansas, United States</span>
                </div>
                <div class="shipping-method">
                    <select id="shipping-method">
                        <option value="5.99">Standard Shipping - $5.99</option>
                        <option value="12.99">Express Shipping - $12.99</option>
                    </select>
                </div>
                <div class="summary-row">
                    <div class="tax-label">
                        <span>Sales Tax</span>
                        <i class="fa-solid fa-circle-question"></i>
                    </div>
                    <span class="tax-amount">$0.00</span>
                </div>
                <hr>
                <div class="summary-row total">
                    <span>Total</span>
                    <span class="total-amount">$0.00</span>
                </div>
                <button class="checkout-btn primary" onclick="window.location.href='checkout';">Checkout</button>
                <button class="checkout-btn paypal">
                    <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="PayPal" class="paypal-logo">
                    Checkout
                </button>
                <div class="secure-checkout">
                    <i class="fa-solid fa-lock"></i>
                    <span>Secure Checkout</span>
                </div>
            </div>
        </div>
    </div>
    
    <script src="cart-script.js"></script>
</body>
</html>

<style>
    /* styles.css */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

body {
    background-color: #fdf2f4;
    color: #333;
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.cart-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

.cart-section {
    flex: 1;
    min-width: 300px;
}

.summary-section {
    flex: 1;
    min-width: 300px;
}

h2 {
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #333;
}

hr {
    border: none;
    border-top: 1px solid #e0e0e0;
    margin: 15px 0;
}

/* Cart Item Styles */
.cart-items {
    min-height: 150px;
}

.cart-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 20px 0;
}

.product-image {
    width: 120px;
    height: 120px;
    overflow: hidden;
}

.product-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-details {
    flex: 1;
}

.product-details h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 5px;
}

.price {
    font-size: 16px;
    font-weight: 500;
}

.quantity-controls {
    display: flex;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.quantity-btn {
    width: 40px;
    height: 40px;
    background: none;
    border: none;
    font-size: 18px;
    cursor: pointer;
}

.quantity-input {
    width: 40px;
    height: 40px;
    text-align: center;
    border: none;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    font-size: 16px;
    background-color: white;
}

.item-price {
    font-weight: 600;
    font-size: 16px;
    width: 80px;
    text-align: right;
}

.remove-btn {
    background: none;
    border: none;
    color: #999;
    cursor: pointer;
    font-size: 16px;
}

.remove-btn:hover {
    color: #666;
}

.empty-cart-message {
    text-align: center;
    color: #666;
    font-size: 16px;
    margin: 20px 0;
}

/* Cart Actions */
.cart-actions {
    margin-top: 20px;
}

.promo-code, .add-note {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 10px 0;
    cursor: pointer;
    color: #555;
}

.promo-code i, .add-note i {
    font-size: 14px;
}

/* Summary Section */
.summary-row {
    display: flex;
    justify-content: space-between;
    margin: 15px 0;
}

.location {
    margin: 10px 0;
    font-size: 14px;
}

.shipping-method {
    margin: 15px 0;
}

.shipping-method select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: white;
    font-size: 14px;
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 16px;
}

.tax-label {
    display: flex;
    align-items: center;
    gap: 5px;
}

.tax-label i {
    font-size: 14px;
    color: #999;
    cursor: pointer;
}

.total {
    font-size: 20px;
    font-weight: 600;
}

.checkout-btn {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    margin: 10px 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.primary {
    background-color: #ffb6c1;
    color: #333;
}

.paypal {
    background-color: #ffc439;
    color: #333;
}

.paypal-logo {
    height: 20px;
    margin-right: 10px;
}

.secure-checkout {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    margin-top: 15px;
    color: #555;
    font-size: 14px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .cart-container {
        flex-direction: column;
    }
    
    .cart-item {
        flex-wrap: wrap;
    }
    
    .product-image {
        width: 100px;
        height: 100px;
    }
    
    .quantity-controls {
        order: 3;
        margin-top: 10px;
    }
    
    .item-price {
        order: 4;
        margin-top: 10px;
    }
    
    .remove-item {
        order: 5;
        margin-top: 10px;
    }
}
</style>

<script>
    // cart-script.js
document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const cartItemsContainer = document.querySelector('.cart-items');
    const subtotalEl = document.querySelector('.subtotal');
    const totalEl = document.querySelector('.total-amount');
    const deliveryCostEl = document.querySelector('.delivery-cost');
    const shippingMethodSelect = document.querySelector('#shipping-method');
    const promoCode = document.querySelector('.promo-code');
    const addNote = document.querySelector('.add-note');

    // Initialize cart items
    let cartItems = [];
    let deliveryCost = parseFloat(shippingMethodSelect.value) || 5.99;

    // Load cart from localStorage on page load
    try {
        cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    } catch (e) {
        console.error("Error parsing cart from localStorage:", e);
        cartItems = [];
    }

    // Render cart items on page load
    renderCartItems();

    // Function to render cart items
    function renderCartItems() {
        cartItemsContainer.innerHTML = ''; // Clear existing items
        if (cartItems.length === 0) {
            cartItemsContainer.innerHTML = '<p class="empty-cart-message">Your cart is empty.</p>';
            updateSummary();
            return;
        }

        cartItems.forEach(item => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
                <div class="product-image">
                    <img src="${item.image}" alt="${item.name}" class="product-img">
                </div>
                <div class="product-details">
                    <h3>${item.name}</h3>
                    <p class="price">$${item.price.toFixed(2)}</p>
                </div>
                <div class="quantity-controls">
                    <button class="quantity-btn minus">−</button>
                    <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                    <button class="quantity-btn plus">+</button>
                </div>
                <div class="item-price">$${(item.price * item.quantity).toFixed(2)}</div>
                <div class="remove-item">
                    <button class="remove-btn">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </div>
            `;
            cartItemsContainer.appendChild(cartItem);

            // Attach event listeners to the buttons
            attachItemListeners(cartItem, item);
        });

        updateSummary();
    }

    // Attach event listeners to cart item buttons
    function attachItemListeners(cartItem, item) {
        const minusBtn = cartItem.querySelector('.minus');
        const plusBtn = cartItem.querySelector('.plus');
        const quantityInput = cartItem.querySelector('.quantity-input');
        const removeBtn = cartItem.querySelector('.remove-btn');
        const itemPrice = cartItem.querySelector('.item-price');

        // Decrease quantity
        minusBtn.addEventListener('click', function() {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
                item.quantity = quantity;
                itemPrice.textContent = `$${(item.price * quantity).toFixed(2)}`;
                localStorage.setItem('cart', JSON.stringify(cartItems));
                updateSummary();
            }
        });

        // Increase quantity
        plusBtn.addEventListener('click', function() {
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
            item.quantity = quantity;
            itemPrice.textContent = `$${(item.price * quantity).toFixed(2)}`;
            localStorage.setItem('cart', JSON.stringify(cartItems));
            updateSummary();
        });

        // Remove item
        removeBtn.addEventListener('click', function() {
            cartItems = cartItems.filter(i => i.name !== item.name);
            localStorage.setItem('cart', JSON.stringify(cartItems));
            renderCartItems();
        });
    }

    // Update order summary
    function updateSummary() {
        const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
        subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
        const total = subtotal + deliveryCost;
        totalEl.textContent = `$${total.toFixed(2)}`;
    }

    // Update delivery cost when shipping method changes
    shippingMethodSelect.addEventListener('change', function() {
        deliveryCost = parseFloat(this.value);
        deliveryCostEl.textContent = `$${deliveryCost.toFixed(2)}`;
        updateSummary();
    });

    // Promo code and note functionality
    promoCode.addEventListener('click', function() {
        const code = prompt('Enter your promo code:');
        if (code) {
            alert(`Promo code "${code}" applied!`);
            // Add promo code logic here (e.g., apply discount)
        }
    });

    addNote.addEventListener('click', function() {
        const note = prompt('Add a note to your order:');
        if (note) {
            alert(`Note added: "${note}"`);
        }
    });
});
</script>