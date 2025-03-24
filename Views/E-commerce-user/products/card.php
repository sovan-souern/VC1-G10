<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .cart-container {
            max-width: 450px;
            margin: 0 auto;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .cart-header {
            background-color: #ffb6c1;
            color: #000;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cart-header h2 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .close-btn {
            font-size: 1.5rem;
            cursor: pointer;
            color: #fff;
        }
        .cart-item {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        .item-image {
            width: 80px;
            height: 80px;
            margin-right: 15px;
            background-color: #ffb6c1;
        }
        .item-details {
            flex-grow: 1;
        }
        .item-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .item-name a {
            color: #333;
            text-decoration: none;
        }
        .item-price {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .quantity-control {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            width: fit-content;
        }
        .quantity-btn {
            background: none;
            border: none;
            width: 30px;
            height: 30px;
            font-size: 1.2rem;
            cursor: pointer;
        }
        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            font-weight: bold;
        }
        .item-total {
            font-weight: bold;
            font-size: 1.1rem;
            text-align: right;
            min-width: 80px;
        }
        .delete-btn {
            margin-left: 15px;
            color: #777;
            cursor: pointer;
        }
        .cart-footer {
            padding: 15px 20px;
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
            padding: 12px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }
        .view-cart-btn:hover {
            background-color: #ff9eb5;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>
    <div class="cart-container">
        <div class="cart-header">
            <h2>Cart <span id="item-count">(8 items)</span></h2>
            <div class="close-btn">&times;</div>
        </div>
        
        <div class="cart-items">
            <div class="cart-item">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-JBV6ff5Fg0q4llzCmNpfpxlb3jnPRt.png" alt="Hydrating Serum Cleanser" class="item-image">
                <div class="item-details">
                    <div class="item-name">Hydrating Serum Cleanser</div>
                    <div class="item-price">$35.00</div>
                    <div class="quantity-control">
                        <button class="quantity-btn decrease-btn">−</button>
                        <input type="number" class="quantity-input" value="7" min="1" data-price="35.00">
                        <button class="quantity-btn increase-btn">+</button>
                    </div>
                </div>
                <div class="item-total">$245.00</div>
                <div class="delete-btn">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            
            <div class="cart-item">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-JBV6ff5Fg0q4llzCmNpfpxlb3jnPRt.png" alt="Cica Glow Mist" class="item-image">
                <div class="item-details">
                    <div class="item-name">Cica Glow Mist</div>
                    <div class="item-price">$35.00</div>
                    <div class="quantity-control">
                        <button class="quantity-btn decrease-btn">−</button>
                        <input type="number" class="quantity-input" value="1" min="1" data-price="35.00">
                        <button class="quantity-btn increase-btn">+</button>
                    </div>
                </div>
                <div class="item-total">$35.00</div>
                <div class="delete-btn">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
        </div>
        
        <div class="cart-footer">
            <div class="subtotal">
                <span>Subtotal</span>
                <span id="subtotal-amount">$280.00</span>
            </div>
            <button class="view-cart-btn" onclick="window.location.href='view-card';">View Cart</button>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all elements
            const decreaseBtns = document.querySelectorAll('.decrease-btn');
            const increaseBtns = document.querySelectorAll('.increase-btn');
            const quantityInputs = document.querySelectorAll('.quantity-input');
            const deleteBtns = document.querySelectorAll('.delete-btn');
            const closeBtn = document.querySelector('.close-btn');
            const itemTotals = document.querySelectorAll('.item-total');
            const subtotalAmount = document.getElementById('subtotal-amount');
            const itemCount = document.getElementById('item-count');
            
            // Function to update item total
            function updateItemTotal(input) {
                const quantity = parseInt(input.value);
                const price = parseFloat(input.getAttribute('data-price'));
                const total = quantity * price;
                
                // Find the corresponding item-total element
                const itemTotal = input.closest('.cart-item').querySelector('.item-total');
                itemTotal.textContent = `$${total.toFixed(2)}`;
                
                updateSubtotal();
                updateItemCount();
            }
            
            // Function to update subtotal
            function updateSubtotal() {
                let subtotal = 0;
                document.querySelectorAll('.cart-item').forEach(item => {
                    const itemTotalText = item.querySelector('.item-total').textContent;
                    subtotal += parseFloat(itemTotalText.replace('$', ''));
                });
                
                subtotalAmount.textContent = `$${subtotal.toFixed(2)}`;
            }
            
            // Function to update item count
            function updateItemCount() {
                let totalItems = 0;
                quantityInputs.forEach(input => {
                    if (input.closest('.cart-item').style.display !== 'none') {
                        totalItems += parseInt(input.value);
                    }
                });
                
                itemCount.textContent = `(${totalItems} items)`;
            }
            
            // Add event listeners to decrease buttons
            decreaseBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                        updateItemTotal(input);
                    }
                });
            });
            
            // Add event listeners to increase buttons
            increaseBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                    updateItemTotal(input);
                });
            });
            
            // Add event listeners to quantity inputs
            quantityInputs.forEach(input => {
                input.addEventListener('change', function() {
                    if (parseInt(this.value) < 1 || isNaN(parseInt(this.value))) {
                        this.value = 1;
                    }
                    updateItemTotal(this);
                });
            });
            
            // Add event listeners to delete buttons
            deleteBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const cartItem = this.closest('.cart-item');
                    cartItem.style.display = 'none';
                    updateSubtotal();
                    updateItemCount();
                });
            });
            
            // Add event listener to close button
            closeBtn.addEventListener('click', function() {
                document.querySelector('.cart-container').style.display = 'none';
            });
            
            // Initialize
            updateSubtotal();
            updateItemCount();
        });
    </script>
</body>
</html>