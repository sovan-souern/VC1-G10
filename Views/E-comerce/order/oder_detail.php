
<div class="page p-4">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Order Details</h4>
                <h6>View order details</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-sales-split">
                    <h2>Sale Detail : SL0101</h2>
                    <ul>
                        <li>
                            <a href="javascript:void(0);"><img src="/Views/assets/img1/icons/pdf.svg" alt="PDF icon"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="/Views/assets/img1/icons/excel.svg" alt="Excel icon"></a>
                        </li>
                    </ul>
                </div>
                <div class="invoice-box table-responsive-wrapper">
                    <table class="responsive-table" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="top">
                                <td colspan="6" class="order-info-section">
                                    <table class="order-info-table">
                                        <tbody>
                                            <tr>
                                                <td class="order-info">
                                                    <font class="section-title">Order Info</font><br>
                                                    <font>Costomer: </font><br>
                                                    <font>Recipient: </font><br>
                                               
                                                    <font>Address:</font><br>
                                                </td>
                                                <td class="order-info-details">
                                                    <font class="section-title">&nbsp;</font><br>
                                                    <font><?php echo($orderID["admin_name"])?> <br>
                                                    <font><?php echo($orderID["first_name"])?> <?php echo($orderID["last_name"])?> <br>
                                                
                                                    <font class="status-completed"><?php echo($orderID["village"])?>, <?php echo($orderID["commune"])?>, <?php echo($orderID["district"])?>, <?php echo($orderID["province"])?></font><br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr class="heading">
                                <td>Product Name</td>
                                <td>QTY</td>
                                <td>Price</td>
                                <td>TAX</td>
                                <td>Subtotal</td>
                            </tr>
                            
                            
                            <?php foreach ($orders as $index => $order):?>
                                <?php if($orderID["admin_id"]==$order["admin_id"]):?>
                                    <?php if($orderID["created_at"]==$order["created_at"]):?>
                                        <tr class="details">
                                            <td class="product-cell">
                                                <img src="../../../<?php echo $order["product_image"]?>" alt="Product image" class="product-img">
                                                <?php echo($order["product_name"])?>
                                            </td>
                                            <td><?php echo($order["amount_product"])?></td>
                                            <td>$ <?php echo($order["product_price"])?></td>
                                            <td>0.00</td>
                                            <td>$ <?php echo($order["amount_product"] * $order["product_price"]) ?>.00</td>
                                        </tr>
                                    <?php endif?>
                                <?php endif?>
                            <?php endforeach?>

                            <tr class="total-price">
                                <td colspan="4" style="text-align: right;">Total Price</td>
                                <td>$ <?php echo($orderID["total"])?></td>  
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* General Reset and Base Styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
}

/* Page and Card Styling */
.page {
    padding: 1rem;
    width: 100%;
    max-width: 100%;
}

.card {
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-body {
    padding: 1rem;
}

/* Card Sales Split */
.card-sales-split {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.card-sales-split h2 {
    font-size: 1.5rem;
    font-weight: 600;
}

.card-sales-split ul {
    display: flex;
    gap: 0.5rem;
    list-style: none;
}

.card-sales-split ul li img {
    width: 24px;
    height: 24px;
}

/* Table Responsive Wrapper */
.table-responsive-wrapper {
    width: 100%;
    overflow-x: auto;
    margin: 1rem 0;
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
}

/* Responsive Table */
.responsive-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.875rem; /* 14px */
    color: #555;
}

.responsive-table td {
    padding: 0.625rem; /* 10px */
    vertical-align: middle;
    text-align: left;
}

.responsive-table .heading {
    background: #F3F2F7;
    font-weight: 600;
    color: #5E5873;
}

.responsive-table .heading td {
    padding: 0.625rem; /* 10px */
}

.responsive-table .details {
    border-bottom: 1px solid #E9ECEF;
}

.responsive-table .product-img {
    width: 2.5rem; /* 40px */
    height: 2.5rem;
    margin-right: 0.5rem;
    vertical-align: middle;
}

.responsive-table .total-price {
    background: #F3F2F7;
    font-weight: bold;
}

.responsive-table .total-price td {
    padding: 0.625rem;
}

/* Order Info Section */
.order-info,
.order-info-details {
    padding: 0.625rem;
    font-size: 0.875rem;
}

.order-info {
    text-align: left;
}

.order-info-details {
    text-align: right;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .page {
        padding: 0.5rem;
    }

    .card-body {
        padding: 0.5rem;
    }

    .card-sales-split h2 {
        font-size: 1.25rem;
    }

    .responsive-table {
        font-size: 0.75rem; /* 12px */
    }

    .responsive-table td {
        padding: 0.5rem;
    }

    .responsive-table .product-img {
        width: 2rem; /* 32px */
        height: 2rem;
    }

    .order-info,
    .order-info-details {
        font-size: 0.75rem;
    }
}

@media (max-width: 576px) {
    .card-sales-split {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }

    .card-sales-split ul {
        justify-content: flex-start;
    }

    .responsive-table td {
        padding: 0.375rem;
    }

    .responsive-table .product-img {
        width: 1.5rem; /* 24px */
        height: 1.5rem;
    }

    /* Stack order info for very small screens */
    .order-info,
    .order-info-details {
        display: block;
        text-align: left;
        font-size: 0.7rem;
    }
}
</style>