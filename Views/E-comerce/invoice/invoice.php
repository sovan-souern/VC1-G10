<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;

    }

    .container {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        max-width: 1220px;
    }

    h2,
    h4 {
        color: #333;
        font-size: 20px;
    }

    .table th,
    .table td {
        vertical-align: middle;
        text-align: center;
        font-size: 14px;
    }

    .table th {
        background-color: #f1f1f1;
    }

    .text-end p,
    .text-end h4 {
        margin-bottom: 5px;
    }

    .text-end h4 {

        font-size: 18px;
        /* Smaller font size for total */
    }

    .row p {
        margin-bottom: 5px;
        /* Reduced spacing between paragraphs */
        font-size: 14px;
        /* Smaller font size for text */
    }

    .table {
        margin-top: 15px;
        /* Reduced margin above the table */
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Invoice Details</h2>

        <?php
        // Sample Order Data (Replace with database fetch in real-world use)
        $order = [
            "order_id" => "#411135",
            "invoice_id" => "#52132463432234",
            "order_name" => "Miss",
            "phone" => "086514047",
            "order_date" => "7:00 pm, 14 March 2025",
            "payment_status" => "Paid",
            "delivery_address" => "No. 30, St. 371, Borey Soria, 12102 Phnom Penh, Cambodia",
            "bill_to" => "Dany",
            "billing_address" => "No. 30, St. 371, Borey Soria, 12102 Phnom Penh, Cambodia",
            "pay_by" => "Dany",
            "items" => [
                ["id" => 1, "product_name" => "Miss", "quantity" => 3, "price" => 598.00],
                ["id" => 2, "product_name" => "Lakamo", "quantity" => 1, "price" => 777.00],
                ["id" => 3, "product_name" => "Jojobar", "quantity" => 1, "price" => 109.00]
            ],
            "shipping_cost" => 4.49
        ];
        ?>


</body>
<div class="row">
    <div class="col-md-6">
        <p><strong>Order ID:</strong> <?php echo $order['order_id']; ?></p>
        <p><strong>Order Name:</strong> <?php echo $order['order_name']; ?></p>
        <p><strong>Order Date:</strong> <?php echo $order['order_date']; ?></p>
        <p><strong>Delivery Address:</strong> <?php echo $order['delivery_address']; ?></p>
        <p><strong>Pay By:</strong> <?php echo $order['pay_by']; ?></p>
    </div>
    <div class="col-md-6">
        <p><strong>Invoice ID:</strong> <?php echo $order['invoice_id']; ?></p>
        <p><strong>Phone:</strong> <?php echo $order['phone']; ?></p>
        <p><strong>Payment Status:</strong> <?php echo $order['payment_status']; ?></p>
        <p><strong>Bill to:</strong> <?php echo $order['bill_to']; ?></p>
        <p><strong>Billing Address:</strong> <?php echo $order['billing_address']; ?></p>
    </div>
</div>

<h4 class="mt-4">Order Items</h4>
<table class="table">
    <thead class="table">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>VAT (10%)</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $subtotal = 0;
        foreach ($order['items'] as $item):
            $item_subtotal = $item['quantity'] * $item['price'];
            $vat = $item_subtotal * 0.10;
            $total_price = $item_subtotal + $vat;
            $subtotal += $item_subtotal;
        ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['product_name']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo number_format($item_subtotal, 2); ?></td>
                <td>10%</td>
                <td>$<?php echo number_format($total_price, 2); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$vat_total = $subtotal * 0.10;
$grand_total = $subtotal + $vat_total + $order['shipping_cost'];
?>

<div class="text-end">
    <p><strong>Subtotal:</strong> $<?php echo number_format($subtotal, 2); ?></p>
    <p><strong>Shipping Cost:</strong> $<?php echo number_format($order['shipping_cost'], 2); ?></p>
    <h4><strong>Total:</strong> $<?php echo number_format($grand_total, 2); ?></h4>
</div>
</div>

</html>