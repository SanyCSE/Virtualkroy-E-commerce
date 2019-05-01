<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
}
include 'config.php';
?>


<!Doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

    <title>VirtualKroy || Account</title>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
  </head>


<body>

        <!--================Menu Area =================-->
        <header class="shop_header_area carousel_menu_area">
            <div class="carousel_top_header row m0">
                <div class="container">
                    <div class="carousel_top_h_inner">
                        <div class="float-md-left">
                            <div class="top_header_left">
                                <div class="selector">
                                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                      <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                      <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                    </select>
                                </div>
                                <select class="selectpicker usd_select">
                                    <option>USD</option>
                                    <option>BDT</option>
                                </select>
                            </div>
                        </div>
                        <div class="float-md-right">
                            <div class="top_header_middle">
                                <a href="tel:"><i class="fa fa-phone"></i> Call Now: <span>+8801737930707</span></a>
                            <a href="mailto:"><i class="fa fa-envelope"></i> Email: <span>sany@virtualkroy.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel_menu_inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                
                                <li class="nav-item dropdown submenu">
                                          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Home<i class="fa fa-angle-down" aria-hidden="true"></i>
                                          </a>
                                    <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li> 
                                    </ul>
                                  </li>
                                  <li class="nav-item dropdown submenu">
                                    <a class="nav-link dropdown-toggle" href="products.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Products<i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                                    <li class="nav-item"><a class="nav-link" href="user_upload.php">User Upload</a></li>
                                    </ul>
                                  </li>
                            <li><a href="cart.php">View Cart</a></li>
                            <li><a href="orders.php">My Orders</a></li>
                                
                            <?php
                            if(isset($_SESSION['username'])){
                            echo '<li class="active"><a href="account.php">My Account</a></li>';
                            echo '<li><a href="logout.php">Log Out</a></li>';
                            }
                             else{
                                    echo '<li class="nav-item dropdown submenu">
                                          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Login<i class="fa fa-angle-down" aria-hidden="true"></i>
                                          </a>
                                    <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>  
                                    </ul>
                                  </li>';
                                 }
                                ?>
                            </ul>

                            <ul class="navbar-nav justify-content-end">
                                <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                <li class="user_icon"><a href="#"><i class="icon-user icons"></i></a></li>
                                <li class="cart_cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================Menu Area =================-->







        <!--================ Empty Area =================-->
    <section class="from_blog_area">
            <div class="container">
                <div class="from_blog_inner">
                    <div class="c_main_title">
                        <h2 class="reg_title"><p><?php echo '<h3>Hi, ' .$_SESSION['fname'] .'.</h3>'; ?></p>
                                <p><h5>Account Details</h5></p>
                                <p>Below are your details in the database.<br> If you wish to change anything, then just enter new data in text box and click on update.</p></h2>
                    </div>
                    </div>
                    </div>
                    </section>

        <section class="register_area p_100">
            <div class="container">
                <div class="register_inner">
                    <div class="row">
                        <div class="col-lg-7">
                            
    <form class="register_area">
      <div class="row">
        <div class="small-12">
          <div class="row">
                <div class="billing_inner row">
                <?php

                $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();

                                          echo '<div class="col-lg-12">';
                                          echo '<div class="form-group"';
                                          echo '<label for="name">First Name <span>*</span></label>';
                                          echo '<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="'. $obj->fname. '" name="fname">';
                                          echo '</div>';
                                          echo '</div>';


                                          echo '<div class="col-lg-12">';
                                          echo '<div class="form-group"';
                                          echo '<label for="name">Last Name <span>*</span></label>';
                                          echo '<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="'. $obj->lname. '" name="lname">';
                                          echo '</div>';
                                          echo '</div>';


                                          echo '<div class="col-lg-12">';
                                          echo '<div class="form-group"';
                                          echo '<label for="name">Address <span>*</span></label>';
                                          echo '<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="'. $obj->address. '" name="address">';
                                          echo '</div>';
                                          echo '</div>';


                                          echo '<div class="col-lg-12">';
                                          echo '<div class="form-group"';
                                          echo '<label for="name">City <span>*</span></label>';
                                          echo '<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="'. $obj->city. '" name="city">';
                                          echo '</div>';
                                          echo '</div>';


                                          echo '<div class="col-lg-12">';
                                          echo '<div class="form-group"';
                                          echo '<label for="name">Pin Code <span>*</span></label>';
                                          echo '<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="'. $obj->pin. '" name="pin">';
                                          echo '</div>';
                                          echo '</div>';


                                          echo '<div class="col-lg-12">';
                                          echo '<div class="form-group"';
                                          echo '<label for="name">Email ID <span>*</span></label>';
                                          echo '<input type="email" class="form-control" id="name" aria-describedby="name" placeholder="'. $obj->email. '" name="email">';
                                          echo '</div>';
                                          echo '</div>';
                                          

                                          }


                                          echo '<div class="col-lg-12">';
                                          echo '<div class="form-group"';
                                          echo '<label for="name">Password <span>*</span></label>';
                                          echo '<input type="password" class="form-control" id="name" aria-describedby="name" name="pwd">';
                                          echo '</div>';
                                          echo '</div>';
                                         ?>
                  <div class="container">
                  <div class="navbar-brand">
                  <input type="submit" id="right-label" value="Update" class="btn subs_btn form-control">
                  <input type="reset" id="right-label" value="Reset" class="btn subs_btn form-control">
                  </div>
                  </div>
        </div>
        </div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </section>       
        
        <!--================ Empty Area =================-->








        <!--================VirtualKroy Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget f_about_widget">
                                <img src="img/logo.png" alt="">
                                <p>VirtualKroy is eCommerce Site for Project Purpose.</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_info_widget">
                                <div class="f_w_title">
                                    <h3>Information</h3>
                                </div>
                                <ul>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_service_widget">
                                <div class="f_w_title">
                                    <h3>Customer Service</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_extra_widget">
                                <div class="f_w_title">
                                    <h3>Extras</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_account_widget">
                                <div class="f_w_title">
                                    <h3>My Account</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">
                    <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | VirtualKroy is made by <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://www.facebook.com/nahid.sany" target="_blank"> Nahid Hasan Sany </a><i class="fa fa-heart-o" aria-hidden="true"></i>
                    </h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>       
        <script src="js/theme.js"></script>
  </body>
</html>
