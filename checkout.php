<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location:gullfoss/index.php");
    }
?>
<?php
require'db_con.php';

    $type = "";




?>
<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Gullfoss - Checkout</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    
    <!--====== Owl Carousel css ======-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
  
    <!--====== PREALOADER PART START ======-->
    
    <div class="preloader">
        <div class="thecube">
			<div class="cube c1"></div>
			<div class="cube c2"></div>
			<div class="cube c4"></div>
			<div class="cube c3"></div>
        </div>
    </div>
    
    <!--====== PREALOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
        <?php include 'header.php'; ?>
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-200 pb-150 bg_cover" style="background-image: url(images/page-banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content">
                        <h3>Checkout</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    <?php
    $email = $_SESSION['email'];
                        $query = "SELECT * from user where email='".$email."'"; 
                    $result = mysqli_query($con, $query) or die ( mysqli_error());
                    $row = mysqli_fetch_assoc($result);
    ?>
   
    <!--====== CHECKOUT PART START ======-->
    
    <section id="checkout-part" class="pt-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-box mt-50">
                        <div class="title">
                            <h5>Buyer Info</h5>
                            <!-- <h5 class="float-right">Login Here</h5> -->
                        </div>
                        <div class="buyer-info">
                            <form action="" method="post">
                                <div class="form-box">
                                    <label>First Name :</label>
                                    <input name="first_name" type="text" disabled value="<?php echo$row['first_name']; ?>" required>
                                </div>
                                <div class="form-box">
                                    <label>Last Name :</label>
                                    <input name="last_name" type="text" disabled value="<?php echo$row['last_name']; ?>" required>
                                </div>
                                <div class="form-box">
                                    <label>Address 1 :</label>
                                    <input name="address" type="text" disabled value="<?php echo$row['address']; ?>" required>
                                </div>
                                <div class="form-box">
                                    <label>Email :</label>
                                    <input name="Email" type="text" disabled value="<?php echo$row['email']; ?>" required>
                                </div> 
                                <div class="form-box">
                                    <label>Contact no :</label>
                                    <input name="contact_no" type="text" disabled value="<?php echo$row['contact_no']; ?>" required>
                                </div><!--
                                <div class="form-box">
                                    <label>Country :</label>
                                    <input name="country" type="text" required>
                                </div>
                                <div class="form-box">
                                    <label>State :</label>
                                    <input name="state" type="text" required>
                                </div> -->

                    <div class="order-btn text-center mt-30">
                        <button name="submit" value="submit" type="submit">PLACE ORDER </button>
                    </div>
                        
                <div class="order-btn text-center mt-30">
                        <a href="pdf.php">invoice </a>
                    </div>
                            </form>

                        </div>
                    </div>
                </div>
                <h2 ><?php echo $type; ?></h2>
                <div class="col-lg-6">
                    <div class="checkout-box mt-50">
                       
                        <div class="title">
                            <h5>Billing Details</h5>
                        </div>
                        <div class="details">
                            <div class="details-title">
                                <h6>Product <span>Total</span></h6>
                            </div>
                            <?php
         $select_cart = mysqli_query($con, "SELECT * FROM cart");
         $total = 0;
         $grand_total = "";
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total = $total_price;
      ?>
                            <div class="order-list">
                                <ul><li><?= $fetch_cart['name']; ?><span><?= $fetch_cart['quantity']; ?></span></li>
                                    <?php
                                         }
                                      }
                                      else
                                      {
                                         echo "<div class='display-order'><span>your cart is empty!</span></div>";
                                      }
                                    ?>
                                    <!-- <li>Size <span>XL</span></li>
                                    <li>Color <span>RED</span></li> -->
                                    <!-- <li>There are many variations <span>$999.00</span></li> -->
                                    <!-- <li>Delivary Cost <span>$9.00</span></li> -->
                                </ul>
                            </div>
                            <div class="order-total">
                                <h5>Order total <span>₹<?= $grand_total; ?></span></h5>
                            </div>
                        </div>

                    </div>
                    <?php
                    require_once 'db_con.php';


   if (isset($_POST['submit'])) 
    {

        $id = $_POST['id'];
        $invoice = $_POST['invoice'];
        $payment_mode = $_POST['paymnet_mode'];
        $payment_status = $_POST['paymnet_status'];
        $time = $_POST['time'];
       
        $email_1 = $row['email'];
        $product_1 = "SELECT * FROM user WHERE email = '".$email_1."' ";
        $p_row_1 = mysqli_query($con,$product_1);
        $p_email = mysqli_fetch_assoc($p_row_1);
        $customer_id = $p_email['id'];

        $select_cart = mysqli_query($con, "SELECT * FROM cart");
         $total = 0;
         $grand_total = "";
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){

        $name = $fetch_cart['name'];
        $grand_total = $total = $total_price;
        $totalprice_1 =  $grand_total; 

    }}
        $product_2 = "SELECT * FROM product WHERE name = '".$name."' ";
        $p_result = mysqli_query($con, $product_2);
        $p_row_6 = mysqli_fetch_assoc($p_result);
        $product_id = $p_row_6['id'];

        


        // $product_ = "INSERT INTO `order` (`customer_id`,`product_id`,`totalprice`) VALUES ('$customer_id','$product_id','$totalprice_1')";
        // $product_ = "inert into order ('id', 'customer_id', 'product_id', 'invoice', 'payment_mode', 'payment_status', 'totalprice') VALUES 
        //                                     ('$id','$customer_id','$product_id','$invoice','$payment_mode','$payment_status','$totalprice_1')";

        // $insertquery = "INSERT INTO order (`id`, `customer_id`, `product_id`, `invoice`, `payment_mode`, `payment_status`, `totalprice`, `time`) VALUES ('$id','$customer_id','$product_id','$invoice','$payment_mode','$payment_status','$totalprice_1','$time')";

        

         // $iquery = mysqli_query($con,$product_query);

        if($product_id) 
        {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Product Has Benn Placed..!)';  
        echo '</script>';
           // header('location:pdf.php'); 
            // mysqli_query($con, "DELETE FROM cart");

            // echo $customer_id;echo "<br>";
            // echo $product_id;echo "<br>";
            // echo $totalprice_1;echo "<br>";
             // echo $product_qury; 
           // header('location:index.php');
           session_destroy();
           ?>
           <script>
        window.location.href='index.php';
        </script>
           <?php
        }
        else
        {
            echo '<script type ="text/JavaScript">';  
        echo 'alert("Some thing went wrong")';  
        echo '</script>'; 
        }

    }
   ?>
                    
                    <!-- <div class="checkout-box mt-50">
                        <div class="title">
                            <h5>Payment Methods</h5>
                        </div>
                        <div class="payment-methods">
                            <div class="Pement">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-stripe"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-info pt-40">
                                <form action="#">
                                    <div class="form-box">
                                        <label>Card Number :</label>
                                        <input type="text">
                                    </div>
                                    <div class="form-box">
                                        <label>cvv :</label>
                                        <input type="text">
                                    </div>
                                    <div class="month-year">
                                        <div class="form-box">
                                            <label>Month :</label>
                                            <input type="text">
                                        </div>
                                        <div class="form-box pl-70">
                                            <label>Year :</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <h5></h5>
                </div>
                <!-- <div class="col-lg-12">
                    <div class="order-btn text-center mt-30">
                        <a href="#">Place Order</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <br>
    <!--====== CHECKOUT PART ENDS ======-->
   
    <!--====== BRAND PART START ======-->
    
    <!-- <section id="brand-part" class="pt-70 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Business Partners</h2>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="brand-slied owl-carousel mt-45">
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/1.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/2.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/3.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/4.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/1.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/2.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/3.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-brand">
                            <img src="images/patnarlogo/4.png" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     -->
    <!--====== BRAND PART ENDS ======-->
   
    <!--====== DELIVERY PART START ======-->
    
    <!-- <section id="delivery-part" class="bg_cover" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 offset-xl-1">
                    <div class="delivery-text text-center pb-30">
                        <h2>Water Delivery 20 k.m.  Free Service</h2>
                        <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="delivery-image d-none d-lg-flex align-items-end">
            <img src="images/delivery-van.png" alt="Iamge">
        </div>
    </section>
 -->    
    <!--====== DELIVERY PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
   
    <?php include 'footer.php'; ?> 
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top">
        <img src="images/back-to-top.png" alt="Icon">
    </a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Owl Carousel js ======-->
    <script src="js/owl.carousel.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>

    <!--====== Main js ======-->
    <script src="js/main.js"></script>

    <!--====== Google Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>

</html>
