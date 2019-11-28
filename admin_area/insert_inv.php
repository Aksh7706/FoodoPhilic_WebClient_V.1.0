<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>
<!DOCTYPE html>

<html>

<head>

    <title> Insert Inventory </title>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea'
    });
    </script>

</head>

<body>

    <div class="row">
        <!-- row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <ol class="breadcrumb">
                <!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Insert Inventory

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row">
        <!-- 2 row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <div class="panel panel-default">
                <!-- panel panel-default Starts -->

                <div class="panel-heading">
                    <!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Inventory

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body">
                    <!-- panel-body Starts -->

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Item Title </label>

                            <div class="col-md-6">

                                <input type="text" name="inv_title" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Item Image </label>

                            <div class="col-md-6">

                                <input type="file" name="inv_image" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Item in stock </label>

                            <div class="col-md-6">

                                <input type="text" name="inv_instock" class="form-control" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="submit_inv" value="Insert Item"
                                    class="btn btn-primary form-control">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




</body>

</html>

<?php

    if (isset($_POST['submit_inv'])) {
        $inv_title = $_POST['inv_title'];
        $inv_instock = $_POST['inv_instock'];

        $inv_image = $_FILES['inv_image']['name'];
        $tmp_name = $_FILES['inv_image']["tmp_name"];
        move_uploaded_file($tmp_name, "inventory_images/$inv_image");

        $insert_product = "insert into inventory (inv_date,inv_title,inv_image,inv_instock) values (NOW(),'$inv_title','$inv_image','$inv_instock')";

        $run_product = mysqli_query($con, $insert_product) or die(mysqli_error($con));

        //echo "<script>alert('Item $error')</script>";

        if (!$run_product) {
            echo "<script>alert("+mysqli_error($con)+")</script>";
        }

        if ($run_product) {
            echo "<script>alert('Item has been inserted successfully')</script>";
            echo "<script>window.open('index.php?view_inv','_self')</script>";
        }
    }

    ?>

<?php }?>