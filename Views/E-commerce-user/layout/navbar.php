<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <div class="order-md-last">
            <h4 class="text-primary text-uppercase mb-3">
                Search
            </h4>
            <div class="search-bar border rounded-2 border-dark-subtle">
                <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
                    <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
                    <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
                </form>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container py-2">
        <div class="row py-4 pb-0 pb-sm-4 align-items-center ">
            <div class="col-sm-4 col-lg-3 text-center text-sm-start">
                <div class="main-logo">
                    <img src="https://i.pinimg.com/736x/4e/cc/64/4ecc644e07133109fc0e1048e787d1e5.jpg" alt="Brand Logo"
                        class="logo logo-dark" style="width: 50px; height: 50px; border-radius: 50%;" />
                    <span class="app-brand-text demo menu-text fw-bolder ms-2" style="color: pink;">Skin care</span>
                </div>
            </div>

            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-5 d-none d-lg-block">
                <div class="search-bar border rounded-2 px-3 border-dark-subtle">
                    <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
                        <input type="text" class="form-control border-0 bg-transparent"
                            placeholder="Search for more than 10,000 products" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                        </svg>
                    </form>
                </div>
            </div>

            <!-- Right Side Icons with Profile Moved Here -->
            <div class="col-6 col-lg-3 d-flex justify-content-end align-items-center gap-3">
                <!-- Search Icon (Visible on Mobile) -->
                <a href="#" class="d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch">
                    <i class="bi bi-search fs-5 text-dark"></i>
                </a>
                <!-- Favorite Icon -->
                <a href="/favorite" class="position-relative">
                    <i class="bi bi-heart fs-5 text-dark"></i>
                </a>
                <!-- Cart Icon -->
                <div class="position-relative d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <a href="#" class="cart-toggle text-decoration-none d-flex flex-column align-items-center position-relative">
                        <i class="bi bi-cart fs-5 text-dark"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">3</span>
                    </a>
                </div>
                <!-- History Icon -->
                <a href="/history" class="position-relative">
                    <i class="bi bi-clock-history fs-5 text-dark"></i>
                </a>
                <!-- Profile Icon Moved Here -->
                <?php if (isset($_SESSION['admin_ID'])): ?>
                    <a href="#" class="d-flex align-items-center text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#profileOffcanvas">
                        <div class="avatar avatar-online">
                            <img src="<?php echo !empty($_SESSION['profile_picture']) ? '/' . $_SESSION['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>"
                                alt="Profile" class="user-avatar">
                        </div>
                    </a>
                <?php else: ?>
                    <a href="/login" class="d-flex align-items-center text-decoration-none">
                        <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Removed <div class="container-fluid"><hr class="m-0"></div> -->

    <div class="container">
        <nav class="main-menu d-flex navbar navbar-expand-lg">
            <div class="d-flex d-lg-none align-items-end mt-3">
                <ul class="d-flex justify-content-end list-unstyled m-0">
                    <li>
                        <?php if (isset($_SESSION['admin_ID'])): ?>
                            <div class="dropdown">
                                <a href="#" class="mx-3 dropdown-toggle" id="mobileUserDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php if (!empty($_SESSION['profile_picture'])): ?>
                                        <img src="/<?php echo $_SESSION['profile_picture']; ?>" alt="Profile" class="rounded-circle" style="width: 32px; height: 32px; object-fit: cover;">
                                    <?php else: ?>
                                        <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                                    <?php endif; ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="mobileUserDropdown">
                                    <li><a class="dropdown-item" href="/editProfile">Edit Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="">Logout</a></li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <a href="/login" class="mx-3">
                                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                            </a>
                        <?php endif; ?>
                    </li>
                    <li>
                        <a href="wishlist.html" class="mx-3">
                            <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                            aria-controls="offcanvasCart">
                            <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                            <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                03
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                            aria-controls="offcanvasSearch">
                            <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                        </a>
                    </li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header justify-content-center">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body justify-content-between">
                    <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
                        <li class="nav-item">
                            <a href="/home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/shop" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="/productuser" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<style>
   /* General Styles */
:root {
    --primary-color: #ff85a2;
    --primary-light: #ffedf1;
    --primary-dark: #e06b85;
    --text-color: #333;
    --light-gray: #f8f9fa;
    --white: #ffffff;
    --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    --transition: all 0.3s ease;
}

body {
    font-family: 'Poppins', sans-serif;
    color: var(--text-color);
}

/* Header Styles */
/* header {
    background-color: var(--white);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    position: sticky;
    top: 0;
    z-index: 1000;
} */


