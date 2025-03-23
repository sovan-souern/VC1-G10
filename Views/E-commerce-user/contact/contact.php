<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; }

        /* Banner Section */
        .banner {
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            color: white;
            /* text-align: center; */
            padding: 160px 20px;
            position: relative;
            border-radius: 15px;

        }
        h2 , p {
            }
        .banner img {
            position: absolute;
            right: 0px;
            top: 20px;
            width: 40%;
           
        }

        /* Contact Form */
        .contact-container {
            max-width: 900px;
            margin: auto;
            background: #fce4ec;
            padding: 20px;
            border-radius: 10px;
        }
        .btn-submit {
            background-color: #7b68ee;
            color: white;
            width: 100%;
        }

        /* Google Map */
        iframe {
            width: 100%;
            height: 350px;
            border-radius: 10px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .banner img {
                /* display: none; */
                margin-top: 10%;
                width: 50%;
                
            }
            .banner{
                height: 7vh;
               
            }

        }
    </style>
</head>
<body>

<!-- Banner Section -->
<div class="container mt-4">
    <div class="banner">
        <h2>Get in touch with us easily!</h2>
        <p>Find out where to visit us and how to contact us.</p>
        <img src="Views/assets/img/small-logos/logocontact.png" alt="Products">
    </div>
</div>

<!-- Contact Information -->
<div class="container text-center my-4">
    <p class="alert alert-light">On this page, you can contact us at any time, especially ours, we always welcome you.</p>
</div>

<!-- Contact Form -->
<div class="container contact-container">
    <form>
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

<!-- Google Map -->
<!-- <div class="container my-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093706!2d144.95592501531636!3d-37.8172097420219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5778f324b67f199!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1645273290364!5m2!1sen!2sau" allowfullscreen="" loading="lazy"></iframe>
</div> -->
<div class="mapss">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5568.323324094501!2d104.88002427638088!3d11.550132288649646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add01b007d%3A0xa1037df96a570a7c!2z4Z6V4Z-S4Z6f4Z624Z6aIOGej-GfkuGemuGeluGetuGfhuGehOGeiOGevOGegA!5e1!3m2!1sen!2skh!4v1742700464684!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
