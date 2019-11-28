<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>


<div class="row">
    <!--  1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / View Inventory

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

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

                    <i class="fa fa-money fa-fw"></i> View Inventory

                </h3><!-- panel-title Ends -->


            </div><!-- panel-heading Ends -->

            <div class="panel-body">
                <!-- panel-body Starts -->

                <div class="table-responsive">
                    <!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped">
                        <!-- table table-bordered table-hover table-striped Starts -->

                        <thead>

                            <tr>
                                <th>Item ID</th>
                                <th>Item Title</th>
                                <th>Item Image</th>
                                <th>Item in Stock</th>
                                <th>Item Date</th>
                                <th>Item Delete</th>
                                <th>Item Edit</th>



                            </tr>

                        </thead>

                        <tbody>

                            <?php

    $i = 0;

    $get_pro = "select * from inventory";

    $run_pro = mysqli_query($con, $get_pro);

    while ($row_pro = mysqli_fetch_array($run_pro)) {

        $pro_id = $row_pro['inv_id'];

        $pro_title = $row_pro['inv_title'];

        $pro_image = $row_pro['inv_image'];

        $pro_instock = $row_pro['inv_instock'];

        $pro_date = $row_pro['inv_date'];

        $i++;

        ?>

                            <tr>

                                <td><?php echo $i; ?></td>

                                <td><?php echo $pro_title; ?></td>

                                <td><img src="inventory_images/<?php echo $pro_image; ?>" width="60" height="60"></td>

                                <td> <?php echo $pro_instock; ?> Kg</td>

                                <td><?php echo $pro_date; ?></td>

                                <td>

                                    <a href="index.php?delete_inv=<?php echo $pro_id; ?>">

                                        <i class="fa fa-trash-o"> </i> Delete

                                    </a>

                                </td>

                                <td>

                                    <a href="index.php?edit_inv=<?php echo $pro_id; ?>">

                                        <i class="fa fa-pencil"> </i> Edit

                                    </a>

                                </td>

                            </tr>

                            <?php }?>


                        </tbody>


                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php }?>