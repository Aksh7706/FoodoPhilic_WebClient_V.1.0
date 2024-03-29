<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
    <title>E commerce Store </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">

    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="styles/style.css" rel="stylesheet"> -->
    <link href="styles/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <div id="top">
        <!-- top Starts -->

        <div class="container">
            <!-- container Starts -->

            <div class="col-md-6 offer">
                <!-- col-md-6 offer Starts -->

                <a href="#" class="btn btn-success btn-sm">

                    <?php

                    if (!isset($_SESSION['customer_email'])) {

                        echo "Welcome :Guest";
                    } else {

                        echo "Welcome : " . $_SESSION['customer_email'] . "";
                    }


                    ?>

                </a>

                <a href="#">
                    Shopping Cart Total Price: <?php total_price(); ?>, Total Items <?php items(); ?>
                </a>

            </div><!-- col-md-6 offer Ends -->

            <div class="col-md-6">
                <!-- col-md-6 Starts -->
                <ul class="menu">
                    <!-- menu Starts -->

                    <li>
                        <a href="customer_register.php">
                            Register
                        </a>
                    </li>

                    <li>
                        <?php

                        if (!isset($_SESSION['customer_email'])) {

                            echo "<a href='checkout.php' >My Account</a>";
                        } else {

                            echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                        }


                        ?>
                    </li>

                    <li>
                        <a href="cart.php">
                            Go to Cart
                        </a>
                    </li>

                    <li>
                        <?php

                        if (!isset($_SESSION['customer_email'])) {

                            echo "<a href='checkout.php'> Login </a>";
                        } else {

                            echo "<a href='logout.php'> Logout </a>";
                        }

                        ?>
                    </li>

                </ul><!-- menu Ends -->

            </div><!-- col-md-6 Ends -->

        </div><!-- container Ends -->
    </div><!-- top Ends -->

    <div class="navbar navbar-default" id="navbar">
        <!-- navbar navbar-default Starts -->
        <div class="container">
            <!-- container Starts -->

            <div class="navbar-header">
                <!-- navbar-header Starts -->

                <a class="navbar-brand home" href="index.php">
                    <!--- navbar navbar-brand home Starts -->

                    <!-- <img src="images/logo.png" alt="computerfever logo" class="hidden-xs">
                    <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs"> -->

                </a>
                <!--- navbar navbar-brand home Ends -->

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation </span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>


            </div><!-- navbar-header Ends -->

            <div class="navbar-collapse collapse" id="navigation">
                <!-- navbar-collapse collapse Starts -->

                <div class="padding-nav">
                    <!-- padding-nav Starts -->

                    <ul class="nav navbar-nav navbar-left">
                        <!-- nav navbar-nav navbar-left Starts -->

                        <li>
                            <a href="index.php"> Home </a>
                        </li>

                        <li>
                            <a href="shop.php"> Shop </a>
                        </li>

                        <li>
                            <?php

                            if (!isset($_SESSION['customer_email'])) {

                                echo "<a href='checkout.php' >My Account</a>";
                            } else {

                                echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                            }


                            ?>
                        </li>

                        <li>
                            <a href="cart.php"> Shopping Cart </a>
                        </li>

                        <li>
                            <a href="contact.php"> Contact Us </a>
                        </li>

                    </ul><!-- nav navbar-nav navbar-left Ends -->

                </div><!-- padding-nav Ends -->

                <a class="btn btn-primary navbar-btn right" href="cart.php">
                    <!-- btn btn-primary navbar-btn right Starts -->

                    <i class="fa fa-shopping-cart"></i>

                    <span> <?php items(); ?> items in cart </span>

                </a><!-- btn btn-primary navbar-btn right Ends -->

                <div class="navbar-collapse collapse right">
                    <!-- navbar-collapse collapse right Starts -->

                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button>

                </div><!-- navbar-collapse collapse right Ends -->

                <div class="collapse clearfix" id="search">
                    <!-- collapse clearfix Starts -->

                    <form class="navbar-form" method="get" action="results.php">
                        <!-- navbar-form Starts -->

                        <div class="input-group">
                            <!-- input-group Starts -->

                            <input class="form-control" type="text" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">
                                <!-- input-group-btn Starts -->

                                <button type="submit" value="Search" name="search" class="btn btn-primary">

                                    <i class="fa fa-search"></i>

                                </button>

                            </span><!-- input-group-btn Ends -->

                        </div><!-- input-group Ends -->

                    </form><!-- navbar-form Ends -->

                </div><!-- collapse clearfix Ends -->

            </div><!-- navbar-collapse collapse Ends -->

        </div><!-- container Ends -->
    </div><!-- navbar navbar-default Ends -->


    <div id="content">
        <!-- content Starts -->
        <div class="container">
            <!-- container Starts -->

            <div class="col-md-12">
                <!--- col-md-12 Starts -->

                <ul class="breadcrumb">
                    <!-- breadcrumb Starts -->

                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>Register</li>

                </ul><!-- breadcrumb Ends -->



            </div>
            <!--- col-md-12 Ends -->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->

                <?php include("includes/sidebar.php"); ?>

            </div><!-- col-md-3 Ends -->


            <div class="col-md-9">
                <!-- col-md-9 Starts -->

                <div class="box">
                    <!-- box Starts -->

                    <div class="box-header">
                        <!-- box-header Starts -->

                        <center>
                            <!-- center Starts -->

                            <h2> Register A New Account </h2>



                        </center><!-- center Ends -->

                    </div><!-- box-header Ends -->

                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                        <!-- form Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Customer Name</label>

                            <input type="text" class="form-control" name="c_name" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Email</label>

                            <input type="text" class="form-control" name="c_email" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Password </label>

                            <input type="password" class="form-control" name="c_pass"  required>

                        </div><!-- form-group Ends -->


                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Hostel </label>

                            <!-- <input type="text" class="form-control" name="c_country" required> -->
                            <select name="c_hostel" class="form-control" required>

                                            <option>Select Hostel</option>
                                            <option>CVR</option>
                                            <option>J.C. Bose</option>
                                            <option>Marie Curie</option>
                                            <option>Homi Bhabha</option>
                            </select>
                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Room No </label>

                            <input type="text" class="form-control" name="c_room" placeholder="511-C" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Contact </label>

                            <input type="text" class="form-control" name="c_contact" maxlength="10" placeholder="9999999999" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Customer Image </label>

                            <input type="file" class="form-control" name="c_image" required>

                        </div><!-- form-group Ends -->

                        
                        <div class="text-center">
                            <!-- text-center Starts -->

                            <button type="submit" name="register" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Register

                            </button>

                        </div><!-- text-center Ends -->

                    </form><!-- form Ends -->

                </div><!-- box Ends -->

            </div><!-- col-md-9 Ends -->



        </div><!-- container Ends -->
    </div><!-- content Ends -->



    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>     
    <script>
