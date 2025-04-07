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
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
        }

        /* Navbar Styles */
        .slideshow-container {
        display: none;
    }
    .dot-container {
        display: none;
    }

        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #f0f0f0 !important;
        }

        /* Banner Styles */
        .banner {
            position: relative;
            width: 100%;
            height: 40vh;
            background: linear-gradient(135deg, #CC88D8, #5CB58D);
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner-content h1 {
            font-size: 38px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .banner-content h2 {
            font-size: 18px;
            font-weight: 300;
        }

        /* Contact Wrapper */
        .contact-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .contact-layout {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .contact-info, .contact-container {
            flex: 1 1 48%;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            min-height: 400px; /* Balanced height */
        }

        .contact-info h3, .contact-container h3 {
            font-size: 28px;
            color: #333;
            margin-bottom: 25px;
        }

        .contact-card {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-card i {
            font-size: 22px;
            color: #5CB58D;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.4s ease;
        }

        .contact-card:hover i {
            color: #41AD55;
            transform: rotate(360deg);
        }

        .contact-card .info span {
            font-size: 16px;
            color: #555;
        }

        .contact-card .info .label {
            font-weight: 600;
            color: #333;
        }

        .contact-container .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px;
            transition: border-color 0.3s ease;
        }

        .contact-container .form-control:focus {
            border-color: #5CB58D;
            box-shadow: 0 0 5px rgba(92, 181, 141, 0.3);
        }

        .btn-submit {
            background: #5CB58D;
            color: white;
            padding: 12px;
            border-radius: 8px;
            border: none;
            width: 100%;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #41AD55;
            transform: translateY(-2px);
        }

        /* Map Styles */
        .map-container {
            width: 100%;
            margin-top: 40px;
            position: relative;
        }

        #map {
            width: 100%;
            height: 500px;
            border-radius: 10px;
        }

        .search-container {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            justify-content: flex-end;
            z-index: 1000;
            width: 300px;
        }

        .search-container input {
            width: 100%;
            padding: 10px;
            border-radius: 5px 0 0 5px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-container button {
            padding: 10px 20px;
            border-radius: 0 5px 5px 0;
            background-color: #5CB58D;
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-container button:hover {
            background-color: #41AD55;
            transform: scale(1.05);
        }

        .suggestions {
            position: absolute;
            top: 100%;
            right: 0;
            width: 100%;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .suggestions div {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }

        .suggestions div:hover {
            background-color: #f0f0f0;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .contact-layout {
                flex-direction: column;
                padding: 20px 10px;
            }

            .contact-info, .contact-container {
                flex: 1 1 100%;
            }

            .banner {
                height: 30vh;
            }

            .banner-content h1 {
                font-size: 32px;
            }

            .banner-content h2 {
                font-size: 16px;
            }

            .search-container {
                width: 250px;
                right: 10px;
            }
        }

        @media (max-width: 576px) {
            .banner-content h1 {
                font-size: 24px;
            }

            .banner-content h2 {
                font-size: 14px;
            }

            .search-container {
                width: 200px;
            }

            #map {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    
    <!-- Contact Section -->
    <div class="contact-wrapper">
        <div class="contact-layout">
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

            <div class="contact-container">
                <h3>Get in Touch</h3>
                <form id="contactForm" action="/contact/store" method="POST">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- Map -->
        <div class="map-container">
            <div id="map"></div>
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search for a location...">
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
    </script>
</body>
</html>