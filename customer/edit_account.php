<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_hostel = $row_customer['customer_hostel'];

$customer_room = $row_customer['customer_room'];

$customer_contact = $row_customer['customer_contact'];

$customer_image = $row_customer['customer_image'];

?>

<h1 align="center" > Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Name: </label>

<input type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Email: </label>

<input type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Hostel: </label>

<!-- <input type="text" name="c_hostel" class="form-control" required value="<?php echo $customer_hostel; ?>"> -->
<select name="c_hostel" class="form-control" value="<?php echo $customer_hostel; ?>" required>
                                            <option>CVR</option>
                                            <option>J.C. Bose</option>
                                            <option>Marie Curie</option>
                                            <option>Homi Bhabha</option>
 </select>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Room: </label>

<input type="text" name="c_room" class="form-control" required value="<?php echo $customer_room; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Contact: </label>

<input type="text" name="c_contact" class="form-control" required value="<?php echo $customer_contact; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> Customer Image: </label>

<input type="file" name="c_image" class="form-control" required ><br>

<img src="customer_images/<?php echo $customer_image; ?>" width="100" height="100" class="img-responsive" >


</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="update" class="btn btn-primary" >

<i class="fa fa-user-md" ></i> Update Now

</button>


</div><!-- text-center Ends -->


</form><!--- form Ends -->

<?php

if(isset($_POST['update'])){

$update_id = $customer_id;

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_hostel = $_POST['c_hostel'];

$c_room = $_POST['c_room'];

$c_contact = $_POST['c_contact'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

move_uploaded_file($c_image_tmp,"customer_images/$c_image");

$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_hostel='$c_hostel',customer_room='$c_room',customer_contact='$c_contact',customer_image='$c_image' where customer_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Your account has been updated please login again')</script>" ;

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>