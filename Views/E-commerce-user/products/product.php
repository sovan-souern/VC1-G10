<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css" type="text/css">
</head>

<body>
<section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <?php
                        if (empty($products)) {
                            echo '<p>No products available.</p>';
                        } else {
                            foreach ($products as $product) {
                                $price = number_format($product['price'], 2);
                                $image = !empty($product['image']) ? htmlspecialchars($product['image']) : 'https://via.placeholder.com/150';
                                $productLink = "product-page.php?id=" . htmlspecialchars($product['product_id']);
                        ?>
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="product__item">
                                        <div class="product__item__pic">
                                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" style="width: 100%; height: 300px; object-fit: cover;">
                                            <ul class="product__hover">
                                                <li><a href="<?php echo $image; ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6><a href="<?php echo $productLink; ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product__price">$<?php echo $price; ?></div>
                                            <button class="add-to-cart" data-product-name="<?php echo htmlspecialchars($product['product_name']); ?>" data-product-price="<?php echo $price; ?>" data-product-image="<?php echo $image; ?>">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Interface (Initially Hidden) -->
    <div class="cart-container">
        <div class="cart-header">
            <h2>Cart <span id="item-count">(0 items)</span></h2>
            <div class="close-btn">×</div>
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

        /* Existing Product Styles */
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

        .add-to-cart a {
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
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

        /* Cart Container Styles */
        .cart-container {
            max-width: 450px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.8);
            border: 1px solid #ddd;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            background: #fff;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .cart-container.active {
            opacity: 1;
            visibility: visible;
            transform: translate(-50%, -50%) scale(1);
        }

        .cart-header {
            background-color: #ffb6c1;
            color: #000;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
        }

        .cart-header:hover {
            background-color: #ff9eb5;
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
            transition: transform 0.3s ease;
        }

        .close-btn:hover {
            transform: rotate(90deg);
        }

        .cart-item {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            opacity: 0;
            transform: translateX(-20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .cart-item.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .item-image {
            width: 80px;
            height: 80px;
            margin-right: 15px;
            transition: transform 0.3s ease;
        }

        .cart-item:hover .item-image {
            transform: scale(1.05);
        }

        .item-details {
            flex-grow: 1;
        }

        .item-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
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
            transition: border-color 0.3s ease;
        }

        .quantity-control:hover {
            border-color: #ffb6c1;
        }

        .quantity-btn {
            background: none;
            border: none;
            width: 30px;
            height: 30px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .quantity-btn:hover {
            color: #ff6699;
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
            transition: color 0.3s ease;
        }

        .cart-item:hover .item-total {
            color: #ff6699;
        }

        .delete-btn {
            margin-left: 15px;
            color: #777;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .delete-btn:hover {
            color: #ff3333;
            transform: scale(1.2);
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
            transition: color 0.3s ease;
        }

        .view-cart-btn {
            background-color: #ffb6c1;
            color: #000;
            border: none;
            padding: 12px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .view-cart-btn:hover {
            background-color: #ff9eb5;
            transform: translateY(-2px);
        }
    </style>

    <!-- JavaScript -->
    <script src="Views/E-commerce-user/assets/js/jquery-3.3.1.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartContainer = document.querySelector('.cart-container');
            const closeBtn = document.querySelector('.close-btn');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartItemsContainer = document.querySelector('.cart-items');
            let cartItems = [];

            // Toggle cart visibility
            function toggleCart() {
                cartContainer.classList.toggle('active');
            }

            // Close cart
            closeBtn.addEventListener('click', toggleCart);

            // Add to cart functionality
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productName = this.getAttribute('data-product-name');
                    const productPrice = parseFloat(this.getAttribute('data-product-price'));
                    const productImage = this.getAttribute('data-product-image');

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
                            quantity: 1
                        };
                        cartItems.push(newItem);
                        addCartItem(newItem);
                    }

                    if (!cartContainer.classList.contains('active')) {
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
                    <img src="${item.image}" alt="${item.name}" class="item-image">
                    <div class="item-details">
                        <div class="item-name">${item.name}</div>
                        <div class="item-price">$${item.price.toFixed(2)}</div>
                        <div class="quantity-control">
                            <button class="quantity-btn decrease-btn">−</button>
                            <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-price="${item.price}">
                            <button class="quantity-btn increase-btn">+</button>
                        </div>
                    </div>
                    <div class="item-total">$${(item.price * item.quantity).toFixed(2)}</div>
                    <div class="delete-btn"><i class="fas fa-trash"></i></div>
                `;
                cartItemsContainer.appendChild(cartItem);

                // Add transition effect
                setTimeout(() => cartItem.classList.add('visible'), 10);

                // Attach event listeners
                attachItemListeners(cartItem, item);
            }

            // Update existing cart item
            function updateCartItem(item) {
                const cartItem = Array.from(cartItemsContainer.querySelectorAll('.cart-item')).find(
                    el => el.querySelector('.item-name').textContent === item.name
                );
                const input = cartItem.querySelector('.quantity-input');
                input.value = item.quantity;
                cartItem.querySelector('.item-total').textContent = `$${(item.price * item.quantity).toFixed(2)}`;
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
                    cartItem.classList.remove('visible');
                    setTimeout(() => {
                        cartItem.remove();
                        cartItems = cartItems.filter(i => i.name !== item.name);
                        updateCartSummary();
                    }, 300); // Match transition duration
                });
            }

            // Update cart summary
            function updateCartSummary() {
                const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
                const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
                document.getElementById('item-count').textContent = `(${totalItems} items)`;
                document.getElementById('subtotal-amount').textContent = `$${subtotal.toFixed(2)}`;
            }
        });
    </script>


    <section class="trend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Hot Trend</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/89/4b/e1/894be1215c80e3965b0491231bc6075d.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Chain bucket bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/b4/86/be/b486be4be2fb841b3d47086f2b51633d.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Pendant earrings</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/736x/3e/64/02/3e6402e4eb500ffc0922f5f70b0e4731.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Cotton T-Shirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Best seller</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/9d/5e/25/9d5e25c90e573425cc16819ae631a034.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Cotton T-Shirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/736x/ed/be/b1/edbeb10ea557019c3e31c22c3bc72835.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Zip-pockets pebbled tote <br />briefcase</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/736x/9d/51/66/9d5166a83e131e42c453ec6f4e08b6e4.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Round leather bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="trend__content">
                        <div class="section-title">
                            <h4>Feature</h4>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/3c/c0/08/3cc00805f2ce6c4705078480a5916895.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Bow wrap skirt</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/e9/da/78/e9da7876efb69a798cc268a65bb29bc1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Metallic earrings</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                        <div class="trend__item">
                            <div class="trend__item__pic">
                                <img src="https://i.pinimg.com/474x/e9/da/78/e9da7876efb69a798cc268a65bb29bc1.jpg" alt="">
                            </div>
                            <div class="trend__item__text">
                                <h6>Flap cross-body bag</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product__price">$ 59.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Js Plugins -->
    <script src="Views/E-commerce-user/assets/js/jquery-3.3.1.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/main.js"></script>
</body>

</html>


<style>
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
        /* Enhanced button transition */
    }

    .add-to-cart:hover {
        background-color: #ff6699;
        /* Darker pink on hover */
        transform: translateY(-2px);
        /* Slight lift effect */
    }

    .add-to-cart a {
        text-decoration: none;
        color: white;
        transition: color 0.3s ease;
    }

    .trend {
        padding: 30px 0;
    }

    .section-title h4 {
        font-size: 20px;
        font-weight: bold;
        position: relative;
        display: inline-block;
        padding-bottom: 5px;
    }

    .section-title h4::after {
        content: "";
        display: block;
        width: 50px;
        height: 3px;
        background-color: red;
        margin-top: 5px;
    }

    .trend__content {
        padding: 10px;
    }

    .trend__item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .trend__item__pic img {
        width: 200px;
        height: 150px;
        object-fit: cover;
        border-radius: 5px;
    }

    .trend__item__text {
        margin-left: 15px;
    }

    .trend__item__text h6 {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .rating {
        color: gold;
        font-size: 12px;
    }

    .product__price {
        font-weight: bold;
        font-size: 16px;
    }

    .product__item {
        position: relative;
        background: #fff;
        transition: all 0.3s ease;
        /* Existing transition */
        margin-bottom: 20px;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .product__item:hover {
        transform: translateY(-5px);
        /* Slight lift effect */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }


    .product__item:hover .product__hover {
        opacity: 1;
        visibility: visible;
    }

    .product__item__pic {
        position: relative;
        width: 100%;
        height: 300px;
        overflow: hidden;
        /* Ensure smooth scaling stays within bounds */
    }

    .product__item__pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
        /* Add image scale transition */
    }

    .product__item:hover .product__item__pic img {
        transform: scale(1.05);
        /* Slight zoom effect on hover */
    }

    .product__hover {
        position: absolute;

        right: 20px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        transform: translateY(10px);
        /* Start slightly lower */
    }

    .product__item:hover .product__hover {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        /* Slide up on hover */
    }

    .product__hover li {

        list-style: none;
        margin-bottom: 10px;
        transition: all 0.3s ease;
        /* Smooth icon transitions */
    }

    .product__hover li a {
        display: block;
        width: 40px;
        background: #ffffff;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        transition: all 0.3s ease;
        text-decoration: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        /* Add subtle shadow to icons */
    }

    .product__hover li a:hover {
        background: #e7ab3c;
        color: #ffffff;
        transform: scale(1.1);
        /* Slight scale on icon hover */
    }


    .product__hover li a span {
        font-size: 16px;
        color: #111111;
        transition: color 0.3s ease;
    }

    .product__hover li a:hover span {
        color: #ffffff;
    }

    .product__item {
        transition: all 0.3s ease;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .product__hover li a:hover span {
        color: #ffffff;
    }

    .product__item__text {
        padding: 15px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .product__item__text h6 {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .product__item__text h6 a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .product__item__text h6 a:hover {
        color: #e7ab3c;
    }

    .product__item__text h6 a:hover {
        color: #e7ab3c;
    }

    .rating {
        color: #f5c518;
        font-size: 12px;
        margin-bottom: 10px;
    }

    .product__price {
        font-weight: bold;
        font-size: 16px;
        color: #333;
        transition: color 0.3s ease;
    }

    .product__item:hover .product__price {
        color: #e7ab3c;
        /* Price color change on hover */
    }

    .pagination__option {
        margin-top: 30px;
    }

    .pagination__option a {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        margin: 0 5px;
        color: #333;
        text-decoration: none;
        transition: all 0.3s;
    }

    .pagination__option a.active,
    .pagination__option a:hover {
        background: #e7ab3c;
        color: #fff;
    }

    .pagination__option i {
        font-size: 16px;
        line-height: 40px;
    }
</style>