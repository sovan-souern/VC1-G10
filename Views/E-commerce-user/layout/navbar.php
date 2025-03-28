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

            <div
                class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
                <div class="support-box text-end d-none d-xl-block">
                    <h5 class="mb-0">Phone: +855 86277461</h5>
                </div>
                <div class="support-box text-end d-none d-xl-block">
                    <?php if (isset($_SESSION['admin_ID'])): ?>
                        <a href="#" class="d-flex align-items-center text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#profileOffcanvas">
                            <div class="avatar avatar-online">
                                <img src="<?php echo !empty($_SESSION['profile_picture']) ? '/' . $_SESSION['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>" 
                                     alt="Profile" class="user-avatar">
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="/login" class="d-flex align-items-center mx-3 text-decoration-none">
                            <iconify-icon icon="healthicons:person" class="fs-4 me-2"></iconify-icon>
                            <h5 class="mb-0">Login</h5>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <hr class="m-0">
    </div>

    <div class="container">
        <nav class="main-menu d-flex navbar navbar-expand-lg ">

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
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
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
                            </span>
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
                    <select class="filter-categories border-0 mb-0 me-5">
                        <option>Shop by Category</option>
                        <option>Clothes</option>
                        <option>Food</option>
                        <option>Food</option>
                        <option>Toy</option>
                    </select>

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

                    <div class="d-none d-lg-flex align-items-end">
                        <ul class="d-flex justify-content-end list-unstyled m-0">

                            <li>
                                <a href="index.html" class="mx-3">
                                    <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                                </a>
                            </li>

                            <li class="">
                                <a href="index.html" class="mx-3" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                    <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                                    <span
                                        class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                        03
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </nav>
    </div>
</header>

<!-- Add this CSS to your existing <style> tag -->
<style>
    .slideshow-section {
        margin: 0; /* Remove margin to allow full-screen */
        width: 100vw; /* Full viewport width */
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw; /* Offset to extend beyond container */
        margin-right: -50vw;
    }

    .slideshow-container {
        width: 100%; /* Full width */
        height: 100vh; /* Full viewport height */
        position: relative;
        overflow: hidden;
        border-radius: 0; /* Remove rounding for full-screen */
        box-shadow: none; /* Remove shadow for cleaner look */
    }

    .slides-wrapper {
        display: flex;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        width: 100%;
        height: 100%; /* Match container height */
    }

    .mySlides {
        min-width: 100%;
        position: relative;
        overflow: hidden;
        height: 100%; /* Full height of container */
    }

    .mySlides img {
        width: 100%;
        height: 100%; /* Full height of slide */
        object-fit: cover; /* Cover entire area */
        transition: transform 0.5s ease;
    }

    .mySlides:hover img {
        transform: scale(1.05);
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 20px;
        color: white;
        font-size: 30px; /* Larger for full-screen */
        background: rgba(0, 0, 0, 0.5);
        transition: all 0.3s ease;
        z-index: 10;
    }

    .prev { left: 20px; border-radius: 0 10px 10px 0; }
    .next { right: 20px; border-radius: 10px 0 0 10px; }

    .prev:hover, .next:hover {
        background: rgba(0, 0, 0, 0.9);
        padding: 20px 30px;
    }

    .text, .numbertext {
        position: absolute;
        color: white;
        padding: 20px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    }

    .text {
        bottom: 20px;
        width: 100%;
        text-align: center;
        font-size: 24px; /* Larger for full-screen */
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
    }

    .numbertext {
        top: 20px;
        left: 20px;
        font-size: 16px;
    }

    .dots-container {
        position: absolute;
        bottom: 20px;
        width: 100%;
        text-align: center;
        z-index: 10;
    }

    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 8px;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 50%;
        display: inline-block;
        transition: all 0.3s ease;
        border: 2px solid #fff;
    }

    .dot:hover, .dot.active {
        background-color: #ff9a9e;
        transform: scale(1.2);
    }

    @media (max-width: 600px) {
        .text { font-size: 18px; }
        .prev, .next { font-size: 24px; padding: 15px; }
        .numbertext { font-size: 14px; }
        .dot { height: 12px; width: 12px; }
    }
</style>

<!-- Add this JavaScript at the bottom of your <body> tag -->
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let slidesWrapper = document.querySelector(".slides-wrapper");
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");

        if (n > slides.length) slideIndex = 1;
        if (n < 1) slideIndex = slides.length;

        slidesWrapper.style.transform = `translateX(-${(slideIndex - 1) * 100}%)`;

        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex - 1].className += " active";
    }
</script>


=======
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
    .dot.active, .dot:hover {
      background-color: #717171; /* Active/hover state for dots */
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
>>>>>>> 9469813a5b1c3a0ff94b34ff8c96e2018c623373
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
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
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
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
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
        color: rgba(255,255,255,0.9);
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
        box-shadow: 0 5px 25px rgba(0,0,0,0.15);
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
        margin-right: 15px;
        font-size: 1.2rem;
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

document.getElementById('adminLoginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const button = this.querySelector('button[type="submit"]');
    const messageDiv = document.getElementById('adminLoginMessage');

    button.disabled = true;
    button.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Logging in...';

    fetch('/users/authenticate', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            if (data.role === 'admin' || data.role === 'shopowner') {
                messageDiv.innerHTML = '<div class="alert alert-success">Login successful! Redirecting...</div>';
                setTimeout(() => {
                    window.location.href = '/dashboard';
                }, 1000);
            } else {
                messageDiv.innerHTML = '<div class="alert alert-danger">Access denied. Admin privileges required.</div>';
                button.disabled = false;
                button.innerHTML = 'Login as Admin';
            }
        } else {
            messageDiv.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
            button.disabled = false;
            button.innerHTML = 'Login as Admin';
        }
    })
    .catch(error => {
        console.error('Login error:', error);
        messageDiv.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
        button.disabled = false;
        button.innerHTML = 'Login as Admin';
    });
});

