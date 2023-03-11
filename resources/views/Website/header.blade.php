<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Thekaydaar</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/custom-font/fonts.css') }}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <!-- Bootsnav -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.css?v=2.1.5') }}"
        media="screen" />
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

</head>
<body>

    <!-- Preloader -->

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!--End off Preloader -->

    <!-- Header -->
    <header>
        <!-- Top Navbar -->
        <div class="top_nav">
            <div class="container">
                <ul class="list-inline info">
                    <li><a href="#"><span class="fa fa-phone"></span> 1234 - 5678 - 9012</a></li>
                    <li><a href="#"><span class="fa fa-envelope"></span> support@Construct.com</a></li>
                    <li><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:00 - 19:00</a></li>
                </ul>
            </div>
        </div><!-- Top Navbar end -->

        <!-- Navbar -->
        <nav class="navbar bootsnav">
            <!-- Top Search -->

            <div class="container">
                <!-- Atribute Navigation -->

                <!-- Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href=""><img class="logo"
                            src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                </div>
                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav menu">
                        <li class="active" ><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/products">Products</a></li>
                        <li><a href="/vendors">Vendors</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                        <li><a href="/home">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- Navbar end -->
    </header><!-- Header end -->