/* Logo Styling */
.main-logo {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo.logo-dark {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: var(--shadow);
    transition: var(--transition);
}

.logo.logo-dark:hover {
    transform: scale(1.05);
}

.app-brand-text.demo.menu-text {
    font-size: 1.5rem !important;
    font-weight: 600 !important;
    color: var(--primary-color) !important;
    letter-spacing: 0.5px;
}

/* Search Bar Styling */
.search-bar.border {
    border: 2px solid var(--light-gray) !important;
    border-radius: 50px !important;
    padding: 8px 16px !important;
    background-color: var(--white);
    box-shadow: var(--shadow);
    transition: var(--transition);
}

.search-bar.border:focus-within {
    border-color: var(--primary-color) !important;
    box-shadow: 0 0 0 4px var(--primary-light);
}

.search-bar input.form-control {
    font-size: 0.95rem;
    padding: 8px 0;
}

.search-bar input.form-control::placeholder {
    color: #aaa;
}

.search-bar svg {
    color: #888;
    cursor: pointer;
    transition: var(--transition);
}

.search-bar svg:hover {
    color: var(--primary-color);
}

/* Icon Styling */
.col-6.col-lg-3 a {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    color: var(--text-color);
    background-color: var(--light-gray);
    transition: var(--transition);
    text-decoration: none;
    margin: 0 5px;
}

.col-6.col-lg-3 a i,
.col-6.col-lg-3 iconify-icon {
    font-size: 1.2rem;
}

.col-6.col-lg-3 a:hover {
    background-color: var(--primary-light);
    color: var(--primary-color);
    transform: translateY(-3px);
}

/* Cart Badge */
.badge.rounded-pill.bg-primary {
    background-color: var(--primary-color) !important;
    color: white;
    font-size: 0.7rem;
    font-weight: bold;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

/* Profile Styling */
.col-6.col-lg-3 a:last-child {
    width: 45px;
    height: 45px;
    background-color: transparent;
}

.user-avatar,
.col-6.col-lg-3 a:last-child img {
    width: 45px !important;
    height: 45px !important;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--primary-color);
    transition: var(--transition);
}

.col-6.col-lg-3 a:last-child:hover img {
    transform: scale(1.1);
    box-shadow: 0 0 0 4px var(--primary-light);
}

/* Navigation Menu */
.main-menu.navbar {
    background-color: var(--light-gray);
    border-radius: 12px;
    margin-bottom: 15px;
    padding: 0;
    box-shadow: var(--shadow);
}

.navbar-nav.menu-list {
    width: 100%;
    justify-content: center;
}

.navbar-nav.menu-list .nav-link {
    color: var(--text-color);
    font-weight: 500;
    padding: 15px 25px !important;
    position: relative;
    transition: var(--transition);
}

.navbar-nav.menu-list .nav-link:hover {
    color: var(--primary-color);
}

/* IMPORTANT: Active state styling for navigation links */
.navbar-nav.menu-list .nav-link.active {
    color: var(--primary-color) !important;
    font-weight: 600;
}

.navbar-nav.menu-list .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 25%;
    width: 50%;
    height: 3px;
    background-color: var(--primary-color);
    border-radius: 3px;
}

/* Offcanvas Styling */
.offcanvas {
    border-radius: 0 0 15px 15px;
}

.offcanvas-header {
    background-color: var(--primary-light);
}

.btn-close {
    background-color: var(--primary-color);
    opacity: 0.8;
}

.btn-close:hover {
    opacity: 1;
}

/* Mobile Adjustments */
@media (max-width: 991px) {
    .col-6.col-lg-3 a {
        width: 35px;
        height: 35px;
    }
    
    .col-6.col-lg-3 a i,
    .col-6.col-lg-3 iconify-icon {
        font-size: 1rem;
    }
    
    .user-avatar,
    .col-6.col-lg-3 a:last-child img {
        width: 35px !important;
        height: 35px !important;
    }
    
    .navbar-nav.menu-list .nav-link {
        padding: 10px 15px !important;
    }
    
    .navbar-nav.menu-list .nav-link.active::after {
        left: 25%;
        width: 50%;
    }
    
    .navbar-toggler {
        border: 2px solid var(--primary-color);
        padding: 5px 8px;
    }
    
    .navbar-toggler:focus {
        box-shadow: 0 0 0 3px var(--primary-light);
    }
}

@media (max-width: 767px) {
    .app-brand-text.demo.menu-text {
        font-size: 1.2rem !important;
    }
    
    .main-logo {
        gap: 8px;
    }
    
    .logo.logo-dark {
        width: 40px;
        height: 40px;
    }
}

/* Add tooltip functionality with CSS */
.col-6.col-lg-3 a {
    position: relative;
}

.col-6.col-lg-3 a::after {
    content: attr(href);
    visibility: hidden;
    width: 80px;
    background-color: var(--text-color);
    color: var(--white);
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: -35px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.3s;
    font-size: 0.75rem;
    text-transform: capitalize;
}

.col-6.col-lg-3 a:hover::after {
    visibility: visible;
    opacity: 1;
}

/* Fix for cart icon */
.cart-toggle {
    position: relative;
}

/* Enhance dropdown menu */
.dropdown-menu {
    border-radius: 12px;
    box-shadow: var(--shadow);
    border: none;
    padding: 10px;
}

.dropdown-item {
    border-radius: 8px;
    padding: 8px 15px;
    transition: var(--transition);
}

.dropdown-item:hover {
    background-color: var(--primary-light);
    color: var(--primary-dark);
}

.dropdown-divider {
    margin: 8px 0;
}

/* Add subtle animation to the search bar */
.search-bar.border input.form-control:focus {
    transform: translateX(5px);
}

