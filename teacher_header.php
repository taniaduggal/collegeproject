<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title>DCET | Home</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="India's Largest Hub for Startups">
    <meta name="author" content="Raghu Prodduturi">
    <meta property="og:url"    content="http://iiith.org" />
    <meta property="og:title"    content="Centre for Innovation and Entrepreneurship" />
    <meta property="og:description"    content="CIE, India's largest hub for startups, hosts and nurtures around 80 startups across various domains and in various stages of growth." />
    <meta property="og:image"    content="http://iiith.org/img/cie_fb.jpg" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/owl-carousel/owl-carousel.css" media="screen">
    <link rel="stylesheet" href="vendor/owl-carousel/owl-theme.css" media="screen">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
    <link rel="stylesheet" href="vendor/isotope/jquery-isotope.css" media="screen">
    <link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">
    <link rel="stylesheet" href="css/theme-animate.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/theme-responsive.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr.js"></script>

    <!--[if IE]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="vendor/respond.js"></script>
    <![endif]-->


</head>
<header id="header">
    <div class="container">
        <h1 class="logo">
            <a href="index.php">
                <img alt="sk.jpg" width="111" height="111" data-sticky-width="40" data-sticky-height="40" src="sk.jpg">
            </a>
        </h1>

        <nav>
            <ul class="nav nav-pills nav-top">
                <li class="phone">
                    <span></span>
                </li>
            </ul>
        </nav>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="icon icon-bars"></i>
        </button>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li>
                        <a href="teacher_home.php">Home</a>
                    </li>
                    <li>
                        <a href="my_timetable.php">My Subjects</a>
                    </li>
                    <li>
                        <a href="teacher_mygrades.php">View Grades</a>
                    </li>
                    <li>
                        <a href="teacher_view_students_grade.php">View Student's Grades</a>
                    </li>


                    <li>
                        <a href="teacher_change_password.php">Change Password</a>

                    </li>

                    <li>
                        <a href="teacher_logout.php">Logout</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</header>
<?php
error_reporting(0);
session_start();
if(is_null($_SESSION['teacher']))
{
    header("location:teacher_login.php");
}
?>
