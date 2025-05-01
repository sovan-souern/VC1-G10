<?php 
require_once "Models/NotificationModel.php";
require_once "Views/auth/login_handler.php";

// // Check admin access before loading dashboard
// checkAdminAccess();

$model = new NotificationModel;
$notifications = $model->getNotifications();
?>


<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <!-- <a href="index.html" class="app-brand-link"> -->
      <img src="https://i.pinimg.com/736x/4e/cc/64/4ecc644e07133109fc0e1048e787d1e5.jpg"alt="Brand Logo"
        class="logo logo-dark"
        style="width: 50px; height: 50px; border-radius: 50%;" />
      <span class="app-brand-text demo menu-text fw-bolder ms-2" style="color: pink;">Skin care</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bi bi-chevron-left align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="/dashboard" class="menu-link">
        <i class="menu-icon tf-icons bi bi-speedometer2"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    
    <li class="menu-item">
      <a href="/E-comerce" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bi bi-shop"></i>
        <div data-i18n="Layouts">E-Commerce</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/order" class="menu-link">
            <div data-i18n="Container">Orders</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/order/cancel" class="menu-link">
            <div data-i18n="Container">Cancel</div>
          </a>
        </li>
       
        <li class="menu-item">
          <a href="/order/confirm" class="menu-link">
            <div data-i18n="Fluid">Confirm Order</div>
          </a>
      </ul>
    </li>
    <li class="menu-item">
      <a href="/E-comerce" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bi bi-box-seam"></i>
        <div data-i18n="Layouts">Inventory</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/products" class="menu-link">
            <div data-i18n="Container">Product List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/products/create" class="menu-link">
            <div data-i18n="Fluid">Add Product</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/out-stock" class="menu-link">
            <div data-i18n="Blank">Product Stock</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/category" class="menu-link">
            <div data-i18n="Blank">Categories List</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/category/create" class="menu-link">
            <div data-i18n="Blank">Add category</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/brand" class="menu-link">
            <div data-i18n="Blank">Brand</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/brand/create" class="menu-link">
            <div data-i18n="Blank">Add Brand</div>
          </a>
        </li>

      </ul>
    </li>
    <li class="menu-item active">
      <a href="/discount" class="menu-link">
        <i class="menu-icon tf-icons bi bi-tag"></i>
        <div data-i18n="Analytics">Discount</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="/" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bi bi-people"></i>
        <div data-i18n="Layouts">User</div>
      </a>

      <ul class="menu-sub">

        <li class="menu-item">
          <a href="/users" class="menu-link">
            <div data-i18n="Fluid">User List</div>
          </a>
        </li>
      </ul>
    </li>


    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Pages</span>
    </li>
    <li class="menu-item">
      <a href="/" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bi bi-person-gear"></i>
        <div data-i18n="Account Settings">Account Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/editProfile" class="menu-link">
            <div data-i18n="Account">Update Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/resetPw" class="menu-link">
            <div data-i18n="Notifications">Reset Password</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/viewlogin" class="menu-link">
            <div data-i18n="Connections">View Login</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="/" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bi bi-shield-lock"></i>
        <div data-i18n="Authentications">Authentications</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/reset" class="menu-link" target="_blank">
            <div data-i18n="Basic">Forgot Password</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/login" class="menu-link" target="_blank" onclick="confirmLogout(); return false;">
            <div data-i18n="Basic">Logout</div>
          </a>
        </li>
      </ul>
    </li>
   
  </ul>
</aside>

<style>
  .menu-icon {
  font-size: 1rem !important; /* Reduce from default size */
}

/* If you need even smaller icons */
.menu-item .menu-icon {
  font-size: 1.2rem !important;
}

/* Adjust spacing around icons for better alignment */
.menu-link {
  align-items: center;
}

