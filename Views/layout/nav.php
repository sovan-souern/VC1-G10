<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <img src="https://i.pinimg.com/736x/4e/cc/64/4ecc644e07133109fc0e1048e787d1e5.jpg"
        alt="Brand Logo"
        class="logo logo-dark"
        style="width: 50px; height: 50px; border-radius: 50%;" />
      <span class="app-brand-text demo menu-text fw-bolder ms-2" style="color: pink;">Skin care</span>
    </a>



    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="/" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Layouts -->
    <li class="menu-item">
      <a href="/E-comerce" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Layouts">E-Comerce</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/order" class="menu-link">
            <div data-i18n="Container">Orders</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/order_detail" class="menu-link">
            <div data-i18n="Container">Order Detail</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/invoice" class="menu-link">
            <div data-i18n="Fluid">Invoice</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="/E-comerce" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
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
            <div data-i18n="Blank">OutStock</div>
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
       
        <li class="menu-item">
          <a href="/discount" class="menu-link">
            <div data-i18n="Blank">Discount</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="/E-comerce" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
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
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="Account Settings">Account Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/editProfile" class="menu-link">
            <div data-i18n="Account">Update Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="/reset" class="menu-link">
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
        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
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
    <li class="menu-item">
      <a href="/" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
        <div data-i18n="Misc">Misc</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="/404" class="menu-link">
            <div data-i18n="Error">Error</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="" class="menu-link">
            <div data-i18n="Under Maintenance">Under Maintenance</div>
          </a>
        </li>
      </ul>
    </li>

</aside>
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
            <i class="bx bx-menu bx-sm"></i>
          </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <!-- Search -->
          <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
              <i class="bx bx-search fs-4 lh-0"></i>
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
            <li class="nav-item dropdown pe-3 d-flex align-items-center">
                <a href="#" class="text-decoration-none d-flex align-items-center position-relative" id="notification-link">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="notification-badge" id="notification-badge" style="display: none;">0</span>
                </a>
            </li>

            <div id="notification-panel" class="notification-panel" style="display: none;">
                <h5>Your Notifications</h5>
                <div id="notification-list"></div>
            </div>

            <style>
                .notification-panel {
                    position: absolute;
                    right: 20px; 
                    top: 60px; 
                    background: white;
                    border: 1px solid #ccc;
                    border-radius: 8px;
                    padding: 15px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    z-index: 1000;
                    width: 300px; 
                }
                
                .notification-item {
                    padding: 10px;
                    border-bottom: 1px solid #eee;
                }

                .notification-item:last-child {
                    border-bottom: none;
                }
            </style>

          <style>
              .notification-panel {
                  position: absolute;
                  right: 20px; /* Adjust based on your layout */
                  top: 60px;
                  background: white;
                  border: 1px solid #ccc;
                  border-radius: 8px;
                  padding: 15px;
                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                  z-index: 1000;
                  width: 300px; /* Adjust as needed */
              }
          </style>

          <script>
              document.addEventListener("DOMContentLoaded", function () {
                  const alerts = [];
                  const alertCountEl = document.getElementById('notification-badge');
                  const notificationPanel = document.getElementById('notification-panel');
                  const notificationList = document.getElementById('notification-list');

                  // Add logic to check the stock levels
                  document.querySelectorAll("#product-list tr").forEach(row => {
                      let quantity = parseInt(row.querySelector("td:nth-child(6)").textContent.trim(), 10);
                      let productName = row.querySelector("td:nth-child(2)").textContent.trim();
                      let alertMessage = '';

                      if (quantity === 0) {
                          alertMessage = `${productName} is OUT OF STOCK!`;
                      } else if (quantity <= 9) {
                          alertMessage = `${productName} is running LOW on stock (Only ${quantity} left)!`;
                      }

                      if (alertMessage) {
                          alerts.push(alertMessage);
                      }
                  });

                  // Update the badge and panel
                  function updateNotification() {
                      const alertCount = alerts.length;
                      if (alertCount > 0) {
                          alertCountEl.innerText = alertCount;
                          alertCountEl.style.display = 'inline';
                      } else {
                          alertCountEl.style.display = 'none';
                      }
                  }

                  updateNotification();

                  // Toggle notification panel and display alerts
                  document.getElementById('notification-link').addEventListener('click', function(event) {
                      event.preventDefault(); // Prevent default link behavior
                      notificationPanel.style.display = notificationPanel.style.display === 'none' ? 'block' : 'none';

                      // Populate notifications
                      notificationList.innerHTML = ''; // Clear any existing notifications
                      alerts.forEach(alert => {
                          const notificationItem = document.createElement('div');
                          notificationItem.className = 'notification-item';
                          notificationItem.innerHTML = `<span>⚠️ ${alert}</span>`;
                          notificationList.appendChild(notificationItem);
                      });
                  });
              });
          </script>
          
            <style>
              .nav-item {
                position: relative;
              }

              .notification-badge {
                position: absolute;
                margin-bottom: 150%;
                right: -10px; 
                background-color: red; /* Change this color for different badge colors */
                color: white;
                border-radius: 50%;
                padding: 3px 5px;
                font-size: 12px; /* Base font size */
                font-weight: bold;
                display: inline-flex;
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
            <script>
               document.addEventListener("DOMContentLoaded", function() {
    const notificationBadge = document.getElementById("notification-badge");
    const notificationLink = document.getElementById("notification-link");

    function updateNotificationCount(count) {
      notificationBadge.textContent = count;
      if (count <= 0) {
        notificationBadge.style.display = 'none';
      } else {
        notificationBadge.style.display = 'flex';
      }
    }

    updateNotificationCount(5); // Initial count

    notificationLink.addEventListener("click", function() {
      updateNotificationCount(0);
    });
  });
            </script>










            <!-- <li class="nav-item dropdown pe-3 d-flex align-items-center">
                <span class="material-symbols-outlined">
                  notifications
                </span>
            </li> -->
            <!-- User --><!-- User Profile Dropdown -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
              <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                  <img src="<?php echo !empty($_SESSION['profile_picture']) ? '/' . $_SESSION['profile_picture'] : '/Views/assets/img/avatars/1.png'; ?>"
                    alt="User Profile" class="profile-img" />
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
                        <small class="text-muted">Admin</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="/editProfile">
                    <i class="bx bx-edit-alt me-2"></i>
                    <span class="align-middle">Edit Profile</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="/notifications">
                    <i class="bx bx-bell me-2"></i>
                    <span class="align-middle">Notifications</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="/reset">
                    <i class="bx bx-lock-alt me-2"></i>
                    <span class="align-middle">Reset Password</span>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="#" onclick="confirmLogout(); return false;">
                    <i class="bx bx-power-off me-2"></i>
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
  document.addEventListener("DOMContentLoaded", function () {
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
      link.addEventListener("click", function () {
        localStorage.setItem("activeMenu", link.getAttribute("href"));
      });
    });

    // Store dropdown open/close state
    dropdowns.forEach(dropdown => {
      dropdown.addEventListener("click", function () {
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
</style>
