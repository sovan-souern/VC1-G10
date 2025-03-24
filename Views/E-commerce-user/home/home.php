<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
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

        .product-card {
            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .product-card img {
            width: 100%;
            border-radius: 10px;
            animation: spinFromRight 4s linear infinite;
        }

        .product-card p {
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

        /* Footer */
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        footer a {
            color: #ff6f61;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .discount-cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
}

.discount-card {
    position: relative;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.discount-card:hover {
    transform: scale(1.05);
}
 /* Discount Products Styles - Won't affect existing elements */
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
    
    .discount-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .discount-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        position: relative;
    }
    
    .discount-card:hover {
        transform: translateY(-5px);
    }
    
    .discount-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #ff6f61;
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 0.9rem;
        z-index: 2;
    }
    
    .discount-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }
    
    .discount-info {
        padding: 20px;
    }
    
    .discount-info h3 {
        margin: 0 0 10px;
        font-size: 1.3rem;
        color: #333;
    }
    
    .price {
        margin: 15px 0;
    }
    
    .original-price {
        text-decoration: line-through;
        color: #999;
        font-size: 1rem;
        margin-right: 10px;
    }
    
    .sale-price {
        color: #ff6f61;
        font-size: 1.3rem;
        font-weight: bold;
    }
    
    .add-to-cart {
        width: 100%;
        padding: 12px;
        background: #333;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s;
    }
    
    .add-to-cart:hover {
        background: #ff6f61;
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
                <img src="https://cdn.shopify.com/s/files/1/0251/2184/9419/files/shutterstock_1051577057_1024x1024.jpg?v=1659125830" alt="Glow Skincare Products"  style="   border-radius: 10px 70px 10px 70px;
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
    <div class="product-container">
        <div class="product-card">
            <img src="https://images-cdn.ubuy.co.in/645ebfeaec6ec921c03cc12e-dove-hair-and-skin-care-regimen-pack.jpg" alt="Hydrating Moisturizer">
            <p>Deeply nourish your skin with our hydrating moisturizer. Perfect for all skin types.</p>
            <button class="learn-more">Learn More</button>
        </div>
        <div class="product-card">
            <img src="https://assets.unileversolutions.com/v1/104900175.jpg" alt="Vitamin C Serum">
            <p>Brighten your complexion with our powerful Vitamin C serum.</p>
            <button class="learn-more">Learn More</button>
        </div>
        <div class="product-card">
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
<section class="discount-products">
    <div class="discount-header">
        <h2>Special Discounts</h2>
        <p>Limited time offers - save up to 30%</p>
    </div>
    
    <div class="discount-grid">
        <!-- Product 1 -->
        <div class="discount-card">
            <div class="discount-badge">25% OFF</div>
            <img src="https://media.glamour.com/photos/67c1fff02b9b554064fdfe92/1:1/pass/undefined" alt="Moisturizer">
            <div class="discount-info">
                <h3>Hydrating Moisturizer</h3>
                <div class="price">
                    <span class="original-price">$29.99</span>
                    <span class="sale-price">$22.49</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        
        <!-- Product 2 -->
        <div class="discount-card">
            <div class="discount-badge">20% OFF</div>
            <img src="https://foundationskincare.com/cdn/shop/articles/Makeup_Infused.jpg?v=1702945276" alt="Serum">
            <div class="discount-info">
                <h3>Vitamin C Serum</h3>
                <div class="price">
                    <span class="original-price">$34.99</span>
                    <span class="sale-price">$27.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="discount-card">
            <div class="discount-badge">20% OFF</div>
            <img src="https://static.vecteezy.com/system/resources/previews/007/788/936/non_2x/red-matte-lipstick-in-gold-and-black-tube-package-put-on-dark-table-isolated-on-white-background-in-studio-red-lipstick-with-open-cap-makeup-beauty-cosmetic-for-confident-fashion-women-free-photo.jpg" alt="Serum">
            <div class="discount-info">
                <h3>Vitamin C Serum</h3>
                <div class="price">
                    <span class="original-price">$34.99</span>
                    <span class="sale-price">$27.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <!-- Product 4 -->
        <div class="discount-card">
            <div class="discount-badge">20% OFF</div>
            <img src="https://www.keyuanbottle.com/data/watermark/20220905/63157083eabf0_.webp" alt="Serum">
            <div class="discount-info">
                <h3>Vitamin C Serum</h3>
                <div class="price">
                    <span class="original-price">$34.99</span>
                    <span class="sale-price">$27.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        
        <!-- Product 5 -->
        <div class="discount-card">
            <div class="discount-badge">30% OFF</div>
            <img src="https://assets.vogue.com/photos/62f6a40746ad3eb633efe1aa/3:4/w_748%2Cc_limit/slide_12.jpg" alt="Sunscreen">
            <div class="discount-info">
                <h3>Sunscreen SPF 50</h3>
                <div class="price">
                    <span class="original-price">$24.99</span>
                    <span class="sale-price">$17.49</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
         <!-- Product 6 -->
         <div class="discount-card">
            <div class="discount-badge">25% OFF</div>
            <img src="https://media.glamour.com/photos/67c1fff02b9b554064fdfe92/1:1/pass/undefined" alt="Moisturizer">
            <div class="discount-info">
                <h3>Hydrating Moisturizer</h3>
                <div class="price">
                    <span class="original-price">$29.99</span>
                    <span class="sale-price">$22.49</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        
        <!-- Product 7 -->
        <div class="discount-card">
            <div class="discount-badge">20% OFF</div>
            <img src="https://foundationskincare.com/cdn/shop/articles/Makeup_Infused.jpg?v=1702945276" alt="Serum">
            <div class="discount-info">
                <h3>Vitamin C Serum</h3>
                <div class="price">
                    <span class="original-price">$34.99</span>
                    <span class="sale-price">$27.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <!-- Product 8 -->
        <div class="discount-card">
            <div class="discount-badge">20% OFF</div>
            <img src="https://static.vecteezy.com/system/resources/previews/007/788/936/non_2x/red-matte-lipstick-in-gold-and-black-tube-package-put-on-dark-table-isolated-on-white-background-in-studio-red-lipstick-with-open-cap-makeup-beauty-cosmetic-for-confident-fashion-women-free-photo.jpg" alt="Serum">
            <div class="discount-info">
                <h3>Vitamin C Serum</h3>
                <div class="price">
                    <span class="original-price">$34.99</span>
                    <span class="sale-price">$27.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        
        <!-- Add more products as needed -->
    </div>
</section>


<script>
    // Simple script for the discount section
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productName = this.closest('.discount-card').querySelector('h3').textContent;
            alert(`Added ${productName} to your cart!`);
        });
    });
</script>

    <footer>
        <p>© 2025 Glow Skincare. All rights reserved.</p>
    </footer>

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