/* Ensure proper vertical alignment */
.menu-icon.tf-icons {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll(".menu-item a");
    const dropdowns = document.querySelectorAll(".dropdown");

    // Load active menu item from localStorage
    const savedActiveMenu = localStorage.getItem("activeMenu");
    if (savedActiveMenu) {
      document.querySelectorAll(".menu-item.active").forEach(item => item.classList.remove("active"));
      const activeLink = document.querySelector(`.menu-item a[href="${savedActiveMenu}"]`);
      if (activeLink) {
        activeLink.closest(".menu-item").classList.add("active");
      }
    }

    // Load expanded dropdown state from localStorage
    const savedExpandedDropdowns = JSON.parse(localStorage.getItem("expandedDropdowns")) || [];
    dropdowns.forEach(dropdown => {
      if (savedExpandedDropdowns.includes(dropdown.getAttribute("data-id"))) {
        dropdown.classList.add("open");
      }
    });

    // Store active menu item
    menuItems.forEach(link => {
      link.addEventListener("click", function() {
        localStorage.setItem("activeMenu", link.getAttribute("href"));
      });
    });

    // Store dropdown open/close state
    dropdowns.forEach(dropdown => {
      dropdown.addEventListener("click", function() {
        const id = dropdown.getAttribute("data-id");
        let expandedDropdowns = JSON.parse(localStorage.getItem("expandedDropdowns")) || [];

        if (dropdown.classList.contains("open")) {
          expandedDropdowns = expandedDropdowns.filter(item => item !== id);
        } else {
          expandedDropdowns.push(id);
        }

        localStorage.setItem("expandedDropdowns", JSON.stringify(expandedDropdowns));
      });
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    // Existing menu code...

    // Add dropdown functionality
    const dropdownToggles = document.querySelectorAll('[data-bs-toggle="dropdown"]');
    dropdownToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        const dropdownMenu = toggle.nextElementSibling;
        dropdownMenu.classList.toggle('show');
      });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.dropdown')) {
        document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
          menu.classList.remove('show');
        });
      }
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const profileDropdown = document.getElementById('profileDropdown');
    const dropdownMenu = profileDropdown.nextElementSibling;
    let isDropdownOpen = false;

    profileDropdown.addEventListener('click', function(e) {
      e.preventDefault();
      isDropdownOpen = !isDropdownOpen;

      if (isDropdownOpen) {
        dropdownMenu.classList.add('show');
        profileDropdown.classList.add('show');
      } else {
        dropdownMenu.classList.remove('show');
        profileDropdown.classList.remove('show');
      }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (!profileDropdown.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove('show');
        profileDropdown.classList.remove('show');
        isDropdownOpen = false;
      }
    });
  });

  function confirmLogout() {
    Swal.fire({
      title: 'Are you sure?',
      text: "You will be logged out of your session!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes, logout!',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '/Views/auth/logout.php';
      }
    });
  }

  // Function to update profile image
  function updateProfileImage(newImageUrl) {
    const profileImages = document.querySelectorAll('.js-profile-img');
    profileImages.forEach(img => {
      img.src = newImageUrl;
    });
  }

  // Listen for profile image updates
  window.addEventListener('profile-image-updated', function(e) {
    if (e.detail && e.detail.imageUrl) {
      updateProfileImage('/' + e.detail.imageUrl);
    }
  });

  // Add this to your existing DOMContentLoaded event
  document.addEventListener('DOMContentLoaded', function() {
    // Check for profile image updates every 30 seconds
    setInterval(function() {
      fetch('/api/user/profile-image.php')
        .then(response => response.json())
        .then(data => {
          if (data.profile_picture) {
            updateProfileImage('/' + data.profile_picture);
          }
        })
        .catch(error => console.log('Error checking profile image:', error));
    }, 30000);

    // ...existing DOMContentLoaded code...
  });

  // Function to update all profile images in the nav bar
  function updateNavProfileImages(newImageUrl) {
    const profileImages = document.querySelectorAll('.profile-img');
    profileImages.forEach(img => {
      img.src = newImageUrl;
    });
  }

  // Listen for profile image updates
  window.addEventListener('profile-image-updated', function(e) {
    if (e.detail && e.detail.imageUrl) {
      updateNavProfileImages('/' + e.detail.imageUrl);
    }
  });

  // Update profile image when page loads if there's a new one in session storage
  document.addEventListener('DOMContentLoaded', function() {
    const storedProfilePicture = sessionStorage.getItem('profile_picture');
    if (storedProfilePicture) {
      updateNavProfileImages('/' + storedProfilePicture);
    }
  });

  // Add this function to update all profile images
  function updateAllProfileImages(imageUrl) {
    // Update both navbar and dropdown profile images
    document.querySelectorAll('.nav-profile-img, .profile-img').forEach(img => {
        img.src = imageUrl;
    });
}

