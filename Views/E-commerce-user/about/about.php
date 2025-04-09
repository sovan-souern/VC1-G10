<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Our Shop</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Hero Section -->
  <div class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold">About Our Shop</h1>
          <p class="lead">Discover our story, our passion, and what makes us unique.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Story Section -->
  <section class="our-story-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="position-relative rounded overflow-hidden story-image-container">
            <img src="/Views/E-commerce-user/assets/img/about/about11.jpg" alt="Our Story" class="img-fluid rounded">
            <a href="https://vimeo.com/channels/staffpicks/93951774" class="video-play-button">
              <i class="fas fa-play"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="section-heading">
            <h6 class="text-primary text-uppercase">Our Journey</h6>
            <h2 class="mb-4">How We Started</h2>
          </div>
          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat asperiores illum.</p>
          <div class="story-expanded-content" id="storyExpandedContent">
            <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in, quibusdam cumque recusandae, laudantium minima repellendus.</p>
            <p>Our passion for quality and service has driven us since day one. We believe in creating products that not only look good but also stand the test of time. Every item in our collection is carefully selected to ensure it meets our high standards.</p>
          </div>
          <button id="storyLearnMoreBtn" class="btn btn-primary mt-3">Learn More</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Shop Gallery Section -->
  <section class="shop-gallery-section">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-primary text-uppercase">Visit Us</h6>
        <h2 class="mb-3">Our Shop</h2>
        <p class="lead mx-auto">This is a picture of our shop. We'd love to welcome you in person whenever you're ready to visit.</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="gallery-item">
            <div class="gallery-image">
              <img src="/Views/E-commerce-user/assets/img/about/about6.jpg" alt="In front of the stall" class="img-fluid">
              <div class="gallery-overlay">
                <div class="gallery-info">
                  <h5>In front of the stall</h5>
                  <p>Our welcoming storefront</p>
                </div>
              </div>
            </div>
            <div class="gallery-caption">
              <h5>In front of the stall</h5>
              <button class="btn btn-sm btn-outline-primary view-larger-btn" data-img="/Views/E-commerce-user/assets/img/about/about6.jpg" data-title="In front of the stall">View Larger</button>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="gallery-item">
            <div class="gallery-image">
              <img src="/Views/E-commerce-user/assets/img/about/about7.jpg" alt="In the stall" class="img-fluid">
              <div class="gallery-overlay">
                <div class="gallery-info">
                  <h5>In the stall</h5>
                  <p>Browse our collection</p>
                </div>
              </div>
            </div>
            <div class="gallery-caption">
              <h5>In the stall</h5>
              <button class="btn btn-sm btn-outline-primary view-larger-btn" data-img="/Views/E-commerce-user/assets/img/about/about7.jpg" data-title="In the stall">View Larger</button>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="gallery-item">
            <div class="gallery-image">
              <img src="/Views/E-commerce-user/assets/img/about/about8.jpg" alt="In small size" class="img-fluid">
              <div class="gallery-overlay">
                <div class="gallery-info">
                  <h5>In small size</h5>
                  <p>Our cozy corner</p>
                </div>
              </div>
            </div>
            <div class="gallery-caption">
              <h5>In small size</h5>
              <button class="btn btn-sm btn-outline-primary view-larger-btn" data-img="/Views/E-commerce-user/assets/img/about/about8.jpg" data-title="In small size">View Larger</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-primary text-uppercase">Why Choose Us</h6>
        <h2 class="mb-3">Our Services</h2>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-truck"></i>
            </div>
            <h3>Free Shipping</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            <div class="feature-expanded-content">
              <p>We offer free shipping on all orders over $50. Our shipping partners ensure your items arrive safely and on time. We also provide tracking information so you can monitor your delivery every step of the way.</p>
            </div>
            <button class="btn btn-sm btn-outline-primary learn-more-btn mt-3">Learn More</button>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-redo"></i>
            </div>
            <h3>Free Returns</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            <div class="feature-expanded-content">
              <p>Not satisfied with your purchase? No problem! We offer hassle-free returns within 30 days of delivery. Simply contact our customer service team, and they'll guide you through the return process.</p>
            </div>
            <button class="btn btn-sm btn-outline-primary learn-more-btn mt-3">Learn More</button>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-question-circle"></i>
            </div>
            <h3>Customer Support</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
            <div class="feature-expanded-content">
              <p>Our dedicated customer support team is available 24/7 to assist you with any questions or concerns. Whether you need help with an order, product information, or after-sales support, we're here for you.</p>
            </div>
            <button class="btn btn-sm btn-outline-primary learn-more-btn mt-3">Learn More</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Enhanced Gallery Modal -->
  <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="modalTitle"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <div class="gallery-modal-image-container">
            <img id="modalImage" src="/placeholder.svg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="script.js"></script>
