<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="fonts/icomoon/style.css">
</head>

<body>
  <!-- Previous sections remain unchanged -->
  <div class="site-section border-bottom" data-aos="fade">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="block-16">
            <figure>
              <img src="/Views/E-commerce-user/assets/img/about/about11.jpg" alt="Image placeholder" class="img-fluid rounded">
              <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="ion-md-play"></span></a>
            </figure>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="site-section-heading pt-3 mb-4">
            <h2 class="text-black">How We Started</h2>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.</p>
          <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in, quibusdam cumque recusandae, laudantium minima repellendus.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modified shop-container section with transitions -->
  <div class="shop-container">
    <h2 class="shop-title">Our Shop</h2>
    <p class="shop-description">This is a picture of my shop. Please come in when you want to buy.</p>
    <div class="shop-gallery">
      <div class="shop-item">
        <img src="/Views/E-commerce-user/assets/img/about/about6.jpg" alt="In front of the stall" onclick="imageAlert('In front of the stall')">
        <div class="shop-caption">
          <button>In front of the stall</button>
        </div>
      </div>
      <div class="shop-item">
        <img src="/Views/E-commerce-user/assets/img/about/about7.jpg" alt="In the stall" onclick="imageAlert('In the stall')">
        <div class="shop-caption">
          <button>In the stall</button>
        </div>
      </div>
      <div class="shop-item">
        <img src="/Views/E-commerce-user/assets/img/about/about8.jpg" alt="In small size" onclick="imageAlert('In small size')">
        <div class="shop-caption">
          <button>In small size</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Rest of your HTML remains unchanged -->
  <!-- <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade"> -->
    <!-- ... rest of your existing HTML ... -->
  </div>

  <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
          <div class="icon mr-4 align-self-start">
            <span class="fas fa-truck"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Free Shipping</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
          <div class="icon mr-4 align-self-start">
            <span class="fas fa-redo"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Free Returns</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
          <div class="icon mr-4 align-self-start">
            <span class="fas fa-question-circle"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Customer Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<style>
  .shop-container {
    text-align: center;
    max-width: 1100px;
    margin: auto;
    padding: 20px;
  }

  .shop-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .shop-description {
    font-size: 16px;
    margin-bottom: 20px;
  }

  .shop-gallery {
    display: flex;
    justify-content: space-around;
    gap: 20px;
    flex-wrap: wrap;
  }

  .shop-item {
    flex: 1;
    min-width: 280px;
    max-width: 350px;
    text-align: center;
    
  }

  .shop-item img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: all 0.3s ease;
    /* Added transition property */
  }

  /* Hover effects for images */
  .shop-item img:hover {
    transform: scale(1.05);
    /* Slight scale up */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    /* Enhanced shadow */
    opacity: 0.9;
    /* Slight fade effect */
  }

  .shop-caption button {
    margin-top: 10px;
    font-size: 14px;
    background: #f8d7da;
    padding: 8px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    width: 340px;

  }

  .shop-caption button:hover {
    background: #f5c6cb;
  }

  @media (max-width: 768px) {
    .shop-gallery {
      flex-direction: column;
      align-items: center;
    }
  }

  /* Rest of your existing styles remain unchanged */
  .site-section {
    /* padding: 2.5em 0; */
  }

  /* ... rest of your existing styles ... */
</style>

<script>
  // Add this script if you don't already have the imageAlert function defined
  function imageAlert(text) {
    alert(text);
  }
</script>

<style>
  @media (max-width: 768px) {
    .shop-gallery {
      flex-direction: column;
      align-items: center;
    }
  }



  @media (min-width: 768px) {
    .site-section {
      padding: 5em 0;
    }
  }

  .site-section.site-section-sm {
    padding: 4em 0;
  }

  .icon span {
    padding: 10px;
    margin-right: 10px;
  }

  .site-section-heading {
    font-size: 30px;
    color: #25262a;
    position: relative;
  }



  @media (min-width: 768px) {
    .site-navbar .site-navbar-top {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  }

  @media (min-width: 768px) {
    .site-blocks-cover h1 {
      font-size: 50px;
    }
  }



  .site-blocks-1 .icon span {
    position: relative;
    color: #7971ea;
    top: -10px;
    font-size: 50px;
    display: inline-block;
  }

  .site-blocks-1 .text h2 {
    color: #25262a;
    letter-spacing: .05em;
    font-size: 18px;
  }
</style>