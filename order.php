<?php


include("includes/db.php");

include("functions/functions.php");

?>

<?php
session_start();
$session_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$session_email'";

$run_customer = mysqli_query($con, $select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

// if(isset($_GET['c_id'])){

// $customer_id = $_GET['c_id'];

// }

$delivery_option = $_POST['delivery_option'];

$ip_add = getRealUserIp();

$payment_method = "COD";

$invoice_no = mt_rand();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

$total = 0;

$total_qnt = 0;

while($row_cart = mysqli_fetch_array($run_cart)){

    $pro_id = $row_cart['p_id'];

    $pro_qty = $row_cart['qty'];

    $total_qnt = $total_qnt + $pro_qty;

    $get_products = "select * from products where product_id='$pro_id'";

    $run_products = mysqli_query($con,$get_products);

    while($row_products = mysqli_fetch_array($run_products)){

        $sub_total = $row_products['product_price']*$pro_qty;

        $total = $total + $sub_total;

        // $insert_customer_order = "insert into customer_orders (customer_id,due_amount,invoice_no,qty,delivery_options,order_date,payment_method) values ('$customer_id','$sub_total','$invoice_no','$pro_qty','$pro_delivery_options',NOW(),'$payment_method')";

        // $run_customer_order = mysqli_query($con,$insert_customer_order);

        $insert_pending_order = "insert into order_data (invoice_no,product_id,qty) values ('$invoice_no','$pro_id','$pro_qty')";

        $run_pending_order = mysqli_query($con,$insert_pending_order);

    }


}



$insert_customer_order = "insert into customer_orders (customer_id,due_amount,invoice_no,qty,delivery_options,order_date,payment_method) 
                            values ('$customer_id','$total','$invoice_no','$total_qnt','$delivery_option',NOW(),'$payment_method')";

$run_customer_order = mysqli_query($con,$insert_customer_order);

$delete_cart = "delete from cart where ip_add='$ip_add'";

$run_delete = mysqli_query($con,$delete_cart);

echo "<script>alert('Your order has been submitted,Thanks ')</script>";

echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

?>








