<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Rbs | Register</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url(); ?>img/core-img/rbs.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/core-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">


    <!-- Adding oh-autoVal css style -->
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Adding oh-autoVal script file -->
<!-- <script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script> -->

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="<?php echo base_url(); ?>img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?php echo base_url(); ?>img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo site_url('Rbsctrl/index')?>"><img src="<?php echo base_url(); ?>img/core-img/rbs.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="<?php echo site_url('Rbsctrl/index')?>">Home</a></li>
                    <li><a href="<?php echo site_url('Rbsctrl/login')?>">Login</a></li>
                    <!-- <li><a href="product-details.html">Product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li class="active"><a href="checkout.html">Checkout</a></li> -->
                </ul>
            </nav>
            <!-- Button Group -->
            <!-- <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">%Discount%</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div> -->
            <!-- Cart Menu -->
            <!-- <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="<?php echo base_url(); ?>img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="<?php echo base_url(); ?>img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="<?php echo base_url(); ?>img/core-img/search.png" alt=""> Search</a>
            </div> -->
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Register | Owner</h2>
                            </div>

                            <form action="<?php echo site_url("Rbsctrl/register_deal")?>" class="oh-autoval-form" method="post" onsubmit="return">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="av-name form-control" name="fname" value="" placeholder="First Name" pattern="[a-z]{1,15}" required="check the first name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="av-name form-control" name="lname" value="" placeholder="Last Name"  pattern="[a-z]{1,15}" required="check the last name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="mobile" class=" av-mobile form-control" name="mobile"  placeholder="Phone No"pattern="[789][0-9]{9}" maxlength="10" value="" required="check    the name filed" >
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <input type="email" class="oh-autoval av-email form-control"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="check mail field" cv-message="Invalid email address" name="email" placeholder="Email" value=""  placeholder="Email" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="password" value=""required="must enter password">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="cod"  onclick="myFunction()">
                                            <label class="custom-control-label" for="cod">Show Password</label>

                                            <script>
                                            function myFunction() {
                                            var x = document.getElementById("password");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                            }
                                            </script>
                                        </div>
                                </div>
                                    

                                   
                                    <div class="col-12 mb-3">
                                        <input type="Submit" class="btn amado-btn mb-15" name="register"  value="Register">
                                    </div>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-lg-4"> -->
                        <!-- <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>$140.00</span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$140.00</span></li>
                            </ul> -->

                            <!-- <div class="payment-method"> -->
                                <!-- Cash on delivery -->
                                <!-- <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                </div> -->
                                <!-- Paypal -->
                                <!-- <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="<?php echo base_url(); ?>img/core-img/paypal.png" alt=""></label>
                                </div> -->
                            <!-- </div>

                            <div class="cart-btn mt-100">
                                <a href="#" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="<?php echo base_url(); ?>img/core-img/rbs.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="<?php echo base_url(); ?>js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url(); ?>js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url(); ?>js/active.js"></script>

</body>

</html>