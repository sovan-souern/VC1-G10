<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <!-- Profit Card -->
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../Views/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
            </div>
          </div>
          <span class="fw-semibold d-block mb-1">Profit (2025)</span>
          <h3 class="card-title mb-2">0</h3>
          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
        </div>
      </div>
    </div>

    <!-- Sales Card -->
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../Views/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
            </div>
           
          </div>
          <span>Sales (2025)</span>
          <h3 class="card-title text-nowrap mb-1">0</h3>
          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
        </div>
      </div>
    </div>

    <!-- Payments Card -->
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../Views/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
            </div>
           
          </div>
          <span class="d-block mb-1">Payments (2025)</span>
          <h3 class="card-title text-nowrap mb-2">0</h3>
          <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
        </div>
      </div>
    </div>

    <!-- Transactions Card -->
    <div class="col-lg-3 col-md-6 col-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img src="../Views/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
            </div>
          
          </div>
          <span class="fw-semibold d-block mb-1">Orders</span>
          <h3 class="card-title mb-2">0</h3>
          <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Total Revenue Chart -->
    <div class="col-lg-8 col-md-12 mb-4">
      <div class="card h-100">
        <h5 class="card-header m-0 me-2 pb-3">Total Revenue (2024 vs 2025)</h5>
        <div id="totalRevenueChart" class="px-2"></div>
      </div>
    </div>

    <!-- Company Growth Card -->
    <div class="col-lg-4 col-md-12 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <div class="text-center">
            <div class="dropdown">
              <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                2025
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                <a class="dropdown-item" href="javascript:void(0);">2025</a>
                <a class="dropdown-item" href="javascript:void(0);">2024</a>
                <a class="dropdown-item" href="javascript:void(0);">2023</a>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-semibold pt-3 mb-2">Revenue Change: -21.12%</div>
          <div class="d-flex px-4 p-4 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2025</small>
                <h6 class="mb-0">$32.5k</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2024</small>
                <h6 class="mb-0">$41.2k</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rest of the dashboard (Order Statistics, Expense Overview, etc.) remains unchanged -->
  <!-- ... -->
</div>


<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
   

  <div class="row align-items-stretch">
    <!-- Product Table -->
    <div class="col-lg-7 col-xxl-8 mb-6 mb-lg-0">
      <div class="card h-100">
        <div class="table-responsive text-nowrap" style="max-height: 400px; overflow-y: auto;">
          <table class="table table-sm text-nowrap table-border-top-0">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Category</th>
                <th scope="col">Payment</th>
                <th scope="col">Order Status</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              </tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="../assets/img/products/iphone.png" alt="iPhone 11 Pro product image" height="32" width="32" class="me-3" />
                    <div class="d-flex flex-column">
                      <h6 class="mb-0">iPhone 11 Pro</h6>
                      <small class="text-body">Apple</small>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="badge bg-label-primary rounded-pill p-1_5 me-3"><i class="icon-base bx bx-mobile-alt icon-xs"></i></span> Smart Phone
                </td>
                <td>
                  <div><span class="text-primary fw-medium">$399</span></div>
                  <small class="text-body">Fully Paid</small>
                </td>
                <td><span class="badge bg-label-success">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-label="More actions for iPhone 11 Pro"><i class="icon-base bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><i class="icon-base bx bx-edit-alt me-1"></i> View Details</a>
                      <a class="dropdown-item" href="#"><i class="icon-base bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Conversion Rate Card -->
    <div class="col-md-12 col-xxl-4 mb-6">
      <div class="card h-100">
        <div class="card-header d-flex justify-content-between">
          <div class="card-title mb-0">
            <h5 class="mb-1 me-2">Conversion Rate</h5>
            <p class="card-subtitle">Compared To Last Month</p>
          </div>
          <div class="dropdown">
            <button class="btn text-body-secondary p-0" type="button" id="conversionRate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="More options">
              <i class="icon-base bx bx-dots-vertical-rounded icon-lg"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="conversionRate">
              <a class="dropdown-item" href="#">Select All</a>
              <a class="dropdown-item" href="#">Refresh</a>
              <a class="dropdown-item" href="#">Share</a>
            </div>
          </div>
        </div>
        <div class="card-body pt-3 d-flex flex-column justify-content-between">
          <div>
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="d-flex flex-row align-items-center gap-2">
                <h3 class="mb-0">8.72%</h3>
                <small class="text-success">
                  <i class="icon-base bx bx-chevron-up icon-lg"></i>
                  4.8%
                </small>
              </div>
              <div id="conversionRateChart" style="width: 80px; height: 40px;"></div>
            </div>
            <ul class="p-0 m-0">
              <li class="d-flex mb-3">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <span class="fw-normal">Impressions: 12.4k Visits</span>
                  </div>
                  <div class="user-progress">
                    <i class="icon-base bx bx-up-arrow-alt text-success me-1"></i>
                    <span class="fw-bold">12.8%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-3">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <span class="fw-normal">Added To Cart: 32 Product in cart</span>
                  </div>
                  <div class="user-progress">
                    <i class="icon-base bx bx-down-arrow-alt text-danger me-1"></i>
                    <span class="fw-bold">-8.5%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex mb-3">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <span class="fw-normal">Checkout: 21 Products checkout</span>
                  </div>
                  <div class="user-progress">
                    <i class="icon-base bx bx-up-arrow-alt text-success me-1"></i>
                    <span class="fw-bold">9.12%</span>
                  </div>
                </div>
              </li>
              <li class="d-flex">
                <div class="d-flex w-100 flex-wrap justify-content-between gap-2">
                  <div class="me-2">
                    <span class="fw-normal">Purchased: 12 Orders</span>
                  </div>
                  <div class="user-progress">
                    <i class="icon-base bx bx-up-arrow-alt text-success me-1"></i>
                    <span class="fw-bold">2.83%</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl">
      <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>, made with ❤️ by <a href="#" target="_blank" class="footer-link">ThemeSelection</a>
        </div>
        <div class="d-none d-lg-inline-block">

          <a href="#" class="footer-link me-4" target="_blank">License</a>
          <a href="#" target="_blank" class="footer-link me-4">More Themes</a>

          <a href="#" target="_blank" class="footer-link me-4">Documentation</a>


          <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

        </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->


  <script src="../Views/assets/js/dashboards-analytics.js"></script>

 