function JSalert(){
 
    swal({
    title: "Congratulations !",
    text: "You have been sucessfully registered",
    icon: 'success',
}).then(function() {
    window.open('index.php','_self');
});
 
}
    </script>

</body>

</html>

<?php
if (isset($_SESSION['customer_email'])) {

    echo "<script>
    swal({
    title: 'You are already registered 😄',
    text: 'Please Continue Shopping Or Logout To Register a New Account',
    icon: 'success',
    button: 'OK',
}).then(function() {
    window.open('index.php','_self');
});</script>";
}

if (isset($_POST['register'])) {

    $c_name = $_POST['c_name'];

    $c_email = $_POST['c_email'];

    $c_pass = $_POST['c_pass'];

    $c_hostel = $_POST['c_hostel'];

    $c_room = $_POST['c_room'];

    $c_contact = $_POST['c_contact'];

    $c_image = $_FILES['c_image']['name'];

    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    $c_ip = getRealUserIp();

    move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

    $insert_customer = "INSERT INTO customers (customer_name,customer_email,customer_pass,customer_hostel,customer_room,customer_contact,customer_image,customer_ip) VALUES 
                                                ('$c_name','$c_email','$c_pass','$c_hostel','$c_room','$c_contact','$c_image','$c_ip')";


    $run_customer = mysqli_query($con, $insert_customer) or die(mysqli_error($con));

    $sel_cart = "select * from cart where ip_add='$c_ip'";

    $run_cart = mysqli_query($con, $sel_cart) ;

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_cart > 0) {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>JSalert()</script>";

        // echo "<script>window.open('checkout.php','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>JSalert()</script>";

        // echo "<script>window.open('index.php','_self')</script>";
    }
}

?>