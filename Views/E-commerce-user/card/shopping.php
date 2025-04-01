<!-- index.html -->
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
 
                <button class="add-to-cart" data-product-name="Macey Herrera" data-product-price="993.00" data-product-image="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-nu99aQA6h73FwS0GcFLMxkNqjp3Xgc.png">Add to Cart</button>


        <!-- Cart Panel -->
        <div class="cart-panel">
            <div class="cart-header">
                <h3>Cart (<span id="cart-item-count">0 items</span>)</h3>
                <div class="close-cart">x</div>
            </div>
            <div class="cart-items">
                <!-- Cart items will be dynamically added here -->
            </div>
            <div class="cart-footer">
                <div class="subtotal">
                    <span>Subtotal</span>
                    <span id="subtotal-amount">$0.00</span>
                </div>
                <button class="view-cart-btn" onclick="window.location.href='checkout';">Checkout</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
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
    display: flex;
    gap: 30px;
}

/* Product Grid */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    flex: 3;
}

.product-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
}

.product-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
}

.product-card h3 {
    font-size: 18px;
    font-weight: 600;
    margin: 10px 0;
}

.rating {
    color: #f5c518;
    margin-bottom: 10px;
}

.rating i {
    font-size: 14px;
}

.price {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

.add-to-cart {
    background-color: #ffb6c1;
    color: #333;
    border: none;
    padding: 10px;
    width: 100%;
    font-weight: 500;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.add-to-cart:hover {
    background-color: #ff9eb5;
}

/* Cart Panel Styles */
.cart-panel {
    position: fixed;
    top: 0;
    right: 0;
    width: 350px;
    height: 100%;
    background: #fff;
    box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    transform: translateX(100%);
    transition: transform 0.3s ease;
}

.cart-panel.active {
    transform: translateX(0);
}

.cart-header {
    background-color: #ffb6c1;
    color: #000;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cart-header h3 {
    margin: 0;
    font-size: 1.5rem;
    font-weight: bold;
}

.close-cart {
    font-size: 1.5rem;
    cursor: pointer;
    color: #000;
    transition: transform 0.3s ease;
}

.close-cart:hover {
    transform: rotate(90deg);
}

.cart-items {
    padding: 20px;
    max-height: calc(100% - 150px);
    overflow-y: auto;
}

.cart-item {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.cart-item img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    margin-right: 15px;
    border-radius: 5px;
}

.cart-item-details {
    flex-grow: 1;
}

.cart-item-name {
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
}

.cart-item-price {
    font-weight: bold;
    color: #ff6699;
}

.cart-item-quantity {
    display: flex;
    align-items: center;
    margin-top: 5px;
}

.quantity-btn {
    background: none;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    color: #333;
    padding: 0 5px;
}

.quantity-input {
    width: 40px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 3px;
    margin: 0 5px;
}

.cart-item-total {
    font-weight: bold;
    color: #333;
}

.delete-btn {
    margin-left: 10px;
    cursor: pointer;
    color: #777;
    transition: color 0.3s ease;
}

.delete-btn:hover {
    color: #ff3333;
}

.cart-footer {
    padding: 20px;
    border-top: 1px solid #eee;
    position: absolute;
    bottom: 0;
    width: 100%;
    background: #fff;
}

.subtotal {
    display: flex;
    justify-content: space-between;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 15px;
}

.view-cart-btn {
    background-color: #ffb6c1;
    color: #000;
    border: none;
    padding: 10px;
    width: 100%;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.view-cart-btn:hover {
    background-color: #ff9eb5;
}
</style>

<script>
    // script.js
document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const cartPanel = document.querySelector('.cart-panel');
    const closeCart = document.querySelector('.close-cart');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartItemCount = document.querySelector('#cart-item-count');
    const subtotalAmount = document.querySelector('#subtotal-amount');

    // Initialize cart items
    let cartItems = [];

    // Load cart from localStorage on page load
    try {
        cartItems = JSON.parse(localStorage.getItem('cart')) || [
            {
                name: "Boris Savage",
                price: 406.56,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-nu99aQA6h73FwS0GcFLMxkNqjp3Xgc.png",
                quantity: 3
            },
            {
                name: "Allen Townsend",
                price: 223.00,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-nu99aQA6h73FwS0GcFLMxkNqjp3Xgc.png",
                quantity: 1
            },
            {
                name: "Macey Herrera",
                price: 993.00,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-nu99aQA6h73FwS0GcFLMxkNqjp3Xgc.png",
                quantity: 3
            }
        ];
    } catch (e) {
        console.error("Error parsing cart from localStorage:", e);
        cartItems = [];
    }

    // Render cart items on page load
    cartItems.forEach(item => addCartItem(item));
    updateCartSummary();

    // Toggle cart panel
    function toggleCart() {
        cartPanel.classList.toggle('active');
    }

    closeCart.addEventListener('click', toggleCart);

    // Add to cart functionality
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productName = this.getAttribute('data-product-name');
            const productPrice = parseFloat(this.getAttribute('data-product-price'));
            const productImage = this.getAttribute('data-product-image');

            const existingItem = cartItems.find(item => item.name === productName);
            if (existingItem) {
                existingItem.quantity += 1;
                updateCartItem(existingItem);
            } else {
                const newItem = {
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1
                };
                cartItems.push(newItem);
                addCartItem(newItem);
            }

            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(cartItems));
            console.log("Cart after adding item:", cartItems);

            if (!cartPanel.classList.contains('active')) {
                toggleCart();
            }
            updateCartSummary();
        });
    });

    // Add cart item to the DOM
    function addCartItem(item) {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div class="cart-item-details">
                <div class="cart-item-name">${item.name}</div>
                <div class="cart-item-price">$${item.price.toFixed(2)}</div>
                <div class="cart-item-quantity">
                    <button class="quantity-btn decrease-btn">-</button>
                    <input type="number" class="quantity-input" value="${item.quantity}" min="1">
                    <button class="quantity-btn increase-btn">+</button>
                </div>
            </div>
            <div class="cart-item-total">$${(item.price * item.quantity).toFixed(2)}</div>
            <div class="delete-btn"><i class="fa fa-trash"></i></div>
        `;
        cartItemsContainer.appendChild(cartItem);

        attachItemListeners(cartItem, item);
    }

    // Update cart item in the DOM
    function updateCartItem(item) {
        const cartItem = Array.from(cartItemsContainer.querySelectorAll('.cart-item')).find(
            el => el.querySelector('.cart-item-name').textContent === item.name
        );
        const input = cartItem.querySelector('.quantity-input');
        input.value = item.quantity;
        cartItem.querySelector('.cart-item-total').textContent = `$${(item.price * item.quantity).toFixed(2)}`;
        updateCartSummary();
        // Save to localStorage
        localStorage.setItem('cart', JSON.stringify(cartItems));
    }

    // Attach event listeners to cart item buttons
    function attachItemListeners(cartItem, item) {
        const decreaseBtn = cartItem.querySelector('.decrease-btn');
        const increaseBtn = cartItem.querySelector('.increase-btn');
        const quantityInput = cartItem.querySelector('.quantity-input');
        const deleteBtn = cartItem.querySelector('.delete-btn');

        decreaseBtn.addEventListener('click', () => {
            if (item.quantity > 1) {
                item.quantity--;
                updateCartItem(item);
            }
        });

        increaseBtn.addEventListener('click', () => {
            item.quantity++;
            updateCartItem(item);
        });

        quantityInput.addEventListener('change', () => {
            let value = parseInt(quantityInput.value);
            if (value < 1 || isNaN(value)) value = 1;
            item.quantity = value;
            updateCartItem(item);
        });

        deleteBtn.addEventListener('click', () => {
            cartItem.remove();
            cartItems = cartItems.filter(i => i.name !== item.name);
            updateCartSummary();
            // Save to localStorage
            localStorage.setItem('cart', JSON.stringify(cartItems));
        });
    }

    // Update cart summary (item count and subtotal)
    function updateCartSummary() {
        const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
        cartItemCount.textContent = `${totalItems} items`;
        subtotalAmount.textContent = `$${subtotal.toFixed(2)}`;
    }
});
</script>