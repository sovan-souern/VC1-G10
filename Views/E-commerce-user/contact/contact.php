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
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
            width: 100%;
            margin-top: 30px;
        }
        .contact-info p {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 16px;
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
            width: 50%;
            opacity: 0;
        }
        .contact-info i {
            font-size: 22px;
            color: #CC88D8;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fce4ec;
            border-radius: 50%;
            transition: 0.3s ease-in-out;
        }
        .contact-info p:hover i {
            background-color: rgba(119, 212, 69, 0.73);
            color: white;
            transform: scale(1.1) rotate(360deg);
        }

        .contact-container {
            background: #CC88D8;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            h3{
                margin-right: 30%;
            }
        }
        .contact-container input, .contact-container textarea {
            transition: 0.3s;
            transform: translateX(-20px);
            opacity: 0;
        }
        .contact-container input:focus, .contact-container textarea:focus {
            border-color: rgb(69, 173, 79);
        }
        .btn-submit {
            background-color: rgb(92, 181, 141);
            color: white;
            width: 100%;
            transition: 0.3s;
            transform: translateY(20px);
            opacity: 0;
        }
        .btn-submit:hover {
            background-color: rgb(41, 173, 85);
            transform: scale(1.05) translateY(20px);
        }

        .map-container {
            width: 100%;
            padding: 10px;
            margin: 0;
            opacity: 0;
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
        }

        .visible {
            opacity: 1 !important;
            transform: translateX(0) translateY(0) !important;
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
            <p><i class="fas fa-map-marker-alt"></i> Address: Psa Trapeang Chhouk, Theok Thla Sangkat, Sen Sok District, Phnom Penh</p>
            <p><i class="fas fa-phone"></i> 016 224 335</p>
            <p><i class="fab fa-facebook"></i> Yin Cheariddeth</p>
            <p><i class="fab fa-telegram"></i> 016 224 335</p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="contact-container mt-4">
            <h3>Contact Now</h3>
            <form id="contactForm">
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
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
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
        const elements = document.querySelectorAll('.contact-info p, .contact-container input, .contact-container textarea, .btn-submit, .map-container');
        
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
        const bannerContent = document.querySelector('.banner-content');
        bannerContent.style.opacity = '0';
        setTimeout(() => {
            bannerContent.style.transition = 'opacity 1.5s ease-in-out';
            bannerContent.style.opacity = '1';
        }, 100);

        // Form submission animation
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
    });

    // Listen for scroll events
    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', animateOnScroll);

    // Rotate animation for icons on hover
    const icons = document.querySelectorAll('.contact-info i');
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