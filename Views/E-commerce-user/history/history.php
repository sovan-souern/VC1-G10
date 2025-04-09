<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Orders</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>

<body>
    <div class="table-container">
        <h1>History Order</h1>
        <div class="table-controls">
            <input type="text" id="search" placeholder="Search by name">
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Order Date</th>
                    <th>Quantity</th>
                    <th>Net Amount</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Michael Holz</td>
                    <td>Jun 15, 2017</td>
                    <td>2</td>
                    <td>$254</td>
                    <td>
                        <button class="btn view-details-btn"
                            onclick="showDetails('1', 'Michael Holz', 'Jun 15, 2017', '2', '$254')">
                            View Details
                        </button>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Order Details Modal -->
    <div id="orderDetailsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <!-- <div class="text-center">
                <button class="btn" onclick="downloadReceipt()">Download Receipt</button>
            </div> -->
            <div class="card" style="border-radius: 10px;">
                <div class="card-header px-4 py-5">
                    <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">Sreylet</span>!</h5>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                        <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
                    </div>
                    <div class="d-flex justify-content-between pt-2">
                        <p class="fw-bold mb-0">Order Details</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> $898.00</p>
                    </div>

                    <div class="d-flex justify-content-between pt-2">
                        <p class="text-muted mb-0">Invoice Number : 788152</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Invoice Date : 22 Dec,2019</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p>
                    </div>

                    <div class="d-flex justify-content-between mb-5">
                        <p class="text-muted mb-0">Receipts Voucher : 18KU-62IIK</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                    </div>

                    <!-- Download Receipt Button -->
                    <div class="text-center">
                        <button class="btn" onclick="downloadReceipt()">Download Receipt</button>
                    </div>
                </div>

                <div class="card-footer border-0 px-4 py-5"
                    style="background-color:rgb(185, 172, 185); border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                    <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                        paid: <span class="h2 mb-0 ms-2">$1040</span></h5>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show the modal when the button is clicked
        function showDetails() {
            const modal = document.getElementById("orderDetailsModal");
            modal.style.display = "block"; // Show the modal
        }

        // Close the modal
        function closeModal() {
            const modal = document.getElementById("orderDetailsModal");
            modal.style.display = "none"; // Hide the modal
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById("orderDetailsModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Download receipt as a PDF
        function downloadReceipt() {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            // Header background
            doc.setFillColor(168, 114, 154);
            doc.rect(0, 0, 210, 30, 'F');

            // Header - Bold
            doc.setFont("helvetica", "bold");
            doc.setFontSize(20);
            doc.setTextColor(255, 255, 255);
            doc.text("ORDER RECEIPT", 105, 20, {
                align: 'center'
            });

            // Customer Info
            doc.setFont("helvetica", "normal");
            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.text("Customer: Anna", 15, 40);
            doc.text("Invoice Date: 22 Dec, 2019", 15, 50);
            doc.text("Receipt Voucher: 1KAU9-84UIL", 15, 60);

            // Section Title
            doc.setFont("helvetica", "bold");
            doc.setFontSize(14);
            doc.text("Order Details:", 15, 75);

            // Table Rows - Labels in bold, values normal
            const labels = ["Total", "Discount", "GST 18%", "Delivery Charges"];
            const values = ["$898.00", "$19.00", "$123.00", "Free"];
            let y = 85;

            for (let i = 0; i < labels.length; i++) {
                doc.setFont("helvetica", "bold");
                doc.setFontSize(12);
                doc.text(labels[i], 15, y);
                doc.setFont("helvetica", "normal");
                doc.text(values[i], 195, y, {
                    align: 'right'
                });
                y += 10;
            }

            // Footer Total (Bold with background)
            doc.setFillColor(185, 172, 185);
            doc.rect(0, y + 5, 210, 20, 'F');
            doc.setFont("helvetica", "bold");
            doc.setFontSize(16);
            doc.setTextColor(255, 255, 255);
            doc.text("TOTAL PAID: $1040", 105, y + 18, {
                align: 'center'
            });

            // Thank you note
            doc.setTextColor(100, 100, 100);
            doc.setFont("helvetica", "normal");
            doc.setFontSize(10);
            doc.text("Thank you for your order!", 105, y + 33, {
                align: 'center'
            });

            doc.save("receipt.pdf");
        }
    </script>
</body>

</html>


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 20px;
    }

    .table-container {
        width: 90%;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .table-controls {
        display: flex;
        flex-direction: row;
        align-items: self-start;
        gap: 5px;
        margin-bottom: 15px;
    }

    .h2 {
        font-size: 25px;
    }

    input,
    select,
    button {
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    h1 {
        font-family: sans-serif;
    }

    input {
        width: 40%;
    }

    .d-grid {
        width: 51%;

    }

    .btn {
        background: rgb(233, 163, 147) !important;
        border: none !important;
        color: white !important;
    }

    .btn:hover {
        background: rgb(233, 180, 167) !important;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    /* tr:hover{
        background-color:rgb(226, 226, 226);
    } */
    thead {
        background-color: #FFCCCC;
        color: black;
    }

    thead:hover {
        background-color:rgb(236, 217, 217);
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
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
        /* margin: 15% auto; */
        padding: 20px;
        /* padding-top: 30px; */
        width: 50%;
        border-radius: 10px;
        max-height: 10vh;
        /* limit height to 80% of viewport */
        min-height: 95vh;
        /* limit height to 80% of viewport */
        /* allow internal scroll if content exceeds */
        margin: 10px auto;
        /* margin: 10px; */
    }
    .close {
        float: right;
        font-size: 28px;
        cursor: pointer;
    }

    /* Styling for the gradient background */
    .gradient-custom {
        background: #cd9cf2;
        background: -webkit-linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));
        background: linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));
    }

    .d-flex {
        color: black;
        text-align: center;
    }

    .card-footer {
        height: 2vh;
    }

    .card-header {
        height: 2vh;
    }
      /* Responsive table */
      @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        th, td {
            padding: 8px;
            font-size: 8px;
            /* text-align: center; */
        }
        .btn{
            font-size: 6px;
            

        }
        .modal-content {
            width: 95%;
            padding: 10px;
        }

        .card-body, .card-header, .card-footer {
            padding: 10px !important;
        }

        .d-flex {
            flex-direction: column;
            align-items: flex-start;
        }

        .d-flex.justify-content-between {
            flex-direction: row !important;
            flex-wrap: wrap !important;
        }

        .d-flex.justify-content-between > * {
            width: 100%;
            margin-bottom: 5px;
        }
        .h2 {
        font-size: 22px;
    }
    }

    @media (max-width: 480px) {
        .table-controls {
            flex-direction: column;
        }

        input {
            max-width: 100%;
        }

        .d-flex.justify-content-between > * {
            width: 100%;
        }

        .modal-content {
            width: 100%;
            margin: 10px;
            border-radius: 0;
        }
        
    .btn {
        width: 100%;
    }
    .card-footer h5 {
        flex-direction: column;
        text-align: center;
    }
    }
    
</style>