<div class="box">
    <!-- box Starts -->

    <?php

    $session_email = $_SESSION['customer_email'];

    $select_customer = "select * from customers where customer_email='$session_email'";

    $run_customer = mysqli_query($con, $select_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['customer_id'];


    ?>

    <h1 class="text-center">Payment Options For You</h1>

    <form action="order.php" method="post" class="form-horizontal">

                                <div class="form-group" style="margin-right: 40px; margin-top: 50px;">
                                    <!-- form-group Starts -->

                                    <label class="col-md-5 control-label">Delivery Options :</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 Starts -->

                                        <select style="font-size: 18px; width:400px; " name="delivery_option" class="form-control">

                                            <option>Select a Delivery Method</option>
                                            <option>Pick Up</option>
                                            <option>Room Delivery</option>


                                        </select>

                                    </div><!-- col-md-7 Ends -->


                                </div><!-- form-group Ends -->

                                <div class="form-group" style="margin-right: 40px;">
                                    <!-- form-group Starts -->

                                    <label class="col-md-5 control-label">Payment Options :</label>

                                    <div class="col-md-7">
                                        <!-- col-md-7 Starts -->

                                        <select style="font-size: 18px; width:400px;" name="payment_option" class="form-control">

                                            <option>Select a Payment Method</option>
                                            <option>Cash On Delivery(COD)</option>
                                         
                                        </select>

                                    </div><!-- col-md-7 Ends -->


                                </div><!-- form-group Ends -->
                                
                                <p class="text-center buttons">
                                    <!-- text-center buttons Starts -->

                                    <!-- <button class="btn btn-success" type="submit">

                                        <i class="fa fa-shopping-cart"></i> Pay Offline

                                    </button> -->

                                    <input  onclick="window.location.href = order.php " type="submit" value="Submit request" />

                                </p><!-- text-center buttons Ends -->

    </form><!-- form-horizontal Ends -->

    <p class="lead text-center">
    

    <!-- <a href="order.php?c_id=<?php echo $customer_id; ?>"><u>Pay Offline</u></a> -->

    </p>

    <center>
        <!-- center Starts -->
        
        <p class="lead">

                Currently We do not except payments online.<br>
                Sorry For The Inconvinience.
                <br><br>
                <img src="images/delivery.png" width="500" height="270" class="img-responsive">

        </p>

    </center><!-- center Ends -->

</div><!-- box Ends -->