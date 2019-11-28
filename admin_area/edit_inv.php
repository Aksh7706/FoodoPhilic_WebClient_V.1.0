<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>

<?php

    if (isset($_GET['edit_inv'])) {

        $edit_id = $_GET['edit_inv'];

        $get_p = "select * from inventory where inv_id='$edit_id'";

        $run_edit = mysqli_query($con, $get_p);

        $row_edit = mysqli_fetch_array($run_edit);

        $p_id = $row_edit['inv_id'];

        $p_title = $row_edit['inv_title'];

        $p_image = $row_edit['inv_image'];

        $P_instock = $row_edit['inv_instock'];

    }

    ?>


<!DOCTYPE html>

<html>

<head>

    <title> Edit Items </title>


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

                    <i class="fa fa-dashboard"> </i> Dashboard / Edit Items

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

                        <i class="fa fa-money fa-fw"></i> Edit Items

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

                                <input type="text" name="inv_title" class="form-control" required
                                    value="<?php echo $p_title; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Item Image </label>

                            <div class="col-md-6">

                                <input type="file" name="inv_image" class="form-control" required>
                                <br><img src="inventory_images/<?php echo $p_image; ?>" width="70" height="70">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Item in stock </label>

                            <div class="col-md-6">

                                <input type="text" name="inv_instock" class="form-control" required
                                    value="<?php echo $P_instock; ?>">

                            </div>

                        </div><!-- form-group Ends -->





                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="update" value="Update Item"
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

    if (isset($_POST['update'])) {

        $inv_title = $_POST['inv_title'];
        $inv_instock = $_POST['inv_instock'];
    
        $inv_image = $_FILES['inv_image']['name'];
        $tmp_name = $_FILES['inv_image']["tmp_name"];
        move_uploaded_file($tmp_name, "inventory_images/$inv_image");
        $update_inv = "update inventory set inv_date = NOW(), inv_title='$inv_title',inv_image='$inv_image',inv_instock='$inv_instock' where inv_id='$p_id'";

        $run_inv = mysqli_query($con, $update_inv) or die(mysqli_error($con));

        if ($run_inv) {

            echo "<script> alert('Inventory has been updated successfully') </script>";
            echo "<script>window.open('index.php?view_inv','_self')</script>";

        }

    }

    ?>

<?php }?>