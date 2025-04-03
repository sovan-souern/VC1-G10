
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
            .products-container {
                grid-template-columns: 1fr;
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
            <img src="https://m.media-amazon.com/images/I/61tBEdmPRcL._AC_UF350,350_QL80_.jpg" alt="Hydrating Moisturizer">
            <div class="info">lipstick Vaseline.</div>
        </div>
        <div class="card">
            <img src="https://www.thaibynature.com/export/image/cache/catalog/wholesale/health-beauty/body-cream-lotion/vaseline/vaseline-gluta-hya/vaseline-gluta-hya-all-1200x800.jpg" alt="Hydrating Moisturizer">
            <div class="info">Vaseline.</div>
        </div>

        <div class="card">
            <img src="https://i0.wp.com/callalilly.shop/wp-content/uploads/2023/09/lotion-serum-1-1.jpg?fit=460%2C460" alt="Hydrating Moisturizer">
            <div class="info">Callalilly.</div>
        </div>
        <div class="card">
            <img src="https://i0.wp.com/callalilly.shop/wp-content/uploads/2023/09/Brand-Ambassador-Album-02.png?fit=1500%2C1500" alt="Hydrating Moisturizer">
            <div class="info">Callalilly.</div>
        </div>
        <div class="card">
            <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            <div class="info">Dove.</div>
        </div>
        <div class="card">
            <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98o-ll243lh6bn3z4d" alt="Sunscreen SPF 50">
            <div class="info">Miss sunflower.</div>
        </div>
        <div class="card">
            <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lt6p39pn7bgk55" alt="Sunscreen SPF 50">
            <div class="info">Miss sunflower body lotion.</div>
        </div>
        <div class="card">
            <img src="https://www.thaibynature.com/export/image/cache/catalog/discover/beauty-products/body-care/body-lotion/citra-whitening-lotion/citra-lotion-all-1200x800.jpg" alt="Sunscreen SPF 50">
            <div class="info">SPF citra.</div>
        </div>
        <div class="card">
            <img src="https://www.thaibynature.com/export/image/cache/catalog/startup-sme/beauty/body-care/soap/citra-bar-soap/Main-1200x800.jpg" alt="Sunscreen SPF 50">
            <div class="info">Soap citra.</div>
        </div>
        <div class="card">
            <img src="https://www.beautypackaging.com/wp-content/uploads/sites/8/2024/11/017_main-13.jpg" alt="Sunscreen SPF 50">
            <div class="info">Nivea.</div>
        </div>
        <div class="card">
            <img src="https://assets.ajio.com/medias/sys_master/root/20230130/8F8S/63d803e2aeb269c6510329d0/-473Wx593H-4915693380-multi-MODEL.jpg" alt="Sunscreen SPF 50">
            <div class="info">Nivea.</div>
        </div>
        <div class="card">
            <img src="https://down-vn.img.susercontent.com/file/e51b7974a1af0f2ea03f5a96804217f5" alt="Sunscreen SPF 50">
            <div class="info">Body oil.</div>
        </div>
        <div class="card">
            <img src="https://s9.kh1.co/__image/w=600,h=600,fit=cover/1b/1be5d7c51a56e185757cc60b646d9e97d51a3a71.jpg" alt="Sunscreen SPF 50">
            <div class="info">Felix hair.</div>
        </div>
        <div class="card">
            <img src="https://m.media-amazon.com/images/I/51Z2sQyCB-L.jpg" alt="Sunscreen SPF 50">
            <div class="info">lipstick.</div>
        </div>
        <div class="card">
            <img src="https://down-my.img.susercontent.com/file/my-11134207-7r98p-lyt0fqimk128fd" alt="Sunscreen SPF 50">
            <div class="info">Yasaka.</div>
        </div>
        <div class="card">
            <img src="https://bellavitaorganic.com/cdn/shop/files/download_0315aafb-8c5d-4b3d-a00e-6cc8cc1b00b2.jpg?v=1732609831&width=1000" alt="Sunscreen SPF 50">
            <div class="info">Nail​​​​​​ polish.</div>
        </div>
        <div class="card">
            <img src="https://images.meesho.com/images/products/456587797/fwf1e_512.webp" alt="Sunscreen SPF 50">
            <div class="info">Nail​​​​​​ polish.</div>
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
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span class="original-price"><?php echo $original_price_formatted; ?></span>
                            <?php echo $discounted_price_formatted; ?>
                        </div>
                        <button class="add-to-cart" 
                                data-product-name="<?php echo $product_name; ?>" 
                                data-product-price="<?php echo $discounted_price; ?>" 
                                data-product-image="<?php echo $image_url; ?>">Add to Cart</button>
                    </div>
                </div>
        <?php
            }
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
            <div class="image-content-left">
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