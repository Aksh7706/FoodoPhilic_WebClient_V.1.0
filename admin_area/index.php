<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admins  where admin_email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_name = $row_admin['admin_name'];

$admin_email = $row_admin['admin_email'];

$admin_image = $row_admin['admin_image'];

$admin_country = $row_admin['admin_country'];

$admin_job = $row_admin['admin_job'];

$admin_contact = $row_admin['admin_contact'];

$admin_about = $row_admin['admin_about'];


$get_products = "select * from products";
$run_products = mysqli_query($con,$get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "select * from customers";
$run_customers = mysqli_query($con,$get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_p_categories = "select * from product_categories";
$run_p_categories = mysqli_query($con,$get_p_categories);
$count_p_categories = mysqli_num_rows($run_p_categories);


$get_pending_orders = "select * from customer_orders";
$run_pending_orders = mysqli_query($con,$get_pending_orders);
$count_pending_orders = mysqli_num_rows($run_pending_orders);


?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['insert_product'])){

include("insert_product.php");

}

if(isset($_GET['view_products'])){

include("view_products.php");

}

if(isset($_GET['delete_product'])){

include("delete_product.php");

}

if(isset($_GET['edit_product'])){

include("edit_product.php");

}

if(isset($_GET['insert_p_cat'])){

include("insert_p_cat.php");

}

if(isset($_GET['view_p_cats'])){

include("view_p_cats.php");

}

if(isset($_GET['delete_p_cat'])){

include("delete_p_cat.php");

}

if(isset($_GET['edit_p_cat'])){

include("edit_p_cat.php");

}

if(isset($_GET['insert_cat'])){

include("insert_cat.php");

}

if(isset($_GET['view_cats'])){

include("view_cats.php");

}

if(isset($_GET['delete_cat'])){

include("delete_cat.php");

}

if(isset($_GET['edit_cat'])){

include("edit_cat.php");

}

if(isset($_GET['insert_slide'])){

include("insert_slide.php");

}


if(isset($_GET['view_slides'])){

include("view_slides.php");

}

if(isset($_GET['delete_slide'])){

include("delete_slide.php");

}


if(isset($_GET['edit_slide'])){

include("edit_slide.php");

}


if(isset($_GET['view_customers'])){

include("view_customers.php");

}

if(isset($_GET['customer_delete'])){

include("customer_delete.php");

}


if(isset($_GET['view_orders'])){

include("view_orders.php");

}

if(isset($_GET['order_delete'])){

include("order_delete.php");

}


// if(isset($_GET['view_payments'])){

// include("view_payments.php");

// }

if(isset($_GET['payment_delete'])){

include("payment_delete.php");

}

if(isset($_GET['insert_user'])){

include("insert_user.php");

}

if (isset($_GET['view_order_data'])) 
{
   include ("view_order_data.php");
}


if(isset($_GET['view_users'])){

include("view_users.php");

}


if(isset($_GET['user_delete'])){

include("user_delete.php");

}



if(isset($_GET['user_profile'])){

include("user_profile.php");

}





if (isset($_GET['view_employes'])) {

    include ("view_employes.php");

}


if (isset($_GET['insert_inv'])) {
    include ("insert_inv.php");
}

if (isset($_GET['insert_employe'])) {
    include ("insert_employe.php");
}

if (isset($_GET['view_inv'])) {

    include ("view_inv.php");

}

if (isset($_GET['delete_inv'])) {

    include ("delete_inv.php");

}

if (isset($_GET['edit_inv'])) {

    include ("edit_inv.php");

}

if (isset($_GET['edit_employe'])) {

    include ("edit_employe.php");

}

if (isset($_GET['employe_delete'])) {

    include "delete_employe.php";

}



?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>