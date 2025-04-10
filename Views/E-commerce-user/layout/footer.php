<style>

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


</style>

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

    

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>