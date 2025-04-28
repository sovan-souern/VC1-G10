<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Shop</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css">
    <!-- Font Awesome for rating stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        

        /* Header Styles */
        header h1 {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
            font-size: 2.5rem;
            width: 100%;
        }

        header p {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: white;
            font-size: 1.2rem;
            text-align: center;
        }

        .container {
            padding: 20px;
       
        }

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
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card img:active {
            transform: scale(0.98);
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .card img {
            pointer-events: auto;
            user-select: none;
            -webkit-user-drag: none;
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

        .product-name:hover {
            color: #e7ab3c;
        }

        .price:hover {
            color: #e7ab3c;
        }

        .add-to-cart:hover {
            color: white;
        }

        .original-price:hover {
            color: #e7ab3c;
        }

        .product-card:hover {
            color: #e7ab3c;
        }

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
            width: 100%;
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

        @media (max-width: 575px) {
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

            .products-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .product-card {
                object-fit: cover;
                width: 100%;
                margin: 0;
                height: auto;
            }

            .product-image {
                object-fit: cover;
                height: 150px !important;
                border-radius: 8px 8px 0 0;
            }

            .product-info {
                padding: 10px;
            }

            .product-name {
                font-size: 1.2rem;
                margin-bottom: 5px;
                font-family: serif;
            }

            .price {
                font-size: 1.5rem;
            }

            .add-to-cart {
                padding: 5px;
                font-size: 0.9rem;
            }

            . {
                padding: 20px 10px;
            }

            .discount-header h2 {
                font-size: 1.5rem;
            }

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
                animation: none !important;
            }

            .info {
                font-size: 0.85rem;
                padding: 8px;
            }

            .info-section {
                padding: 20px 10px;
            }

            .info-section h2 {
                font-size: 1.5rem;
            }

            .cta-button,
            .info-section .cta-button,
            .learn-more {
                padding: 10px 15px;
                font-size: 0.9rem;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            .cart-panel {
                width: 90%;
                max-width: none;
            }

            .discount-badge {
                font-size: 0.8rem;
                padding: 3px 8px;
            }

            .container {
                padding: 10px;
            }

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

        .product-card {
            position: relative;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
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
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
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
<<<<<<< HEAD
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
    .product-card {
        position: relative; /* Required for absolutely positioned children */
    }
/* icon */
    .general-product-hover {
        display: flex;
        justify-content: center; /* Center icons */
        gap: 15px; /* Space between icons */
        opacity: 0; /* Hide icons initially */
        transition: opacity 0.8s ease-in-out, visibility 0.8s ease-in-out; /* Smooth effect */
        visibility: hidden; /* Hide elements from interactions */
        position: absolute; /* Position the icons absolutely */
        bottom: 15px; /* Position from the bottom */
        left: 50%; /* Center horizontally */
        transform: translateX(-50%); /* Ensure perfect centering */
        pointer-events: none; /* Prevent mouse events when hidden */
    }

    /* When hovering over the product card, show the icons */
    .product-card:hover .general-product-hover {
        opacity: 1; /* Show icons */
        visibility: visible; /* Make it interactable */
        pointer-events: auto; /* Allow clicking */
    }

    /* Smooth delay to keep icons visible even after hover */
    .product-card:hover .general-product-hover {
        animation: stay-visible 3s forwards; /* Icons remain visible */
        color: #ff5252;
    }
    .general-product-hover :hover{
        color: green;
    }
    
    /* Define the stay-visible effect */

    .general-product-hover li {
        list-style: none; /* Remove bullet points */
    }

    .general-product-hover a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px; /* Width for circular icons */
        height: 50px; /* Height for circular icons */
        border-radius: 50%; /* Create circular shape */
        background-color: white; /* Set background color */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        text-decoration: none; /* Remove underline */
        transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth hover effect */
        color: black; /* Default icon color */
    }

    .general-product-hover a:hover {
        background-color: #f0f0f0; /* Background color on hover */
        transform: scale(1.2); /* Slightly enlarge on hover */
    }

    /* Icon styling */
    .general-product-hover a span {
        font-size: 1.5em; /* Adjust font size to fit within circle */
        height: 100%; /* Ensure full height */
        width: 100%; /* Ensure full width */
        display: flex; /* Center the icon within the circle */
        justify-content: center;
        align-items: center;
    }
    /* Default icon styling */
.general-product-hover a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px; /* Icon button size */
    height: 20px;
    border-radius: 50%;
    background-color: white; /* Default background */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease, color 0.3s ease; /* Smooth effect */
    color: black; /* Default icon color */
}

/* Change color on hover */
.general-product-hover a:hover {
    background-color: #ff5252; /* Background changes to red */
    transform: scale(1.2); /* Slightly enlarge */
}

/* Ensure icon inside the button also changes color */
.general-product-hover a:hover span,
.general-product-hover a:hover i {
    color: white !important; /* White icon inside */
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
                        <div class="product-image" style="background-image: url('<?php echo $image_url; ?>')">
                            <!--icon favorite , view   -->
                            <div class="product-image" style="background-image: url('<?php echo $image_url; ?>')">
                            <!--icon favorite , view   -->
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="/detail?id=<?php echo $discount['product_id']; ?>"> 

                                        <i class="arrow_expand"></i> 
                                    </a>
                                </li>
                                <li>
                                    <a href="/detail">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon_bag_alt"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </div>
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
    <!-- icon -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const productCards = document.querySelectorAll('.product-card'); // Select all product cards

    productCards.forEach(card => {
        const iconsContainer = card.querySelector('.general-product-hover'); // Select the container for icons

        card.addEventListener('click', function() {
            // Toggle the 'visible' class
            iconsContainer.classList.toggle('visible');
        });
    });
});
</script>
<!-- icon -->
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
=======
>>>>>>> 5d4a1790692a54f7061e803dfc60d515fb8cd11a
            background-color: pink;
            color: white;
            border: none;
            padding: 8px 15px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
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
/* 
        .general-product-hover li a:hover {
            background: #f8a4b9;
            color: #ffffff;
            transform: scale(1.15);
        } */

        .general-product-hover li a span {
            font-size: 16px;
            color: #111111;
            transition: color 0.3s ease;
        }

        .general-product-hover li a:hover span {
            color: #ffffff;
        }
     
        .product-card:hover .general-product-hover {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            width: 90%;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            color: #ff5252;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: #e63946;
        }

        .modal-inner {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: stretch;
        }

        .modal-product-image {
            flex: 1;
            max-width: 40%;
            margin-right: 20px;
        }

        .modal-product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
            max-height: 400px;
        }

        .modal-product-info {
            flex: 2;
            max-width: 60%;
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .modal-product-info h2 {
            margin-top: 0;
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }

        .modal-product-info p {
            font-size: 1rem;
            color: #666;
            margin: 8px 0;
            line-height: 1.5;
        }

        .modal-product-info .price {
            font-size: 1.2rem;
            color: #ff5252;
            font-weight: bold;
            margin: 10px 0;
        }

        #add-to-cart-modal {
            background-color: #ff6699;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        #add-to-cart-modal:hover {
            background-color: #e63946;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .modal-content {
                margin: 10% auto;
                padding: 15px;
                width: 95%;
            }

            .modal-inner {
                flex-direction: column;
            }

            .modal-product-image {
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 15px;
            }

            .modal-product-info {
                max-width: 100%;
                padding-left: 0;
            }

            .modal-product-info h2 {
                font-size: 1.5rem;
            }

            .modal-product-info p {
                font-size: 0.9rem;
            }

            #add-to-cart-modal {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
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

        /* Additional Styles */
        .discount-product-card:hover .price {
            color: #e7ab3c;
        }

        .card img {
            animation: slideLeftRight 3s infinite alternate ease-in-out;
            background: none;
        }

        @keyframes slideLeftRight {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(10px);
            }
        }

        @media (max-width: 575px) {
            .card img {
                animation: none !important;
            }
        }
    </style>
