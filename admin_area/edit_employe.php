<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>

<?php

    if (isset($_GET['edit_employe'])) {

        $edit_id = $_GET['edit_employe'];

        $get_p = "select * from employes where employe_id='$edit_id'";

        $run_edit = mysqli_query($con, $get_p);

        $row_c = mysqli_fetch_array($run_edit);

        $c_id = $row_c['employe_id'];

        $c_name = $row_c['employe_name'];

        $c_email = $row_c['employe_email'];

        $c_image = $row_c['employe_image'];

        $c_salery = $row_c['employe_salery'];

        $c_address = $row_c['employe_address'];

        $c_contact = $row_c['employe_contact'];

        $c_job = $row_c['employe_job'];

        $c_hiredate = $row_c['employe_hiredate'];

    }

    ?>


<!DOCTYPE html>

<html>

<head>

    <title> Edit Employe </title>


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

                    <i class="fa fa-dashboard"> </i> Dashboard / Edit Employe

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

                        <i class="fa fa-money fa-fw"></i> Edit Employe

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body">
                    <!-- panel-body Starts -->

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Name </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_name" class="form-control" required
                                    value="<?php echo $c_name; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe contact </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_contact" class="form-control" required
                                    value="<?php echo $c_contact; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Email </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_email" class="form-control" required
                                    value="<?php echo $c_email; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Job </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_job" class="form-control" required
                                    value="<?php echo $c_job; ?>">

                            </div>

                        </div>


                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Image</label>

                            <div class="col-md-6">

                                <input type="file" name="emp_img" class="form-control" required>
                                <br><img src="employe_images/<?php echo $c_image; ?>" width="70" height="70">

                            </div>

                        </div><!-- form-group Ends -->



                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Salery </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_salery" class="form-control" required
                                    value="<?php echo $c_salery; ?>">

                            </div>

                        </div><!-- form-group Ends -->




                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="update" value="Update Employe"
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

        $emp_name = $_POST['emp_name'];
        $emp_salery = $_POST['emp_salery'];
        $emp_job = $_POST['emp_job'];
        $emp_contact = $_POST['emp_contact'];
        $emp_image = $_FILES['emp_img']['name'];
        $emp_email = $_POST['emp_email'];
        
        $emp_image = $_FILES['emp_img']['name'];
        $tmp_name = $_FILES['emp_img']["tmp_name"];
        move_uploaded_file($tmp_name, "employe_images/$emp_image");

        $update_product = "update employes set employe_name='$emp_name',employe_email = '$emp_email', employe_job = '$emp_job',employe_image='$emp_image',employe_contact = '$emp_contact',employe_salery='$emp_salery' where employe_id='$c_id'";
        $run_product = mysqli_query($con, $update_product);

        if ($run_product) {

            echo "<script> alert('Employe has been updated successfully') </script>";

            echo "<script>window.open('index.php?view_employes','_self')</script>";

        }

    }

    ?>

<?php }?>