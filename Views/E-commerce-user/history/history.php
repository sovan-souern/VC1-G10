<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        header, .footer, .slideshow-container, .dot-container {
            display: none;
        }
        .table-container {
            width: 90%;
            margin: auto;
            background: #fff;
            padding: 20px;
            margin-bottom: 50%;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .table-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        input#search {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 40%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead {
            background-color: #FFCCCC;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .btn {
            background: rgb(233, 163, 147) !important;
            border: none !important;
            color: white !important;
        }
        .btn:hover {
            background: rgb(233, 180, 167) !important;
        }
        .modal {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1000;
        }
        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            width: 60%;
            max-height: 80vh;
            overflow-y: auto;
            border-radius: 10px;
        }
        .close {
            float: right;
            font-size: 28px;
            cursor: pointer;
        }
        .card-footer {
            background-color: rgb(185, 172, 185);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        @media (max-width: 768px) {
            .table-container {
                width: 95%;
            }
            .modal-content {
                width: 80%;
            }
            th, td {
                padding: 8px;
                font-size: 14px;
            }
            #search {
                width: 100%;
            }
        }
        @media (max-width: 480px) {
            .table-controls {
                flex-direction: column;
            }
            .modal-content {
                width: 95%;
                margin: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>History Order</h1>
        <div class="table-controls">
            <input type="text" id="search" placeholder="Search by name">
        </div>
        <table class="table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Order Date</th>
                    <th>Total</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $displayedOrders = [];
                $rowIndex = 1;
                foreach ($users as $user) :
                    foreach ($orders as $order) :
                        $uniqueKey = $order["buy_at"] . '-' . $order["admin_id"];
                        if (!isset($displayedOrders[$uniqueKey]) && 
                            isset($_SESSION["name"], $user["name"], $order["admin_id"], $user["admin_id"]) && 
                            $_SESSION["name"] == $user["name"] && 
                            $order["admin_id"] == $user["admin_id"]) :
                            $displayedOrders[$uniqueKey] = true;
                ?>
                <tr>
                    <td><?= $rowIndex++ ?></td>
                    <td><?= htmlspecialchars($order["user_name"]) ?></td>
                    <td><?= htmlspecialchars($order["buy_at"]) ?></td>
                    <td><?= htmlspecialchars($order["total"]) ?> $</td>
                    <td>
                        <button class="btn view-details-btn"
                            onclick="showDetails('<?= htmlspecialchars($order['admin_id']) ?>', 
                                               '<?= htmlspecialchars($order['buy_at']) ?>')">
                            View Details
                        </button>
                    </td>
                </tr>
                <?php endif; endforeach; endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="orderDetailsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">×</span>
            <div class="card">
                <div class="card-header px-4 py-3">
                    <h5 class="text-muted mb-0">Thanks for your Order!</h5>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                        <p class="fw-bold mb-0">Order Details</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Total Product</span> <span id="totalProduct"></span></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Customer: <span id="customerName"></span></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Recipient: <span id="recipientName"></span></p>
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                        <p class="text-muted mb-0">Product Name: <span id="productNames"></span></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Buy at: <span id="buyAt"></span></p>
                    </div>
                    <div class="d-flex justify-content-between mb-5">
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Order by yourself</p>
                    </div>
                    <div class="text-center">
                        <button class="btn" onclick="downloadReceipt()">Download Receipt</button>
                    </div>
                </div>
                <div class="card-footer border-0 px-4 py-3">
                    <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">
                        Total paid: <span class="h2 mb-0 ms-2" id="totalPaid"></span>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDetails(adminId, buyAt) {
            const modal = document.getElementById("orderDetailsModal");
            modal.style.display = "block";

            const orders = <?php echo json_encode($orders); ?>;
            const filteredOrders = orders.filter(order => order.admin_id == adminId && order.buy_at == buyAt);

            const productNamesContainer = document.getElementById("productNames");
            const buyAtContainer = document.getElementById("buyAt");
            const totalProductContainer = document.getElementById("totalProduct");
            const totalPaidContainer = document.getElementById("totalPaid");
            const customerNameContainer = document.getElementById("customerName");
            const recipientNameContainer = document.getElementById("recipientName");

            let productNames = [];
            let totalProduct = 0;
            filteredOrders.forEach(order => {
                const quantity = parseInt(order.amount_product) || 1;
                productNames.push(`${order.product_name} (${quantity})`);
                totalProduct += quantity;
            });

            productNamesContainer.textContent = productNames.join(", ");
            buyAtContainer.textContent = buyAt;
            totalProductContainer.textContent = totalProduct;
            totalPaidContainer.textContent = `$${filteredOrders[0]?.total || 0}`;
            customerNameContainer.textContent = filteredOrders[0]?.user_name || '';
            recipientNameContainer.textContent = `${filteredOrders[0]?.firstName || ''} ${filteredOrders[0]?.lastName || ''}`;
        }

        function closeModal() {
            document.getElementById("orderDetailsModal").style.display = "none";
        }

        window.onclick = function(event) {
            const modal = document.getElementById("orderDetailsModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };

        function downloadReceipt() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Header
            doc.setFillColor(168, 114, 154);
            doc.rect(0, 0, 210, 30, 'F');
            doc.setFont("helvetica", "bold");
            doc.setFontSize(20);
            doc.setTextColor(255, 255, 255);
            doc.text("ORDER RECEIPT", 105, 20, { align: 'center' });

            // Customer Info
            const customer = document.getElementById("customerName").textContent;
            const recipient = document.getElementById("recipientName").textContent;
            const buyAt = document.getElementById("buyAt").textContent;
            const totalPaid = document.getElementById("totalPaid").textContent;
            const productNames = document.getElementById("productNames").textContent.split(", ");
            const totalProduct = document.getElementById("totalProduct").textContent;

            doc.setFont("helvetica", "normal");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.text(`Customer: ${customer}`, 15, 40);
            doc.text(`Recipient: ${recipient}`, 15, 50);
            doc.text(`Order Date: ${buyAt}`, 15, 60);

            // Order Details
            doc.setFont("helvetica", "bold");
            doc.setFontSize(14);
            doc.text("Order Details:", 15, 75);

            // Products
            doc.setFont("helvetica", "normal");
            doc.setFontSize(12);
            let y = 85;
            productNames.forEach((product, index) => {
                doc.text(`${index + 1}. ${product}`, 15, y);
                y += 10;
            });

            // Summary
            doc.setFont("helvetica", "bold");
            doc.text("Summary:", 15, y + 10);
            doc.setFont("helvetica", "normal");
            y += 20;
            doc.text(`Total Products: ${totalProduct}`, 15, y);
            doc.text(`Delivery Charges: Free`, 15, y + 10);
            doc.text(`Total: ${totalPaid}`, 15, y + 20);

            // Footer
            doc.setFillColor(185, 172, 185);
            doc.rect(0, y + 30, 210, 20, 'F');
            doc.setFont("helvetica", "bold");
            doc.setFontSize(16);
            doc.setTextColor(255, 255, 255);
            doc.text(`TOTAL PAID: ${totalPaid}`, 105, y + 42, { align: 'center' });

            // Thank You
            doc.setFont("helvetica", "normal");
            doc.setFontSize(10);
            doc.setTextColor(100, 100, 100);
            doc.text("Thank you for your order!", 105, y + 57, { align: 'center' });

            doc.save(`receipt_${buyAt}.pdf`);
        }

        // Search functionality
        document.getElementById("search").addEventListener("input", function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll("tbody tr");
            rows.forEach(row => {
                const customerName = row.cells[1].textContent.toLowerCase();
                row.style.display = customerName.includes(searchValue) ? "" : "none";
            });
        });
    </script>
</body>
</html>