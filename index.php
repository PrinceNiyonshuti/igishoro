<?php
include "blog-admin/config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Igishoro &mdash; A Personal Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="apple-touch-icon" href="blog-admin/asset/images/log.png">
    <link rel="shortcut icon" href="blog-admin/asset/images/log.png">

    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 d-flex">
                        <a href="index.php" class="site-logo" style="font-weight: bold;font-size: 20px;">
                            <div class="row">
                                <div class="col-12 col-lg-6 d-flex">
                                    <img src="images/logo.png" style="width: 40%;height: 70px">
                                </div>

                                <div class="col-12 col-lg-12 d-flex">
                                    Unlock Your Entrepreneurial Potential
                                </div>
                            </div>
                        </a>

                        <a href="#"
                            class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>

                    </div>
                    <div class="col-12 col-lg-6 ml-auto d-flex">
                        <div class="ml-md-auto top-social d-none d-lg-inline-block">
                            <a href="#" class="d-inline-block p-3"><span class="icon-whatsapp"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                        </div>
                        <form action="#" class="search-form d-inline-block">

                            <div class="d-flex">
                                <input type="email" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-secondary"><span
                                        class="icon-search"></span></button>
                            </div>
                        </form>


                    </div>
                    <div class="col-6 d-block d-lg-none text-right">

                    </div>
                </div>
            </div>



            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mr-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Home
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="index.php?about">About</a>
                                            <a class="dropdown-item" href="index.php?contact">Contact</a>
                                            <a class="dropdown-item" href="#">Advertise</a>
                                        </div>
                                    </li>

                                    <?php

                                    $sql = "SELECT * FROM category";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $cat_id = $row['cat_id'];
                                        $cat_name = $row['cat_name'];
                                        $encryption = openssl_encrypt($cat_name, "AES-128-ECB", DONE);

                                    ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <?php echo $cat_name ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <?php

                                                $sql_1 = "SELECT * FROM sub_category where cat_id='$cat_id' ";
                                                $result_1 = $conn->query($sql_1);
                                                while ($row_1 = $result_1->fetch_assoc()) {
                                                    $sub_cat_id = $row_1['sub_cat_id'];
                                                    $sub_cat_name = $row_1['sub_cat_name'];

                                                ?>
                                            <?php
                                                    echo "<a class='dropdown-item' href='index.php?category&view=$sub_cat_id&$encryption '> $sub_cat_name </a>";
                                                    ?>
                                            <?php
                                                }
                                                ?>

                                        </div>
                                    </li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="site-section py-0">
            <div class="owl-carousel hero-slide owl-style">
            </div>
        </div>
        <!-- END section -->

        <?php
        if (isset($_GET['home'])) {
            include("home.php");
        } elseif (isset($_GET['blog_single'])) {
            include("blog-single.php");
        } elseif (isset($_GET['about'])) {
            include("about.php");
        } elseif (isset($_GET['category'])) {
            include("category.php");
        } elseif (isset($_GET['contact'])) {
            include("contact.php");
        } elseif (isset($_GET['post'])) {
            include("post.php");
        } elseif (isset($_GET[''])) {
            include("");
        } else {
            include("home.php");
        }

        ?>

        <div class="site-section subscribe bg-light">
            <div class="container">
                <form action="#" class="row align-items-center">
                    <div class="col-md-5 mr-auto">
                        <h2>Newsletter Subcribe</h2>
                        <p>
                            to get latest news and ideas , subscribe to our News letter
                        </p>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="d-flex">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <button type="submit" class="btn btn-secondary"><span
                                    class="icon-paper-plane"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer">
            <div class="container">


                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved By Igishoro | This Blog is made by
                                <a href="https://github.com/PrinceNiyonshuti" target="_blank">NP Tech</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15" />
        </svg></div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>




    <script src="js/main.js"></script>

</body>

</html>