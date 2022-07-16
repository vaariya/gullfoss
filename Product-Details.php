<?php require'db_con.php';?>

<?php

    $cart_query = mysqli_quer($con,"SELECT * FROM cart where user_type = "'$user_type'" ");
    if(mysqli_num_rows($cart_query)>0) 
    {
        while($fetch_cart = mysqli_fetch_assoc($cart_query)){
?>

<?php
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
    <title>GULLFOSS - Product Details</title>
    
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
                        <h3>Product Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== PRODUCTS DETAILS PART START ======-->
    
    <section id="products-details-part" class="pt-40">
        <div class="container">
            <?php
                    $host="localhost";
                    $user="root";
                    $password="";
                    $db="gullfoss";

                    $con=mysqli_connect($host,$user,$password,$db);
                    $id=$_REQUEST['id'];
                    $query = "SELECT * from product where id='".$id."'"; 
                    $result = mysqli_query($con, $query) or die ( mysqli_error());
                    $row = mysqli_fetch_assoc($result);
                    ?>
            <div class="row">
                <div class="col-lg-7">
                    <div class="products-viwe mt-30">
                        <!-- <div class="singel-slied">
                            <img src="images/product/pd-1.jpg" alt="Products">
                        </div> -->
                        <div class="singel-slied">
                            <img src="gullfoss/admin/uploads/<?php echo $row['image'];?>" alt="Products">
                        </div>  
                    </div>
                </div>
                
                <div class="col-lg-5">
                    
                    <div class="products-details pt-30">
                        <div class="title">
                            <h3><?php echo $row['name'];?></h3>
                        </div>
                        <ul class="rating pt-25">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <!-- <div class="review pt-15 pb-25">
                            <p>Interested : 05</p>
                            <p>564 Reviews(S)</p>
                        </div> -->
                        <!-- <div class="share pt-25">
                            <ul>
                                <li class="head">Share :</li>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div> -->
                        <div class="price pt-15">
                            <h3>₹<?php echo $row['price'];?> <span><!-- <del>$999</del> --></span></h3>
                        </div>
                        <!-- <div class="Desciption pt-20">
                            <h6>Short Description:</h6>
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make sfsa type specimen book. It has survived not only five but centuries, but also the leap into electronic typesetting, </p>
                        </div> -->
                        <div class="quanty-availability pt-25">
                            <div class="quanty">
                                <p>Qty:</p>
                                <div class="qty">
                                    <input type="number" class="count" value="0">
                                </div>
                            </div>
                            <div class="availability">
                                <p>Availability :</p>
                                 <?php
                                                    if ($row['status']==0) 
                                                    {
                                                        echo '<p>IN STOCK</p>';
                                                        ?>

                                                       
                                
                            </div>
                        </div>
                        <div class="products-add pt-30">
                            <ul>
                                <li><a href="cart.php">Add to Cart</a></li><!-- 
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li> -->
                            </ul>
                        </div>
                        <?php 
                                                    }
                                                    else
                                                    {
                                                        echo '<p>OUT OF STOCK</p>';
                                                    }
                                                    ?>
                    </div>

                </div>
            </div>

        </div>
    </section>
    
    <!--====== PRODUCTS DETAILS PART ENDS ======-->
   
    <!--====== PRODUCTS TAB PART START ======-->
    
    <section id="Product-tab" class="pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Product-tab">
                        <ul class="nav" id="myTab" role="tablist">
                            <li>
                                <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">description</a>
                            </li>
                            <!-- <li>
                                <a id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">comments</a>
                            </li> -->
                            <!-- <li>
                                <a id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">review</a>
                            </li> -->
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="Product-tab-cont">
                                    <p><?php echo $row['description'];?></p>
                                    <!-- <h6>Item Features :</h6> -->
                                   <!--  <ul>
                                        <li>Perfect unique design</li>
                                        <li>Fully responsive</li>
                                        <li>Amazing parallax effects</li>
                                        <li>SEO friendly</li>
                                        <li>Well organized and valid code</li>
                                        <li>Google fonts</li>
                                        <li>WPML ready</li>
                                    </ul> -->
                                </div>
                            </div>

                            <!-- <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                                <div class="Product-tab-cont">
                                    <div class="comment">
                                        <ul>
                                            <li>
                                                <div class="singel-comment">
                                                    <div class="thum">
                                                        <img src="images/blog/cm-1.jpg" alt="Comment">
                                                    </div>
                                                    <div class="cont ml-40">
                                                        <h6>Kosmi Kotalia</h6>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <ul>
                                                            <li><a href="#">Repost</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 39 minits ago</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="replay pl-100">
                                                    <li>
                                                        <div class="singel-comment mt-30">
                                                            <div class="thum">
                                                                <img src="images/blog/cm-2.jpg" alt="Comment">
                                                            </div>
                                                            <div class="cont ml-40">
                                                                <h6>Kosmi Kotalia</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                                <ul>
                                                                    <li><a href="#">Repost</a></li>
                                                                    <li><a href="#">Reply</a></li>
                                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 39 minits ago</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="singel-comment mt-30">
                                                    <div class="thum">
                                                        <img src="images/blog/cm-3.jpg" alt="Comment">
                                                    </div>
                                                    <div class="cont ml-40">
                                                        <h6>Kosmi Kotalia</h6>
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <ul>
                                                            <li><a href="#">Repost</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 39 minits ago</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="Product-tab-cont">
                                    <div class="review">
                                        <ul>
                                            <li>
                                                <div class="singel-review">
                                                    <div class="review-thum">
                                                        <div class="review-img">
                                                            <img src="images/product/review/r-1.jpg" alt="Review">
                                                        </div>
                                                        <div class="review-head pl-20">
                                                            <h6>Kosmi Kotalia</h6>
                                                            <span>Australia</span>
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <span>Jan- 15 - 2020</span>
                                                    </div>
                                                    <div class="review-cont">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                            <span>/ 4 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="singel-review">
                                                    <div class="review-thum">
                                                        <div class="review-img">
                                                            <img src="images/product/review/r-2.jpg" alt="Review">
                                                        </div>
                                                        <div class="review-head pl-20">
                                                            <h6>Kosmi Kotalia</h6>
                                                            <span>Australia</span>
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <span>Jan- 15 - 2020</span>
                                                    </div>
                                                    <div class="review-cont">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            </ul>
                                                            <span>/ 4 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="reviwe-form mt-25">
                                        <h3>Write a review</h3>
                                        <form action="#">
                                            <div class="form-box">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                            <div class="form-box">
                                                <textarea placeholder="Your Review"></textarea>
                                            </div>
                                            <div class="note">
                                                <p><span>Note:</span> HTML is not translated!</p>
                                            </div>
                                            <div class="rating">
                                                <span>Rating</span>
                                                <ul>
                                                    <li>Bad</li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li>Good</li>
                                                </ul>
                                            </div>
                                            <button type="button">Continue</button>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== PRODUCTS TAB PART ENDS ======-->
   
    <!--====== PRODUCTS PART START ======-->
    
    <!-- <section id="products-part" class="pt-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <h2>Our Products</h2>
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
                <div class="products-slied owl-carousel">
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-1.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-2.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-3.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-2.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-1.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-4.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-2.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-products mt-30">
                            <div class="products-image">
                                <img src="images/product/p-1.jpg" alt="Products">
                                <div class="new-sele">
                                    <a href="#">New</a>
                                </div>
                            </div>
                            <div class="products-contant">
                                <h6 class="products-title"><a href="#">Mineral water big bottle</a></h6>
                                <div class="price-rating d-flex justify-content-between">
                                    <div class="price">
                                        <span class="regular-price">$259</span>
                                        <span class="discount-price">$215</span>
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
                                <p class="text">Mauris sed massa eu nulla mollis vehicula quis id tortor</p>
                                <div class="products-cart">
                                    <a class="cart-add" href="#"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <br>
    
    <!--====== PRODUCTS PART ENDS ======-->
   
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
    
<!--     <section id="delivery-part" class="bg_cover" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
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
