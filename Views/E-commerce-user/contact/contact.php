<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add Leaflet CSS for OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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
            opacity: 1;
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
            gap: 14px;
            width: 100%;
            margin-top: 30px;
        }
        .contact-info h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            opacity: 1;
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
            opacity: 1;
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
            background:#FBDEE7;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            opacity: 1;
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
            opacity: 1;
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
            opacity: 1;
        }
        .btn-submit:hover {
            background-color: rgb(41, 173, 85);
            transform: scale(1.05) translateY(0);
        }

        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            opacity: 1;
            transform: scale(1);
            position: relative;
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

        .suggestions {
            position: absolute;
            top: 100%;
            left: 25%;
            width: 50%;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }
        .suggestions div {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }
        .suggestions div:hover {
            background-color: #f0f0f0;
        }

        .map-container {
            width: 100%;
            padding: 10px;
            margin: 0;
            opacity: 1;
            transform: scale(1);
        }
        #map {
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
            .suggestions {
                left: 15%;
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
            .suggestions {
                left: 20%;
                width: 60%;
            }
            #map {
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
                    <label>Phone</label>
                    <input type="phone" class="form-control" required>
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

<div class="search-container">
    <input type="text" id="searchInput" placeholder="Search for a location...">
    <button onclick="searchLocation()">Search</button>
    <div class="suggestions" id="suggestions"></div>
</div>

<div class="map-container mt-4">
    <div id="map"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Initialize the OpenStreetMap
    let map = L.map('map').setView([11.550132, 104.880024], 15); // Default coordinates for Psa Trapeang Chhouk, Phnom Penh

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker for the default location
    let marker = L.marker([11.550132, 104.880024]).addTo(map)
        .bindPopup('Psa Trapeang Chhouk, Theok Thla Sangkat, Sen Sok District, Phnom Penh')
        .openPopup();

    // Hardcoded locations with English and Khmer names
    const knownLocations = [
        {
            english: 'national police',
            khmer: 'នគរបាលជាតិ',
            lat: 11.562108, // National Police Headquarters, Phnom Penh
            lng: 104.916009,
            name: 'National Police Headquarters, Phnom Penh'
        },
        {
            english: 'PNC',
            khmer: 'អង្គការប៊ាសឺរ៉ែលនុយមេរិក',
            lat: 11.562108, // National Police Headquarters, Phnom Penh
            lng: 104.916009,
            name: 'borey sorla , 371'
        },
        {
            english: 'the university of cambodia',
            khmer: 'សាកលវិទ្យាល័យកម្ពុជា',
            lat: 11.581981, // The University of Cambodia, Phnom Penh
            lng: 104.918614,
            name: 'The University of Cambodia, Phnom Penh'
        },
        {
            english: 'psa trapeang chhouk',
            khmer: 'ផ្សារត្រពាំងឈូក',
            lat: 11.550132, // Default location
            lng: 104.880024,
            name: 'Psa Trapeang Chhouk, Theok Thla Sangkat, Sen Sok District, Phnom Penh'
        },
        {
            english: 'royal palace',
            khmer: 'ព្រះបរមរាជវាំង',
            lat: 11.563346, // Royal Palace, Phnom Penh
            lng: 104.931701,
            name: 'Royal Palace, Phnom Penh'
        },
        {
            english: 'royal university of phnom penh',
            khmer: 'សាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ',
            lat: 11.5683, // Royal University of Phnom Penh (RUPP)
            lng: 104.8903,
            name: 'Royal University of Phnom Penh (RUPP), Kampuchea Krom Boulevard (Street 128), Sangkat Teuk Laak I Muoy, Khan Toul Kork, Phnom Penh 120404, Cambodia'
        }
    ];

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

    // Autocomplete suggestions
    const searchInput = document.getElementById('searchInput');
    const suggestionsDiv = document.getElementById('suggestions');

    searchInput.addEventListener('input', () => {
        const input = searchInput.value.toLowerCase().trim();
        suggestionsDiv.innerHTML = '';
        suggestionsDiv.style.display = 'none';

        if (input) {
            const matches = knownLocations.filter(location => 
                location.english.toLowerCase().includes(input) || 
                location.khmer.toLowerCase().includes(input)
            );

            if (matches.length > 0) {
                suggestionsDiv.style.display = 'block';
                matches.forEach(location => {
                    const suggestion = document.createElement('div');
                    suggestion.textContent = `${location.english} (${location.khmer})`;
                    suggestion.addEventListener('click', () => {
                        searchInput.value = location.english;
                        suggestionsDiv.style.display = 'none';
                        updateMap(location);
                    });
                    suggestionsDiv.appendChild(suggestion);
                });
            }
        }
    });

    // Hide suggestions when clicking outside
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !suggestionsDiv.contains(e.target)) {
            suggestionsDiv.style.display = 'none';
        }
    });

    // Add Enter key functionality for search
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault(); // Prevent form submission if the input is inside a form
            searchLocation();
        }
    });

    // Search functionality
    window.searchLocation = async function() {
        const input = searchInput.value.toLowerCase().trim();

        if (!input) {
            alert('Please enter a location to search.');
            return;
        }

        // Check if the search term matches a hardcoded location
        const location = knownLocations.find(loc => 
            loc.english.toLowerCase().includes(input) || 
            loc.khmer.toLowerCase().includes(input)
        );

        if (location) {
            updateMap(location);
            suggestionsDiv.style.display = 'none';
            return;
        }

        // Fallback to Nominatim if no match is found
        try {
            const query = input.includes('phnom penh') ? input : `${input}, Phnom Penh`;
            const response = await fetch(`https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(query)}&format=json&limit=1`);
            const data = await response.json();

            if (data.length > 0) {
                const lat = parseFloat(data[0].lat);
                const lon = parseFloat(data[0].lon);
                const displayName = data[0].display_name;

                map.setView([lat, lon], 15);
                marker.setLatLng([lat, lon])
                    .bindPopup(displayName)
                    .openPopup();
            } else {
                alert('Location not found. Please try a more specific search term (e.g., "The University of Cambodia, Phnom Penh" or "សាកលវិទ្យាល័យកម្ពុជា").');
            }
        } catch (error) {
            alert('An error occurred while searching for the location: ' + error.message);
        }
        suggestionsDiv.style.display = 'none';
    };

    // Function to update the map with a location
    function updateMap(location) {
        map.setView([location.lat, location.lng], 15);
        marker.setLatLng([location.lat, location.lng])
            .bindPopup(location.name)
            .openPopup();
    }

    // Initial animation and event listeners
    document.addEventListener('DOMContentLoaded', () => {
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