/* Enhance mobile menu */
@media (max-width: 991px) {
    .offcanvas-body .navbar-nav.menu-list {
        padding: 20px 0;
    }
    
    .offcanvas-body .navbar-nav.menu-list .nav-item {
        margin-bottom: 5px;
    }
    
    .offcanvas-body .navbar-nav.menu-list .nav-link {
        border-radius: 8px;
    }
    
    .offcanvas-body .navbar-nav.menu-list .nav-link:hover {
        background-color: var(--primary-light);
    }
}
    
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set active navigation link based on current URL
        function setActiveNavLink() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.navbar-nav.menu-list .nav-link');

            // Remove active class from all links
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Add active class to the matching link
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === currentPath ||
                    (currentPath === '/' && href === '/home') ||
                    (href !== '/home' && currentPath.includes(href.substring(1)))) {
                    link.classList.add('active');
                }
            });
        }

        // Call this function when the page loads
        setActiveNavLink();

        // Add click event listeners to navigation links
        const navLinks = document.querySelectorAll('.navbar-nav.menu-list .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // We don't prevent default here to allow actual navigation

                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Store the active link in localStorage for persistence
                localStorage.setItem('activePage', this.getAttribute('href'));
            });
        });

        // Check if there's a stored active page and apply it
        const storedActivePage = localStorage.getItem('activePage');
        if (storedActivePage) {
            navLinks.forEach(link => {
                if (link.getAttribute('href') === storedActivePage) {
                    link.classList.add('active');
                }
            });
        }

        // Add hover effects to the search bar
        const searchBar = document.querySelector('.search-bar');
        if (searchBar) {
            const searchInput = searchBar.querySelector('input');
            const searchIcon = searchBar.querySelector('svg');

            searchInput.addEventListener('focus', function() {
                searchBar.style.borderColor = '#ff85a2';
                searchBar.style.boxShadow = '0 0 0 4px #ffedf1';
            });

            searchInput.addEventListener('blur', function() {
                searchBar.style.borderColor = '';
                searchBar.style.boxShadow = '';
            });

            // Add click effect to search icon
            if (searchIcon) {
                searchIcon.addEventListener('click', function() {
                    this.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 200);

                    // Submit the form if there's text
                    if (searchInput.value.trim() !== '') {
                        searchInput.form.submit();
                    }
                });
            }
        }

        // Add animation to cart badge
        const cartBadge = document.querySelector('.badge.rounded-pill.bg-primary');
        const cartIcon = document.querySelector('.bi-cart');

        if (cartBadge && cartIcon) {
            const cartLink = cartIcon.closest('a');

            if (cartLink) {
                cartLink.addEventListener('mouseenter', function() {
                    cartBadge.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        cartBadge.style.transform = 'scale(1)';
                    }, 300);
                });
            }
        }

        // Add subtle shadow effect on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');

            if (header) {
                if (window.scrollY > 10) {
                    header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
                } else {
                    header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
                }
            }
        });

        // Enhance mobile menu toggle
        const navbarToggler = document.querySelector('.navbar-toggler');

        if (navbarToggler) {
            navbarToggler.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        }
    });
</script>








<!-- Cart Panel -->
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
        <button class="view-cart-btn" onclick="window.location.href='cart';">View Cart</button>
    </div>
</div>