// Modify the existing profile form submit handler
document.getElementById('profile-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);

    fetch('/updateProfile', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Update all profile images
            const profilePicture = data.data.profile_picture || '/Views/assets/img/avatars/1.png';
            updateAllProfileImages(profilePicture);
            
            // Update displayed name
            document.querySelectorAll('.profile-info h5, .profile-info h6').forEach(el => {
                if (el.classList.contains('fw-bold')) {
                    el.textContent = data.data.name;
                }
            });

            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: data.message,
                timer: 2000,
                showConfirmButton: false
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: error.message,
            confirmButtonColor: '#FF69B4'
        });
    });
});

// Add real-time preview for profile image upload
document.getElementById('profile-upload').addEventListener('change', function(e) {
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const imageUrl = e.target.result;
            updateAllProfileImages(imageUrl);
        }
        reader.readAsDataURL(this.files[0]);
    }
});
</script>

<style>
  .dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    min-width: 14rem;
    margin-top: 0.125rem;
    background: white;
    border-radius: 0.375rem;
    box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
    z-index: 1000;
  }

  .dropdown-menu.show {
    display: block;
  }

  .dropdown-user {
    position: relative;
  }

  .avatar img {
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
  }

  .avatar {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
  }

  .avatar-online::before {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #71dd37;
    border: 2px solid #fff;
  }

  .profile-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
  }

  .dropdown-menu {
    min-width: 14rem;
    padding: 0.5rem 0;
    position: absolute;
    right: 0;
    top: 100%;
    margin-top: 0.125rem;
    background: white;
    border-radius: 0.375rem;
    box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
    z-index: 1000;
    display: none;
  }

  .dropdown-menu.show {
    display: block;
  }

  .dropdown-item {
    padding: 0.532rem 1.25rem;
  }

  .dropdown-divider {
    border-top: 1px solid #d9dee3;
    margin: 0.5rem 0;
  }

  .dropdown-toggle.show {
    background-color: rgba(67, 89, 113, 0.05);
  }

  .dropdown-menu {
    transform: translateY(10px);
    opacity: 0;
    visibility: hidden;
    transition: all 0.2s ease;
  }

  .dropdown-menu.show {
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
    display: block;
  }

  .dropdown-toggle::after {
    display: none;
  }
</style>

