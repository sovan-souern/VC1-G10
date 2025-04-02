
<style>
        body {
            padding: 20px;
        }

        /* Header Styles */
        header h1 {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: white;
            font-size: 1.2rem;
            text-align: center;
        }

        /* Container */
        .container {
            padding: 20px;
        }

        /* Cards Section */
        .cards {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding-bottom: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            flex: 0 0 auto;
            overflow: hidden;
            transition: transform 0.3s ease;
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            animation: spinFromRight 4s linear infinite;
        }

        .card-content {
            padding: 15px;
        }

        .card-content h3 {
            margin: 0 0 10px;
            font-size: 1.5rem;
        }

        .card-content p {
            font-size: 1rem;
            color: #666;
        }

        .card-content a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .card-content a:hover {
            background: #ff3b2f;
        }

        /* Spinning Animation Starting from Right */

        /* @keyframes spinFromRight {
            0% {
                transform: rotate(90deg); Starts from right
            }
            100% {
                transform: rotate(450deg); Completes full circle + starting point
            } 
        }  */

        /* Info Overlay */
        .info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(224, 116, 116, 0.7);
            color: white;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .info,
        .card:active .info {
            opacity: 1;
        }

        /* Content Section */
        .content-section {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-top: 40px;
        }

        .text-content {
            flex: 1;
        }

        .text-content h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .text-content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
        }

        .text-content .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .text-content .cta-button:hover {
            background: #ff3b2f;
        }

        /* 
        .image-content-right img {
            width: 100%;
            height: auto;
            border-radius: 10px 70px 10px 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .image-content-left img {
            width: 100%;
            height: auto;
            border-radius: 10px 70px 10px 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        } */

        /* Full Screen Image */
        .full-screen-image {
            width: 80%;
            height: 80vh;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px auto 0;
            object-fit: cover;
        }

        /* Info Section */
        .info-section {
            background-color: #fff;
            padding: 40px 0;
            text-align: center;
        }

        .info-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .info-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #666;
            max-width: 800px;
            margin: 0 auto 20px;
        }

        .info-section .cta-button {
            display: inline-block;
            padding: 12px 25px;
            background: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .info-section .cta-button:hover {
            background: #ff3b2f;
        }

        /* Product Container */
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }



        .product-card1 img {
            width: 100%;
            border-radius: 10px;
            animation: spinFromRight 4s linear infinite;
        }

        .product-card1 p {
            display: none;
            margin-top: 10px;
        }

        .learn-more {
            background-color: #ff6666;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }


        .discount-cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }




        .discount-products {
            padding: 40px 20px;
            background: #f9f3f3;
            margin: 40px 0;
        }

        .discount-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .discount-header h2 {
            font-size: 2.2rem;
            color: #ff6f61;
            margin-bottom: 10px;
        }

        .discount-header p {
            color: #666;
            font-size: 1.1rem;
        }


        .original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1rem;
            margin-right: 10px;
        }


        body {
            
            padding: 20px;
        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        @media (max-width: 1199px) {
            .products-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 767px) {
            .products-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
/* phone */
        /* @media (max-width: 575px) {
            
            .products-container {
                grid-template-columns: 1fr;
            }

            .text-content{
                h2{
                    width: 30vh;
                    font-size :25px;
                }
                p{
                    width: 20vh;
                    margin-bottom: 50%;
                    font-size :15px;
                }
                .cta-button{
                    a{
                        width: 20vh;
                        margin-bottom: 40%;
                    }
                }
            }
            .image-content-right{
                img{
                }
            }
        } */
        /* Existing styles remain unchanged except for the media query and related adjustments */

/* Phone-specific styles */
/* Phone-specific styles */
@media (max-width: 575px) {
    /* General adjustments */
    body {
        padding: 10px;
        font-size: 14px;
    }
    
    header h1 {
        font-size: 1.8rem;
        padding: 15px;
    }
    
    header p {
        font-size: 1.2rem;
    }
    
    /* Product cards container */
    .products-container {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    
    /* Product cards */
    .product-card {
        width: 100%;
        margin: 0;
        height: auto;
    }
    
    .product-image {
        height: 150px !important; /* Adjusted for better proportions */
        border-radius: 8px 8px 0 0;
        object-fit:cover;
    }
    
    .product-info {
        padding: 10px;
    }
    
    .product-name {
        font-size: 1.2rem;
        margin-bottom: 5px;
        font-family:serif;
    }
    
    .price {
        font-size: 1.5rem;
    }
    
    .add-to-cart {
        padding: 5px;
        font-size: 0.9rem;
    }
    
    /* Discount section */
    .discount-products {
        padding: 20px 10px;
    }
    
    .discount-header h2 {
        font-size: 1.5rem;
    }
    
    /* Content sections */
    .content-section {
        flex-direction: column;
        gap: 20px;
    }
    
    .text-content {
        order: 2;
    }
    
    .image-content-right,
    .image-content-left,
    .image-content-lefts {
        order: 1;
        width: 100%;
    }
    
    .image-content-right img,
    .image-content-left img,
    .image-content-lefts img {
        width: 100%;
        height: auto;
        max-height: 250px;
        object-fit: cover;
        border-radius: 10px !important;
    }
    
    /* Product cards in product-container */
    .product-container {
        flex-direction: column;
        align-items: center;
    }
    
    .product-card1 {
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
    }
    
    .product-card1 img {
        height: 180px;
        object-fit: cover;
    }
    
    /* Cards carousel */
    .cards {
        gap: 10px;
        padding-bottom: 15px;
    }
    
    .card {
        width: 200px;
        flex: 0 0 auto;
    }
    
    .card img {
        height: 150px;
    }
    
    /* Info overlay */
    .info {
        font-size: 0.85rem;
        padding: 8px;
    }
    
    /* Info section */
    .info-section {
        padding: 20px 10px;
    }
    
    .info-section h2 {
        font-size: 1.5rem;
    }
    
    /* Buttons */
    .cta-button, 
    .info-section .cta-button,
    .learn-more {
        padding: 10px 15px;
        font-size: 0.9rem;
    }
    
    /* Ensure all images maintain aspect ratio */
    img {
        max-width: 100%;
        height: auto;
    }
    
    /* Cart panel adjustments */
    .cart-panel {
        width: 90%;
        max-width: none;
    }
    
    /* Discount badge */
    .discount-badge {
        font-size: 0.8rem;
        padding: 3px 8px;
    }
    
    /* Remove animations on mobile */
    .card img {
        animation: none !important;
    }
    
    /* Adjust spacing */
    .container {
        padding: 10px;
    }
    
    /* Full width for text content */
    .text-content {
        width: 100%;
    }
    
    .text-content h2 {
        font-size: 1.5rem;
    }
    
    .text-content p {
        font-size: 0.95rem;
    }
}
        /* card */
        .product-card{
            /* height: 70vh; */
            .product-info{
                display: flex;
                flex-direction:column;
                flex:wrap;
            }
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;


        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5252;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .rating {
            color: #ffc107;
            margin-bottom: 5px;
        }

        .price {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.1rem;
        }

        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
            margin-right: 8px;
        }

        .product-card1 {

            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .add-to-cart {
        background-color: pink;
        color: white;
        border: none;
        padding: 8px 15px;
        margin-top: 10px;
        cursor: pointer;
        width: 100%;
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
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Glow Skincare</h1>
        <p>Your journey to radiant skin starts here!</p>
    </header>

    <!-- Cards of Products -->
    <div class="cards">
        <div class="card">
            <img src="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg" alt="Hydrating Moisturizer">
            <div class="info">Deeply nourish your skin with our hydrating moisturizer. Perfect for all skin types.</div>
        </div>
        <div class="card">
            <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            <div class="info">Brighten your complexion with our powerful Vitamin C serum.</div>
        </div>
        <div class="card">
            <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
            <div class="info">Protect your skin from harmful UV rays with our lightweight sunscreen.</div>
        </div>
        <div class="card">
            <img src="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg" alt="Hydrating Moisturizer">
            <div class="info">Deeply nourish your skin with our hydrating moisturizer. Perfect for all skin types.</div>
        </div>
        <div class="card">
            <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            <div class="info">Brighten your complexion with our powerful Vitamin C serum.</div>
        </div>
        <div class="card">
            <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
            <div class="info">Protect your skin from harmful UV rays with our lightweight sunscreen.</div>
        </div>
    </div>
    <section class="discount-products">
    <div class="discount-header">
        <h2>Special Discounts</h2>
        <p>Limited time offers - save up to 30%</p>
    </div>

    <div class="container">
        <div class="products-container">
            <?php
            if (isset($discounts) && is_array($discounts) && !empty($discounts)) {
                foreach ($discounts as $discount) {
                    // Calculate discounted price
                    $original_price = floatval($discount["price"]);
                    $discount_percentage = floatval($discount["discount_percentage"]);
                    $discounted_price = $original_price * (1 - $discount_percentage / 100);

                    // Sanitize and prepare data
                    $product_name = htmlspecialchars($discount["product_name"]);
                    $image_url = !empty($discount["image"]) ? htmlspecialchars($discount["image"]) : 'https://via.placeholder.com/150';
                    $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                    $original_price_formatted = "$" . number_format($original_price, 2); 
                    $discounted_price_formatted = "$" . number_format($discounted_price, 2);
            ?>
                    <!-- Product Card -->
                    <div class="product-card">
                        <div class="discount-badge"><?php echo $discount_badge; ?></div>
                        <div class="product-image" style="background-image: url('<?php echo $image_url; ?>')"></div>
                        <div class="product-info">
                            <h5 class="product-name"><?php echo $product_name; ?></h5>
                          
                            <div class="price">
                                <span class="original-price"><?php echo $original_price_formatted; ?></span>
                                <?php echo $discounted_price_formatted; ?>
                            </div>
                            <!-- Updated add-to-cart button with correct variables -->
                            <button class="add-to-cart" 
                                    data-product-name="<?php echo $product_name; ?>" 
                                    data-product-price="<?php echo $discounted_price; ?>" 
                                    data-product-image="<?php echo $image_url; ?>">Add to Cart</button>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<p>No discounted products available.</p>';
            }
            ?>
        </div>
    </div>
</section>



    <!-- Left Paragraph Right Image -->
    <div class="container">
        <div class="content-section">
            <div class="text-content">
                <h2>Why Choose Glow Skincare?</h2>
                <p>At Glow Skincare, we believe that everyone deserves to feel confident in their skin. Our products are crafted with the finest natural ingredients, scientifically proven to nourish and rejuvenate your skin.</p>
                <a href="#" class="cta-button">Discover Our Story</a>
            </div>
            <div class="image-content-right">
                <img src="https://www.arfaana.com/wp-content/uploads/2020/10/dove-nourishing-body-care-beauty-cream-deep-moisturisation-with-non-greasy-feel.jpg" alt="Glow Skincare Products">
            </div>
        </div>
    </div>




    <!-- Left Image  Paragraph -->
    <div class="container">
        <div class="content-section">
            <div class="image-content-left">
                <img src="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830" alt="Glow Skincare Products" style="   border-radius: 10px 70px 10px 70px;
                 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; max-width: 900px; height: auto; display: block; margin: 20px auto;">
            </div>
            <div class="image-content-lefts">
                <img src="https://jfkhealthworld.com/wp-content/uploads/2020/03/Facial-Skin-Care.jpg"
                    alt="Glow Skincare Products"
                    style="   border-radius: 10px 70px 10px 70px;
                 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; max-width: 900px; height: auto; display: block; margin: 20px auto;">
            </div>

        </div>
    </div>

    <!-- Product Cards -->
    <div class="product-container">
        <div class="product-card1">
            <img src="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg" alt="Hydrating Moisturizer">
            <p>Deeply nourish your skin with our hydrating moisturizer. Perfect for all skin types.</p>
            <button class="learn-more">Learn More</button>
        </div>
        <div class="product-card1">
            <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            <p>Brighten your complexion with our powerful Vitamin C serum.</p>
            <button class="learn-more">Learn More</button>
        </div>
        <div class="product-card1">
            <img src="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg" alt="Hydrating Moisturizer">
            <p>Deeply nourish your skin with our hydrating moisturizer. Perfect for all skin types.</p>
            <button class="learn-more">Learn More</button>
        </div>
    </div>

    <!-- Full-Screen Image Section -->
    <!-- <div class="full-screen-image">
        <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Hydrating Moisturizer">
    </div> -->

    <!-- Information Section -->
    <div class="info-section">
        <div class="container">
            <h2>About Our Skincare Philosophy</h2>
            <p>At Glow Skincare, we are committed to providing you with products that are not only effective but also safe and sustainable.</p>
            <a href="#" class="cta-button">Learn More About Us</a>
        </div>
    </div>



    <!-- Discount Products Section -->



    <script>
        // Simple script for the discount section
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.closest('.discount-card').querySelector('h3').textContent;
                alert(`Added ${productName} to your cart!`);
            });
        });
    </script>

    <script>
        // Select the container with class 'cards'
        const container = document.querySelector('.cards');

        // Hide the scroll bar to keep the UI clean
        container.style.overflowX = 'hidden';

        // Get the width of the original set of cards
        const originalScrollWidth = container.scrollWidth;

        // Clone all existing cards and append them for seamless looping
        const cards = Array.from(container.querySelectorAll('.card'));
        cards.forEach(card => {
            const clone = card.cloneNode(true);
            container.appendChild(clone);
        });

        // Set the initial scroll position
        container.scrollLeft = originalScrollWidth;

        // Define the speed of the animation (pixels per second)
        const speed = 100;
        let lastTime = performance.now();

        // Animation function for continuous movement
        function animate(currentTime) {
            const deltaTime = (currentTime - lastTime) / 1000;
            container.scrollLeft -= speed * deltaTime;
            if (container.scrollLeft <= 0) {
                container.scrollLeft += originalScrollWidth;
            }
            lastTime = currentTime;
            requestAnimationFrame(animate);
        }

        // Start the animation
        requestAnimationFrame(animate);

        // Ensure images have no animations
        const images = document.querySelectorAll('.card img');
        images.forEach(img => {
            img.style.animation = 'none';
        });
    </script>







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


    <!-- Inline CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Shared Styles for Add to Cart Button */
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

        /* Discounted Product Card Styles */
        .discount-product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .discount-product-card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            transition: filter 0.3s ease;
        }

        .discount-product-card:hover .product-image {
            filter: brightness(110%);
        }

        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5252;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .discount-product-card:hover .discount-badge {
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .discount-product-hover {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: row;
            gap: 10px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            padding: 0;
            z-index: 2;
        }

        .discount-product-card:hover .discount-product-hover {
            opacity: 1;
            visibility: visible;
        }

        .discount-product-hover li {
            list-style: none;
            margin: 0;
            transition: all 0.3s ease;
        }

        .discount-product-hover li a {
            display: block;
            width: 40px;
            height: 40px;
            background: #ffffff;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .discount-product-hover li a:hover {
            background: #ff5252;
            color: #ffffff;
            transform: scale(1.15);
        }

        .discount-product-hover li a span {
            font-size: 16px;
            color: #111111;
            transition: color 0.3s ease;
        }

        .discount-product-hover li a:hover span {
            color: #ffffff;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .discount-product-card:hover .product-name {
            color: #ff5252;
        }

        .rating {
            color: #ffc107;
            margin-bottom: 5px;
        }

        .price {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .discount-product-card:hover .price {
            color: #ff5252;
        }

        .original-price {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 0.9rem;
            margin-right: 8px;
        }

        /* General Product Item Styles */
        .general-product-item {
            position: relative;
            background: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .general-product-item:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .general-product-pic {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .general-product-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .general-product-item:hover .general-product-pic img {
            transform: scale(1.1);
        }

        .general-product-hover {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: row;
            gap: 10px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            padding: 0;
            z-index: 2;
        }

        .general-product-item:hover .general-product-hover {
            opacity: 1;
            visibility: visible;
        }

        .general-product-hover li {
            list-style: none;
            margin: 0;
            transition: all 0.3s ease;
        }

        .general-product-hover li a {
            display: block;
            width: 40px;
            height: 40px;
            background: #ffffff;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .general-product-hover li a:hover {
            background: #e7ab3c;
            color: #ffffff;
            transform: scale(1.15);
        }

        .general-product-hover li a span {
            font-size: 16px;
            color: #111111;
            transition: color 0.3s ease;
        }

        .general-product-hover li a:hover span {
            color: #ffffff;
        }

        .general-product-text {
            padding: 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .general-product-text h6 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .general-product-text h6 a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .general-product-item:hover .general-product-text h6 a {
            color: #e7ab3c;
        }

        .general-product-price {
            font-weight: bold;
            font-size: 16px;
            color: #333;
            transition: color 0.3s ease;
        }

        .general-product-item:hover .general-product-price {
            color: #e7ab3c;
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

        /* Image Zoom Modal Styles */
        .image-zoom-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease;
        }

        .image-zoom-modal.active {
            display: flex;
            opacity: 1;
        }

        .image-zoom-content {
            position: relative;
            text-align: center;
        }

        #zoomed-image {
            max-width: 90%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .back-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ffffff;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .back-btn:hover {
            background: #ff5252;
            color: #ffffff;
            transform: scale(1.05);
        }

        /* Trend Section Styles */
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

        .product__price {
            font-weight: bold;
            font-size: 16px;
        }

        /* Pagination Styles */
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

    <!-- JavaScript -->
<!-- JavaScript -->
<script src="Views/E-commerce-user/assets/js/jquery-3.3.1.min.js"></script>
<script src="Views/E-commerce-user/assets/js/main.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const cartPanel = document.querySelector('.cart-panel');
    const closeCart = document.querySelector('.close-cart');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartItemCount = document.querySelector('#cart-item-count');
    const subtotalAmount = document.querySelector('#subtotal-amount');
    const imageZoomModal = document.querySelector('.image-zoom-modal');
    const zoomedImage = document.querySelector('#zoomed-image');
    const backBtn = document.querySelector('.back-btn');
    const zoomButtons = document.querySelectorAll('.image-zoom');
    let cartItems = [];

    // Load cart from localStorage on page load
    try {
        cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    } catch (e) {
        console.error("Error parsing cart from localStorage:", e);
        cartItems = [];
    }

    // Render cart items on page load
    cartItems.forEach(item => addCartItem(item));
    updateCartSummary();

    // Cart Functionality
    function toggleCart() {
        cartPanel.classList.toggle('active');
    }

    closeCart.addEventListener('click', toggleCart);

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

    function updateCartSummary() {
        const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
        cartItemCount.textContent = `${totalItems} items`;
        subtotalAmount.textContent = `$${subtotal.toFixed(2)}`;
    }

    // Image Zoom Functionality
    zoomButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const imageUrl = this.getAttribute('data-image');
            zoomedImage.src = imageUrl;
            imageZoomModal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });
    });

    backBtn.addEventListener('click', function() {
        imageZoomModal.classList.remove('active');
        document.body.style.overflow = 'auto'; // Restore scrolling
    });

    // Close modal when clicking outside the image
    imageZoomModal.addEventListener('click', function(e) {
        if (e.target === imageZoomModal) {
            imageZoomModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
});
</script>



</body>

</html>