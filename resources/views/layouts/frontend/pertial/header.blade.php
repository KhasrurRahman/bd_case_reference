<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('public/assets/fontend/plugins/css/plugins.css') }}">

    <!-- Custom style -->
    <link href="{{ asset('public/assets/fontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/fontend/css/chosen.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{ asset('public/assets/fontend/css/colors/green-style.css') }}">


</head>
<body>
<div class="Loader"></div>
<div class="wrapper">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <!-- <img src="assets/img/logo-white.png" class="logo logo-display" alt="">
                    <img src="assets/img/logo-white.png" class="logo logo-scrolled" alt=""> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">catagories</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-6">
                                        <h6 class="title">APPELLATE DIVISION</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="catagory.php">Civil Matters</a></li>
                                                <li><a href="catagory.php">Criminal Matters</a></li>
                                                <li><a href="catagory.php">Writ Matters</a></li>
                                                <li><a href="catagory.php">Company Matters</a></li>
                                                <li><a href="catagory.php">Income Tax Matter</a></li>
                                                <li><a href="catagory.php">Election Matter</a></li>
                                                <li><a href="accordion.html">Service Matters</a></li>
                                                <li><a href="accordion.html">Others</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-6 -->
                                    <div class="col-menu col-md-6">
                                        <h6 class="title">HIGH COURT DIVISION</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="catagory.php">Civil Matters</a></li>
                                                <li><a href="catagory.php">Criminal Matters</a></li>
                                                <li><a href="catagory.php">Writ Matters</a></li>
                                                <li><a href="catagory.php">Company Matters</a></li>
                                                <li><a href="catagory.php">Income Tax Matter</a></li>
                                                <li><a href="catagory.php">Election Matter</a></li>
                                                <li><a href="catagory.php">Service Matters</a></li>
                                                <li><a href="catagory.php">Others</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-6 -->




                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li><a href="catagory.php">All Catagory</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>