<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">


    <!-- Layout container -->
    <div class="layout-page">
      <!-- Navbar -->

      <nav
        class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bi bi-list fs-4"></i>
          </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <!-- Search -->
          <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
              <i class="bi bi-search fs-4 lh-0"></i>
              <input
                type="text"
                class="form-control border-0 shadow-none"
                placeholder="Search..."
                aria-label="Search..." />
            </div>
          </div>
          <!-- /Search -->

          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" style="border: red; color: wite;" target="_blank" href="/home">Online Builder</a>
            </li>
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">
              <a
                class="github-button"
                href="https://github.com/sovan-souern/VC1-G10"
                data-icon="octicon-star"
                data-size="large"
                data-show-count="true"
                aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
            </li>


            <!-- navbar.php -->
            <!-- navbar.php -->
            <!-- navbar.php -->
            <!-- navbar.php -->
            <li class="nav-item dropdown pe-3 d-flex align-items-center">
              <a href="/notifications" class="text-decoration-none d-flex align-items-center position-relative" onclick="storeAlerts()">
                <i class="bi bi-bell fs-4"></i>
                <span class="notification-badge" id="notification-badge">

                  <?php
                  $totalIndex = 0;
                  foreach ($notifications as $index => $notification) {
                    if($notification["product_quantity"]<3){
                    if ($notification["status"] == "unread") {
                      $totalIndex++;
                    }
                  }
                }
                  echo $totalIndex;
                  ?>
                </span>
              </a>
            </li>



            <style>
              .nav-item {
                position: relative;
               
              }

              .notification-badge {
                position: absolute;
                margin-bottom: 22px;
                left: 11px;
                background-color: red;
                /* Change this color for different badge colors */
                color: white;
                border-radius: 100%;
                 padding: 0px 6px; 
                font-size: 12px; 
                /* Base font size */
                font-weight: bold;
                display: flex;
                justify-content: center;
                align-items: center;
              }

              /* Responsive adjustments */
              @media (max-width: 768px) {
                .notification-badge {
                  font-size: 10px;
                  padding: 4px 8px;
                }
              }

              @media (max-width: 480px) {
                .notification-badge {
                  font-size: 9px;
                  padding: 3px 6px;
                }
              }
            </style>
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
              <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" id="profileDropdown">
                <div class="avatar avatar-online">
                  <img src="<?php echo !empty($_SESSION['profile_picture']) ? '/' . $_SESSION['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>"
                    alt="User Profile" class="profile-img js-profile-img" id="nav-profile-img" />
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end shadow" style="position: absolute; right: 0; top: 100%; margin-top: 0.125rem;">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                          <img src="<?php echo !empty($_SESSION['profile_picture']) ? '/' . $_SESSION['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>"
                            alt="User Profile" class="profile-img" />
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <span class="fw-semibold d-block">
                          <?php echo htmlspecialchars($_SESSION['name'] ?? 'John Doe'); ?>
                        </span>
                        <small class="text-muted">
                          <?php echo $_SESSION['role'] === 'ShopOwner' ? 'Shop Owner' : 'Admin'; ?>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="/editProfile">
                    <i class="bi bi-pencil-square me-2"></i>
                    <span class="align-middle">Edit Profile</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="/notifications">
                    <i class="bi bi-bell me-2"></i>
                    <span class="align-middle">Notifications</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="/reset">
                    <i class="bi bi-key me-2"></i>
                    <span class="align-middle">Forgot Password</span>
                  </a>
                </li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="#" onclick="confirmLogout(); return false;">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    <span class="align-middle">Log Out</span>
                  </a>
                </li>
              </ul>
            </li>
            <!--/ User Profile Dropdown -->

          </ul>
        </div>
      </nav>



      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const menuItems = document.querySelectorAll(".menu-item a");
          const dropdowns = document.querySelectorAll(".dropdown");

          // Load active menu item from localStorage
          const savedActiveMenu = localStorage.getItem("activeMenu");
          if (savedActiveMenu) {
            document.querySelectorAll(".menu-item.active").forEach(item => item.classList.remove("active"));
            const activeLink = document.querySelector(`.menu-item a[href="${savedActiveMenu}"]`);
            if (activeLink) {
              activeLink.closest(".menu-item").classList.add("active");
            }
          }

          // Load expanded dropdown state from localStorage
          const savedExpandedDropdowns = JSON.parse(localStorage.getItem("expandedDropdowns")) || [];
          dropdowns.forEach(dropdown => {
            if (savedExpandedDropdowns.includes(dropdown.getAttribute("data-id"))) {
              dropdown.classList.add("open");
            }
          });
          // Store active menu item
          menuItems.forEach(link => {
            link.addEventListener("click", function() {
              localStorage.setItem("activeMenu", link.getAttribute("href"));
            });
          });

          // Store dropdown open/close state
          dropdowns.forEach(dropdown => {
            dropdown.addEventListener("click", function() {
              const id = dropdown.getAttribute("data-id");
              let expandedDropdowns = JSON.parse(localStorage.getItem("expandedDropdowns")) || [];

              if (dropdown.classList.contains("open")) {
                expandedDropdowns = expandedDropdowns.filter(item => item !== id);
              } else {
                expandedDropdowns.push(id);
              }

              localStorage.setItem("expandedDropdowns", JSON.stringify(expandedDropdowns));
            });
          });
        });

        document.addEventListener('DOMContentLoaded', function() {
          // Existing menu code...

          // Add dropdown functionality
          const dropdownToggles = document.querySelectorAll('[data-bs-toggle="dropdown"]');
          dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
              e.preventDefault();
              const dropdownMenu = toggle.nextElementSibling;
              dropdownMenu.classList.toggle('show');
            });
          });

          // Close dropdowns when clicking outside
          document.addEventListener('click', (e) => {
            if (!e.target.closest('.dropdown')) {
              document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                menu.classList.remove('show');
              });
            }
          });
        });

        document.addEventListener('DOMContentLoaded', function() {
          const profileDropdown = document.getElementById('profileDropdown');
          const dropdownMenu = profileDropdown.nextElementSibling;
          let isDropdownOpen = false;

          profileDropdown.addEventListener('click', function(e) {
            e.preventDefault();
            isDropdownOpen = !isDropdownOpen;

            if (isDropdownOpen) {
              dropdownMenu.classList.add('show');
              profileDropdown.classList.add('show');
            } else {
              dropdownMenu.classList.remove('show');
              profileDropdown.classList.remove('show');
            }
          });

          // Close dropdown when clicking outside
          document.addEventListener('click', function(e) {
            if (!profileDropdown.contains(e.target) && !dropdownMenu.contains(e.target)) {
              dropdownMenu.classList.remove('show');
              profileDropdown.classList.remove('show');
              isDropdownOpen = false;
            }
          });
        });

        function confirmLogout() {
          Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out of your session!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, logout!',
            cancelButtonText: 'Cancel'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = '/Views/auth/logout.php';
            }
          });
        }

        // Function to update profile image
        function updateProfileImage(newImageUrl) {
          const profileImages = document.querySelectorAll('.js-profile-img');
          profileImages.forEach(img => {
            img.src = newImageUrl;
          });
        }

        // Listen for profile image updates
        window.addEventListener('profile-image-updated', function(e) {
          if (e.detail && e.detail.imageUrl) {
            updateProfileImage('/' + e.detail.imageUrl);
          }
        });

        // Add this to your existing DOMContentLoaded event
        document.addEventListener('DOMContentLoaded', function() {
          // Check for profile image updates every 30 seconds
          setInterval(function() {
            fetch('/api/user/profile-image.php')
              .then(response => response.json())
              .then(data => {
                if (data.profile_picture) {
                  updateProfileImage('/' + data.profile_picture);
                }
              })
              .catch(error => console.log('Error checking profile image:', error));
          }, 30000);

          // ...existing DOMContentLoaded code...
        });

        // Function to update all profile images in the nav bar
        function updateNavProfileImages(newImageUrl) {
          const profileImages = document.querySelectorAll('.profile-img');
          profileImages.forEach(img => {
            img.src = newImageUrl;
          });
        }

        // Listen for profile image updates
        window.addEventListener('profile-image-updated', function(e) {
          if (e.detail && e.detail.imageUrl) {
            updateNavProfileImages('/' + e.detail.imageUrl);
          }
        });

        // Update profile image when page loads if there's a new one in session storage
        document.addEventListener('DOMContentLoaded', function() {
          const storedProfilePicture = sessionStorage.getItem('profile_picture');
          if (storedProfilePicture) {
            updateNavProfileImages('/' + storedProfilePicture);
          }
        });

        // Add this function to update all profile images
        function updateAllProfileImages(imageUrl) {
          // Update both navbar and dropdown profile images
          document.querySelectorAll('.nav-profile-img, .profile-img').forEach(img => {
              img.src = imageUrl;
          });
      }

      // Modify the existing profile form submit handler
      document.getElementById('profile-form').addEventListener('submit', function(e) {
          e.preventDefault();
          const formData = new FormData(this);

          fetch('/updateProfile', {
              method: 'POST',
              body: formData
          })
          .then(response => response.json())
          .then(data => {
              if (data.status === 'success') {
                  // Update all profile images
                  const profilePicture = data.data.profile_picture || '/Views/assets/img/avatars/1.png';
                  updateAllProfileImages(profilePicture);
                  
                  // Update displayed name
                  document.querySelectorAll('.profile-info h5, .profile-info h6').forEach(el => {
                      if (el.classList.contains('fw-bold')) {
                          el.textContent = data.data.name;
                      }
                  });

                  // Show success message
                  Swal.fire({
                      icon: 'success',
                      title: 'Success!',
                      text: data.message,
                      timer: 2000,
                      showConfirmButton: false
                  });
              }
          })
          .catch(error => {
              Swal.fire({
                  icon: 'error',
                  title: 'Error!',
                  text: error.message,
                  confirmButtonColor: '#FF69B4'
              });
          });
      });

      // Add real-time preview for profile image upload
      document.getElementById('profile-upload').addEventListener('change', function(e) {
          if (this.files && this.files[0]) {
              const reader = new FileReader();
              reader.onload = function(e) {
                  const imageUrl = e.target.result;
                  updateAllProfileImages(imageUrl);
              }
              reader.readAsDataURL(this.files[0]);
          }
      });
      </script>

      <style>
        .dropdown-menu {
          display: none;
          position: absolute;
          right: 0;
          top: 100%;
          min-width: 14rem;
          margin-top: 0.125rem;
          background: white;
          border-radius: 0.375rem;
          box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
          z-index: 1000;
        }

        .dropdown-menu.show {
          display: block;
        }

        .dropdown-user {
          position: relative;
        }

        .avatar img {
          width: 40px;
          height: 40px;
          object-fit: cover;
          border-radius: 50%;
        }

        .avatar {
          position: relative;
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 40px;
          height: 40px;
        }

        .avatar-online::before {
          content: '';
          position: absolute;
          bottom: 0;
          right: 0;
          width: 8px;
          height: 8px;
          border-radius: 50%;
          background-color: #71dd37;
          border: 2px solid #fff;
        }

        .profile-img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: 50%;
        }

        .dropdown-menu {
          min-width: 14rem;
          padding: 0.5rem 0;
          position: absolute;
          right: 0;
          top: 100%;
          margin-top: 0.125rem;
          background: white;
          border-radius: 0.375rem;
          box-shadow: 0 0.25rem 1rem rgba(161, 172, 184, 0.45);
          z-index: 1000;
          display: none;
        }

        .dropdown-menu.show {
          display: block;
        }

        .dropdown-item {
          padding: 0.532rem 1.25rem;
        }

        .dropdown-divider {
          border-top: 1px solid #d9dee3;
          margin: 0.5rem 0;
        }

        .dropdown-toggle.show {
          background-color: rgba(67, 89, 113, 0.05);
        }

        .dropdown-menu {
          transform: translateY(10px);
          opacity: 0;
          visibility: hidden;
          transition: all 0.2s ease;
        }

        .dropdown-menu.show {
          transform: translateY(0);
          opacity: 1;
          visibility: visible;
          display: block;
        }

        .dropdown-toggle::after {
          display: none;
        }
      </style>