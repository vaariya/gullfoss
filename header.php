<?php require'db_con.php';?>

    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
        <!--===== HEADER TOP START =====-->
        <div class="header-top pt-15 pb-15 d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-3">
                        <div class="phone text-center text-lg-left">
                            <!-- <p style="color:white">Phone :+91-9714498674</p> -->
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-6">
                        <div class="opening text-center">
                            <p style="color:white" style="font-family:verdana"><b>FREE SHIPPING FOR OUR PAN INDIA FRIENDS</b></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="address text-center text-lg-right">
                            <!-- <p style="color:white"><i class="fa fa-map-marker"></i>VaariYa Beverages Pvt. Ltd.</p> -->
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> 
        <!--===== HEADER TOP ENDS =====-->
        
        <!--===== NAVBAR START =====-->
        <div class="navigation">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                           
                            <a class="navbar-brand" href="index.php">
                                <img src="images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> <!-- toggle Button -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="index.php">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="active" href="about.php">ABOUT US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Product.php">SHOP</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">OUR PAGES</a>
                                        <ul class="sub-menu">
                                            <li class="li"><a href="testimonial.php">TESTIMONIAL</a></li>
                                            <li class="li"><a href="faq-Page.php">FAQ</a></li>
                                            <li class="li"><a href="team.php">TEAM</a></li>
                                            <li class="li"><a href="pricing.php">PRICING</a></li><!-- 
                                            <li class="li"><a href="login.php">Login</a></li>
                                            <li class="li"><a href="Register.php">Register</a></li> -->
                                        </ul>

                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">CONTACT US</a>
                                    </li>

                                    
                                </ul>
                            </div>
                            <div class="cart-search">

                                <ul>
                                    <?php

                                        $con=mysqli_connect($host,$user,$password,$db); 
                                        $select_rows = mysqli_query($con,"SELECT * FROM `cart` ");
                                        $row_count = mysqli_num_rows($select_rows);
                                    ?>    
                                    <li><a href="cart.php"><i class="fa fa-shopping-basket"></i><span><?php echo $row_count; ?></span></a></li>
                                    <li><a id="search" href="#"><i class="fa fa-search"></i></a>
                                        <div class="search-box">
                                            <input type="search" placeholder="Search...">
                                            <button type="button"><i class="fa fa-search"></i></button>
                                        </div> 
                                        <div>
                                            <li class="nav-item">
                                        <a href="gullfoss/index.php"><i class="fa fa-user"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- cart search -->
                        </nav>  <!-- nav -->
                        
                    </div> 
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

        <!--===== NAVBAR ENDS =====-->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
