<div class="container-fluid footer py-5">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Our Services</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Facials</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Waxing</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Message</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Minarel baths</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Body treatments</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Aroma Therapy</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Stone Spa</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Schedule</h4>
                    <p class="text-muted mb-0">Monday: <span class="text-white"> 09:00 am - 10:00 pm</span></p>
                    <p class="text-muted mb-0">Saturday: <span class="text-white"> 09:00 am - 08:00 pm</span></p>
                    <p class="text-muted mb-0">Sunday: <span class="text-white"> 09:00 am - 05:00 pm</span></p>
                    <h4 class="my-4 text-white">Address</h4>
                    <p class="mb-0"><i class="fas fa-map-marker-alt text-secondary me-2"></i> 123 ranking street North tower New York, USA</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Follow Us</h4>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Faceboock</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Instagram</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Message</a>
                    <h4 class="my-4 text-white">Contact Us</h4>
                    <p class="mb-0"><i class="fas fa-envelope text-secondary me-2"></i> info@example.com</p>
                    <p class="mb-0"><i class="fas fa-phone text-secondary me-2"></i> (+012) 3456 7890 123</p>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
<style>
    .footer {
        background-color: rgb(202, 20, 20);
        /* Darker background for a sleek look */
        /* color: #ccc;
    font-size: 16px;
    padding-top: 50px;
    display: flex; */
    }

    /* Footer Items */

    .footer .row {
        display: flex;
        justify-content: space-between;
        gap: 30px;
    }

    .footer-item h4 {
        font-size: 22px;
        font-weight: bold;

        padding-bottom: 8px;
        margin-bottom: 25px;
        /* Increased spacing below */
        display: inline-block;
        color: #fff;

    }


    .footer-item a:hover {
        color: #fff;
        padding-left: 8px;
    }

    /* Icons */
    .footer-item i {
        color: #7971ea;
        margin-right: 10px;
        transition: all 0.3s ease-in-out;
    }

    /* .footer-item a:hover i {
        color: #fff;
    } */

    /* Contact Information */
    .footer-item p {
        margin-bottom: 12px;
        font-size: 15px;
        color: #aaa;
    }

    /* .footer-item p i {
    color: #7971ea;
    margin-right: 8px;
} */

    /* Responsive Design */
    @media (max-width: 992px) {
        .footer .row {
            text-align: start;
        }

        .footer-item {
            align-items: start;
        }

        .footer-item a {
            display: block;
        }
    }

    /* Subtle Animation for Fade-in Effect */
    .footer {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>