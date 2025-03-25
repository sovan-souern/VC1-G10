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

<section id="banner" style="background: #FBDEE7;">
    <div class="container">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide py-5">
                    <div class="row banner-content align-items-center">
                        <div class="img-wrapper col-md-12">
                            <img src="https://i.pinimg.com/736x/48/bf/fe/48bffeb7f0c3cd3862e8e3adf23289b9.jpg"
                                 class="img-fluid banner-image" alt="Banner Image">
                        </div>
                    </div>
                </div>
                <!-- Add more slides if needed -->
                <div class="swiper-slide py-5">
                    <div class="row banner-content align-items-center">
                        <div class="img-wrapper col-md-12">
                            <img src="https://i.pinimg.com/736x/48/bf/fe/48bffeb7f0c3cd3862e8e3adf23289b9.jpg"
                                 class="img-fluid banner-image" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mb-5"></div>
        </div>
    </div>
</section>
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
    height: 500px; /* Adjust height as needed */
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
    object-fit: cover; /* Ensures the image covers the area without distortion */
    transition: transform 0.5s ease, opacity 0.5s ease; /* Smooth transition for scale and opacity */
}

/* Hover effect on the image */
#banner .banner-image:hover {
    transform: scale(1.05); /* Slight zoom on hover */
    opacity: 0.9; /* Slight fade on hover */
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
    background: #ff6f61; /* Matches your theme color */
    opacity: 1;
}
</style>