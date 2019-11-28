<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>

<div class="row">
    <!-- 1 row Starts -->
    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->
        <ol class="breadcrumb">
            <!-- breadcrumb Starts  --->
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
            </li>
        </ol><!-- breadcrumb Ends  --->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row">
    <!-- 2 row Starts -->
    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->
        <div class="panel panel-default">
            <!-- panel panel-default Starts -->
            <div class="panel-heading">
                <!-- panel-heading Starts -->
                <h3 class="panel-title">
                    <!-- panel-title Starts -->
                    <i class="fa fa-money fa-fw"></i> View Orders
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->
            <div class="panel-body">
                <!-- panel-body Starts -->
                <div class="table-responsive">
                    <!-- table-responsive Starts -->
                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->
                        <thead>
                            <!-- thead Starts -->
                            <tr>
                                <th>Sr no:</th>
                                <th>Invoice No:</th>
                                <th>Product title</th>
                                <th>Product Qty:</th>
                                <th>Total Amount:</th>
                            </tr>
                        </thead><!-- thead Ends -->
                        <tbody>
                            <!-- tbody Starts -->
                            <?php

    $i = 0;
    $invoice_no = $_GET['view_order_data'];

    $order_data = "select * from order_data where invoice_no = '$invoice_no'";
    $scan_order_data = mysqli_query($con, $order_data);

    while ($row_orders = mysqli_fetch_array($scan_order_data)) {

        $invoice_no = $row_orders['invoice_no'];
        $product_id = $row_orders['product_id'];
        $qty = $row_orders['qty'];
        $get_products = "select * from products where product_id='$product_id'";
        $run_products = mysqli_query($con, $get_products) or die(mysqli_error($con));
        $row_products = mysqli_fetch_array($run_products);
        $product_title = $row_products['product_title'];
        $product_price = $row_products['product_price'];
        $i++;

        ?>

                            <tr>
                                <td><?php echo $i; ?></td>

                                <td bgcolor="yellow"><?php echo $invoice_no; ?></td>

                                <td><?php echo $product_title; ?></td>

                                <td><?php echo $qty; ?></td>

                                <td>₹ <?php echo $product_price * $qty; ?></td>

                            </tr>

                            <?php }?>
                            <!-- end while -->


                        </tbody><!-- tbody Ends -->

                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php }?>