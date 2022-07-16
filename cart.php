<?php
    require 'db_con.php ';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `cart`");
   header('location:cart.php');
}

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
    <title>GULLFOSS - cart</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    
    <!--====== Owl Carousel css ======-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
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
                        <h3>Cart page</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CART PART START ======-->
    
    <section id="cart-part" class="pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th class="product">Product</th>
                                  <th class="description">Description</th>
                                  <!-- <th class="model">Model</th> -->
                                  <th class="edit">Edit</th>
                                  <th class="quantite">Quantite</th>
                                  <th class="price">Unit Price</th>
                                  <th class="total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
         
                                 $select_cart = mysqli_query($con, "SELECT * FROM `cart`");
                                 $grand_total = 0;
                                 if(mysqli_num_rows($select_cart) > 0){
                                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                                 ?>
                                <tr>
                                  <td><div class="product-img"><img src="<?php echo $fetch_cart['image']; ?>" alt="Product"></div></td>
                                  <td><div class="product-description">
                                      <h6><?php echo $fetch_cart['name']; ?></h6>
                                      <!-- <p>Lorem Ipsum is simply dummy text of the typesetting.</p> -->
                                  </div></td>
                                 <!--  <td><div class="product-model">
                                      <p>Product-23</p>
                                  </div></td> -->
                                  <td><div class="product-edit">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                                          <li><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"><i class="fa fa-trash-o"></i></a></li>
                                      </ul>
                                  </div></td>
                                  <td><div class="product-quantite">
                                       <div class="qty">
                                            <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
                                       </div>
                                  </div></td>
                                  <td><div class="product-price">
                                      <p>₹<?php echo ($fetch_cart['price']); ?></p>
                                  </div></td>
                                  <td><div class="product-total">
                                      <p>₹<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></p>
                                  </div></td>
                                </tr>
                                <?php
                                   $grand_total += $sub_total;  
                                    };
                                 };
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="cart-btn clearfix">
                        <div class="btn-left">
                            <a href="Product.php">CONTINUE SHOPPING </a>
                        </div>
                        <div class="btn-right">
                            <a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn">CLEAR CART</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <!-- <div class="estemate-shipping mt-50">
                        <h5>Estimate Shopping And Tax</h5>
                        <form action="#">
                            <div class="form-box">
                                <label>Country</label>
                                <input type="text" >
                            </div>
                            <div class="form-box">
                                <label>State/Province</label>
                                <input type="text" >
                            </div>
                            <div class="form-box">
                                <label>Zip/Postal Code</label>
                                <input type="text" >
                            </div>
                            <div class="form-box text-right">
                                <button type="button">GET QUOTE</button>
                            </div>
                        </form>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- <div class="disconut-code mt-50">
                        <h5>Discount Code</h5>
                        <form action="#">
                            <div class="form-box">
                                <label>Enter your coupon code if you have one.</label>
                                <input type="text" >
                            </div>
                            <div class="form-box text-right">
                                <button type="button">APPLY</button>
                            </div>
                        </form>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cart-total text-right mt-50">
                        <!-- <p><span>Subtotal </span><span>$999.00  </span></p> -->
                        <p><span>Grand Total </span><span>₹<?php echo $grand_total; ?></span></p>
                        <a href="checkout.php">PROCED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    
    <!--====== CART PART ENDS ======-->
    
    <!--====== BRAND PART START ======-->
    <!-- 
    <section id="brand-part" class="pt-70 pb-80">
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
                        <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus  suscipit massa dapibus blandit. Vivamus ac commodo eros.</p>
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
    </section> -->
    
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
