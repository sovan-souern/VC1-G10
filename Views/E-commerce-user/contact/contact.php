<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            margin: 0;
            background-color: #f5f5f5;
        }

        .row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 50px 15px;
            width: 100%;
            margin: 0;
        }

        .banner {
            position: relative;
            color: white;
            width: 100vw;
            height: 60vh;
            overflow: hidden;
        }
        .banner video {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }
        .banner-content {
            position: relative;
            z-index: 1;
            padding: 60px 50px;
            opacity: 1; /* Ensure visibility by default */
            transform: translateY(0);
        }
        .banner-content h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .banner-content h2 {
            font-size: 24px;
            font-weight: normal;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
            width: 100%;
            margin-top: 30px;
        }
        .contact-info h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            opacity: 1; /* Ensure visibility by default */
            transform: translateX(0);
        }
        .contact-card {
            display: flex;
            align-items: center;
            gap: 15px;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, opacity 0.6s ease-in-out;
            opacity: 1; /* Ensure visibility by default */
            transform: translateX(0);
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .contact-card i {
            font-size: 20px;
            color: #CC88D8;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fce4ec;
            border-radius: 50%;
            transition: 0.3s ease-in-out;
        }
        .contact-card:hover i {
            background-color: rgba(119, 212, 69, 0.73);
            color: white;
            transform: scale(1.1) rotate(360deg);
        }
        .contact-card .info {
            display: flex;
            flex-direction: column;
        }
        .contact-card .info span {
            font-size: 16px;
            color: #333;
        }
        .contact-card .info .label {
            font-weight: bold;
        }
        .contact-card .info .value {
            font-weight: normal;
        }

        .contact-container {
            background: #CC88D8;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            opacity: 1; /* Ensure visibility by default */
            transform: translateX(0);
        }
        .contact-container h3 {
            margin-right: 30%;
            font-size: 24px;
            color: #fff;
        }
        .contact-container input, .contact-container textarea {
            transition: 0.3s;
            transform: translateX(0);
            opacity: 1; /* Ensure visibility by default */
        }
        .contact-container input:focus, .contact-container textarea:focus {
            border-color: rgb(69, 173, 79);
        }
        .btn-submit {
            background-color: rgb(92, 181, 141);
            color: white;
            width: 100%;
            transition: 0.3s;
            transform: translateY(0);
            opacity: 1; /* Ensure visibility by default */
        }
        .btn-submit:hover {
            background-color: rgb(41, 173, 85);
            transform: scale(1.05) translateY(0);
        }

        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            opacity: 1; /* Ensure visibility by default */
            transform: scale(1);
        }
        .search-container input {
            width: 50%;
            padding: 10px;
            border-radius: 5px 0 0 5px;
            border: 1px solid #ccc;
            transition: width 0.5s ease-in-out;
        }
        .search-container button {
            padding: 10px 20px;
            border-radius: 0 5px 5px 0;
            background-color: rgb(92, 181, 141);
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }
        .search-container button:hover {
            background-color: rgb(41, 173, 85);
            transform: scale(1.05);
        }

        .map-container {
            width: 100%;
            padding: 10px;
            margin: 0;
            opacity: 1; /* Ensure visibility by default */
            transform: scale(1);
        }
        iframe {
            width: 100%;
            height: 350px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .row {
                flex-direction: column;
                padding: 20px 10px;
            }
            .contact-info, .contact-container {
                width: 100%;
            }
            .banner-content {
                padding: 100px 20px;
            }
            .banner-content h1 {
                font-size: 36px;
            }
            .banner-content h2 {
                font-size: 18px;
            }
            .search-container input {
                width: 70%;
            }
            .contact-card {
                max-width: 100%;
            }
            .contact-container h3 {
                margin-right: 0;
            }
        }

        @media (max-width: 576px) {
            .banner-content h1 {
                font-size: 28px;
            }
            .banner-content h2 {
                font-size: 16px;
            }
            .search-container input {
                width: 60%;
            }
            iframe {
                height: 300px;
            }
        }

        .visible {
            opacity: 1 !important;
            transform: translateX(0) translateY(0) scale(1) !important;
            transition: all 0.6s ease-in-out;
        }
    </style>