<!-- Inline CSS (Unchanged) -->
<style>
    .badge {
        min-width: 20px;
        height: 20px;
        line-height: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2px;
    }

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
    }

    .close-cart:hover {
        color: #ff3333;
        /* Just change color on hover, no movement */
    }

    /* Remove wiggle animation */
    .close-cart.wiggle {
        animation: none;
        /* No animation on hover */
    }

    /* Remove wiggle animation on hover */
    .close-cart:hover {
        transform: none;
        /* No rotation on hover */
    }

    /* Remove wiggle animation */

    .close-cart:hover {
        transform: rotate(90deg);
    }

    /* Add wiggle animation for the "X" icon */
    @keyframes wiggle {
        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(-5deg);
        }

        50% {
            transform: rotate(5deg);
        }

        75% {
            transform: rotate(-5deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    .close-cart.wiggle {
        animation: wiggle 0.3s ease-in-out;
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
</style>

<!-- JavaScript (Corrected) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fix for cart icon click issues
        const cartIcon = document.querySelector('.bi-cart');
        const cartLink = document.querySelector('.cart-toggle');

        if (cartIcon && cartLink) {
            // Make sure the icon itself is clickable
            cartIcon.style.pointerEvents = 'none';

            // Ensure the parent link has proper z-index and positioning
            cartLink.style.position = 'relative';
            cartLink.style.zIndex = '100';

            // Add a more visible click area
            cartLink.style.cursor = 'pointer';

            // Debug click handler to verify it's working
            cartLink.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Cart icon clicked');

                // Find and toggle the cart panel
                const cartPanel = document.querySelector('.cart-panel');
                if (cartPanel) {
                    cartPanel.classList.toggle('active');
                }
            });
        }

        // Also fix the badge if it exists
        const cartBadge = document.querySelector('.badge.rounded-pill.bg-primary');
        if (cartBadge) {
            cartBadge.style.pointerEvents = 'none';

            // Make sure parent has proper pointer events
            const badgeParent = cartBadge.parentElement;
            if (badgeParent) {
                badgeParent.style.position = 'relative';
                badgeParent.style.zIndex = '100';
                badgeParent.style.cursor = 'pointer';
            }
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        const cartPanel = document.querySelector('.cart-panel');
        const closeCart = document.querySelector('.close-cart');
        const cartToggle = document.querySelector('.cart-toggle'); // Your navbar cart icon
        const cartBadgeToggle = document.querySelector('.badge.rounded-pill.bg-primary'); // Your cart badge
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartItemsContainer = document.querySelector('.cart-items');
        const cartItemCount = document.querySelector('#cart-item-count');
        const subtotalAmount = document.querySelector('#subtotal-amount');
        let cartItems = [];

        // Load cart from localStorage
        try {
            cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        } catch (e) {
            console.error("Error parsing cart from localStorage:", e);
            cartItems = [];
        }

        // Render initial cart items
        cartItems.forEach(item => addCartItem(item));
        updateCartSummary();

        // Cart toggle functionality
        function toggleCart() {
            cartPanel.classList.toggle('active');
        }

        // Open cart (without toggling)
        function openCart() {
            cartPanel.classList.add('active');
        }

        // Close cart
        function closeCartPanel() {
            cartPanel.classList.remove('active');
        }

        // Open/close cart when clicking the cart toggle or badge
        if (cartToggle) {
            cartToggle.addEventListener('click', function(e) {
                e.preventDefault();
                toggleCart();
            });
        }

        if (cartBadgeToggle) {
            const cartLink = cartBadgeToggle.closest('a');
            if (cartLink) {
                cartLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleCart();
                });
            }
        }

        // Close cart and add wiggle animation when clicking the "X"
        if (closeCart) {
            closeCart.addEventListener('click', function() {
                closeCart.classList.add('wiggle'); // Trigger the wiggle animation
                setTimeout(() => {
                    closeCartPanel(); // Close the cart after the animation
                    closeCart.classList.remove('wiggle'); // Remove the wiggle class
                }, 300); // Match the animation duration (0.3s)
            });
        }

        // Add to cart functionality
        addToCartButtons.forEach(button => {
            button.removeEventListener('click', handleAddToCart); // Prevent duplicate listeners

            function handleAddToCart(e) {
                e.preventDefault();
                const productName = button.getAttribute('data-product-name');
                const productPrice = parseFloat(button.getAttribute('data-product-price'));
                const productImage = button.getAttribute('data-product-image');

                const existingItem = cartItems.find(item => item.name === productName);
                if (existingItem) {
                    // If item already exists, just increase quantity
                    existingItem.quantity += 1;
                    updateCartItem(existingItem);
                    // Always open the cart when adding items
                    openCart();
                } else {
                    // Add new item
                    const newItem = {
                        name: productName,
                        price: productPrice,
                        image: productImage,
                        quantity: 1
                    };
                    cartItems.push(newItem);
                    addCartItem(newItem);
                    localStorage.setItem('cart', JSON.stringify(cartItems));
                    // Always open the cart when adding items
                    openCart();
                    updateCartSummary();
                }

                // Add animation to cart icon
                animateCartIcon();
            }

            button.addEventListener('click', handleAddToCart);
        });

        function animateCartIcon() {
            if (cartToggle) {
                cartToggle.classList.add('bounce');
                setTimeout(() => {
                    cartToggle.classList.remove('bounce');
                }, 500);
            }

            if (cartBadgeToggle) {
                cartBadgeToggle.classList.add('pulse');
                setTimeout(() => {
                    cartBadgeToggle.classList.remove('pulse');
                }, 500);
            }
        }

        function addCartItem(item) {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            cartItem.innerHTML = `
            <img src="${item.image || '/placeholder.svg?height=60&width=60'}" alt="${item.name}">
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
            <div class="delete-btn"><i class="bi bi-trash"></i></div>
        `;
            cartItemsContainer.appendChild(cartItem);
            attachItemListeners(cartItem, item);

            // Add fade-in animation to new items
            cartItem.style.opacity = '0';
            cartItem.style.transform = 'translateX(20px)';
            setTimeout(() => {
                cartItem.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                cartItem.style.opacity = '1';
                cartItem.style.transform = 'translateX(0)';
            }, 10);
        }

        function updateCartItem(item) {
            const cartItem = Array.from(cartItemsContainer.querySelectorAll('.cart-item')).find(
                el => el.querySelector('.cart-item-name').textContent === item.name
            );

            if (cartItem) {
                const input = cartItem.querySelector('.quantity-input');
                input.value = item.quantity;
                cartItem.querySelector('.cart-item-total').textContent = `$${(item.price * item.quantity).toFixed(2)}`;

                // Highlight updated item
                cartItem.classList.add('updated');
                setTimeout(() => {
                    cartItem.classList.remove('updated');
                }, 500);

                updateCartSummary();
                localStorage.setItem('cart', JSON.stringify(cartItems));
            }
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
                // Add fade-out animation before removing
                cartItem.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                cartItem.style.opacity = '0';
                cartItem.style.transform = 'translateX(20px)';

                setTimeout(() => {
                    cartItem.remove();
                    cartItems = cartItems.filter(i => i.name !== item.name);
                    updateCartSummary();
                    localStorage.setItem('cart', JSON.stringify(cartItems));
                }, 300);
            });
        }

        function updateCartSummary() {
            const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
            const subtotal = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);

            if (cartItemCount) {
                cartItemCount.textContent = `${totalItems} item${totalItems !== 1 ? 's' : ''}`;
            }

            if (subtotalAmount) {
                subtotalAmount.textContent = `$${subtotal.toFixed(2)}`;
            }

            // Update navbar cart count
            const navCartCount = document.querySelector('.badge.rounded-pill.bg-primary');
            if (navCartCount) {
                navCartCount.textContent = totalItems;

                // Make badge visible only if there are items
                if (totalItems > 0) {
                    navCartCount.style.display = 'flex';
                } else {
                    navCartCount.style.display = 'none';
                }
            }
        }
    });
