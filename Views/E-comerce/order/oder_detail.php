<div class="page p-4">
    <div class="content ">
        <div class="page-header">
            <div class="page-title">
                <h4>Order Details</h4>
                <h6>View order details</h6>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <div class="card-sales-split">
                    <h2>Sale Detail : SL0101</h2>
                    <ul>
                        <li>
                            <a href="javascript:void(0);"><img src="/Views/assets/img1/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="/Views/assets/img1/icons/excel.svg" alt="img"></a>
                        </li>

                    </ul>
                </div>
                <div class="invoice-box table-height" style="max-width: 1600px;width:100%;overflow: auto;margin:15px auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
                    <table cellpadding="0" cellspacing="0" style="width: 100%;line-height: inherit;text-align: left;">
                        <tbody>
                            <tr class="top">
                                <td colspan="6" style="padding: 5px;vertical-align: top;">
                                    <table style="width: 100%;line-height: inherit;text-align: left;">
                                        <tbody>
                                            <tr>

                                                <td style="padding:5px;vertical-align:top;text-align:left;padding-bottom:20px">
                                                    <font style="vertical-align: inherit;margin-bottom:25px;">
                                                        <font style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px;">Order Info</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">Reference</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">Payment Status</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">Status</font>
                                                    </font><br>
                                                </td>
                                                <td style="padding:5px;vertical-align:top;text-align:right;padding-bottom:20px">
                                                    <font style="vertical-align: inherit;margin-bottom:25px;">
                                                        <font style="vertical-align: inherit;font-size:14px;color:#7367F0;font-weight:600;line-height: 35px;">&nbsp;</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;font-size: 14px;color:#000;font-weight: 400;">OR0101</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;font-size: 14px;color:#2E7D32;font-weight: 400;">Paid</font>
                                                    </font><br>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;font-size: 14px;color:#2E7D32;font-weight: 400;">Completed</font>
                                                    </font><br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr class="heading" style="background: #F3F2F7;">
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px;">
                                    Product Name
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px;">
                                    QTY
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px;">
                                    Price
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px;">
                                    Discount
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px;">
                                    TAX
                                </td>
                                <td style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px;">
                                    Subtotal
                                </td>
                            </tr>
                            <?php foreach ($orders as $index => $order):?>
                 =
                                <?php if($orderID["admin_id"]==$order["admin_id"]):?>
                                    <?php if($orderID["created_at"]==$order["created_at"]):?>
                                        
                                   
                            <tr class="details" style="border-bottom:1px solid #E9ECEF;">
                                <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;">
                                    <img src="../../../<?php echo $order["product_image"]?>" alt="img" class="me-2" style="width:40px;height:40px;">
                                    <?php echo($order["product_name"])?>
                                </td>
                                <td style="padding: 10px;vertical-align: top;">
                                <?php echo($order["amount_product"])?>
                            </td>
                            <td style="padding: 10px;vertical-align: top;">
                                    <?php echo($order["product_price"])?>
                                    
                                </td>
                                <td style="padding: 10px;vertical-align: top;">
                                    <?php echo($order["amount_product"])?>
                                </td>
                                <td style="padding: 10px;vertical-align: top;">
                                    0.00
                                </td>
                                <td style="padding: 10px;vertical-align: top;">
                                    <?php echo($order["amount_product"] * $order["product_price"]) ?>
                                </td>
                            </tr>
                            <?php endif?>
                            <?php endif?>
                            <?php endforeach?>
                           
                            <!-- Total Price Row -->
                            <tr class="total-price" style="background: #F3F2F7; font-weight: bold;">
                                <td colspan="5" style="padding: 10px; text-align: right;">Total Price</td>
                                <td style="padding: 10px; vertical-align: top;">$ <?php echo($order["total"])?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>