<?php
session_start();
if(isset($_SESSION['admin']))
{}
else
{
    header("location:admin_loginpage.php");
}

?>
<!--<div>
    <?php
/*    if($_SESSION['type']=="Admin")
    {
        */?>

    <?php
/*    }
    elseif($_SESSION['type']=="Limited_user")
    {
        */?>
    <?php
/*    }
    else
    {
        */?>
    <?php
/*    }
    */?>

</div>-->

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
                        <a href="admin_homepage.php">Home</a>                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Admin
                            <i class="icon icon-angle-down"></i>                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="admin_signup.php">CREATE NEW ADMIN</a></li>
                            <li><a href="admin_view_admin.php">VIEW ADMINS</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            COURSES & SUBJECTS
                            <i class="icon icon-angle-down"></i>                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="">COURSE</a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin_course.php">ADD NEW COURSE</a></li>
                                    <li><a href="admin_view_courses.php">VIEW COURSES</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Subject</a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin_add_subject.php">ADD SUBJECT</a></li>
                                    <li><a href="admin_view_subjects.php">VIEW SUBJECTS</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Teacher
                            <i class="icon icon-angle-down"></i>                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="admin_addteacher.php">ADD NEW TEACHER</a></li>
                            <li><a href="admin_view_teacher.php">VIEW TEACHERS</a></li>
                            <li><a href="admin_set_timetable.php">SET TIME TABLE</a> </li>
                        </ul>
                    </li>



                                <li class="dropdown">
									<a class="dropdown-toggle" href="#">
										STUDENT
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="admin_add_student.php">ADD STUDENT</a></li>
										<li><a href="admin_view_student.php">VIEW STUDENTS</a></li>
                                        <li><a href="admin_view_failed_students1.php">VIEW FAILED STUDENTS</a></li>
                                        <li><a href="admin_view_report.php">VIEW MARKS</a> </li>
									</ul>
								</li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            News
                            <i class="icon icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="admin_news.php">ADD NEWS</a></li>
                            <li><a href="admin_view_news.php">VIEW NEWS</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">
                            Grades
                            <i class="icon icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="admin_view_grades.php">VIEW GRADES</a></li>

                        </ul>
                    </li>
<li><a href="admin_view_student_grade.php">CALCULATE SGPA</a></li>

                    <li>
                        <a href="admin_changepassword.php">CHANGE PASSWORD</a></li>

                    <li>
                        <a href="admin_logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