</head>
<body>

<div class="banner">
    <video autoplay muted loop>
        <source src="Views/E-commerce-user/assets/video/promote.mp4" type="video/mp4">
    </video>
    <div class="banner-content mt-5">
        <h1>Get in touch with us easily!</h1>
        <h2>Find out where to visit us and how to contact us.</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="contact-info">
            <h3>Contact Information</h3>
            <div class="contact-card">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info">
                    <span class="label">Address:</span>
                    <span class="value">Psa Trapeang Chhouk, Theok Thla Sangkat, Sen Sok District, Phnom Penh</span>
                </div>
            </div>
            <div class="contact-card">
                <i class="fas fa-phone"></i>
                <div class="info">
                    <span class="label">Phone:</span>
                    <span class="value">016 224 335</span>
                </div>
            </div>
            <div class="contact-card">
                <i class="fab fa-facebook"></i>
                <div class="info">
                    <span class="label">Facebook:</span>
                    <span class="value">Yin Cheariddeth</span>
                </div>
            </div>
            <div class="contact-card">
                <i class="fab fa-telegram"></i>
                <div class="info">
                    <span class="label">Telegram:</span>
                    <span class="value">016 224 335</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="contact-container mt-4">
            <h3>Contact Now</h3>
            <form id="contactForm" action="contact/store" method="POST">
                <div class="mb-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Last Name</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Message</label>
                    <textarea class="form-control" rows="4" required></textarea>
                </div>
                <button type="submit"  class="btn btn-submit" >Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="search-container">
    <input type="text" id="searchInput" placeholder="Search for a location...">
    <button onclick="searchLocation()">Search</button>
</div>

<div class="map-container mt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5568.323324094501!2d104.88002427638088!3d11.550132288649646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add01b007d%3A0xa1037df96a570a7c!2z4Z6V4Z-S4Z6f4Z624Z6aIOGej-GfkuGemuGeluGetuGfhuGehOGeiOGevOGegA!5e1!3m2!1sen!2skh!4v1742700464684!5m2!1sen!2skh" 
        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Animate elements when they come into view
    function animateOnScroll() {
        const elements = document.querySelectorAll('.banner-content, .contact-info h3, .contact-card, .contact-container, .contact-container input, .contact-container textarea, .btn-submit, .search-container, .map-container');
        
        elements.forEach((element, index) => {
            if (isInViewport(element)) {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 150); // Staggered animation
            }
        });
    }

    // Initial animation for banner
    document.addEventListener('DOMContentLoaded', () => {
    //     // Form submission animation
        const form = document.getElementById('contactForm');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = form.querySelector('.btn-submit');
            submitBtn.style.transform = 'scale(0.95)';
            setTimeout(() => {
                submitBtn.style.transform = 'scale(1.05)';
                alert('Message sent successfully!');
                form.reset();
            }, 200);
        });

        // Search bar functionality (for static map, this will redirect to Google Maps)
        window.searchLocation = function() {
            const input = document.getElementById('searchInput').value;
            if (input.trim()) {
                window.open(`https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(input)}`, '_blank');
            } else {
                alert('Please enter a location to search.');
            }
        };

        // Trigger initial animation
        animateOnScroll();
    });

    // Listen for scroll events
    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', animateOnScroll);

    // Rotate animation for icons on hover
    const icons = document.querySelectorAll('.contact-card i');
    icons.forEach(icon => {
        icon.addEventListener('mouseenter', () => {
            icon.style.transition = 'transform 0.5s ease-in-out';
        });
        icon.addEventListener('mouseleave', () => {
            icon.style.transform = 'rotate(0deg)';
        });
    });
</script>
</body>
</html>