// Close modal when clicked outside
document.getElementById('adminLoginModal').addEventListener('hide.bs.modal', function() {
    document.getElementById('adminLoginMessage').innerHTML = '';
    document.getElementById('adminLoginForm').reset();
    document.querySelector('#adminLoginForm button[type="submit"]').disabled = false;
    document.querySelector('#adminLoginForm button[type="submit"]').innerHTML = 'Login as Admin';
});
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
                                 alt="Profile" class="profile-pic-lg">
                            <label for="profile-upload" class="upload-btn">
                                <i class="bi bi-camera"></i>
                            </label>
                            <input type="file" id="profile-upload" hidden accept="image/*">
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Full Name</label>
                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($_SESSION['name']); ?>">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Phone</label>
                        <input type="tel" class="form-control" value="<?php echo htmlspecialchars($_SESSION['phone']); ?>">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                </form>
            </div>

            <!-- Notifications Tab -->
            <div class="tab-pane fade" id="notification-tab">
                <div class="notification-list">
                    <?php for($i = 0; $i < 3; $i++): ?>
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
                    <a href="#" class="settings-item" data-bs-toggle="modal" data-bs-target="#adminLoginModal">
                        <i class="bi bi-person-badge"></i>
                        <span>Admin Login</span>
                    </a>
                    <?php if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'shopowner'): ?>
                        <a href="/dashboard" class="settings-item">
                            <i class="bi bi-speedometer2"></i>
                            <span>Dashboard</span>
                        </a>
                    <?php endif; ?>
                    <a href="#" onclick="confirmLogout(); return false;" class="settings-item text-danger">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>

            <!-- Add Admin Login Modal -->
            <div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header admin-modal-header">
                            <h5 class="modal-title" id="adminLoginModalLabel">Admin Access</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="login-container">
                                <!-- Left Section -->
                                <div class="left-section text-center p-4">
                                    <img src="https://i.pinimg.com/736x/4e/cc/64/4ecc644e07133109fc0e1048e787d1e5.jpg" 
                                         alt="App Logo" class="admin-logo mb-3">
                                    <h6 class="text-white mb-2">Admin Portal</h6>
                                    <p class="text-white-50 small">Access your administrative dashboard</p>
                                </div>

                                <!-- Right Section -->
                                <div class="right-section p-4">
                                    <form id="adminLoginForm" class="admin-login-form">
                                        <div class="form-group mb-3">
                                            <input type="tel" class="form-control" name="phone" 
                                                   placeholder="Phone Number" pattern="[0-9]{9,10}" required>
                                        </div>
                                        
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control" name="password" 
                                                   placeholder="Password" required>
                                        </div>

                                        <div id="adminLoginMessage" class="mb-3"></div>
                                        
                                        <button type="submit" class="btn btn-primary w-100">
                                            Login as Admin
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Add Admin Login Modal -->
<div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header admin-modal-header">
                <h5 class="modal-title" id="adminLoginModalLabel">Admin Access</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="login-container">
                    <div class="right-section p-4">
                        <form id="adminLoginForm" class="admin-login-form">
                            <div class="form-group mb-3">
                                <input type="tel" class="form-control" name="phone" 
                                       placeholder="Phone Number" pattern="[0-9]{9,10}" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" name="password" 
                                       placeholder="Password" required>
                            </div>

                            <!-- Add hidden field to identify admin login -->
                            <input type="hidden" name="admin_login" value="true">

                            <div id="adminLoginMessage" class="mb-3"></div>
                            
                            <button type="submit" class="btn btn-primary w-100">
                                Login as Admin
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('adminLoginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const button = this.querySelector('button[type="submit"]');
    const messageDiv = document.getElementById('adminLoginMessage');

    // Clear previous messages
    messageDiv.innerHTML = '';
    button.disabled = true;
    button.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Verifying...';

    fetch('/users/authenticate', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            if (data.role === 'Admin' || data.role === 'shopowner') {
                messageDiv.innerHTML = '<div class="alert alert-success">Access granted! Redirecting to dashboard...</div>';
                setTimeout(() => {
                    window.location.href = '/dashboard';
                }, 1500);
            } else {
                messageDiv.innerHTML = '<div class="alert alert-danger">Access denied. Admin privileges required.</div>';
                button.disabled = false;
                button.innerHTML = 'Login as Admin';
            }
        } else {
            messageDiv.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
            button.disabled = false;
            button.innerHTML = 'Login as Admin';
        }
    })
    .catch(error => {
        console.error('Login error:', error);
        messageDiv.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again.</div>';
        button.disabled = false;
        button.innerHTML = 'Login as Admin';
    });
});

// Close modal handler
document.getElementById('adminLoginModal').addEventListener('hide.bs.modal', function() {
    document.getElementById('adminLoginMessage').innerHTML = '';
    document.getElementById('adminLoginForm').reset();
    const button = document.querySelector('#adminLoginForm button[type="submit"]');
    button.disabled = false;
    button.innerHTML = 'Login as Admin';
});
</script>