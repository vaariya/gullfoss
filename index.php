<?php require'db_con.php'; ?>

<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>GULLFOSS - HOME</title>
    
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
    
    <!--====== Aanimate css ======-->
    <link rel="stylesheet" href="css/animate.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">

    <style type="text/css">
        .review-widget_net{
            position: absolute;
            padding-bottom:10px ;
        }
    </style>
  
  
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
   
    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="bg_cover slider-part-2" style="background-image: url(images/bg-3.jpg)">
        <div class="content-slied">
            <div class="single-slider d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-11">
                            <div class="slider-content">
                                <h2 data-animation="fadeInUp" data-delay="1s">Gullfoss is water the way nature intended</h2>
                                <!-- <p data-animation="fadeInUp" data-delay="1.5s">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p> --><br>
                                <a data-animation="fadeInUp" data-delay="2s" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-11">
                            <div class="slider-content">
                                <h2 data-animation="fadeInUp" data-delay="1s">Always want safe and good water for healthy life</h2>
                                <!-- <p data-animation="fadeInUp" data-delay="1.5s">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p> --><br>
                                <a data-animation="fadeInUp" data-delay="2s" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="single-slider d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-11">
                            <div class="slider-content">
                                <h2 data-animation="fadeInUp" data-delay="1s">Always want safe and good water for healthy life</h2>
                                <p data-animation="fadeInUp" data-delay="1.5s">Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                                <a data-animation="fadeInUp" data-delay="2s" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== BRAND PART START ======-->