</body>
</html>
<style>
  
      .slideshow-container {
        display: none;
    }
    .dot-container {
        display: none;
    }
  /* Global Styles */
:root {
  --primary-color: #f06292;
  --primary-dark: #ec407a;
  --secondary-color: #f8bbd0;
  --text-color: #333;
  --light-color: #fff;
  --gray-color: #f5f5f5;
  --dark-gray: #757575;
  --transition: all 0.3s ease;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: var(--text-color);
  line-height: 1.6;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 600;
}

section {
  padding: 80px 0;
}

.text-primary {
  color: var(--primary-color) !important;
}

.btn-primary {
  background-color: var(--primary-color);
  border-color: var(--primary-color);
}

.btn-primary:hover {
  background-color: var(--primary-dark);
  border-color: var(--primary-dark);
}

.btn-outline-primary {
  color: var(--primary-color);
  border-color: var(--primary-color);
}

.btn-outline-primary:hover {
  background-color: var(--primary-color);
  border-color: var(--primary-color);
  color: white;
}

/* Hero Section */
.hero-section {
  background-color: var(--secondary-color);
  background-image: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.4) 100%);
  padding: 100px 0;
  margin-bottom: 30px;
}

.hero-section h1 {
  color: var(--primary-dark);
  margin-bottom: 20px;
}

/* Our Story Section */
.our-story-section {
  background-color: var(--light-color);
}

.section-heading h6 {
  font-weight: 600;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

.story-image-container {
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  transition: var(--transition);
}

.story-image-container:hover {
  transform: translateY(-10px);
}

.video-play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 70px;
  height: 70px;
  background-color: var(--primary-color);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--light-color);
  font-size: 20px;
  text-decoration: none;
  transition: var(--transition);
  box-shadow: 0 0 0 10px rgba(240, 98, 146, 0.3);
}

.video-play-button:hover {
  background-color: var(--primary-dark);
  color: var(--light-color);
  box-shadow: 0 0 0 15px rgba(240, 98, 146, 0.2);
}

/* Enhanced Learn More Functionality */
.story-expanded-content {
  display: none;
  margin-top: 15px;
  animation: fadeIn 0.5s ease;
}

.feature-expanded-content {
  display: none;
  margin-top: 15px;
  animation: fadeIn 0.5s ease;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-10px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Shop Gallery Section */
.shop-gallery-section {
  background-color: var(--gray-color);
}

.gallery-item {
  margin-bottom: 30px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
  background-color: var(--light-color);
  transition: var(--transition);
  height: 100%;
}

.gallery-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.gallery-image {
  position: relative;
  overflow: hidden;
}

.gallery-image img {
  transition: var(--transition);
  width: 100%;
  height: 250px;
  object-fit: cover;
}

.gallery-item:hover .gallery-image img {
  transform: scale(1.1);
}

.gallery-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(240, 98, 146, 0.7);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: var(--transition);
}

.gallery-item:hover .gallery-overlay {
  opacity: 1;
}

.gallery-info {
  text-align: center;
  color: var(--light-color);
  padding: 20px;
  transform: translateY(20px);
  transition: var(--transition);
}

.gallery-item:hover .gallery-info {
  transform: translateY(0);
}

.gallery-caption {
  padding: 15px;
  text-align: center;
}

.gallery-caption h5 {
  margin-bottom: 10px;
  font-size: 18px;
}

/* Features Section */
.features-section {
  background-color: var(--light-color);
}

.feature-card {
  background-color: var(--light-color);
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
  text-align: center;
  transition: var(--transition);
  height: 100%;
}

.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.feature-icon {
  width: 80px;
  height: 80px;
  background-color: var(--secondary-color);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  font-size: 30px;
  color: var(--primary-color);
  transition: var(--transition);
}

