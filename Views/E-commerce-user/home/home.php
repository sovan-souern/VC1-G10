//code home.php

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

        /* Info overlay (unchanged) */
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

   
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .spin {
            animation: spin 4s linear infinite; /* Adjust timing as needed */
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
          /* Add this to your existing CSS */
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
            animation: none !important;
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
            /* border-radius: 10px; */
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
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: row;
    gap: 10px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease; /* Added transition for all properties */
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
    transition: all 0.3s ease; /* Added transition for all properties */
}

.general-product-hover li a {
    display: block;
    width: 40px;
    height: 40px;
    background: #ffffff;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    transition: all 0.3s ease; /* Added transition for all properties */
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
    transition: color 0.3s ease; /* Added transition for color */
}

.general-product-hover li a:hover span {
    color: #ffffff;
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
    <!-- Cards of Products -->
    <div class="cards">
        <div class="card">
            <img src="https://m.media-amazon.com/images/I/61tBEdmPRcL._AC_UF350,350_QL80_.jpg" alt="Hydrating Moisturizer">
        </div>
        <div class="card">
            <img src="https://www.thaibynature.com/export/image/cache/catalog/wholesale/health-beauty/body-cream-lotion/vaseline/vaseline-gluta-hya/vaseline-gluta-hya-all-1200x800.jpg" alt="Hydrating Moisturizer">
        </div>
        <div class="card">
            <img src="https://i0.wp.com/callalilly.shop/wp-content/uploads/2023/09/lotion-serum-1-1.jpg?fit=460%2C460" alt="Hydrating Moisturizer">
        </div>
        <div class="card">
            <img src="https://i0.wp.com/callalilly.shop/wp-content/uploads/2023/09/Brand-Ambassador-Album-02.png?fit=1500%2C1500" alt="Hydrating Moisturizer">
        </div>
        <div class="card">
            <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
        </div>
        <div class="card">
            <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
        </div>
        <div class="card">
            <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lt6p39pn7bgk55" alt="Sunscreen SPF 50">
        </div>
        <div class="card">
            <img src="https://www.thaibynature.com/export/image/cache/catalog/discover/beauty-products/body-care/body-lotion/citra-whitening-lotion/citra-lotion-all-1200x800.jpg" alt="Sunscreen SPF 50">
        </div>
        <div class="card">
            <img src="https://www.thaibynature.com/export/image/cache/catalog/startup-sme/beauty/body-care/soap/citra-bar-soap/Main-1200x800.jpg" alt="Sunscreen SPF 50">
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

    <section class="discount-products">
    <div class="discount-header">
        <h2>Special Discounts</h2>
        <p>Limited time offers - save up to 30%</p>
    </div>

    <div class="container">
        <div class="products-container">
        <?php foreach ($products as $index => $product): ?>
    <?php $hasDiscount = false; ?>
    <?php foreach ($discounts as $key => $discount): ?>
        <?php if ($product["product_id"] == $discount["product_id"]): ?>
            <?php if ($discount["end_date"] >= date("Y-m-d") && $discount["start_date"] <= date("Y-m-d")): ?>
                <?php
                // Calculate discounted price
                $original_price = floatval($product["price"]);
                $discount_percentage = floatval($discount["discount_percentage"]);
                $discounted_price = $original_price * (1 - $discount_percentage / 100);

                // Sanitize and prepare data
                $product_name = htmlspecialchars($product["product_name"]);
                $image_url = !empty($product["image"]) ? htmlspecialchars($product["image"]) : 'https://via.placeholder.com/150';
                $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                $original_price_formatted = "$" . number_format($original_price, 2);
                $discounted_price_formatted = "$" . number_format($discounted_price, 2);

                // Product content and quantity
                $product_content = isset($product["product_content"]) ? htmlspecialchars($product["product_content"]) : "No description available";
                $product_quantity = isset($product["quantity"]) ? htmlspecialchars($product["quantity"]) : "No quantity available";
                ?>
                <!-- Product Card -->
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
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
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
                <?php $hasDiscount = true; ?>
                <?php break; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endforeach; ?>

    </div>

</div>



<!-- Modal -->
<!-- Modal -->
<!-- Product Details Modal -->
<!-- Product Details Modal -->
<div id="product-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-inner">
            <!-- Product Image -->
            <div class="modal-product-image">
                <img id="modal-product-image" src="" alt="Product Image" style="width: 100%; height: 300px; object-fit: cover;">
            </div>
            <!-- Product Information -->
            <div class="modal-product-info">
                <h2 id="modal-product-name"></h2>
                <p><strong>Price: </strong><span id="modal-product-price"></span></p>
                <p><strong>Quantity: </strong><span id="modal-product-quantity"></span></p>
                <p id="modal-product-description"></p>
                <p><strong>Discount: </strong><span id="modal-product-discount"></span></p>
                <button id="add-to-cart-modal" class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.view-details-btn').click(function(e) {
        e.preventDefault();

        // Get the product details from data attributes
        var productName = $(this).data('name');
        var productPrice = $(this).data('price');
        var productImage = $(this).data('image');
        var productDescription = $(this).data('description');
        var productQuantity = $(this).data('quantity');
        var productDiscount = $(this).data('discount') || "No discount available";

        // Populate modal fields
        $('#modal-product-name').text(productName);
        $('#modal-product-price').text(productPrice);
        $('#modal-product-image').attr('src', productImage);
        $('#modal-product-description').text(productDescription);
        $('#modal-product-quantity').text(productQuantity);
        $('#modal-product-discount').text(productDiscount);

        // Show modal
        $('#product-modal').fadeIn();
    });

    $('.close-btn').click(function() {
        $('#product-modal').fadeOut();
    });

    $(window).click(function(event) {
        if ($(event.target).is('#product-modal')) {
            $('#product-modal').fadeOut();
        }
    });

    $('#add-to-cart-modal').click(function() {
        var productName = $('#modal-product-name').text();
        alert(productName + " has been added to the cart.");
    });
});
</script>






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

            <style>
                .product-card1 {
            position: relative;
        }

        .learn-more {
            background-color:rgb(228, 148, 155);
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .learn-more:hover {
            background-color:rgb(201, 102, 105);
        }

        .usage-text {
            display: none;
            margin-top: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 4px;
            font-size: 14px;
            text-align: left;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .usage-text.show {
            display: block;
            opacity: 1;
        }
            </style>



        <!-- Product Cards -->
        <div class="product-container">
            <div class="product-card1">
                <img src="https://m.media-amazon.com/images/I/61Vr3ovoCNL.jpg" alt="Hydrating Moisturizer">
                <p>Dove lotion.</p>
                <button class="learn-more">Learn More</button>
                <div class="usage-text">
                    How to use:<br>
                    1. Cleanse skin<br>
                    2. Apply small amount<br>
                    3. Massage gently<br>
                    4. Use twice daily
                </div>
            </div>
            <div class="product-card1">
                <img src="https://m.media-amazon.com/images/I/61amvGt0SCL.jpg" alt="Vitamin C Serum">
                <p>Vaseline lotion.</p>
                <button class="learn-more">Learn More</button>
                <div class="usage-text">
                    How to use:<br>
                    1. Wash and dry skin<br>
                    2. Apply dime-sized amount<br>
                    3. Rub in circles<br>
                    4. Use as needed
                </div>
            </div>
            <div class="product-card1">
                <img src="https://m.media-amazon.com/images/I/51buz-ebuCL.jpg" alt="Hydrating Moisturizer">
                <p>Nivea lotion.</p>
                <button class="learn-more">Learn More</button>
                <div class="usage-text">
                    How to use:<br>
                    1. Start with dry skin<br>
                    2. Apply lotion<br>
                    3. Massage into skin<br>
                    4. Use after shower
                </div>
            </div>
        </div>

        <script>
            document.querySelectorAll('.learn-more').forEach(button => {
                button.addEventListener('click', function() {
                    const usageText = this.nextElementSibling;
                    const isShown = usageText.classList.contains('show');
                    
                    // Hide all other usage texts
                    document.querySelectorAll('.usage-text').forEach(text => {
                        text.classList.remove('show');
                    });
                    
                    // Toggle the clicked one
                    if (!isShown) {
                        usageText.classList.add('show');
                    }
                });
            });
        </script>
        
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






    <style>

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

      
</style>

<style>
 /* Modal Background */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    overflow: auto;
}

/* Modal Content */
.modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    width: 80%;
    max-width: 900px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    display: flex; /* Use Flexbox for two-column layout */
    align-items: center; /* Vertically center items */
}

