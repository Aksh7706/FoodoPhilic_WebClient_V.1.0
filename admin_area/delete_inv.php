<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";

} else {

    ?>

<?php

    if (isset($_GET['delete_inv'])) {

        $delete_id = $_GET['delete_inv'];

        $delete_pro = "delete from inventory where inv_id='$delete_id'";

        $run_delete = mysqli_query($con, $delete_pro) or die(mysqli_error($con));

        if ($run_delete) {

            echo "<script>alert('One Item Has been deleted')</script>";

            echo "<script>window.open('index.php?view_inv','_self')</script>";

        }

    }

    ?>

<?php }?>