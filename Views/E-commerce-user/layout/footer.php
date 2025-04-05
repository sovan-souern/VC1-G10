<div class="container-fluid footer py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Our Services</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Facials</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Waxing</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Massage</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Mineral Baths</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Body Treatments</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Aroma Therapy</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Schedule</h4>
                    <p class="text-white mb-2">Monday: <span>09:00 AM - 10:00 PM</span></p>
                    <p class="text-white mb-2">Saturday: <span>09:00 AM - 08:00 PM</span></p>
                    <p class="text-white mb-2">Sunday: <span>09:00 AM - 05:00 PM</span></p>
                    <h4 class="my-4 text-white">Address</h4>
                    <p class="mb-0"><i class="fas fa-map-marker-alt text-secondary me-2"></i> 123 Ranking Street, North Tower, New York, USA</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Follow Us</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Facebook</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Instagram</a>
                    <h4 class="my-4 text-white">Contact Us</h4>
                    <p class="mb-2"><i class="fas fa-envelope text-secondary me-2"></i> info@example.com</p>
                    <p class="mb-0"><i class="fas fa-phone text-secondary me-2"></i> (+012) 3456 7890</p>
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
        background-color: rgb(202, 20, 20); /* Red background */
        color: #fff;
    }

    .footer-item {
        padding: 20px;
        border-radius: 10px;
        text-decoration: none;
        /* border: 1px solid rgba(255, 255, 255, 0.1); */
    }

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
        color: #fff;
        border-bottom: 2px solid #7971ea; 
        display: inline-block;
    }

    .footer-item a {
        color: #ddd;
        text-decoration: none;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        transition: color 0.3s ease, padding-left 0.3s ease;
    }

    .footer-item a:hover {
        color: #fff;
        padding-left: 8px; /* Slight shift on hover */
    }

    .footer-item i {
        color: #7971ea; /* Purple icons */
        margin-right: 10px;
        transition: all 0.3s ease-in-out;
    }

    .footer-item p {
        margin-bottom: 12px;
        font-size: 15px;
        color: #ccc;
    }

    .footer-item p span {
        color: #fff; /* White time text */
    }

    @media (max-width: 992px) {
        .footer .row {
            flex-direction: column;
            text-align: start;
        }

        .footer-item {
            align-items: start;
        }

        .footer-item a {
            display: block;
        }
    }

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