

<div class="dashboard-container">
  <div class="container-xxl flex-grow-1 container-p-y">
    <h2 class="mb-4" style="font-weight: 700; background: var(--gradient-bg); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Dashboard Overview
    </h2>

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
              <span class="fw-semibold d-block mb-1">Profit</span>
              <h3 class="card-title mb-2">$<?php echo number_format($data['profit'], 2); ?></h3>
              <small class="<?php echo $data['profitPercentageChange'] >= 0 ? 'text-success' : 'text-danger'; ?> fw-semibold">
                <i class="bx <?php echo $data['profitPercentageChange'] >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt'; ?>"></i>
                <?php echo abs($data['profitPercentageChange']); ?>%
              </small>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../Views/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                </div>
              </div>
              <span>Sales</span>
              <h3 class="card-title text-nowrap mb-1"><?php echo number_format($data['sales'], 0); ?></h3>
              <small class="<?php echo $data['salesPercentageChange'] >= 0 ? 'text-success' : 'text-danger'; ?> fw-semibold">
                <i class="bx <?php echo $data['salesPercentageChange'] >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt'; ?>"></i>
                <?php echo abs($data['salesPercentageChange']); ?>%
              </small>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../Views/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                </div>
              </div>
              <span class="d-block mb-1">Payments</span>
              <h3 class="card-title text-nowrap mb-2">$<?php echo number_format($data['totalRevenue2025'], 2); ?></h3>
              <small class="<?php echo $data['revenuePercentageChange'] >= 0 ? 'text-success' : 'text-danger'; ?> fw-semibold">
                <i class="bx <?php echo $data['revenuePercentageChange'] >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt'; ?>"></i>
                <?php echo abs($data['revenuePercentageChange']); ?>%
              </small>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="../Views/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Orders</span>
              <h3 class="card-title mb-2"><?php echo number_format($data['orders'], 0); ?></h3>
              <small class="<?php echo $data['orderPercentageChange'] >= 0 ? 'text-success' : 'text-danger'; ?> fw-semibold">
                <i class="bx <?php echo $data['orderPercentageChange'] >= 0 ? 'bx-up-arrow-alt' : 'bx-down-arrow-alt'; ?>"></i>
                <?php echo abs($data['orderPercentageChange']); ?>%
              </small>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Total Revenue Chart -->
          <div class="col-lg-6 col-md-12 mb-4">
            <div class="card h-100" role="region" aria-label="Total Revenue Chart">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="m-0">Total Revenue</h5>
                <button class="btn btn-sm btn-outline-primary chart-download-btn" onclick="downloadChart('totalRevenueChart', 'Total_Revenue.png')">
                  <i class="bx bx-download"></i> Download
                </button>
              </div>
              <div class="chart-controls">
                <div>
                  <button class="btn btn-sm btn-outline-secondary me-2" onclick="toggleChartType('totalRevenueChart', 'bar')">Bar</button>
                  <button class="btn btn-sm btn-outline-secondary" onclick="toggleChartType('totalRevenueChart', 'line')">Line</button>
                </div>
                <div>
                  <button class="btn btn-sm btn-outline-info" onclick="totalRevenueChart.zoom(1.1)">Zoom In</button>
                  <button class="btn btn-sm btn-outline-info ms-1" onclick="totalRevenueChart.zoom(0.9)">Zoom Out</button>
                  <button class="btn btn-sm btn-outline-info ms-1" onclick="totalRevenueChart.resetZoom()">Reset</button>
                </div>
              </div>
              <div class="chart-container">
                <canvas id="totalRevenueChart"></canvas>
              </div>
            </div>
          </div>

          <!-- Monthly Revenue Chart -->
          <div class="col-lg-6 col-md-12 mb-4">
            <div class="card h-100" role="region" aria-label="Monthly Revenue Chart">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="m-0">Monthly Revenue</h5>
                <select id="yearSelect" class="form-select form-select-sm w-auto" aria-label="Select Year">
                  <option value="2025" selected>2025</option>
                  <option value="2024">2024</option>
                  <option value="2023">2023</option>
                </select>
              </div>
              <div class="chart-controls">
                <div>
                  <button class="btn btn-sm btn-outline-secondary me-2" onclick="toggleChartFill('growthChart')">Toggle Fill</button>
                  <button class="btn btn-sm btn-outline-secondary" onclick="toggleChartType('growthChart', 'line')">Line</button>
                </div>
                <div>
                  <button class="btn btn-sm btn-outline-info" onclick="growthChart.zoom(1.1)">Zoom In</button>
                  <button class="btn btn-sm btn-outline-info ms-1" onclick="growthChart.zoom(0.9)">Zoom Out</button>
                  <button class="btn btn-sm btn-outline-info ms-1" onclick="growthChart.resetZoom()">Reset</button>
                </div>
              </div>
              <div class="chart-container">
                <canvas id="growthChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@2.0.1/dist/chartjs-plugin-zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
      // Register Zoom Plugin
      Chart.register(ChartZoom);

      // Total Revenue Chart
      const yearlyRevenue = <?php echo json_encode($data['yearlyRevenue'] ?? ['2023' => 0, '2024' => 0, '2025' => 0]); ?>;
      const totalRevenueCtx = document.getElementById('totalRevenueChart').getContext('2d');

      // Create gradients for bars
      const createBarGradients = () => {
        const gradients = [];
        ['2023', '2024', '2025'].forEach(year => {
          const gradient = totalRevenueCtx.createLinearGradient(0, 0, 0, 300);
          gradient.addColorStop(0, year === '2023' ? '#4e73df' : year === '2024' ? '#1cc88a' : '#36b9cc');
          gradient.addColorStop(1, year === '2023' ? '#224abe' : year === '2024' ? '#13855c' : '#1c8fa1');
          gradients.push(gradient);
        });
        return gradients;
      };

      const totalRevenueChart = new Chart(totalRevenueCtx, {
        type: 'bar',
        data: {
          labels: ['2023', '2024', '2025'],
          datasets: [{
            label: 'Total Revenue',
            data: [yearlyRevenue['2023'] || 0, yearlyRevenue['2024'] || 0, yearlyRevenue['2025'] || 0],
            backgroundColor: createBarGradients(),
            borderColor: ['#4e73df', '#1cc88a', '#36b9cc'],
            borderWidth: 1,
            borderRadius: 10,
            borderSkipped: false
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          animation: {
            duration: 1500,
            easing: 'easeOutQuart'
          },
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                callback: function(value) {
                  if (value >= 1000000) return '$' + (value / 1000000).toFixed(1) + 'M';
                  if (value >= 1000) return '$' + (value / 1000).toFixed(1) + 'K';
                  return '$' + value;
                },
                color: '#333333',
                font: {
                  size: 12
                }
              },
              grid: {
                color: 'rgba(0, 0, 0, 0.05)'
              }
            },
            x: {
              ticks: {
                color: '#333333',
                font: {
                  size: 12
                }
              },
              grid: {
                display: false
              }
            }
          },
          plugins: {
            legend: {
              display: false
            },
            tooltip: {
              backgroundColor: '#ffffff',
              titleColor: '#333333',
              bodyColor: '#333333',
              borderColor: '#4e73df',
              borderWidth: 1,
              callbacks: {
                label: function(context) {
                  return '$' + context.parsed.y.toLocaleString();
                }
              }
            },
            zoom: {
              zoom: {
                wheel: {
                  enabled: true
                },
                pinch: {
                  enabled: true
                },
                mode: 'xy'
              },
              pan: {
                enabled: true,
                mode: 'xy'
              }
            }
          },
          onClick: (e, elements) => {
            if (elements.length) {
              const year = totalRevenueChart.data.labels[elements[0].index];
              alert(`Revenue for ${year}: $${yearlyRevenue[year].toLocaleString()}`);
            }
          }
        }
      });

      // Monthly Revenue Chart
      const monthlyRevenueData = {
        2025: <?php echo json_encode(array_values($data['monthlyRevenue2025'] ?? array_fill(0, 12, 0))); ?>,
        2024: <?php echo json_encode(array_values($data['monthlyRevenue2024'] ?? array_fill(0, 12, 0))); ?>,
        2023: <?php echo json_encode(array_values($data['monthlyRevenue2023'] ?? array_fill(0, 12, 0))); ?>
      };

      const growthChartCtx = document.getElementById('growthChart').getContext('2d');
      const createLineGradient = () => {
        const gradient = growthChartCtx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, '#36b9cc');
        gradient.addColorStop(1, '#1c8fa1');
        return gradient;
      };

      const growthChart = new Chart(growthChartCtx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [{
            label: 'Monthly Revenue 2025',
            data: monthlyRevenueData['2025'],
            borderColor: '#36b9cc',
            backgroundColor: createLineGradient(),
            tension: 0.4,
            fill: true,
            pointBackgroundColor: '#ffffff',
            pointBorderColor: '#36b9cc',
            pointHoverBackgroundColor: '#36b9cc',
            pointHoverBorderColor: '#ffffff',
            pointRadius: 4,
            pointHoverRadius: 6
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          animation: {
            duration: 1500,
            easing: 'easeOutQuart'
          },
          scales: {
            y: {
              beginAtZero: true,
              ticks: {
                callback: function(value) {
                  if (value >= 1000000) return '$' + (value / 1000000).toFixed(1) + 'M';
                  if (value >= 1000) return '$' + (value / 1000).toFixed(1) + 'K';
                  return '$' + value;
                },
                color: '#333333',
                font: {
                  size: 12
                }
              },
              grid: {
                color: 'rgba(0, 0, 0, 0.05)'
              }
            },
            x: {
              ticks: {
                color: '#333333',
                font: {
                  size: 12
                }
              },
              grid: {
                display: false
              }
            }
          },
          plugins: {
            legend: {
              display: true,
              labels: {
                color: '#333333',
                font: {
                  size: 12
                }
              }
            },
            tooltip: {
              backgroundColor: '#ffffff',
              titleColor: '#333333',
              bodyColor: '#333333',
              borderColor: '#36b9cc',
              borderWidth: 1,
              callbacks: {
                label: function(context) {
                  return '$' + context.parsed.y.toLocaleString();
                }
              }
            },
            zoom: {
              zoom: {
                wheel: {
                  enabled: true
                },
                pinch: {
                  enabled: true
                },
                mode: 'xy'
              },
              pan: {
                enabled: true,
                mode: 'xy'
              }
            },
            annotation: {
              annotations: {
                peak: {
                  type: 'point',
                  xValue: () => {
                    const data = growthChart.data.datasets[0].data;
                    return data.indexOf(Math.max(...data));
                  },
                  yValue: () => Math.max(...growthChart.data.datasets[0].data),
                  backgroundColor: '#e74a3b',
                  radius: 6,
                  label: {
                    content: 'Peak',
                    enabled: true,
                    position: 'top',
                    color: '#333333',
                    backgroundColor: '#ffffff'
                  }
                }
              }
            }
          }
        }
      });

      // Year Selection for Monthly Revenue Chart
      document.getElementById('yearSelect').addEventListener('change', function() {
        const year = this.value;
        growthChart.data.datasets[0].data = monthlyRevenueData[year];
        growthChart.data.datasets[0].label = `Monthly Revenue ${year}`;
        growthChart.update();
      });

      // Toggle Chart Type
      function toggleChartType(chartId, type) {
        const chart = chartId === 'totalRevenueChart' ? totalRevenueChart : growthChart;
        chart.config.type = type;
        if (chartId === 'totalRevenueChart' && type === 'line') {
          chart.data.datasets[0].backgroundColor = createLineGradient();
          chart.data.datasets[0].fill = true;
        } else if (chartId === 'totalRevenueChart' && type === 'bar') {
          chart.data.datasets[0].backgroundColor = createBarGradients();
          chart.data.datasets[0].fill = false;
        }
        chart.update();
      }

      // Toggle Fill for Monthly Revenue Chart
      function toggleChartFill(chartId) {
        const chart = growthChart;
        chart.data.datasets[0].fill = !chart.data.datasets[0].fill;
        chart.update();
      }

      // Download Chart
      function downloadChart(chartId, filename) {
        const canvas = document.getElementById(chartId);
        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = filename;
        link.click();
      }
    </script>
    </body>

    </html>


    <style>
      /* Scope styles to dashboard container */
      .dashboard-container {
        font-family: 'Inter', sans-serif;
        background-color: #f8f9fc;
        color: #333333;
      }

      .dashboard-container .container-p-y {
        padding: 2rem 1rem;
      }

      .dashboard-container .card {
        background: #ffffff;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .dashboard-container .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      }

      .dashboard-container .card-body {
        padding: 1.5rem;
      }

      .dashboard-container .card-title {
        font-size: 1rem;
        font-weight: 600;
        color: #333333;
      }

      .dashboard-container .chart-container {
        position: relative;
        padding: 1rem;
        border: none;
        outline: none;
      }

      .dashboard-container #totalRevenueChart,
      .dashboard-container #growthChart {
        max-height: 350px;
        width: 100%;
        border: none;
        outline: none;
      }

      .dashboard-container .chart-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1rem 1rem;
        flex-wrap: wrap;
        gap: 0.5rem;
      }

      .dashboard-container .chart-download-btn {
        font-size: 0.85rem;
      }

      /* Chart-specific styles */
      .dashboard-container {
        --primary-color: #4e73df;
        --success-color: #1cc88a;
        --info-color: #36b9cc;
        --danger-color: #e74a3b;
        --gradient-bg: linear-gradient(135deg, #4e73df 0%, #36b9cc 100%);
        --chart-gradient-2023: linear-gradient(180deg, #4e73df 0%, #224abe 100%);
        --chart-gradient-2024: linear-gradient(180deg, #1cc88a 0%, #13855c 100%);
        --chart-gradient-2025: linear-gradient(180deg, #36b9cc 0%, #1c8fa1 100%);
      }

      .dashboard-container canvas {
        border: none !important;
        outline: none !important;
      }

      /* Responsive adjustments */
      @media (max-width: 576px) {
        .dashboard-container .container-p-y {
          padding: 1rem 0.5rem;
        }

        .dashboard-container #totalRevenueChart,
        .dashboard-container #growthChart {
          max-height: 250px;
        }

        .dashboard-container .chart-controls {
          flex-direction: column;
          align-items: flex-start;
        }
      }

      /* Neutralize potential aside conflicts */
      aside {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
      }
    </style>