<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Shop</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
     <!-- tre 3 nav bar -->
    <!-- <link rel="stylesheet" href="Views/E-commerce-user/assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css">
    <!-- Font Awesome for rating stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
        body {
            padding: 20px;
        }
        .discount-product-card:hover .price {
            color: #e7ab3c; /* Added hover effect for price in discount card */
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
        }

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
        .product-name:hover{
            color: #e7ab3c;
        }
        .price:hover{
            color: #e7ab3c;
        }
        .add-to-cart:hover{
            color:white;
        }
        .original-price:hover{
                color: #e7ab3c;
        }
        .product-card:hover{
            color: #e7ab3c;
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
            /* border-radius: 10px; */
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
        object-fit:cover;
        width: 100%;
        margin: 0;
        height: auto;
    }
    
    .product-image {
        object-fit:cover;
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
    .product-card {
        position: relative; /* Required for absolutely positioned children */
        }

        .general-product-hover {
            display: flex;
            justify-content: center; /* Center icons */
            gap: 15px; /* Space between icons */
            opacity: 0; /* Hide icons initially */
            transition: opacity 0.3s ease; /* Smooth fade effect */
            position: absolute; /* Position the icons absolutely */
            bottom: 15px; /* Position from the bottom */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Correct centering of icons */
            pointer-events: none; /* Prevent mouse events when hidden */
        }

        .product-card:hover .general-product-hover {
            opacity: 1; /* Show icons when hovering over the card */
            pointer-events: auto; /* Enable interactions on hover */
        }

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
            transition: background-color 0.3s ease; /* Transition for hover */
            color: black; /* Set default icon color */
        }

        .general-product-hover a:hover {
            background-color: #f0f0f0; /* Background color on hover */
        }

        /* Specific icon size adjustment if needed */
        .general-product-hover a span {
            font-size: 1.5em; /* Adjust font size to fit within circle */
            height: 100%; /* Ensure it takes full height */
            width: 100%; /* Ensure it takes full width */
            display: flex; /* Center the icon within the circle */
            justify-content: center;
            align-items: center;
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
            /* border-radius: 10px; */
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
                                    <a href="#" class="image-zoom" data-image="<?php echo $image; ?>">
                                        <i class="arrow_expand"></i> <!-- Font Awesome's expand icon -->
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
                            <button class="add-to-cart" data-product-name="<?php echo $product_name; ?>" data-product-price="<?php echo $discounted_price; ?>" data-product-image="<?php echo $image_url; ?>">Add to Cart</button>
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
   

</body>

</html>