<?php require'db_con.php';?>

 <!DOCTYPE html>
 <html>
 <head>
     <style type="text/css">
 @import url("https://fonts.googleapis.com/css?family=Roboto");
@-webkit-keyframes come-in {
  0% {
    -webkit-transform: translatey(100px);
            transform: translatey(100px);
    opacity: 0;
  }
  30% {
    -webkit-transform: translateX(-50px) scale(0.4);
            transform: translateX(-50px) scale(0.4);
  }
  70% {
    -webkit-transform: translateX(0px) scale(1.2);
            transform: translateX(0px) scale(1.2);
  }
  100% {
    -webkit-transform: translatey(0px) scale(1);
            transform: translatey(0px) scale(1);
    opacity: 1;
  }
}
@keyframes come-in {
  0% {
    -webkit-transform: translatey(100px);
            transform: translatey(100px);
    opacity: 0;
  }
  30% {
    -webkit-transform: translateX(-50px) scale(0.4);
            transform: translateX(-50px) scale(0.4);
  }
  70% {
    -webkit-transform: translateX(0px) scale(1.2);
            transform: translateX(0px) scale(1.2);
  }
  100% {
    -webkit-transform: translatey(0px) scale(1);
            transform: translatey(0px) scale(1);
    opacity: 1;
  }
}
* {
  margin: 0;
  padding: 0;
}
/*
html, body {
  background: #eaedf2;
  font-family: 'Roboto', sans-serif;
}*/

.floating-container {
  position: fixed;
  width: 100px;
  height: 100px;
  bottom: 0;
  left: 0;
  margin: 35px 25px;
}
.floating-container:hover {
  height: 300px;
}
.floating-container:hover .floating-button {
  box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
  -webkit-transform: translatey(5px);
          transform: translatey(5px);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.floating-container:hover .element-container .float-element:nth-child(1) {
  -webkit-animation: come-in 0.4s forwards 0.2s;
          animation: come-in 0.4s forwards 0.2s;
}
.floating-container:hover .element-container .float-element:nth-child(2) {
  -webkit-animation: come-in 0.4s forwards 0.4s;
          animation: come-in 0.4s forwards 0.4s;
}
.floating-container:hover .element-container .float-element:nth-child(3) {
  -webkit-animation: come-in 0.4s forwards 0.6s;
          animation: come-in 0.4s forwards 0.6s;
}
.floating-container .floating-button {
  position: absolute;
  width: 65px;
  height: 65px;
  background: #072b31;
  bottom: 0;
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: auto;
  color: white;
  line-height: 82px;
  text-align: center;
  font-size: 23px;
  z-index: 100;
  box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.floating-container .float-element {
  position: relative;
  display: block;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  margin: 15px auto;
  color: white;
  font-weight: 500;
  text-align: center;
  line-height: 50px;
  z-index: 0;
  opacity: 0;
  -webkit-transform: translateY(100px);
          transform: translateY(100px);
}
.floating-container .float-element .material-icons {
  vertical-align: middle;
  font-size: 18px;
}
.floating-container .float-element:nth-child(1) {
  background: #25D366;
  box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
}
.floating-container .float-element:nth-child(2) {
  background: #4CAF50;
  box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
}
.floating-container .float-element:nth-child(3) {
  background: #FF9800;
  box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
}
#float{
    font-size: 30px;
}









     </style>
 </head>
 <body>

 <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part" class="footer-2 pt-70">
        <div class="container ">
            <div class="newsletter pb-45">
                <div class="row align-items-end">
                    <div class="col-lg-4">
                        <div class="newsletter-text">
                            <h2>Newsletter</h2>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor.</p>
                        </div>
                    </div>
                    <script src="//code.jivosite.com/widget/mKJmBaKp0h" async></script>

                    <div class="col-lg-7 offset-lg-1">
                        <form action="#">
                            <div class="row no-gutters pt-40">
                                <div class="col-sm-9">
                                    <div class="newsform">
                                        <input type="email" placeholder="Enter Your email address...">
                                    </div>
                                    <div class="newsform">
                                        
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                     <div class="newsform">
                                         <button type="button">Subscribe</button>
                                     </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="footer pt-20 pb-45">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-about pt-30">
                            <a href="#"><img src="images/logo-light-footer.png" alt="logo"></a>
                            <p>Donec vel ligula ornare, finibus ex at, vive risus. Aenean velit ex, finibus elementum eu, dignissim varius augue. </p>
                            <span><i class="fa fa-globe"></i>www.fresh@water.com</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <h5>Information</h5>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-title pt-30">
                            <h5>Our Services</h5>
                        </div>
                        <div class="footer-info">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-title pt-30">
                            <h5>Get In Tuch</h5>
                        </div>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="icon map-i">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="address">
                                        <h5> Vaariya Beverages Pvt. Ltd.</h5>
                                        <p>2-White House, Bhairavnath Rd, opp. Best High School, Maninagar, Ahmedabad, Gujarat 380008</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-volume-control-phone"></i>
                                    </div>
                                    <div class="address">
                                        <p>+91-9714498674</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="address">
                                        <p>info@gullfosswater.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-title pt-30">
                            <h5>Location</h5>
                        </div>
                        <div class="footer-news">
                            <ul>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14687.19034605771!2d72.5696062!3d23.0312031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x69da82ee15b4566e!2sVaariYa+Beverages+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1563531705602!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright pt-15 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="text-center text-sm-left">
                            <p>&copy; All Rights Reserved GULLFOUS   2020.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="social-icon text-center text-sm-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!--====== Call And Whatsapp Button =====--><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<div class="floating-container">
  <div class="floating-button"><span class="material-symbols-outlined" id="float">
forum
</span></div>
  <div class="element-container"><span class="float-element tooltip-left">
      <a href="tel:+91 95109 63177"><i class="material-icons" id="float" style="color:white;">phone</i></a>
    </span>
      <span class="float-element">
      <a href="mailto:info@gullfosswater.com"><i class="material-icons" id="float" style="color:white;">email</i></a>
    </span>
      <span class="float-element">
      <a href="https://wa.me/919510963177?text=Hello%20%20Sir%20%2C%20I%20am%20Instrested%20In%20Your%20Product" id="float" class="float-element" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    </span>
    
  </div>
</div>
    <!--====== Call And Whatsapp Button =====-->
     
 </body>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
 </html>