<!--     
    <section id="brand-part" class="pt-60">
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
   
    <!--====== PRODUCTS PART START ======-->
    
    <section id="products-part" class="pt-65">
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
                        <p>It’s a uniquely sourced mineral water that’s always certainly hydrating and refreshing, with not anything introduced for flavor or more advantageous with extras - so that you can attain your herbal peak.</p>
                    </div>
                </div>
            </div>
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
    </section>
    
    <!--====== PRODUCTS PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->
    
    <section id="services-part" class="services-part-2 pt-70">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Why Choose Us ?</h2>
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
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="singel-services mt-45 pb-50">
                        <div class="services-icon">
                            <img src="images/choose-us/icon-1.png" alt="Icon">
                        </div>
                        <div class="services-cont pt-25 pl-70">
                            <h4>Aliquam congue fermentum</h4>
                            <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                            <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                    
                    <div class="singel-services">
                        <div class="services-icon">
                            <img src="images/choose-us/icon-3.png" alt="Icon">
                        </div>
                        <div class="services-cont pt-25 pl-70">
                            <h4>Aliquam congue fermentum</h4>
                            <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                            <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="singel-services mt-50 text-center">
                        <img src="images/choose-us/services-1.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="singel-services right mt-45 text-right pb-50">
                        <div class="services-icon">
                            <img src="images/choose-us/icon-2.png" alt="Icon">
                        </div>
                        <div class="services-cont pt-25 pr-70">
                            <h4>Aliquam congue fermentum</h4>
                            <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                            <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                    
                    <div class="singel-services right text-right ">
                        <div class="services-icon">
                            <img src="images/choose-us/icon-4.png" alt="Icon">
                        </div>
                        <div class="services-cont pt-25 pr-70">
                            <h4>Aliquam congue fermentum</h4>
                            <p>Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                            <a href="#">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== video PART START ======-->
    
    <section id="video-part" class="pt-70 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Our Video History</h2>
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
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="video pt-45">
                        <img src="images/video.jpg" alt="Video">
                        <div class="icon">
                            <a class="videi-popup" href="https://youtu.be/IBr798ZSOx4"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="review-widget_net" data-uuid="320fc1db-a59b-4b8d-a930-b5e9449fa0b1" data-template="10" data-filter="" data-lang="en" data-theme="light"><center><a href="https://www.review-widget.net/" target="_blank" rel="noopener"><img src="https://grwapi.net/assets/spinner/spin.svg" title="Google Review Widget" alt="Review Widget"></a></center></div><script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script>
    </section>
    
    
    <!--====== video PART ENDS ======-->
    
    <!--====== DELIVERY PART START ======-->
    
    <section id="delivery-part" class="delivery-part-2 bg_cover pt-95 pb-100" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
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
    
    <!--====== DELIVERY PART ENDS ======-->
    
    <!--====== CLIENT PART START ======-->
    
    <section id="client-part" class="pt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <img src="images/client/c.png" alt="icon">
                        <h2>Our Exhort Happy Clients say !</h2>
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
                <div class="client-slied owl-carousel">
                    <div class="col-lg-12">
                        <div class="singel-client mt-50">
                            <div class="client-thum">
                                <div class="client-img">
                                    <img src="images/client/c-1.jpg" alt="Client">
                                </div>
                                <div class="client-head">
                                    <h5>Anil Barua</h5>
                                    <span>Laravel Developer</span>
                                </div>
                            </div>
                            <div class="client-text mt-35">
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-client mt-50">
                            <div class="client-thum">
                                <div class="client-img">
                                    <img src="images/client/c-2.jpg" alt="Client">
                                </div>
                                <div class="client-head">
                                    <h5>Toya Kanti Roy</h5>
                                    <span>Graphic Designer</span>
                                </div>
                            </div>
                            <div class="client-text mt-35">
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-client mt-50">
                            <div class="client-thum">
                                <div class="client-img">
                                    <img src="images/client/c-1.jpg" alt="Client">
                                </div>
                                <div class="client-head">
                                    <h5>Anil Barua</h5>
                                    <span>Laravel Developer</span>
                                </div>
                            </div>
                            <div class="client-text mt-35">
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-client mt-50">
                            <div class="client-thum">
                                <div class="client-img">
                                    <img src="images/client/c-2.jpg" alt="Client">
                                </div>
                                <div class="client-head">
                                    <h5>Toya Kanti Roy</h5>
                                    <span>Graphic Designer</span>
                                </div>
                            </div>
                            <div class="client-text mt-35">
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus bibendum augue ac arcu pharetra congue. Proin accumsan elit et elit vehicula, sit amet fringilla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
   
    <!--====== CLIENT PART ENDS ======-->
   
    <!--====== BLOG PART START ======-->
    
    <!-- <section id="blog-part" class="pt-70 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <h2>Our letest news</h2>
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
                <div class="blog-slied owl-carousel">
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-1.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-2.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-3.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-1.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-2.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-3.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-1.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-2.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="singel-blog mt-30">
                            <div class="blog-thum">
                                <img src="images/blog/b-3.jpg" alt="Blog">
                                <div class="date text-center">
                                    <h3>22</h3>
                                    <span>Sep 2020</span>
                                </div>
                            </div>
                            <div class="blog-cont pt-25">
                                <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                                <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <!--====== BLOG PART ENDS ======-->
   
    <?php include 'footer.php'; ?>
   
    <!--====== BACK TOP TOP PART START ======-->
    
    <a href="#" class="back-to-top">
        <img src="images/back-to-top.png" alt="Icon">
    </a>
    
    <!--====== BACK TOP TOP PART ENDS ======-->
    <!--====== ACCOUNT POPPUP PART START ======-->
    
    <!-- <div class="account-popup-area">
        <div class="account-popup-wrapper">
            <div class="account-popup-content">
                <div class="account-top">
                    <div class="account-title">
                        <h3><span>Create an</span> Account</h3>
                    </div>
                    <a href="javascript:void(0)" class="popup-close">
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="account-form">
                    <form action="#">
                        <div class="single-form clearfix">
                            <div class="form-title text-right">
                                <p>Email</p>
                            </div>
                            <div class="form-input">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="single-form clearfix">
                            <div class="form-title text-right">
                                <p>Password</p>
                            </div>
                            <div class="form-input">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="single-form clearfix">
                            <div class="form-title text-right">
                                <p>Confirm Password</p>
                            </div>
                            <div class="form-input">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="single-form clearfix">
                            <div class="form-input">
                                <button type="submit">Sing Up</button>
                            </div>
                        </div>
                        
                    </form>
                    <div class="single-form clearfix">
                        <div class="form-input">
                            <p>Already Have Account? <a href="#">Sing in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!--====== ACCOUNT POPPUP PART ENDS ======-->
    
    
    
    
    
    
    
    
    
    
    
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