</script>



</div>

</div>

</nav>
</div>
</header>


<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        overflow-x: hidden;
    }

    .slideshow-container {
        position: relative;
        width: 100vw;
        height: 100vh;
        overflow: hidden;
        background: #000;
        /* Fallback background */
    }

    .mySlides {
        display: none;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .mySlides.active {
        display: block;
        /* Show active slide */
    }

    .mySlides img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        /* Start hidden */
        transition: opacity 1.5s ease-in-out;
        /* Slow fade for image only */
    }

    .mySlides.active img {
        opacity: 1;
        /* Fade in when active */
    }

    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 16px;
        color: white;
        font-weight: bold;
        /* font-size: 24px; */
        background: rgba(0, 0, 0, 0.5);
        transition: background-color 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        z-index: 10;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* .prev:hover, .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    } */

    .dot-container {
        position: absolute;
        bottom: 10px;
        width: 100%;
        text-align: center;
        z-index: 10;
    }

    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 5px;
        background: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .dot.active,
    .dot:hover {
        background-color: #717171;
        /* Active/hover state for dots */
    }
</style>
</head>

<body>
    <div class="slideshow-container">
        <div class="mySlides">
            <div class="numbertext"></div>
            <img src="https://i.pinimg.com/736x/8e/34/11/8e341193c5c38567efda4986e48a211c.jpg" alt="Slide 1">
            <div class="text"></div>
        </div>
        <div class="mySlides">
            <div class="numbertext"></div>
            <img src="https://i.pinimg.com/736x/a6/03/80/a60380ae1b5e9674d50e9f104a1c330b.jpg" alt="Slide 2">
            <div class="text"></div>
        </div>
        <div class="mySlides">
            <div class="numbertext"></div>
            <img src="https://i.pinimg.com/736x/65/a1/56/65a156eb330b016c1648fe63e66e9658.jpg" alt="Slide 3">
            <div class="text"></div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        let slideIndex = 1;
        let slideInterval;

        // Show slides
        function showSlides(n) {
            const slides = document.querySelectorAll(".mySlides");
            const dots = document.querySelectorAll(".dot");

            if (n > slides.length) slideIndex = 1;
            if (n < 1) slideIndex = slides.length;

            slides.forEach((slide, i) => {
                slide.classList.remove("active");
                dots[i].classList.remove("active");
            });

            slides[slideIndex - 1].classList.add("active");
            dots[slideIndex - 1].classList.add("active");
        }

        // Next/Previous controls
        function plusSlides(n) {
            clearInterval(slideInterval);
            showSlides(slideIndex += n);
            startSlideshow();
        }

        // Dot controls
        function currentSlide(n) {
            clearInterval(slideInterval);
            showSlides(slideIndex = n);
            startSlideshow();
        }

        // Start automatic slideshow
        function startSlideshow() {
            slideInterval = setInterval(() => plusSlides(1), 4000); // Adjusted to 2s for smoother feel
        }

        // Initial setup
        showSlides(slideIndex);
        startSlideshow();
    </script>

    <!-- 
<style>
    .contact-page #banner {
    display: none;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Check if the current URL contains "contact"
        if (window.location.pathname.includes("contact")) {
            // Hide the banner section
            document.getElementById("banner").style.display = "none";
        }
    });
