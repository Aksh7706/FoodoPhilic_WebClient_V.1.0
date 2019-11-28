<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row">
    <!-- 1 row Starts -->

    <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
            <!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / View Employes

            </li>

        </ol><!-- breadcrumb Ends -->

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

                    <i class="fa fa-money fa-fw"></i> View Employes

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

                                <th>Employe No:</th>
                                <th>Employe Name:</th>
                                <th>Employe Email:</th>
                                <th>Employe Image:</th>
                                <th>Employe salery:</th>
                                <th>Employe address:</th>
                                <th>Employe Phone Number:</th>
                                <th>Employe Job</th>
                                <th>Employe Delete</th>
                                <th>Employe Edit</th>


                            </tr>

                        </thead><!-- thead Ends -->


                        <tbody>
                            <!-- tbody Starts -->

                            <?php

$i=0;

$get_c = "select * from employes";

$run_c = mysqli_query($con,$get_c);

while($row_c=mysqli_fetch_array($run_c)){

$c_id = $row_c['employe_id'];

$c_name = $row_c['employe_name'];

$c_email = $row_c['employe_email'];

$c_image = $row_c['employe_image'];

$c_salery = $row_c['employe_salery'];

$c_address = $row_c['employe_address'];

$c_contact = $row_c['employe_contact'];

$c_job = $row_c['employe_job'];

$i++;




?>

                            <tr>

                                <td><?php echo $i; ?></td>

                                <td><?php echo $c_name; ?></td>

                                <td><?php echo $c_email; ?></td>

                                <td><img src="employe_images/<?php echo $c_image; ?>" width="60" height="60">
                                </td>

                                <td><?php echo $c_salery; ?></td>

                                <td><?php echo $c_address; ?></td>

                                <td><?php echo $c_contact; ?></td>

                                <td><?php echo $c_job; ?></td>

                                <td>

                                    <a href="index.php?employe_delete=<?php echo $c_id; ?>">

                                        <i class="fa fa-trash-o"></i> Delete

                                    </a>


                                </td>

                                <td>

                                    <a href="index.php?edit_employe=<?php echo $c_id; ?>">

                                        <i class="fa fa-pencil"> </i> Edit

                                    </a>

                                </td>


                            </tr>

                            <?php } ?>


                        </tbody><!-- tbody Ends -->



                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->


        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>