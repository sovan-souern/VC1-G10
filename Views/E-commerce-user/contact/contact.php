

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            margin: 0;
            background: #F3F4F6;
        }

        .slideshow-container, .dot-container {
            display: none;
        }

        /* Banner */
        .banner {
            background: linear-gradient(135deg, #ffb6c1, #F48FB1);
            color: white;
            text-align: center;
            padding: 4rem 1rem;
        }

        .banner-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #FFFFFF;
        }

        .banner-content p {
            font-size: 1.125rem;
            max-width: 600px;
            margin: 0 auto;
            color: #FCE4EC;
        }

        /* Contact Wrapper */
        .contact-wrapper {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .contact-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .contact-info, .contact-container {
            background: #FFFFFF;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .contact-info h3, .contact-container h3 {
            font-size: 1.75rem;
            color: #1F2A1A;
            margin-bottom: 1.5rem;
        }

        /* Contact Cards */
        .contact-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            transition: transform 0.2s ease;
            background: #F9FAFB;
        }

        .contact-card:hover {
            transform: translateY(-3px);
            background: #FCE4EC;
        }

        .contact-card i {
            font-size: 1.5rem;
            color: #6D28D9;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #F3E8FF;
            border-radius: 50%;
        }

        .contact-card .info span {
            display: block;
            color: #4B5563;
        }

        .contact-card .info .label {
            font-weight: 600;
            color: #1F2A1A;
            font-size: 0.95rem;
        }

        /* Form Styles */
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-control {
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            padding: 2.5rem 0.75rem 0.75rem;
            transition: all 0.2s ease;
            width: 100%;
        }

        .form-control:focus {
            border-color: #D81B60;
            box-shadow: 0 0 0 3px rgba(216, 27, 96, 0.1);
            outline: none;
        }

        .form-label {
            position: absolute;
            top: 0.75rem;
            left: 1rem;
            font-size: 0.875rem;
            color: #4B5563;
            transition: all 0.2s ease;
            pointer-events: none;
        }

        .form-control:focus + .form-label,
        .form-control:not(:placeholder-shown) + .form-label {
            top: -0.5rem;
            left: 0.75rem;
            font-size: 0.75rem;
            color: #D81B60;
            background: #FFFFFF;
            padding: 0 0.25rem;
        }

        .form-control.is-invalid {
            border-color: #EF4444;
        }

        .invalid-feedback {
            font-size: 0.875rem;
            color: #EF4444;
            margin-top: 0.25rem;
        }

        .btn-submit {
            background: #D81B60;
            color: #FFFFFF;
            padding: 0.75rem;
            border-radius: 8px;
            border: none;
            width: 100%;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-submit:hover {
            background: #AD1457;
            transform: translateY(-1px);
        }

        /* Map */
        .map-container {
            margin-top: 2rem;
            position: relative;
            background: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 1rem;
        }

        #map {
            width: 100%;
            height: 400px;
            border-radius: 8px;
        }

        .search-container {
            position: absolute;
            top: 2rem;
            right: 2rem;
            z-index: 1000;
            display: flex;
            width: 280px;
        }

        .search-container input {
            border: 1px solid #D1D5DB;
            border-radius: 8px 0 0 8px;
            padding: 0.75rem;
            flex: 1;
            background: #FFFFFF;
        }

        .search-container button {
            background: #D81B60;
            color: #FFFFFF;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0 8px 8px 0;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .search-container button:hover {
            background: #AD1457;
        }

        .suggestions {
            position: absolute;
            top: 100%;
            right: 0;
            width: 100%;
            background: #FFFFFF;
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
            margin-top: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .suggestions div {
            padding: 0.75rem;
            cursor: pointer;
            border-bottom: 1px solid #FCE4EC;
            color: #4B5563;
        }

        .suggestions div:hover {
            background: #FCE4EC;
            color: #1F2A1A;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-layout {
                grid-template-columns: 1fr;
            }

            .banner {
                padding: 3rem 1rem;
            }

            .banner-content h1 {
                font-size: 2rem;
            }

            .search-container {
                width: 100%;
                padding: 0 1rem;
                top: 1rem;
                right: 1rem;
            }
        }

        @media (max-width: 576px) {
            .banner-content h1 {
                font-size: 1.5rem;
            }

            .banner-content p {
                font-size: 1rem;
            }

            #map {
                height: 300px;
            }

            .search-container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Banner -->
    <div class="banner">
        <div class="banner-content">
            <h1>Contact Us</h1>
            <p>We're here to help. Reach out to us through any of the following methods.</p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="contact-wrapper">
        <div class="contact-layout">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="info">
                        <span class="label">Address</span>
                        <span>Psa Trapeang Chhouk, Theok Thla Sangkat, Sen Sok District, Phnom Penh</span>
                    </div>
                </div>
                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <div class="info">
                        <span class="label">Phone</span>
                        <span>016 224 335</span>
                    </div>
                </div>
                <div class="contact-card">
                    <i class="fab fa-facebook"></i>
                    <div class="info">
                        <span class="label">Facebook</span>
                        <span>Yin Cheariddeth</span>
                    </div>
                </div>
                <div class="contact-card">
                    <i class="fab fa-telegram"></i>
                    <div class="info">
                        <span class="label">Telegram</span>
                        <span>016 224 335</span>
                    </div>
                </div>
            </div>

            <div class="contact-container">
                <h3>Get in Touch</h3>
                <form id="contactForm" action="/contact/store?id=<?php 
                    foreach ($users as $key => $user) {
                        if ($user["name"] == $_SESSION["name"]) {
                            echo htmlspecialchars($user["admin_id"]);
                            break; // Exit loop after finding the matching user
                        }
                    }
                ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" id="lastName" placeholder=" " required>
                        <label for="lastName" class="form-label">Last Name</label>
                        <div class="invalid-feedback">Please enter your last name.</div>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone_number" class="form-control" id="phoneNumber" placeholder=" " required pattern="[0-9]{9,10}">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="message" rows="4" placeholder=" " required></textarea>
                        <label for="message" class="form-label">Message</label>
                        <div class="invalid-feedback">Please enter a message.</div>
                    </div>
                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Map -->
        <div class="map-container">
            <div id="map"></div>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search location...">
                <button onclick="searchLocation()">Search</button>
                <div class="suggestions" id="suggestions"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Map Initialization
        let map = L.map('map').setView([11.550132, 104.880024], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let marker = L.marker([11.550132, 104.880024]).addTo(map)
            .bindPopup('Psa Trapeang Chhouk, Theok Thla Sangkat, Sen Sok District, Phnom Penh')
            .openPopup();

        const knownLocations = [
            { english: 'national police', khmer: 'នគរបាលជាតិ', lat: 11.562108, lng: 104.916009, name: 'National Police Headquarters, Phnom Penh' },
            { english: 'the university of cambodia', khmer: 'សាកលវិទ្យាល័យកម្ពុជា', lat: 11.581981, lng: 104.918614, name: 'The University of Cambodia, Phnom Penh' },
            { english: 'psa trapeang chhouk', khmer: 'ផ្សារត្រពាំងឈូក', lat: 11.550132, lng: 104.880024, name: 'Psa Trapeang Chhouk, Theok Thla Sangkat, Sen Sok District, Phnom Penh' },
            { english: 'royal palace', khmer: 'ព្រះបរមរាជវាំង', lat: 11.563346, lng: 104.931701, name: 'Royal Palace, Phnom Penh' },
            { english: 'royal university of phnom penh', khmer: 'សាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ', lat: 11.5683, lng: 104.8903, name: 'Royal University of Phnom Penh (RUPP)' }
        ];

        const searchInput = document.getElementById('searchInput');
        const suggestionsDiv = document.getElementById('suggestions');

        searchInput.addEventListener('input', () => {
            const input = searchInput.value.toLowerCase().trim();
            suggestionsDiv.innerHTML = '';
            suggestionsDiv.style.display = 'none';

            if (input) {
                const matches = knownLocations.filter(location =>
                    location.english.toLowerCase().includes(input) || location.khmer.toLowerCase().includes(input)
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

        document.addEventListener('click', (e) => {
            if (!searchInput.contains(e.target) && !suggestionsDiv.contains(e.target)) {
                suggestionsDiv.style.display = 'none';
            }
        });

        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                searchLocation();
            }
        });

        window.searchLocation = async function() {
            const input = searchInput.value.toLowerCase().trim();
            if (!input) {
                alert('Please enter a location to search.');
                return;
            }

            const location = knownLocations.find(loc =>
                loc.english.toLowerCase().includes(input) || loc.khmer.toLowerCase().includes(input)
            );

            if (location) {
                updateMap(location);
                suggestionsDiv.style.display = 'none';
                return;
            }

            try {
                const query = input.includes('phnom penh') ? input : `${input}, Phnom Penh`;
                const response = await fetch(`https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(query)}&format=json&limit=1`);
                const data = await response.json();
                if (data.length > 0) {
                    const lat = parseFloat(data[0].lat);
                    const lon = parseFloat(data[0].lon);
                    const displayName = data[0].display_name;
                    map.setView([lat, lon], 15);
                    marker.setLatLng([lat, lon]).bindPopup(displayName).openPopup();
                } else {
                    alert('Location not found.');
                }
            } catch (error) {
                alert('An error occurred: ' + error.message);
            }
            suggestionsDiv.style.display = 'none';
        };

        function updateMap(location) {
            map.setView([location.lat, location.lng], 15);
            marker.setLatLng([location.lat, location.lng]).bindPopup(location.name).openPopup();
        }

        // Form Validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            const form = this;
            if (!form.checkValidity()) {
                e.preventDefault();
                form.classList.add('was-validated');
            }
        });
    </script>
</body>
</html>