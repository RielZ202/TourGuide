<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="logo1.png" href="img/indonesiai.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
   <header>
    <div class="header-area">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Menu -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="travel_destination.php">Destination<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="sumatra.php">Sumatra</a></li>
                                                <li><a href="jawa.php">Jawa</a></li>
                                                <li><a href="kalimantan.php">Kalimantan</a></li>
                                                <li><a href="sulawesi.php">Sulawesi</a></li>
                                                <li><a href="papua.php">Papua</a></li>
                                                <li><a href="bali.php">Bali</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Login, Signup & Social Media -->
                        <div class="col-xl-4 col-lg-4 d-none d-lg-flex justify-content-end align-items-center">
                            <!-- Tombol Login & Sign Up atau Nama User -->
                            <div class="mr-3">
                            <?php if (isset($_SESSION['name'])): ?>
                                <span class="btn btn-outline-success btn-sm"><?= htmlspecialchars($_SESSION['name']) ?></span>
                                <a href="logout.php" class="btn btn-outline-danger btn-sm ml-2">Logout</a>
                            <?php else: ?>
                                <a href="form_login.php" class="btn btn-outline-primary btn-sm">Login</a>
                                <a href="form_signup.php" class="btn btn-outline-secondary btn-sm ml-2">Sign Up</a>
                            <?php endif; ?>
                            </div>
                            <!-- Social Media -->
                            <div class="social_links d-none d-xl-block">
                                <ul class="d-flex align-items-center" style="gap: 10px; list-style: none; margin: 0; padding: 0;">
                                    <li><a href="https://www.instagram.com/azrielxvr/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/veiri-claudio-lorenz-simanjuntak-554b152a1/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</header>
