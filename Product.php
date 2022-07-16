<?php require'db_con.php';?>

<?php
    error_reporting(0);
   

    if(isset($_POST['add_to_cart'])){

   $name = $_POST['name'];
   $price = $_POST['price'];
   $image = $_POST['image'];
   $quantity = 1;

   $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($con, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$name', '$price', '$image', '$quantity')");
      $message[] = 'product added to cart succesfully';
   }

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
    <title>GULLFOSS - SHOP</title>

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
                        <h3>Shop Page</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== PRODUTCT PAGE PART START ======-->

    <div id="produtct-part" class="pt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="produtct-top-bar d-md-flex justify-content-between">
                        <div class="produtct-bar pt-30">
                            <div class="produtct">
                                <p>View as :</p>
                                <ul   class="nav" id="myTab" role="tablist">
                                   <li>
                                       <a class="nav-item nav-link active" id="nav-grid-tab" data-toggle="tab" href="#nav-grid" role="tab" aria-controls="nav-grid" aria-selected="true">
                                            <i class="fa fa-th-large"></i>
                                        </a>
                                   </li>
                                   <li>
                                       <a class="nav-item nav-link" id="nav-list-tab" data-toggle="tab" href="#nav-list" role="tab" aria-controls="nav-list" aria-selected="false">
                                            <i class="fa fa-th-list"></i>
                                        </a>
                                   </li>
                                </ul>
                            </div>
                            <!-- <div class="produtct">
                                <p>Sort by :</p>
                                <select name="select">
                                    <option>Most Re..</option>
                                    <option>Laptop</option>
                                    <option>Ram</option>
                                    <option>cpu</option>
                                </select>
                                <i class="fa fa-caret-down"></i>
                            </div> -->
                           <!--  <div class="produtct">
                                <p>Show :</p>
                                <select name="select" id="number">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                </select>
                                <i class="fa fa-caret-down"></i>
                            </div> -->
                        </div>
                       <!--  <nav class="produtct-next pt-30">
                            <ul class="pagination">
                                <li><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a class="page-link active" href="#">1</a></li>
                                <li><a class="page-link" href="#">2</a></li>
                                <li><a class="page-link" href="#">3</a></li>
                                <li><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
            </div> <!-- produtct-bar -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                            <div class="row">
                                <!---- PHP ----->
                                <?php
                          
                                    $select_products = mysqli_query($con, "SELECT * FROM `product`");
                                    if(mysqli_num_rows($select_products) > 0)
                                    {
                                         while($product = mysqli_fetch_assoc($select_products))
                                        {
                                ?>

                                <!---- PHP ----->
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                <form action="" method="post">

                                    <div class="singel-products mt-30">
                                        <div class="products-image">
                                            <img src="gullfoss/admin/uploads/<?php echo $product['image']; ?>" alt="Products">
                                            <input type="hidden" name="image" value="gullfoss/admin/uploads/<?php echo $product['image']; ?>">

                                            <!-- 
                                            <div class="new-sele">
                                                <a href="#">New</a>
                                            </div> -->
                                            <div class="new-sele">
                                                <!-- 
                                                    <a href="#" class="text-danger">Out Of Stock</a> -->
                                            </div>
                                        </div>
                                        <div class="products-contant">
                                            <!-- <h6 class="products-title"><a href="#"></a></h6> -->
                                        <input type="hidden" name="name" value="<?php echo $product['name']; ?>"><?php echo $product['name']; ?>

                                            <div class="price-rating d-flex justify-content-between">
                                                <div class="price">
                                                    <input type="hidden" name="price" value="<?php echo $product['price']; ?>">₹<?php echo $product['price']; ?>

                                                    <!-- <span class="regular-price">₹</span> -->
                                                    <!-- <span class="discount-price">$215</span> -->
                                                </div>
                                                <div class="rating">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <p class="text"><?php echo $product['description'] ?></p> -->
                                            <div class="products-cart">
                                                <?php
                                                    if ($product['status']==0) 
                                                    {
                                                        echo '<a  class ="badge rounded-pill bg-light-success text-success w-100" >Available</a>';
                                                        ?>
                                                        <div class="products-cart">
                                                                <button class="cart-add" value="add to cart" name="add_to_cart" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                                        </div>
                                                       <?php 
                                                    }
                                                    else
                                                    {
                                                        echo '<a class ="badge rounded-pill bg-light-danger text-danger w-100">out Of Stock</a>';
                                                    }
                                                    ?>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                <?php       
                                    }
                                }

                                ?>
                                
                                

                                

                                
                            </div>
                        </div> <!-- products Grid-->
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!--====== PRODUTCT PAGE PART ENDS ======-->

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
    </section> -->

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
