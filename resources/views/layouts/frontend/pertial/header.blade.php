<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>@yield('title') - {{ config('app.name', 'bdcasereference') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{asset("public/assets/fontend/img/04.PNG.png")}}" type="image/x-icon">

    <!-- CS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('public/assets/fontend/plugins/css/plugins.css') }}">

    <!-- Custom style -->
    <link href="{{ asset('public/assets/fontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/fontend/css/chosen.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{ asset('public/assets/fontend/css/colors/green-style.css') }}">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


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
                <a class="navbar-brand" href="{{route("home")}}">
                     <img src="{{asset("public/assets/fontend/img/04.PNG.png")}}" class="logo logo-display" alt="">
                    <img src="{{asset("public/assets/fontend/img/04.PNG.png")}}" class="logo logo-scrolled" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                    <li><a href="{{route("home")}}">About Us</a></li>
                    <li><a href="{{url('aboutus')}}">About Us</a></li>
                    <li><a href="{{url('contactus')}}">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>
