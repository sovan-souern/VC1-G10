
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
            transition: transform 0.2s ease, box-shadow 0.2s ease; /* Smooth feedback */
        }

        /* Touch/Click Interaction */
        .card img:active {
            transform: scale(0.98); /* Slight shrink effect */
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2); /* Subtle inset shadow */
        }

        /* Ensure no zoom or pop-up on touch/click */
        .card img {
            pointer-events: auto; /* Allow interaction */
            user-select: none; /* Prevent selection */
            -webkit-user-drag: none; /* Prevent dragging */
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
            animation: none !important;

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

    /* Add this to your existing CSS */
.card img {
    animation: slideLeftRight 3s infinite alternate ease-in-out;
    background: none; /* Ensure no background */
}

/* Keyframes for left-to-right animation */
@keyframes slideLeftRight {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(10px);
    }
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
 <!-- Hero Section -->
 <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-4">Discover Your Natural Beauty</h1>
                    <p class="lead mb-4">Premium skincare products made with natural ingredients to help you achieve radiant, healthy skin.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
                        <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1480&q=80" alt="Skincare Products" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>
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
        .discount-product-card:hover .price {
            color: #e7ab3c; /* Added hover effect for price in discount card */
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





















/* Footer Section
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Skincare | Premium Beauty Products</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="brand-text">Glow</span><span class="brand-accent">Skincare</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collections</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="#" class="nav-icon me-3"><i class="fas fa-search"></i></a>
                    <a href="#" class="nav-icon me-3"><i class="fas fa-user"></i></a>
                    <a href="#" class="nav-icon position-relative" id="cart-icon">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-badge" id="cart-count">0</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-4">Discover Your Natural Beauty</h1>
                    <p class="lead mb-4">Premium skincare products made with natural ingredients to help you achieve radiant, healthy skin.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
                        <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1480&q=80" alt="Skincare Products" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Carousel -->
    <section class="featured-products py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Bestsellers</h2>
            <div class="featured-carousel">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider">
                            <div class="product-card">
                                <div class="badge bg-danger position-absolute top-0 end-0 m-2">New</div>
                                <img src="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg" alt="Hydrating Moisturizer" class="product-image">
                                <div class="product-overlay">
                                    <ul class="product-actions">
                                        <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-info p-3">
                                    <h5 class="product-title">Hydrating Moisturizer</h5>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ms-2 text-muted">(4.5)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">$34.99</span>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                            data-product-name="Hydrating Moisturizer" 
                                            data-product-price="34.99" 
                                            data-product-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                            
                            <div class="product-card">
                                <div class="badge bg-primary position-absolute top-0 end-0 m-2">Popular</div>
                                <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum" class="product-image">
                                <div class="product-overlay">
                                    <ul class="product-actions">
                                        <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-info p-3">
                                    <h5 class="product-title">Vitamin C Serum</h5>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="ms-2 text-muted">(5.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">$42.99</span>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                            data-product-name="Vitamin C Serum" 
                                            data-product-price="42.99" 
                                            data-product-image="https://assets.unileversolutions.com/v1/104900175.jpg">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                            
                            <div class="product-card">
                                <div class="badge bg-success position-absolute top-0 end-0 m-2">Organic</div>
                                <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50" class="product-image">
                                <div class="product-overlay">
                                    <ul class="product-actions">
                                        <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-info p-3">
                                    <h5 class="product-title">Sunscreen SPF 50</h5>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ms-2 text-muted">(4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">$28.99</span>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                            data-product-name="Sunscreen SPF 50" 
                                            data-product-price="28.99" 
                                            data-product-image="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                            
                            <div class="product-card">
                                <div class="badge bg-warning position-absolute top-0 end-0 m-2">Limited</div>
                                <img src="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg" alt="Skincare Set" class="product-image">
                                <div class="product-overlay">
                                    <ul class="product-actions">
                                        <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-info p-3">
                                    <h5 class="product-title">Complete Skincare Set</h5>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="ms-2 text-muted">(4.7)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="current-price">$89.99</span>
                                    </div>
                                    <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                            data-product-name="Complete Skincare Set" 
                                            data-product-price="89.99" 
                                            data-product-image="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
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
            <div class="row g-4">
                <!-- Discount Product 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card discount-card">
                        <div class="discount-badge">-20%</div>
                        <img src="https://jfkhealthworld.com/wp-content/uploads/2020/03/Facial-Skin-Care.jpg" alt="Anti-Aging Cream" class="product-image">
                        <div class="product-overlay">
                            <ul class="product-actions">
                                <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-info p-3">
                            <h5 class="product-title">Anti-Aging Cream</h5>
                            <div class="product-rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="ms-2 text-muted">(4.0)</span>
                            </div>
                            <div class="product-price">
                                <span class="original-price">$59.99</span>
                                <span class="current-price">$47.99</span>
                            </div>
                            <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                    data-product-name="Anti-Aging Cream" 
                                    data-product-price="47.99" 
                                    data-product-image="https://jfkhealthworld.com/wp-content/uploads/2020/03/Facial-Skin-Care.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Discount Product 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card discount-card">
                        <div class="discount-badge">-15%</div>
                        <img src="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830" alt="Facial Cleanser" class="product-image">
                        <div class="product-overlay">
                            <ul class="product-actions">
                                <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-info p-3">
                            <h5 class="product-title">Facial Cleanser</h5>
                            <div class="product-rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-2 text-muted">(4.5)</span>
                            </div>
                            <div class="product-price">
                                <span class="original-price">$32.99</span>
                                <span class="current-price">$28.04</span>
                            </div>
                            <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                    data-product-name="Facial Cleanser" 
                                    data-product-price="28.04" 
                                    data-product-image="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Discount Product 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card discount-card">
                        <div class="discount-badge">-25%</div>
                        <img src="https://www.arfaana.com/wp-content/uploads/2020/10/dove-nourishing-body-care-beauty-cream-deep-moisturisation-with-non-greasy-feel.jpg" alt="Body Lotion" class="product-image">
                        <div class="product-overlay">
                            <ul class="product-actions">
                                <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-info p-3">
                            <h5 class="product-title">Nourishing Body Lotion</h5>
                            <div class="product-rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-2 text-muted">(5.0)</span>
                            </div>
                            <div class="product-price">
                                <span class="original-price">$39.99</span>
                                <span class="current-price">$29.99</span>
                            </div>
                            <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                    data-product-name="Nourishing Body Lotion" 
                                    data-product-price="29.99" 
                                    data-product-image="https://www.arfaana.com/wp-content/uploads/2020/10/dove-nourishing-body-care-beauty-cream-deep-moisturisation-with-non-greasy-feel.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Discount Product 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card discount-card">
                        <div class="discount-badge">-30%</div>
                        <img src="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg" alt="Night Cream" class="product-image">
                        <div class="product-overlay">
                            <ul class="product-actions">
                                <li><a href="#" data-bs-toggle="tooltip" title="Quick View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-info p-3">
                            <h5 class="product-title">Overnight Repair Cream</h5>
                            <div class="product-rating mb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-2 text-muted">(4.6)</span>
                            </div>
                            <div class="product-price">
                                <span class="original-price">$49.99</span>
                                <span class="current-price">$34.99</span>
                            </div>
                            <button class="btn btn-primary w-100 mt-3 add-to-cart" 
                                    data-product-name="Overnight Repair Cream" 
                                    data-product-price="34.99" 
                                    data-product-image="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
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

    <!-- Testimonials Section -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-rating mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text mb-4">"I've been using the Vitamin C Serum for a month now, and my skin has never looked better! The dark spots have faded, and my complexion is so much brighter."</p>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="testimonial-avatar me-3">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah J." class="rounded-circle">
                            </div>
                            <div>
                                <h6 class="mb-1">Sarah Johnson</h6>
                                <p class="mb-0 text-muted">Verified Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-rating mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="testimonial-text mb-4">"The Hydrating Moisturizer is a game-changer for my dry skin. It's lightweight but incredibly moisturizing. My skin feels plump and hydrated all day long."</p>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="testimonial-avatar me-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael T." class="rounded-circle">
                            </div>
                            <div>
                                <h6 class="mb-1">Michael Thompson</h6>
                                <p class="mb-0 text-muted">Verified Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card h-100">
                        <div class="testimonial-rating mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text mb-4">"I love that these products are all-natural and cruelty-free. The Overnight Repair Cream has made such a difference in my skin's texture. I wake up with glowing skin!"</p>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="testimonial-avatar me-3">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Emily R." class="rounded-circle">
                            </div>
                            <div>
                                <h6 class="mb-1">Emily Rodriguez</h6>
                                <p class="mb-0 text-muted">Verified Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Join Our Newsletter</h2>
                    <p class="section-subtitle mb-4">Subscribe to receive updates, access to exclusive deals, and more.</p>
                    <form class="newsletter-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control-lg" placeholder="Your email address" aria-label="Email address">
                            <button class="btn btn-primary btn-lg" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="footer-heading mb-4">About Glow Skincare</h5>
                    <p class="footer-text">We create premium skincare products using natural ingredients to help you achieve healthy, radiant skin. Our mission is to make effective skincare accessible to everyone.</p>
                    <div class="social-icons mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-heading mb-4">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-heading mb-4">Categories</h5>
                    <ul class="footer-links">
                        <li><a href="#">Moisturizers</a></li>
                        <li><a href="#">Serums</a></li>
                        <li><a href="#">Cleansers</a></li>
                        <li><a href="#">Sunscreen</a></li>
                        <li><a href="#">Gift Sets</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="footer-heading mb-4">Contact Us</h5>
                    <ul class="footer-contact">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Beauty Lane, Skincare City, SC 12345</li>
                        <li><i class="fas fa-phone-alt"></i> (123) 456-7890</li>
                        <li><i class="fas fa-envelope"></i> info@glowskincare.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom py-4 mt-5">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <p class="copyright mb-0">© 2023 Glow Skincare. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="payment-methods">
                            <span class="payment-method"><i class="fab fa-cc-visa"></i></span>
                            <span class="payment-method"><i class="fab fa-cc-mastercard"></i></span>
                            <span class="payment-method"><i class="fab fa-cc-amex"></i></span>
                            <span class="payment-method"><i class="fab fa-cc-paypal"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Shopping Cart Sidebar -->
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-header">
            <h5 class="mb-0">Your Cart</h5>
            <button type="button" class="btn-close" id="close-cart"></button>
        </div>
        <div class="cart-body" id="cart-items">
            <!-- Cart items will be added here dynamically -->
            <div class="empty-cart text-center py-5" id="empty-cart-message">
                <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                <p>Your cart is empty</p>
                <a href="#" class="btn btn-outline-primary">Start Shopping</a>
            </div>
        </div>
        <div class="cart-footer">
            <div class="d-flex justify-content-between mb-3">
                <span>Subtotal:</span>
                <span id="cart-subtotal">$0.00</span>
            </div>
            <div class="d-grid gap-2">
                <a href="#" class="btn btn-primary">Checkout</a>
                <button class="btn btn-outline-secondary" id="clear-cart">Clear Cart</button>
            </div>
        </div>
    </div>
    <div class="cart-overlay" id="cart-overlay"></div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>

</html>

<style>
    /* Global Styles */
:root {
    --primary-color: #ff6b81;
    --primary-dark: #ff5268;
    --primary-light: #ffa5b1;
    --secondary-color: #2c3e50;
    --light-color: #f8f9fa;
    --dark-color: #343a40;
    --text-color: #333333;
    --text-muted: #6c757d;
    --border-color: #dee2e6;
    --success-color: #28a745;
    --warning-color: #ffc107;
    --danger-color: #dc3545;
    --info-color: #17a2b8;
    --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    --transition: all 0.3s ease;
}

body {
    font-family: 'Poppins', sans-serif;
    color: var(--text-color);
    line-height: 1.6;
    overflow-x: hidden;
}

a {
    text-decoration: none;
    color: var(--primary-color);
    transition: var(--transition);
}

a:hover {
    color: var(--primary-dark);
}

.btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-primary:hover {
    background-color: var(--primary-dark);
    border-color: var(--primary-dark);
}

.btn-outline-secondary {
    color: var(--secondary-color);
    border-color: var(--secondary-color);
}

.btn-outline-secondary:hover {
    background-color: var(--secondary-color);
    color: white;
}

.section-title {
    font-weight: 700;
    color: var(--secondary-color);
    position: relative;
    display: inline-block;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 50px;
    height: 3px;
    background-color: var(--primary-color);
}

.text-center .section-title::after {
    left: 50%;
    transform: translateX(-50%);
}

.section-subtitle {
    color: var(--text-muted);
    font-size: 1.1rem;
}

/* Navbar Styles */
.navbar {
    padding: 15px 0;
}

.navbar-brand {
    font-size: 1.8rem;
    font-weight: 700;
}

.brand-text {
    color: var(--secondary-color);
}

.brand-accent {
    color: var(--primary-color);
}

.nav-link {
    font-weight: 500;
    color: var(--text-color);
    padding: 0.5rem 1rem;
    transition: var(--transition);
}

.nav-link:hover, .nav-link.active {
    color: var(--primary-color);
}

.nav-icon {
    font-size: 1.2rem;
    color: var(--text-color);
    transition: var(--transition);
}

.nav-icon:hover {
    color: var(--primary-color);
}

.cart-badge {
    position: absolute;
    top: -8px;
    right: -8px;
    background-color: var(--primary-color);
    color: white;
    font-size: 0.7rem;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Hero Section */
.hero-section {
    padding: 80px 0;
    background-color: #fff5f6;
}

/* Product Card Styles */
.product-card {
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--box-shadow);
    transition: var(--transition);
    position: relative;
    margin-bottom: 30px;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.badge {
    font-size: 0.8rem;
    padding: 0.35em 0.65em;
    font-weight: 600;
}

.product-image {
    height: 250px;
    width: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.product-card:hover .product-image {
    transform: scale(1.05);
}

.product-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(255, 255, 255, 0.9);
    overflow: hidden;
    width: 100%;
    height: 0;
    transition: .5s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-card:hover .product-overlay {
    height: 100%;
}

.product-actions {
    display: flex;
    gap: 15px;
    padding: 0;
    margin: 0;
    list-style: none;
}

.product-actions li a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: white;
    border-radius: 50%;
    color: var(--secondary-color);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
}

.product-actions li a:hover {
    background-color: var(--primary-color);
    color: white;
    transform: translateY(-3px);
}

.product-title {
    font-weight: 600;
    margin-bottom: 10px;
    transition: var(--transition);
}

.product-card:hover .product-title {
    color: var(--primary-color);
}

.product-rating {
    color: #ffc107;
}

.product-price {
    font-weight: 700;
    font-size: 1.1rem;
}

.original-price {
    text-decoration: line-through;
    color: var(--text-muted);
    font-weight: 400;
    font-size: 0.9rem;
    margin-right: 8px;
}

.current-price {
    color: var(--primary-color);
}

.discount-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: var(--danger-color);
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-weight: 600;
    z-index: 1;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

/* Featured Products Carousel */
.product-slider {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE and Edge */
    gap: 20px;
    padding: 20px 0;
}

.product-slider::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}

.product-slider .product-card {
    flex: 0 0 auto;
    width: 280px;
    margin-bottom: 0;
}

/* About Section */
.feature-icon {
    width: 50px;
    height: 50px;
    background-color: rgba(255, 107, 129, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--primary-color);
}

/* Testimonials */
.testimonial-card {
    background-color: white;
    border-radius: 10px;
    padding: 25px;
    box-shadow: var(--box-shadow);
    transition: var(--transition);
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.testimonial-rating {
    color: #ffc107;
    font-size: 1.1rem;
}

.testimonial-text {
    font-style: italic;
    color: var(--text-color);
}

.testimonial-avatar img {
    width: 50px;
    height: 50px;
    object-fit: cover;
}

/* Newsletter */
.newsletter {
    background-color: #fff5f6;
}

.newsletter-form .form-control {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.newsletter-form .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

/* Footer */
.footer {
    background-color: var(--secondary-color);
    color: white;
}

.footer-heading {
    color: white;
    font-weight: 600;
    position: relative;
    padding-bottom: 10px;
}

.footer-heading::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 2px;
    background-color: var(--primary-color);
}

.footer-text {
    color: rgba(255, 255, 255, 0.7);
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: rgba(255, 255, 255, 0.7);
    transition: var(--transition);
}

.footer-links a:hover {
    color: white;
    padding-left: 5px;
}

.footer-contact {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-contact li {
    margin-bottom: 15px;
    color: rgba(255, 255, 255, 0.7);
    display: flex;
    align-items: flex-start;
}

.footer-contact li i {
    margin-right: 10px;
    color: var(--primary-color);
}

.social-icons {
    display: flex;
    gap: 15px;
}

.social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    color: white;
    transition: var(--transition);
}

.social-icon:hover {
    background-color: var(--primary-color);
    color: white;
    transform: translateY(-3px);
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.copyright {
    color: rgba(255, 255, 255, 0.7);
}

.payment-methods {
    display: flex;
    gap: 10px;
}

.payment-method {
    font-size: 1.5rem;
    color: rgba(255, 255, 255, 0.7);
}

/* Shopping Cart Sidebar */
.cart-sidebar {
    position: fixed;
    top: 0;
    right: -400px;
    width: 350px;
    height: 100%;
    background-color: white;
    box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
    z-index: 1050;
    transition: right 0.3s ease;
    display: flex;
    flex-direction: column;
}

.cart-sidebar.active {
    right: 0;
}

.cart-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1040;
    display: none;
}

.cart-overlay.active {
    display: block;
}

.cart-header {
    padding: 20px;
    border-bottom: 1px solid var(--border-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cart-body {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
}

.cart-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid var(--border-color);
}

.cart-item-image {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 15px;
}

.cart-item-details {
    flex: 1;
}

.cart-item-title {
    font-weight: 600;
    margin-bottom: 5px;
}

.cart-item-price {
    color: var(--primary-color);
    font-weight: 600;
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
    color: var(--text-color);
    padding: 0 5px;
}

.quantity-input {
    width: 40px;
    text-align: center;
    border: 1px solid var(--border-color);
    border-radius: 3px;
    margin: 0 5px;
}

.cart-item-remove {
    color: var(--text-muted);
    cursor: pointer;
    transition: var(--transition);
}

.cart-item-remove:hover {
    color: var(--danger-color);
}

.cart-footer {
    padding: 20px;
    border-top: 1px solid var(--border-color);
}

.empty-cart {
    color: var(--text-muted);
}

.empty-cart i {
    color: var(--text-muted);
}

/* Responsive Styles */
@media (max-width: 991.98px) {
    .hero-section {
        padding: 60px 0;
    }
    
    .product-slider .product-card {
        width: 240px;
    }
}

@media (max-width: 767.98px) {
    .hero-section {
        padding: 40px 0;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .product-slider .product-card {
        width: 220px;
    }
    
    .cart-sidebar {
        width: 300px;
    }
}

@media (max-width: 575.98px) {
    .hero-section {
        padding: 30px 0;
    }
    
    .product-slider .product-card {
        width: 200px;
    }
    
    .cart-sidebar {
        width: 280px;
    }
    
    .product-image {
        height: 200px;
    }
    
    .testimonial-card {
        padding: 15px;
    }
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Shopping Cart Functionality
    const cartIcon = document.getElementById('cart-icon');
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
    
    // Update cart UI
    function updateCartUI() {
        // Clear cart items
        while (cartItems.firstChild && cartItems.firstChild !== emptyCartMessage) {
            cartItems.removeChild(cartItems.firstChild);
        }
        
        // Show/hide empty cart message
        if (cart.length === 0) {
            emptyCartMessage.style.display = 'block';
        } else {
            emptyCartMessage.style.display = 'none';
            
            // Add cart items
            cart.forEach((item, index) => {
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');
                cartItem.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                    <div class="cart-item-details">
                        <h6 class="cart-item-title">${item.name}</h6>
                        <div class="cart-item-price">$${item.price}</div>
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
                
                // Add event listeners to quantity buttons
                cartItem.querySelector('.decrease-btn').addEventListener('click', decreaseQuantity);
                cartItem.querySelector('.increase-btn').addEventListener('click', increaseQuantity);
                cartItem.querySelector('.quantity-input').addEventListener('change', updateQuantity);
                cartItem.querySelector('.cart-item-remove').addEventListener('click', removeItem);
            });
        }
        
        // Update cart count and subtotal
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
        
        cartCount.textContent = totalItems;
        cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
        
        // Save cart to localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
    }
    
    // Add item to cart
    function addToCart(e) {
        const button = e.target;
        const name = button.getAttribute('data-product-name');
        const price = parseFloat(button.getAttribute('data-product-price'));
        const image = button.getAttribute('data-product-image');
        
        // Check if item already exists in cart
        const existingItemIndex = cart.findIndex(item => item.name === name);
        
        if (existingItemIndex > -1) {
            // Increase quantity if item exists
            cart[existingItemIndex].quantity++;
        } else {
            // Add new item if it doesn't exist
            cart.push({
                name,
                price,
                image,
                quantity: 1
            });
        }
        
        // Show success message
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
        
        // Remove toast after 3 seconds
        setTimeout(() => {
            toast.remove();
        }, 3000);
        
        // Update cart UI
        updateCartUI();
        
        // Open cart sidebar
        openCart();
    }
    
    // Decrease item quantity
    function decreaseQuantity(e) {
        const index = e.target.getAttribute('data-index');
        if (cart[index].quantity > 1) {
            cart[index].quantity--;
        } else {
            cart.splice(index, 1);
        }
        updateCartUI();
    }
    
    // Increase item quantity
    function increaseQuantity(e) {
        const index = e.target.getAttribute('data-index');
        cart[index].quantity++;
        updateCartUI();
    }
    
    // Update item quantity
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
    
    // Remove item from cart
    function removeItem(e) {
        const index = e.target.closest('.cart-item-remove').getAttribute('data-index');
        cart.splice(index, 1);
        updateCartUI();
    }
    
    // Clear cart
    function clearCart() {
        cart = [];
        updateCartUI();
    }
    
    // Open cart sidebar
    function openCart() {
        cartSidebar.classList.add('active');
        cartOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    // Close cart sidebar
    function closeCartSidebar() {
        cartSidebar.classList.remove('active');
        cartOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Event listeners
    cartIcon.addEventListener('click', function(e) {
        e.preventDefault();
        openCart();
    });
    
    closeCart.addEventListener('click', closeCartSidebar);
    cartOverlay.addEventListener('click', closeCartSidebar);
    clearCartBtn.addEventListener('click', clearCart);
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });
    
    // Initialize cart UI
    updateCartUI();

    // Product Slider Auto-Scroll
    const productSlider = document.querySelector('.product-slider');
    if (productSlider) {
        let isDown = false;
        let startX;
        let scrollLeft;

        productSlider.addEventListener('mousedown', (e) => {
            isDown = true;
            productSlider.classList.add('active');
            startX = e.pageX - productSlider.offsetLeft;
            scrollLeft = productSlider.scrollLeft;
        });

        productSlider.addEventListener('mouseleave', () => {
            isDown = false;
            productSlider.classList.remove('active');
        });

        productSlider.addEventListener('mouseup', () => {
            isDown = false;
            productSlider.classList.remove('active');
        });

        productSlider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - productSlider.offsetLeft;
            const walk = (x - startX) * 2;
            productSlider.scrollLeft = scrollLeft - walk;
        });

        // Auto-scroll functionality
        let scrollInterval;
        
        function startAutoScroll() {
            scrollInterval = setInterval(() => {
                productSlider.scrollLeft += 1;
                
                // Reset scroll position when reaching the end
                if (productSlider.scrollLeft >= (productSlider.scrollWidth - productSlider.clientWidth)) {
                    productSlider.scrollLeft = 0;
                }
            }, 30);
        }
        
        function stopAutoScroll() {
            clearInterval(scrollInterval);
        }
        
        // Start auto-scroll on page load
        startAutoScroll();
        
        // Pause auto-scroll when hovering over the slider
        productSlider.addEventListener('mouseenter', stopAutoScroll);
        productSlider.addEventListener('mouseleave', startAutoScroll);
        
        // Pause auto-scroll when touching on mobile
        productSlider.addEventListener('touchstart', stopAutoScroll);
        productSlider.addEventListener('touchend', startAutoScroll);
    }
    
    // Animate on scroll
    const animateElements = document.querySelectorAll('.product-card, .testimonial-card, .feature');
    
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
    checkIfInView(); // Check on page load
});
</script>
*/