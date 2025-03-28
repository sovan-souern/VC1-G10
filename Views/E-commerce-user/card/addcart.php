

    <!-- Cart Panel -->
    <div class="cart-panel">
        <div class="cart-header">
            <h3>Cart (<span id="cart-item-count">0 items</span>)</h3>
            <div class="close-cart">×</div>
        </div>
        <div class="cart-items">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="cart-footer">
            <div class="subtotal">
                <span>Subtotal</span>
                <span id="subtotal-amount">$0.00</span>
            </div>
            <button class="view-cart-btn" onclick="window.location.href='view-card';">View Cart</button>
        </div>
    </div>

    <!-- Inline Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .add-to-cart {
            background-color: pink;
            color: white;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .add-to-cart:hover {
            background-color: #ff6699;
            transform: translateY(-2px);
        }

        .product__item {
            position: relative;
            background: #fff;
            transition: all 0.3s ease;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product__item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .product__item__pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .product__item:hover .product__item__pic img {
            transform: scale(1.05);
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
        #cart-item-count {
            font-size: 20px;
            color: white;
        }
        .cart-header h3{
            color: white;
        }
    </style>

    <!-- JavaScript -->
   
<!-- end cart -->




<script>
document.addEventListener('DOMContentLoaded', function() {
    const cartPanel = document.querySelector('.cart-panel');
    const closeCart = document.querySelector('.close-cart');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartItemCount = document.querySelector('#cart-item-count');
    const subtotalAmount = document.querySelector('#subtotal-amount');
    let cartItems = [];

    // Toggle cart panel visibility
    function toggleCart() {
        cartPanel.classList.toggle('active');
    }

    // Close cart
    closeCart.addEventListener('click', toggleCart);

    // Add to cart functionality
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productName = this.getAttribute('data-product-name');
            const productPrice = parseFloat(this.getAttribute('data-product-price'));
            const productImage = this.getAttribute('data-product-image');
            // Check if the item has a discount (assuming discount percentage is available in the discount section)
            const discountPercentage = this.closest('.product-card')?.querySelector('.discount-badge')?.textContent || null;

            // Check if item already exists
            const existingItem = cartItems.find(item => item.name === productName);
            if (existingItem) {
                existingItem.quantity += 1;
                updateCartItem(existingItem);
            } else {
                const newItem = {
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1,
                    discount: discountPercentage ? discountPercentage.replace('-', '').replace('%', '') : null // e.g., "30" if "-30%"
                };
                cartItems.push(newItem);
                addCartItem(newItem);
            }

            if (!cartPanel.classList.contains('active')) {
                toggleCart();
            }
            updateCartSummary();
        });
    });

    // Add new cart item to DOM
    function addCartItem(item) {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div class="cart-item-details">
                <div class="cart-item-name">${item.name}</div>
                <div class="cart-item-price">$${item.price.toFixed(2)}${item.discount ? ` <span class="discount-text"> Discount: ${item.discount}%</span>` : ''}</div>
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

        // Attach event listeners
        attachItemListeners(cartItem, item);
    }

    // Update existing cart item
    function updateCartItem(item) {
        const cartItem = Array.from(cartItemsContainer.querySelectorAll('.cart-item')).find(
            el => el.querySelector('.cart-item-name').textContent === item.name
        );
        const input = cartItem.querySelector('.quantity-input');
        input.value = item.quantity;
        cartItem.querySelector('.cart-item-total').textContent = `$${(item.price * item.quantity).toFixed(2)}`;
        updateCartSummary();
    }

    // Attach listeners to cart item controls
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
        });
    }

    // Update cart summary
    function updateCartSummary() {
        const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
        cartItemCount.textContent = `${totalItems} item${totalItems !== 1 ? 's' : ''}`;
        subtotalAmount.textContent = `$${subtotal.toFixed(2)}`;
    }
});
</script>

