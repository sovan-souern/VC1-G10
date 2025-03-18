

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid topbar d-none d-lg-block">
            <div class="container px-0">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap bg-pink p-3">
                            <a href="#" class="me-4 text-light" aria-label="Find A Location">
                                <i class="fas fa-map-marker-alt me-2"></i>Find A Location
                            </a>
                            <a href="tel:+01234567890" class="me-4 text-light" aria-label="Call Us">
                                <i class="fas fa-phone-alt me-2"></i>+01234567890
                            </a>
                            <a href="mailto:Example@gmail.com" class="text-light" aria-label="Send an Email">
                                <i class="fas fa-envelope me-2"></i>Example@gmail.com
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-primary display-4">Sparlex</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Product</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="team.html" class="dropdown-item">Team</a>
                                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                                    <a href="404.html" class="dropdown-item">404 page</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <button
                                class="btn-search btn btn-primary btn-primary-outline-0 rounded-circle btn-lg-square"
                                data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                    class="fas fa-search"></i></button>
                            <a href="appointment.html"
                                class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Book
                                Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->



    <!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img src="/Views/E-commerce-user/img/picture2.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3">Spa & Beauty Center</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Massage Treatment</h1>
                            <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="/Views/E-commerce-user/img/picture3.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty
                                Center</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Facial Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="/Views/E-commerce-user/img/picture4.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty
                                Center</h4>
                            <h1 class="display-1 text-capitalize text-dark">Cellulite Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>







   