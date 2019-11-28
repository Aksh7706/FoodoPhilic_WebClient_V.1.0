<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>



<!DOCTYPE html>

<html>

<head>

    <title> Insert Employe </title>


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

                                <input type="text" name="emp_name" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe contact </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_contact" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Email </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_email" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Job </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_job" class="form-control" required>

                            </div>

                        </div>


                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Image</label>

                            <div class="col-md-6">

                                <input type="file" name="emp_img" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->



                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe Salary </label>

                            <div class="col-md-6">

                                <input type="text" name="emp_salery" class="form-control" required>

                            </div>

                        </div><!-- form-group Ends -->



                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Employe address </label>

                            <div class="col-md-6">

                                <textarea name="emp_add" class="form-control" rows="6" cols="19"></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="update" value="Add Employee"
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
        $emp_email = $_POST['emp_email'];
        $emp_add = $_POST['emp_add'];
        $emp_salery = $_POST['emp_salery'];
        $emp_contact = $_POST['emp_contact'];
        $emp_image = $_FILES['emp_img']['name'];
        $emp_job = $_POST['emp_job'];

        $emp_img = $_FILES['emp_img']['name'];

        $temp_name = $_FILES['emp_img']['tmp_name'];
        move_uploaded_file($temp_name, "employe_images/$emp_img");

        $insert_product = "insert into employes (employe_name,employe_email,employe_address,employe_salery,employe_contact,employe_image,employe_job,employe_hiredate) values ('$emp_name','$emp_email','$emp_add','$emp_salery','$emp_contact','$emp_image','$emp_job',DATE(NOW()))";

        $run_product = mysqli_query($con, $insert_product);

        if ($run_product) {

            echo "<script> alert('Emoploye has been added successfully') </script>";

            echo "<script>window.open('index.php?view_employes','_self')</script>";

        }

    }

    ?>

<?php }?>