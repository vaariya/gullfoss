
<?php require'db_con.php';?>
<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>GULLFOSS - Contact</title>
    
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
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== MAP PART START ======-->
    
    <div class="map-part pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.7188252768647!2d72.593574614769!3d22.99736478496577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8557e2dfb447%3A0x69da82ee15b4566e!2svaariya%20beverages%20pvt%20ltd!5e0!3m2!1sen!2sin!4v1657021510338!5m2!1sen!2sin" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== MAP PART ENDS ======-->
    
    <!--====== CONACT PART START ======-->
    
    <section id="contact-part" class="pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="contact-form pt-45">
                        <h6>Leave Reply</h6>
                        <form id="contact-form" action="mail.php" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>First Name :</label>
                                        <input name="name" type="text" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Email Address :</label>
                                        <input type="email" name="email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Contact Number :</label>
                                        <input name="phone" type="phone" data-error="Valid Phone Number is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <label>Subject :</label>
                                        <input type="subject-1" name="subject" data-error="Valid Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <label>Write a message :</label>
                                        <textarea name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-info pt-45">
                        <h6>Contact Info</h6>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p> -->
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>2-White House, Bhairavnath Rd, opp. Best High School, Maninagar, Ahmedabad, Gujarat 380008</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>info@gullfosswater.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont pl-15">
                                    <p>+91-97144 98674</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--====== CONACT PART ENDS ======-->
    
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
    
   <!--  <section id="delivery-part" class="bg_cover" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
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
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script> -->    
    <script src="js/map-script.js"></script>


</body>

</html>