</head>

<body>
    <section class="discount-products">
        <div class="discount-header">
            <h2>Special Discounts</h2>
            <p>Limited time offers - save up to 30%</p>
        </div>

        <div class="container">
            <div class="products-container">
                <?php foreach ($products as $index => $product): ?>
                    <?php 
                    $hasDiscount = false;
                    foreach ($discounts as $key => $discount):
                        if ($product["product_id"] == $discount["product_id"]):
                            if ($discount["end_date"] >= date("Y-m-d") && $discount["start_date"] <= date("Y-m-d")):
                                $original_price = floatval($product["price"]);
                                $discount_percentage = floatval($discount["discount_percentage"]);
                                $discounted_price = $original_price * (1 - $discount_percentage / 100);
                                $product_name = htmlspecialchars($product["product_name"]);
                                $image_url = !empty($product["image"]) ? htmlspecialchars($product["image"]) : 'https://via.placeholder.com/150';
                                $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                                $original_price_formatted = "$" . number_format($original_price, 2);
                                $discounted_price_formatted = "$" . number_format($discounted_price, 2);
                                $product_content = isset($product["product_content"]) ? htmlspecialchars($product["product_content"]) : "No description available";
                                $product_quantity = isset($product["quantity"]) ? htmlspecialchars($product["quantity"]) : "No quantity available";
                    ?>
                                <div class="product-card">
                                    <div class="discount-badge"><?php echo $discount_badge; ?></div>
                                    <div class="product-image" style="background-image: url('<?php echo $image_url; ?>')">
                                        <ul class="general-product-hover product-hover-shared">
                                            <li>
                                                <a href="#" class="view-details-btn"
                                                   data-name="<?php echo $product_name; ?>"
                                                   data-price="<?php echo $discounted_price_formatted; ?>"
                                                   data-discount="<?php echo $discount_percentage; ?>"
                                                   data-image="<?php echo $image_url; ?>"
                                                   data-description="<?php echo $product_content; ?>"
                                                   data-quantity="<?php echo $product_quantity; ?>">
                                                    <i class="arrow_expand"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="add-to-favorites"
                                                   data-name="<?php echo $product_name; ?>"
                                                   data-price="<?php echo $discounted_price_formatted; ?>"
                                                   data-discount="<?php echo $discount_percentage; ?>"
                                                   data-image="<?php echo $image_url; ?>"
                                                   data-description="<?php echo $product_content; ?>"
                                                   data-quantity="<?php echo $product_quantity; ?>">
                                                    <span class="icon_heart_alt"></span>
                                                </a>
                                            </li>
                                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-name"><?php echo $product_name; ?></h5>
                                        <div class="price">
                                            <span class="original-price"><?php echo $original_price_formatted; ?></span>
                                            <?php echo $discounted_price_formatted; ?>
                                        </div>
                                        <button class="add-to-cart"
                                data-product-name="<?php echo $product_name; ?>"
                                data-product-price="<?php echo $discounted_price; ?>"
                                data-product-image="<?php echo $image_url; ?>">
                            Add to Cart
                        </button>
                                    </div>
                                </div>
                                <?php 
                                $hasDiscount = true;
                                break;
                                ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
     <!-- About Section -->
     <section class="about-section py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830" alt="About Our Products" class="img-fluid rounded-4 shadow">
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2 class="section-title mb-4">Why Choose Glow Skincare?</h2>
                        <p class="lead mb-4">At Glow Skincare, we believe that everyone deserves to feel confident in their skin. Our products are crafted with the finest natural ingredients, scientifically proven to nourish and rejuvenate your skin.</p>
                        <div class="features mb-4">
                            <div class="feature d-flex align-items-center mb-3">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div class="feature-text">
                                    <h5 class="mb-1">100% Natural Ingredients</h5>
                                    <p class="mb-0 text-muted">We use only the finest natural ingredients in our products.</p>
                                </div>
                            </div>
                            <div class="feature d-flex align-items-center mb-3">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <div class="feature-text">
                                    <h5 class="mb-1">No Harmful Chemicals</h5>
                                    <p class="mb-0 text-muted">Free from parabens, sulfates, and other harmful chemicals.</p>
                                </div>
                            </div>
                            <div class="feature d-flex align-items-center">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="feature-text">
                                    <h5 class="mb-1">Cruelty-Free</h5>
                                    <p class="mb-0 text-muted">We never test our products on animals.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-lg">Discover Our Story</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cards of Products -->
        <div class="cards">
            <div class="card">
                <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            </div>
            <div class="card">
                <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg" alt="Hydrating Moisturizer">
            </div>
            <div class="card">
                <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            </div>
            <div class="card">
                <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://www.beautypackaging.com/wp-content/uploads/sites/8/2024/11/017_main-13.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://assets.ajio.com/medias/sys_master/root/20230130/8F8S/63d803e2aeb269c6510329d0/-473Wx593H-4915693380-multi-MODEL.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://down-vn.img.susercontent.com/file/e51b7974a1af0f2ea03f5a96804217f5" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://s9.kh1.co/__image/w=600,h=600,fit=cover/1b/1be5d7c51a56e185757cc60b646d9e97d51a3a71.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://m.media-amazon.com/images/I/51Z2sQyCB-L.jpg" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98p-lyt0fqimk128fd" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://bellavitaorganic.com/cdn/shop/files/download_0315aafb-8c5d-4b3d-a00e-6cc8cc1b00b2.jpg?v=1732609831&width=1000" alt="Sunscreen SPF 50">
            </div>
            <div class="card">
                <img src="https://images.meesho.com/images/products/456587797/fwf1e_512.webp" alt="Sunscreen SPF 50">
            </div>
        </div>

        <!-- Bestsellers Section -->
        <section class="featured-products py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5">Bestsellers</h2>
                <div class="products-container">
                    <div class="product-card">
                        <div class="discount-badge">New</div>
                        <div class="product-image" style="background-image: url('https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Hydrating Moisturizer"
                                       data-price="$34.99"
                                       data-discount="0"
                                       data-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg"
                                       data-description="A lightweight, hydrating moisturizer for all skin types."
                                       data-quantity="50">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Hydrating Moisturizer"
                                       data-price="$34.99"
                                       data-discount="0"
                                       data-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg"
                                       data-description="A lightweight, hydrating moisturizer for all skin types."
                                       data-quantity="50">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Hydrating Moisturizer</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$34.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Hydrating Moisturizer"
                                    data-product-price="34.99"
                                    data-product-discount="0"
                                    data-product-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">Popular</div>
                        <div class="product-image" style="background-image: url('https://assets.unileversolutions.com/v1/104900175.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Vitamin C Serum"
                                       data-price="$42.99"
                                       data-discount="0"
                                       data-image="https://assets.unileversolutions.com/v1/104900175.jpg"
                                       data-description="Brightening serum with 20% Vitamin C."
                                       data-quantity="30">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Vitamin C Serum"
                                       data-price="$42.99"
                                       data-discount="0"
                                       data-image="https://assets.unileversolutions.com/v1/104900175.jpg"
                                       data-description="Brightening serum with 20% Vitamin C."
                                       data-quantity="30">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Vitamin C Serum</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price">$42.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Vitamin C Serum"
                                    data-product-price="42.99"
                                    data-product-discount="0"
                                    data-product-image="https://assets.unileversolutions.com/v1/104900175.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">Organic</div>
                        <div class="product-image" style="background-image: url('https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Sunscreen SPF 50"
                                       data-price="$28.99"
                                       data-discount="0"
                                       data-image="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d"
                                       data-description="Broad-spectrum SPF 50 sunscreen."
                                       data-quantity="40">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Sunscreen SPF 50"
                                       data-price="$28.99"
                                       data-discount="0"
                                       data-image="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d"
                                       data-description="Broad-spectrum SPF 50 sunscreen."
                                       data-quantity="40">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Sunscreen SPF 50</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price">$28.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Sunscreen SPF 50"
                                    data-product-price="28.99"
                                    data-product-discount="0"
                                    data-product-image="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">Limited</div>
                        <div class="product-image" style="background-image: url('https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Complete Skincare Set"
                                       data-price="$89.99"
                                       data-discount="0"
                                       data-image="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg"
                                       data-description="Complete skincare set for daily routine."
                                       data-quantity="20">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Complete Skincare Set"
                                       data-price="$89.99"
                                       data-discount="0"
                                       data-image="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg"
                                       data-description="Complete skincare set for daily routine."
                                       data-quantity="20">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Complete Skincare</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">$89.99</div>
                            <button class="add-to-cart"
                                    data-product-name="Complete Skincare Set"
                                    data-product-price="89.99"
                                    data-product-discount="0"
                                    data-product-image="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Special Offers Section -->
        <section class="special-offers py-5 bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h2 class="section-title">Special Offers</h2>
                        <p class="section-subtitle">Limited time deals with amazing discounts</p>
                    </div>
                </div>
                <div class="products-container">
                    <div class="product-card">
                        <div class="discount-badge">-20%</div>
                        <div class="product-image" style="background-image: url('https://jfkhealthworld.com/wp-content/uploads/2020/03/Facial-Skin-Care.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Anti-Aging Cream"
                                       data-price="$47.99"
                                       data-discount="20"
                                       data-image="https://jfkhealthworld.com/wp-content/uploads/2020/03/Facial-Skin-Care.jpg"
                                       data-description="Reduces fine lines and wrinkles."
                                       data-quantity="25">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Anti-Aging Cream"
                                       data-price="$47.99"
                                       data-discount="20"
                                       data-image="https://jfkhealthworld.com/wp-content/uploads/2020/03/Facial-Skin-Care.jpg"
                                       data-description="Reduces fine lines and wrinkles."
                                       data-quantity="25">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Anti-Aging Cream</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="price">
                                <span class="original-price">$59.99</span>
                                $47.99
                            </div>
                            <button class="add-to-cart"
                                    data-product-name="Anti-Aging Cream"
                                    data-product-price="47.99"
                                    data-product-discount="20"
                                    data-product-image="https://jfkhealthworld.com/wp-content/uploads/2020/03/Facial-Skin-Care.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">-15%</div>
                        <div class="product-image" style="background-image: url('https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Facial Cleanser"
                                       data-price="$28.04"
                                       data-discount="15"
                                       data-image="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830"
                                       data-description="Gentle cleanser for all skin types."
                                       data-quantity="35">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Facial Cleanser"
                                       data-price="$28.04"
                                       data-discount="15"
                                       data-image="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830"
                                       data-description="Gentle cleanser for all skin types."
                                       data-quantity="35">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Facial Cleanser</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">
                                <span class="original-price">$32.99</span>
                                $28.04
                            </div>
                            <button class="add-to-cart"
                                    data-product-name="Facial Cleanser"
                                    data-product-price="28.04"
                                    data-product-discount="15"
                                    data-product-image="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">-25%</div>
                        <div class="product-image" style="background-image: url('https://www.arfaana.com/wp-content/uploads/2020/10/dove-nourishing-body-care-beauty-cream-deep-moisturisation-with-non-greasy-feel.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Nourishing Body Lotion"
                                       data-price="$29.99"
                                       data-discount="25"
                                       data-image="https://www.arfaana.com/wp-content/uploads/2020/10/dove-nourishing-body-care-beauty-cream-deep-moisturisation-with-non-greasy-feel.jpg"
                                       data-description="Deeply moisturizing body lotion."
                                       data-quantity="45">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Nourishing Body Lotion"
                                       data-price="$29.99"
                                       data-discount="25"
                                       data-image="https://www.arfaana.com/wp-content/uploads/2020/10/dove-nourishing-body-care-beauty-cream-deep-moisturisation-with-non-greasy-feel.jpg"
                                       data-description="Deeply moisturizing body lotion."
                                       data-quantity="45">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Nourishing Body</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="price">
                                <span class="original-price">$39.99</span>
                                $29.99
                            </div>
                            <button class="add-to-cart"
                                    data-product-name="Nourishing Body Lotion"
                                    data-product-price="29.99"
                                    data-product-discount="25"
                                    data-product-image="https://www.arfaana.com/wp-content/uploads/2020/10/dove-nourishing-body-care-beauty-cream-deep-moisturisation-with-non-greasy-feel.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="discount-badge">-30%</div>
                        <div class="product-image" style="background-image: url('https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg')">
                            <ul class="general-product-hover product-hover-shared">
                                <li>
                                    <a href="#" class="view-details-btn"
                                       data-name="Overnight Repair Cream"
                                       data-price="$34.99"
                                       data-discount="30"
                                       data-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg"
                                       data-description="Repairs skin overnight for a youthful glow."
                                       data-quantity="15">
                                        <i class="arrow_expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="add-to-favorites"
                                       data-name="Overnight Repair Cream"
                                       data-price="$34.99"
                                       data-discount="30"
                                       data-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg"
                                       data-description="Repairs skin overnight for a youthful glow."
                                       data-quantity="15">
                                        <span class="icon_heart_alt"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                            </ul>
                        </div>
                        <div class="product-info">
                            <h5 class="product-name">Overnight Repair</h5>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="price">
                                <span class="original-price">$49.99</span>
                                $34.99
                            </div>
                            <button class="add-to-cart"
                                    data-product-name="Overnight Repair Cream"
                                    data-product-price="34.99"
                                    data-product-discount="30"
                                    data-product-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Cart Functionality
            const cartSidebar = document.getElementById('cart-sidebar');
            const cartOverlay = document.getElementById('cart-overlay');
            const closeCart = document.getElementById('close-cart');
            const cartItems = document.getElementById('cart-items');
            const cartSubtotal = document.getElementById('cart-subtotal');
            const cartCount = document.getElementById('cart-count');
            const clearCartBtn = document.getElementById('clear-cart');
            const emptyCartMessage = document.getElementById('empty-cart-message');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            function updateCartUI() {
                while (cartItems.firstChild && cartItems.firstChild !== emptyCartMessage) {
                    cartItems.removeChild(cartItems.firstChild);
                }

                if (cart.length === 0) {
                    emptyCartMessage.style.display = 'block';
                } else {
                    emptyCartMessage.style.display = 'none';
                    cart.forEach((item, index) => {
                        const cartItem = document.createElement('div');
                        cartItem.classList.add('cart-item');
                        cartItem.innerHTML = `
                            <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                            <div class="cart-item-details">
                                <h6 class="cart-item-title">${item.name}</h6>
                                <div class="cart-item-price">$${item.price}</div>
                                <div class="cart-item-discount">Discount: ${item.discount}%</div>
                                <div class="cart-item-quantity">
                                    <button class="quantity-btn decrease-btn" data-index="${index}">-</button>
                                    <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-index="${index}">
                                    <button class="quantity-btn increase-btn" data-index="${index}">+</button>
                                </div>
                            </div>
                            <div class="cart-item-remove" data-index="${index}">
                                <i class="fas fa-trash"></i>
                            </div>
                        `;
                        cartItems.insertBefore(cartItem, emptyCartMessage);
                        cartItem.querySelector('.decrease-btn').addEventListener('click', decreaseQuantity);
                        cartItem.querySelector('.increase-btn').addEventListener('click', increaseQuantity);
                        cartItem.querySelector('.quantity-input').addEventListener('change', updateQuantity);
                        cartItem.querySelector('.cart-item-remove').addEventListener('click', removeItem);
                    });
                }

                const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
                const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
                cartCount.textContent = totalItems || 0;
                cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
                localStorage.setItem('cart', JSON.stringify(cart));
            }

            function addToCart(e) {
                const button = e.target;
                const name = button.getAttribute('data-product-name');
                const price = parseFloat(button.getAttribute('data-product-price'));
                const image = button.getAttribute('data-product-image');
                const discount = parseFloat(button.getAttribute('data-product-discount')) || 0;

                const existingItemIndex = cart.findIndex(item => item.name === name);
                if (existingItemIndex > -1) {
                    cart[existingItemIndex].quantity++;
                } else {
                    cart.push({ name, price, image, discount, quantity: 1 });
                }

                const toast = document.createElement('div');
                toast.classList.add('toast', 'show', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
                toast.setAttribute('role', 'alert');
                toast.setAttribute('aria-live', 'assertive');
                toast.setAttribute('aria-atomic', 'true');
                toast.innerHTML = `
                    <div class="toast-header">
                        <strong class="me-auto">Added to Cart</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${name} has been added to your cart.
                    </div>
                `;
                document.body.appendChild(toast);
                setTimeout(() => toast.remove(), 3000);

                updateCartUI();
            }

            function decreaseQuantity(e) {
                const index = e.target.getAttribute('data-index');
                if (cart[index].quantity > 1) {
                    cart[index].quantity--;
                } else {
                    cart.splice(index, 1);
                }
                updateCartUI();
            }

            function increaseQuantity(e) {
                const index = e.target.getAttribute('data-index');
                cart[index].quantity++;
                updateCartUI();
            }

            function updateQuantity(e) {
                const index = e.target.getAttribute('data-index');
                const quantity = parseInt(e.target.value);
                if (quantity > 0) {
                    cart[index].quantity = quantity;
                } else {
                    cart.splice(index, 1);
                }
                updateCartUI();
            }

            function removeItem(e) {
                const index = e.target.closest('.cart-item-remove').getAttribute('data-index');
                cart.splice(index, 1);
                updateCartUI();
            }

            function clearCart() {
                cart = [];
                updateCartUI();
            }

            addToCartButtons.forEach(button => {
                button.addEventListener('click', addToCart);
            });

            // Favorites Functionality
            const addToFavoritesButtons = document.querySelectorAll('.add-to-favorites');
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

            function addToFavorites(e) {
                e.preventDefault();
                const button = e.target.closest('.add-to-favorites');
                const name = button.getAttribute('data-name');
                const price = button.getAttribute('data-price');
                const image = button.getAttribute('data-image');
                const discount = parseFloat(button.getAttribute('data-discount')) || 0;
                const description = button.getAttribute('data-description');
                const quantity = button.getAttribute('data-quantity');

                const existingItemIndex = favorites.findIndex(item => item.name === name);
                if (existingItemIndex === -1) {
                    favorites.push({ name, price, image, discount, description, quantity });
                    localStorage.setItem('favorites', JSON.stringify(favorites));

                    const toast = document.createElement('div');
                    toast.classList.add('toast', 'show', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
                    toast.setAttribute('role', 'alert');
                    toast.setAttribute('aria-live', 'assertive');
                    toast.setAttribute('aria-atomic', 'true');
                    toast.innerHTML = `
                        <div class="toast-header">
                            <strong class="me-auto">Added to Favorites</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            ${name} has been added to your favorites.
                        </div>
                    `;
                    document.body.appendChild(toast);
                    setTimeout(() => toast.remove(), 3000);
                }
            }

            addToFavoritesButtons.forEach(button => {
                button.addEventListener('click', addToFavorites);
            });

            // Modal Functionality
            $('.view-details-btn').click(function(e) {
                e.preventDefault();
                const productName = $(this).data('name');
                const productPrice = $(this).data('price');
                const productImage = $(this).data('image');
                const productDescription = $(this).data('description');
                const productQuantity = $(this).data('quantity');
                const productDiscount = $(this).data('discount') || 0;

                $('#modal-product-name').text(productName);
                $('#modal-product-price').text(productPrice);
                $('#modal-product-image').attr('src', productImage);
                $('#modal-product-description').text(productDescription);
                $('#modal-product-quantity').text(productQuantity);
                $('#modal-product-discount').text(productDiscount);
                $('#product-modal').fadeIn();

                // Add to Cart from Modal
                $('#add-to-cart-modal').off('click').on('click', function() {
                    const name = productName;
                    const price = parseFloat(productPrice.replace('$', ''));
                    const image = productImage;
                    const discount = parseFloat(productDiscount);

                    const existingItemIndex = cart.findIndex(item => item.name === name);
                    if (existingItemIndex > -1) {
                        cart[existingItemIndex].quantity++;
                    } else {
                        cart.push({ name, price, image, discount, quantity: 1 });
                    }

                    const toast = document.createElement('div');
                    toast.classList.add('toast', 'show', 'position-fixed', 'bottom-0', 'end-0', 'm-3');
                    toast.innerHTML = `
                        <div class="toast-header">
                            <strong class="me-auto">Added to Cart</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            ${name} has been added to your cart.
                        </div>
                    `;
                    document.body.appendChild(toast);
                    setTimeout(() => toast.remove(), 3000);

                    updateCartUI();
                    $('#product-modal').fadeOut();
                });
            });

            $('.close-btn').click(function() {
                $('#product-modal').fadeOut();
            });

            $(window).click(function(event) {
                if ($(event.target).is('#product-modal')) {
                    $('#product-modal').fadeOut();
                }
            });

            // Cards Carousel Animation
            const container = document.querySelector('.cards');
            container.style.overflowX = 'hidden';
            const originalScrollWidth = container.scrollWidth;
            const cards = Array.from(container.querySelectorAll('.card'));
            cards.forEach(card => {
                const clone = card.cloneNode(true);
                container.appendChild(clone);
            });
            container.scrollLeft = originalScrollWidth;
            const speed = 100;
            let lastTime = performance.now();

            function animate(currentTime) {
                const deltaTime = (currentTime - lastTime) / 1000;
                container.scrollLeft -= speed * deltaTime;
                if (container.scrollLeft <= 0) {
                    container.scrollLeft += originalScrollWidth;
                }
                lastTime = currentTime;
                requestAnimationFrame(animate);
            }
            requestAnimationFrame(animate);

            const images = document.querySelectorAll('.card img');
            images.forEach(img => {
                img.style.animation = 'none';
            });

            // Animate on Scroll
            const animateElements = document.querySelectorAll('.product-card, .feature');
            function checkIfInView() {
                animateElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('animate');
                    }
                });
            }
            window.addEventListener('scroll', checkIfInView);
            checkIfInView();
        });
    </script>
</body>
</html>