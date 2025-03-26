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
                    <a href="index.html" class="d-flex align-items-center mx-3 text-decoration-none">
                        <iconify-icon icon="healthicons:person" class="fs-4 me-2"></iconify-icon>
                        <h5 class="mb-0">Login</h5>
                    </a>
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
                        <a href="account.html" class="mx-3">
                            <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                        </a>
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

<<<<<<< HEAD

<!-- 
<section id="banner" style="background: #FBDEE7;">
    <div class="container">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
=======
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
      background: #000; /* Fallback background */
    }
    .mySlides {
      display: none;
      width: 100%;
      height: 100%;
      position: relative;
    }
    .mySlides.active {
      display: block; /* Show active slide */
    }
    .mySlides img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0; /* Start hidden */
      transition: opacity 1.5s ease-in-out; /* Slow fade for image only */
    }
    .mySlides.active img {
      opacity: 1; /* Fade in when active */
    }
>>>>>>> 9469813a5b1c3a0ff94b34ff8c96e2018c623373

    .prev, .next {
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

<<<<<<< HEAD
                    </div>
                </div>
              

            </div>

            <div class="swiper-pagination mb-5"></div>

        </div>
    </div>
</section> -->
<!-- Slideshow section -->

<!-- Add this within your .container div -->
<!-- Place this within your .container div -->
<section class="slideshow-section">
    <div class="slideshow-container">
        <div class="slides-wrapper">
            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="https://www.lorealparisusa.com/-/media/project/loreal/brand-sites/oap/americas/us/beauty-magazine/articles/how-to-organize-skin-care-products/loreal-paris-bmag-article-how-to-organize-your-skin-care-products-d.jpg">
                <div class="text">Glow with Korean Skincare</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="https://cdn.thewirecutter.com/wp-content/media/2024/12/ROUNDUP-KOREAN-SKINCARE-2048px-9577.jpg" alt="Skincare 2">
                <div class="text">Hydrate & Radiate</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="https://hips.hearstapps.com/hmg-prod/images/gh-best-skincare-products-6557978b58b57.png?crop=0.6666666666666666xw:1xh;center,top&resize=1200:*" alt="Skincare 3">
                <div class="text">Pure Bliss in Every Drop</div>
            </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div class="dots-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>

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