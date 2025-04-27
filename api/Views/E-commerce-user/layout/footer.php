<div class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Glow Skincare</h3>
                <p>We create premium skincare products using natural ingredients to help you achieve healthy, radiant skin. Our mission is to make effective skincare accessible to everyone.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Categories</h3>
                <ul>
                    <li><a href="#">Moisturizers</a></li>
                    <li><a href="#">Serums</a></li>
                    <li><a href="#">Cleansers</a></li>
                    <li><a href="#">Sunscreen</a></li>
                    <li><a href="#">Gift Sets</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    123 Beauty Lane, Skincare City, SC 12345
                </p>
                <p class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    (123) 456-7890
                </p>
                <p class="contact-item">
                    <i class="fas fa-envelope"></i>
                    info@glowskincare.com
                </p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© 2023 Glow Skincare. All rights reserved.</p>
            <div class="payment-methods">
                <img src="https://cdn-icons-png.flaticon.com/128/349/349221.png" alt="Visa">
                <img src="https://cdn-icons-png.flaticon.com/128/349/349228.png" alt="Mastercard">
                <img src="https://cdn-icons-png.flaticon.com/128/349/349230.png" alt="American Express">
                <img src="https://cdn-icons-png.flaticon.com/128/196/196566.png" alt="PayPal">
            </div>
        </div>
    </div>
</div>

<style>
    /* Reset and base styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
    }
    
    /* Footer styles */
    .footer {
        background-color: #1e2022;
        color: #fff;
        padding: 70px 0 30px;
    }
    
    .container {
        width: 85%;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 50px;
    }
    
    .footer-section {
        width: 23%;
        min-width: 250px;
        margin-bottom: 30px;
    }
    
    .footer-section h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
        display: inline-block;
    }
    
    .footer-section h3::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background-color: #ff6b6b;
    }
    
    .footer-section p {
        color: #adb5bd;
        margin-bottom: 20px;
        font-size: 15px;
        line-height: 1.7;
    }
    
    .footer-section ul {
        list-style: none;
    }
    
    .footer-section ul li {
        margin-bottom: 12px;
    }
    
    .footer-section ul li a {
        color: #adb5bd;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .footer-section ul li a:hover {
        color: #fff;
        padding-left: 5px;
    }
    
    /* Social icons */
    .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }
    
    .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: #2c3034;
        border-radius: 50%;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .social-icons a:hover {
        background-color: #ff6b6b;
    }
    
    /* Contact items */
    .contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
    }
    
    .contact-item i {
        color: #ff6b6b;
        margin-right: 10px;
        font-size: 16px;
        margin-top: 3px;
    }
    
    /* Footer bottom */
    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 30px;
        border-top: 1px solid #2c3034;
    }
    
    .footer-bottom p {
        color: #adb5bd;
        font-size: 14px;
    }
    
    .payment-methods {
        display: flex;
        gap: 10px;
    }
    
    .payment-methods img {
        width: 35px;
        height: auto;
        filter: grayscale(100%) brightness(70%);
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .footer-content {
            flex-direction: column;
        }
        
        .footer-section {
            width: 100%;
            margin-bottom: 40px;
        }
        
        .footer-bottom {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }
    }
</style>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>