/* Modal Close Button */
.close-btn {
    position: absolute;
    top: 10px;
    right: 20px;
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close-btn:hover {
    color: black;
}

/* Modal Inner (container) */
.modal-inner {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

/* Product Image Styling */
.modal-product-image {
    flex: 1; /* Allow image to take up equal space */
    max-width: 40%; /* Limit image width to 40% */
    margin-right: 20px; /* Space between image and text */
}

.modal-product-image img {
    width: 100%; /* Make the image fill the container */
    height: auto;
    border-radius: 8px;
}

/* Product Information Styling */
.modal-product-info {
    flex: 2; /* Take up more space for the info */
    max-width: 60%; /* Limit the text section width */
    padding-left: 20px;
}

/* Title Styling */
.modal-product-info h2 {
    margin-top: 0;
    font-size: 24px;
    color: #333;
}

/* Paragraph Styling */
.modal-product-info p {
    font-size: 16px;
    color: #666;
    margin: 10px 0;
}

/* Button Styling */
#add-to-cart-modal {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    margin-top: 20px;
}

#add-to-cart-modal:hover {
    background-color: #218838;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .modal-inner {
        flex-direction: column; /* Stack the image and info vertically */
    }
    .modal-product-image {
        max-width: 100%; /* Allow image to take up full width on mobile */
        margin-right: 0; /* No margin on mobile */
    }
    .modal-product-info {
        max-width: 100%; /* Info section also takes full width on mobile */
        padding-left: 0;
    }
}

</style>




</body>

</html>