.feature-card:hover .feature-icon {
  background-color: var(--primary-color);
  color: var(--light-color);
}

.feature-card h3 {
  margin-bottom: 15px;
  font-size: 20px;
}

/* Enhanced Gallery Modal */
.gallery-modal-image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #000;
  height: 70vh;
  overflow: hidden;
}

.gallery-modal-image-container img {
  max-height: 100%;
  max-width: 100%;
  object-fit: contain;
}

.modal-dialog.modal-xl {
  max-width: 90%;
}

.modal-content {
  border-radius: 8px;
  overflow: hidden;
}

.modal-header {
  padding: 15px 20px;
  background-color: white;
}

/* Responsive Styles */
@media (max-width: 991px) {
  section {
    padding: 60px 0;
  }
  
  .hero-section {
    padding: 80px 0;
  }
}

@media (max-width: 767px) {
  section {
    padding: 50px 0;
  }
  
  .hero-section {
    padding: 60px 0;
  }
  
  .gallery-image img {
    height: 200px;
  }
  
  .modal-dialog.modal-xl {
    max-width: 95%;
    margin: 10px auto;
  }
  
  .gallery-modal-image-container {
    height: 50vh;
  }
}
</style>

<script>
  // Gallery Modal Functionality
document.addEventListener('DOMContentLoaded', function() {
  // Initialize the modal
  const galleryModal = new bootstrap.Modal(document.getElementById('galleryModal'), {
    backdrop: 'static'
  });
  
  // Get all "View Larger" buttons
  const viewLargerButtons = document.querySelectorAll('.view-larger-btn');
  
  // Add click event to each button
  viewLargerButtons.forEach(button => {
    button.addEventListener('click', function() {
      const imageSrc = this.getAttribute('data-img');
      const title = this.getAttribute('data-title');
      
      // Set modal content
      document.getElementById('modalImage').src = imageSrc;
      document.getElementById('modalTitle').textContent = title;
      
      // Prevent body scrolling when modal is open
      document.body.style.overflow = 'hidden';
      
      // Show the modal
      galleryModal.show();
    });
  });
  
  // Restore body scrolling when modal is closed
  document.getElementById('galleryModal').addEventListener('hidden.bs.modal', function () {
    document.body.style.overflow = 'auto';
  });
  
  // Learn More functionality for Our Story section
  const storyLearnMoreBtn = document.getElementById('storyLearnMoreBtn');
  const storyExpandedContent = document.getElementById('storyExpandedContent');
  
  storyLearnMoreBtn.addEventListener('click', function() {
    if (storyExpandedContent.style.display === 'block') {
      storyExpandedContent.style.display = 'none';
      this.textContent = 'Learn More';
    } else {
      storyExpandedContent.style.display = 'block';
      this.textContent = 'Show Less';
    }
  });
  
  // Learn More functionality for feature cards
  const learnMoreButtons = document.querySelectorAll('.feature-card .learn-more-btn');
  
  learnMoreButtons.forEach(button => {
    button.addEventListener('click', function() {
      const expandedContent = this.previousElementSibling;
      
      if (expandedContent.style.display === 'block') {
        expandedContent.style.display = 'none';
        this.textContent = 'Learn More';
      } else {
        expandedContent.style.display = 'block';
        this.textContent = 'Show Less';
      }
    });
  });
  
  // Add animation on scroll
  const animateOnScroll = function() {
    const elements = document.querySelectorAll('.gallery-item, .feature-card, .story-image-container');
    
    elements.forEach(element => {
      const elementPosition = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementPosition < windowHeight - 100) {
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
      }
    });
  };
  
  // Set initial state for animation
  const elementsToAnimate = document.querySelectorAll('.gallery-item, .feature-card, .story-image-container');
  elementsToAnimate.forEach(element => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(20px)';
    element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
  });
  
  // Run animation on load and scroll
  window.addEventListener('load', animateOnScroll);
  window.addEventListener('scroll', animateOnScroll);
  
  // Add keyboard navigation for gallery modal
  document.addEventListener('keydown', function(e) {
    if (document.getElementById('galleryModal').classList.contains('show')) {
      if (e.key === 'Escape') {
        galleryModal.hide();
      }
    }
  });
});
</script>