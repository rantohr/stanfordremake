<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 5/3/2019
 * Time: 10:26 AM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Admin - Stanford UNiversity</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- Header Area Start -->
<header class="header-area">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">

                <!-- Logo -->
                <a class="nav-brand" href="<?php echo base_url() ?>" style="margin-right: 0px"><img src="<?php echo base_url() ?>assets/img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Menu Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul id="nav">
                            <li class="active"><a href="<?php echo base_url() ?>Administrator/Departments-Manager/">Departments</a></li>
                            <?php /*<li><a href="<?php echo base_url() ?>index.php/Administrator/Dashboard/">Dashboard</a></li> */ ?>
                            <li><a href="<?php echo base_url() ?>Logout/">Logout</a></li>
                        </ul>

                        <!-- Get Tickets Button -->
                        <form action="<?php echo base_url() ?>" method="get">
                            <button class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">go to the site</button>
                        </form>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Header Area End -->

<?php
if(isset($page)) include($page.'.php');
else include('departments.php');
?>

<!-- Footer Area Start -->
<footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
    <!-- Copywrite Area -->
    <div class="container">
        <div class="copywrite-content">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-md-6">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="col-12 col-md-6">
                    <div class="footer-menu">
                        <ul class="nav">
                            <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                            <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="<?php echo base_url() ?>assets/js/confer.bundle.js"></script>
<!-- Active -->
<script src="<?php echo base_url() ?>assets/js/default-assets/active.js"></script>

</body>

</html>