</script> -->

    <style>
        /* Banner Section */
        #banner {
            background: #FBDEE7;
            padding: 0;
            overflow: hidden;
        }

        #banner .container {
            padding: 0;
        }

        #banner .swiper {
            width: 100%;
            height: 100%;
        }

        #banner .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            /* Adjust height as needed */
        }

        #banner .img-wrapper {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #banner .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures the image covers the area without distortion */
            transition: transform 0.5s ease, opacity 0.5s ease;
            /* Smooth transition for scale and opacity */
        }

        /* Hover effect on the image */
        #banner .banner-image:hover {
            transform: scale(1.05);
            /* Slight zoom on hover */
            opacity: 0.9;
            /* Slight fade on hover */
        }

        /* Smooth transition for Swiper slides */
        #banner .swiper-slide {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        #banner .swiper-slide-active {
            opacity: 1;
        }

        /* Optional: Style the pagination dots */
        #banner .swiper-pagination-bullet {
            background: #fff;
            opacity: 0.5;
        }

        #banner .swiper-pagination-bullet-active {
            background: #ff6f61;
            /* Matches your theme color */
            opacity: 1;
        }
    </style>

    <style>
        .dropdown-user .dropdown-toggle::after {
            display: none;
        }

        .dropdown-menu {
            min-width: 240px;
            padding: 0.5rem 0;
            margin-top: 0.5rem !important;
            animation: dropdownFade 0.2s ease;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .avatar-online {
            position: relative;
        }

        .avatar-online::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #28a745;
            border: 2px solid #fff;
        }

        .profile-dropdown {
            position: relative;
        }

        .profile-menu {
            min-width: 300px;
            padding: 1rem;
        }

        .profile-header {
            display: flex;
            align-items: center;
            padding: 1rem;
            background: linear-gradient(to right, #FFB6C1, #FFC0CB);
            margin: -1rem -1rem 1rem -1rem;
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .profile-img-lg {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid #fff;
            object-fit: cover;
        }

        .profile-info {
            margin-left: 1rem;
            color: #fff;
        }

        .profile-links a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: #333;
            transition: all 0.3s ease;
            border-radius: 0.5rem;
        }

        .profile-links a:hover {
            background-color: #f8f9fa;
            color: #FF69B4;
        }

        .profile-links i {
            margin-right: 0.75rem;
            font-size: 1.1rem;
            width: 20px;
        }

        .profile-dropdown {
            position: relative;
        }

        .profile-menu {
            min-width: 250px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            padding: 20px;
            background: linear-gradient(to right, #FFB6C1, #FFC0CB);
            border-radius: 10px 10px 0 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 3px solid white;
            object-fit: cover;
        }

        .profile-info h6 {
            color: white;
            margin: 0;
            font-size: 1.1rem;
        }

        .profile-info span {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
        }

        .menu-items {
            padding: 10px 0;
        }

        .menu-items a {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #666;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .menu-items a:hover {
            background: #f8f9fa;
            color: #FF69B4;
        }

        .menu-items i {
            font-size: 1.2rem;
            width: 20px;
            text-align: center;
        }

        .divider {
            height: 1px;
            background: #eee;
            margin: 10px 0;
        }

        .notification-badge {
            background: #ff4757;
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.8rem;
            margin-left: auto;
        }

        /* User Dropdown Styles */
        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-dropdown-content {
            position: absolute;
            right: 0;
            background: white;
            min-width: 280px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }

        .user-dropdown-content.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .user-header {
            background: linear-gradient(to right, #FFB6C1, #FFC0CB);
            padding: 15px;
            border-radius: 10px 10px 0 0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 3px solid white;
            object-fit: cover;
        }

        .user-info {
            color: white;
        }

        .user-info h6 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }

        .user-info span {
            font-size: 0.85rem;
            opacity: 0.9;
        }

        .user-menu {
            padding: 8px 0;
        }

        .user-menu a {
            padding: 10px 20px;
            display: flex;
            align-items: center;
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .user-menu a:hover {
            background: #f8f9fa;
            color: #FF69B4;
        }

        .user-menu i {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }

        .menu-divider {
            height: 1px;
            background: #eee;
            margin: 8px 0;
        }

        .profile-panel {
            width: 380px;
            border: none;
        }

        .profile-header {
            background: linear-gradient(to right, #FFB6C1, #FFC0CB);
            padding: 20px;
            color: white;
        }

        .profile-pic {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid white;
            object-fit: cover;
        }

        .profile-pic-lg {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #FFB6C1;
            object-fit: cover;
        }

        .list-group-item {
            border: none;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            color: #666;
            transition: all 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #f8f9fa;
            color: #FF69B4;
        }

        .section-header {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .back-btn {
            padding: 0;
            color: #666;
            text-decoration: none;
        }

        .back-btn:hover {
            color: #FF69B4;
        }

        .profile-section {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            transition: transform 0.3s ease;
        }

        .profile-section.d-none {
            transform: translateX(100%);
        }

        /* Profile Panel Styles */
        .profile-panel {
            width: 380px;
            border: none;
            background: #fff;
        }

        .profile-header {
            background: linear-gradient(135deg, #FF69B4, #FFB6C1);
            padding: 25px;
            border: none;
        }

        .profile-image-container {
            position: relative;
            width: 60px;
            height: 60px;
        }

        .profile-pic {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid rgba(255, 255, 255, 0.8);
            object-fit: cover;
        }

        .profile-pic-lg {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #FFB6C1;
            object-fit: cover;
        }

        .online-status {
            position: absolute;
            bottom: 2px;
            right: 2px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #22c55e;
            border: 2px solid #fff;
        }

        .profile-tabs {
            border-bottom: 1px solid #eee;
            padding: 0 10px;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #666;
            padding: 15px 20px;
            font-weight: 500;
            position: relative;
        }

        .nav-tabs .nav-link.active {
            color: #FF69B4;
            background: none;
        }

        .nav-tabs .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: #FF69B4;
        }

        .profile-form .form-control {
            border: 1px solid #eee;
            padding: 12px;
            border-radius: 8px;
        }

        .profile-form .form-control:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
        }

        .profile-picture-upload {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .upload-btn {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 35px;
            height: 35px;
            background: #FF69B4;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .upload-btn:hover {
            transform: scale(1.1);
        }

        .notification-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s ease;
        }

        .notification-item:hover {
            background-color: #f8f9fa;
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
        }

        .settings-item {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #666;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .settings-item:hover {
            background-color: #f8f9fa;
            color: #FF69B4;
        }

        .settings-item i {
            font-size: 1.2rem;
            margin-right: 15px;
        }

        .admin-login-panel {
            max-width: 400px;
            background: linear-gradient(145deg, #fff, #FFF5F6);
        }

        .admin-login-panel .offcanvas-header {
            background: linear-gradient(135deg, #FF69B4, #FFB6C1);
            color: white;
            padding: 1.5rem;
        }

        .admin-login-panel .offcanvas-title {
            font-weight: 600;
            font-size: 1.25rem;
        }

        .admin-login-form {
            padding: 1rem;
        }

        .admin-login-form label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: #666;
        }

        .admin-login-form .form-control {
            padding: 0.75rem;
            border: 1px solid rgba(255, 182, 193, 0.3);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .admin-login-form .form-control:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
        }

        .admin-login-form .btn-primary {
            background: linear-gradient(45deg, #FF69B4, #FFB6C1);
            border: none;
            padding: 0.75rem;
            font-weight: 600;
            margin-top: 1rem;
        }

        .admin-modal-header {
            background: linear-gradient(135deg, #FF69B4, #FFB6C1);
            color: white;
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .admin-login-form {
            padding: 1rem 0;
        }

        .admin-login-form .form-group label {
            font-weight: 500;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .admin-login-form .form-control {
            padding: 0.75rem;
            border: 1px solid rgba(255, 182, 193, 0.3);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .admin-login-form .form-control:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
        }

        .admin-login-form .btn-primary {
            background: linear-gradient(45deg, #FF69B4, #FFB6C1);
            border: none;
            padding: 0.75rem;
            font-weight: 600;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .admin-login-form .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
        }

        .login-container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .left-section {
            background: linear-gradient(135deg, #FF69B4, #FFB6C1);
        }

        .admin-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid rgba(255, 255, 255, 0.8);
            object-fit: cover;
        }

        .admin-login-form .form-control {
            border: 1px solid rgba(255, 182, 193, 0.3);
            padding: 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .admin-login-form .form-control:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 0 0.2rem rgba(255, 105, 180, 0.25);
        }

        .admin-login-form .btn-primary {
            background: linear-gradient(45deg, #FF69B4, #FFB6C1);
            border: none;
            padding: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .admin-login-form .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
        }

        .admin-modal-header {
            border-bottom: none;
            padding: 1rem;
        }

        .modal-content {
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Ready to Leave?',
                text: "You will be logged out of your session",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FF69B4',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading state
                    Swal.fire({
                        title: 'Logging out...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Make AJAX call to logout
                    fetch('/logout', {
                            method: 'POST',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                // Clear all stored data
                                localStorage.clear();
                                sessionStorage.clear();

                                // Show success message then force redirect
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'You have been logged out successfully',
                                    icon: 'success',
                                    timer: 1500,
                                    showConfirmButton: false
                                }).then(() => {
                                    // Force redirect to login page
                                    window.location.replace('/login');
                                });
                            }
                        })
                        .catch(error => {
                            console.error('Logout error:', error);
                            // If there's an error, force redirect to login anyway
                            window.location.replace('/login');
                        });
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all dropdowns
            var dropdownElementList = document.querySelectorAll('.dropdown-toggle');
            dropdownElementList.forEach(function(dropdownToggleEl) {
                new bootstrap.Dropdown(dropdownToggleEl);
            });

            const dropdownToggle = document.querySelector('.user-dropdown > a');
            const dropdownContent = document.querySelector('.user-dropdown-content');

            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownContent.classList.toggle('show');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.user-dropdown')) {
                    dropdownContent.classList.remove('show');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Handle section navigation
            document.querySelectorAll('[data-section]').forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.getAttribute('data-section') !== 'main') {
                        e.preventDefault();
                        const targetSection = this.getAttribute('data-section');
                        showSection(targetSection);
                    }
                });
            });

            // Handle back buttons
            document.querySelectorAll('.back-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    showSection('main');
                });
            });
        });

        function showSection(sectionId) {
            document.querySelectorAll('.profile-section').forEach(section => {
                if (section.getAttribute('data-section') === sectionId) {
                    section.classList.remove('d-none');
                } else {
                    section.classList.add('d-none');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Profile image upload preview
            const profileUpload = document.getElementById('profile-upload');
            const profileImage = document.querySelector('.profile-pic-lg');

            profileUpload?.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileImage.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Profile form submission
            const profileForm = document.getElementById('profile-form');
            profileForm?.addEventListener('submit', function(e) {
                e.preventDefault();
                // Add your profile update logic here
                Swal.fire({
                    title: 'Success!',
                    text: 'Profile updated successfully',
                    icon: 'success',
                    confirmButtonColor: '#FF69B4'
                });
            });
        });

        // Close modal when clicked outside
        document.getElementById('adminLoginModal').addEventListener('hide.bs.modal', function() {
            document.getElementById('adminLoginMessage').innerHTML = '';
            document.getElementById('adminLoginForm').reset();
            document.querySelector('#adminLoginForm button[type="submit"]').disabled = false;
            document.querySelector('#adminLoginForm button[type="submit"]').innerHTML = 'Login as Admin';
        });

        function handleLogout(event) {
            event.preventDefault();

            fetch('/Views/auth/logout_handler.php', {
                    method: 'POST',
                    credentials: 'include',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(() => {
                    // Clear local storage
                    localStorage.clear();
                    sessionStorage.clear();

                    // Force reload and redirect
                    window.location.href = '/';
                    setTimeout(() => {
                        window.location.reload(true);
                    }, 100);
                })
                .catch(() => {
                    window.location.href = '/';
                    window.location.reload(true);
                });
        }
    </script>

    <!-- Profile Panel -->
    <div class="offcanvas offcanvas-end profile-panel" tabindex="-1" id="profileOffcanvas">
        <div class="offcanvas-header profile-header">
            <div class="d-flex align-items-center w-100">
                <div class="profile-image-container">
                    <img src="<?php echo !empty($_SESSION['profile_picture']) ? '/' . $_SESSION['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>"
                        alt="Profile" class="profile-pic">
                    <div class="online-status"></div>
                </div>
                <div class="profile-info ms-3">
                    <h5 class="mb-1 fw-bold"><?php echo htmlspecialchars($_SESSION['name']); ?></h5>
                    <span class="text-white-50"><?php echo ucfirst($_SESSION['role']); ?></span>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body p-0">
            <!-- Navigation Tabs -->
            <ul class="nav nav-tabs profile-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-tab" type="button">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notification-tab" type="button">Notifications</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#settings-tab" type="button">Settings</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content p-3">
                <!-- Profile Tab -->
                <div class="tab-pane fade show active" id="profile-tab">
                    <form id="profile-form" class="profile-form">
                        <div class="text-center mb-4">
                            <div class="profile-picture-upload">
                                <img src="<?php echo !empty($_SESSION['profile_picture']) ? '/' . $_SESSION['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>"
                                    alt="Profile" class="profile-pic-lg" id="preview-profile-pic">
                                <label for="profile-upload" class="upload-btn">
                                    <i class="bi bi-camera"></i>
                                </label>
                                <input type="file" id="profile-upload" name="profile_picture" hidden accept="image/*">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($_SESSION['name']); ?>">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                    </form>
                </div>

                <!-- Notifications Tab -->
                <div class="tab-pane fade" id="notification-tab">
                    <div class="notification-list">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <div class="notification-item">
                                <div class="notification-icon bg-primary">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <div class="notification-content">
                                    <h6 class="mb-1">New Order Received</h6>
                                    <p class="small text-muted mb-0">30 minutes ago</p>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- Settings Tab -->
                <div class="tab-pane fade" id="settings-tab">
                    <div class="settings-list">
                        <a href="/reset" class="settings-item">
                            <i class="bi bi-shield-lock"></i>
                            <span>Change Password</span>
                        </a>

                        <?php if (isset($_SESSION['role']) && ($_SESSION['role'] === 'Admin' || $_SESSION['role'] === 'Shopowner')): ?>
                            <a href="/dashboard" class="settings-item">
                                <i class="bi bi-speedometer2"></i>
                                <span>Dashboard</span>
                            </a>
                        <?php endif; ?>

                        <a href="#" onclick="handleLogout(event)" class="settings-item text-danger">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        // Check role and redirect on page load
        document.addEventListener('DOMContentLoaded', function() {
            const dashboardAccess = sessionStorage.getItem('dashboard_access');
            const userRole = sessionStorage.getItem('userRole');

            if (dashboardAccess === 'true' && (userRole === 'admin' || userRole === 'shopowner')) {
                window.location.replace('/dashboard');
            }
        });

        document.getElementById('profile-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            // Show loading indicator
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Updating...';

            fetch('/updateProfile', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Update profile images
                        const profilePicture = data.data.profile_picture || '/Views/assets/img/avatars/1.png';
                        document.querySelectorAll('.profile-pic, .user-avatar, .profile-pic-lg').forEach(img => {
                            img.src = profilePicture;
                        });

                        // Update displayed name only
                        document.querySelectorAll('.profile-info h5, .profile-info h6').forEach(el => {
                            if (el.classList.contains('fw-bold')) {
                                el.textContent = data.data.name;
                            }
                        });

                        // Show success message
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: data.message,
                            timer: 2000,
                            showConfirmButton: false
                        });
                    } else {
                        throw new Error(data.message);
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: error.message,
                        confirmButtonColor: '#FF69B4'
                    });
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Update Profile';
                });
        });

        // Preview image before upload
        document.getElementById('profile-upload').addEventListener('change', function(e) {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-profile-pic').src = e.target.result;
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>