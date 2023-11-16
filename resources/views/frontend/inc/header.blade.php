<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
        <!-- Line Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <!-- Owl Theme CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.css') }}">
        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <!-- Stylesheet Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-dark.css') }}">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
        <!-- Title -->
        <title>Sofique | Solicitors</title>
    </head>

    <body>
        <!-- Preloder Area -->
        {{-- <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="lds-hourglass"></div>
                </div>
            </div>
        </div> --}}
        <!-- End Preloder Area -->

        <!-- Heder Area -->
        <header class="header-area">
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <ul class="left-info">
                                <li>
                                    <a href="mailto:hello@atorn.com">
                                        <i class="las la-envelope"></i>
                                        hello@atorn.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+823-456-879">
                                        <i class="las la-phone"></i>
                                        +0123 456 789
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <ul class="right-info">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-google-plus"></i>
                                    </a>
                                </li>
                                
                                <li class="heder-btn">
                                    <a href="#">Get A Schedule</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="atorn-responsive-nav">
                    <div class="container">
                        <div class="atorn-responsive-menu">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/img/logo.png" class="logo1" alt="logo">
                                    <img src="assets/img/logo-white.png" class="logo2" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="atorn-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.png" class="logo1" alt="logo">
                                <img src="assets/img/logo-white.png" class="logo2" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu">
 
                                <ul class="navbar-nav ms-auto">
                                    {!!  menu('headermenu', 'headermenu')  !!}
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Heder Area -->


       