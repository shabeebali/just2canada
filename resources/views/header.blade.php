<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="vendors/owl_carousel/owl.theme.min.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />


    <link rel="stylesheet" href="mt-includes/css/assets.min513c.css?_build=1633339793" />
    <link rel="stylesheet" href="mt-demo/93200/93283/mt-content/assets/stylesdd7d.css?_build=1632936756"
        id="moto-website-style" />
    <script src="mt-includes/js/website.assets.minc8df.js?_build=1632918612" type="text/javascript" data-cfasync="false">
    </script>
    <script type="text/javascript" data-cfasync="false">
        var websiteConfig = websiteConfig || {};
        websiteConfig.address = 'index.html';
        websiteConfig.addressHash = '6402f41ce3885394c22d1e8038067d85';
        websiteConfig.apiUrl = 'api.json';
        websiteConfig.preferredLocale = 'en_US';
        websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
        websiteConfig.back_to_top_button = {
            "topOffset": 300,
            "animationTime": 500,
            "type": "theme"
        };
        websiteConfig.popup_preferences = {
            "loading_error_message": "The content could not be loaded."
        };
        websiteConfig.lazy_loading = {
            "enabled": true
        };
        websiteConfig.cookie_notification = {
            "enabled": false,
            "content": "<p class=\"moto-text_normal\">This website uses cookies to ensure you get the best experience on our website.<\/p>",
            "content_hash": "6610aef7f7138423e25ee33c75f23279",
            "controls": {
                "visible": "close,accept",
                "accept": {
                    "label": "Got it",
                    "preset": "default",
                    "size": "medium",
                    "cookie_lifetime": 365
                }
            }
        };
        angular.module('website.plugins', []);
    </script>
    <script src="mt-includes/js/website.min7b53.js?_build=1632918598" type="text/javascript" data-cfasync="false"></script>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @stack('scripts-top')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" media="all" />
</head>

<body id="home">
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <!-- Top Header_Area -->
        <div class="top_header_area">
            <div class="container">
                <ul class="nav navbar-nav top_nav">
                    <li><a href="#"><i class="fa fa-phone"></i> +1 (905) 586 0440 </a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> info@just2canada.ca</a></li>
                </ul>
                <a href="https://iccrc-crcic.ca/" target="_blank" rel="noopener">
                    <img class="iccrc alignnone wp-image-1601 size-full"
                        style="float: left; width: auto; height:50px; margin: 0 0 0 2%;" src="images/iccrc.png" alt=""
                        width="300" height="50" /></a>
                @auth('web')
                    <ul class="nav navbar-nav top_nav" style="float: right; margin-left:15px;">
                        <li>
                            <a href="#">My Account</a>
                        </li>
                    </ul>
                @endauth
                @guest('web')
                    <ul class="nav navbar-nav top_nav" style="float: right; margin-left:15px;">
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Create Account</a>
                        </li>
                    </ul>
                @endguest
                <ul class="nav navbar-nav navbar-right social_nav">
                    <li><a href="https://www.facebook.com/Just2Canada" target="_blank"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/Just2Canada" target="_blank"><i class="fa fa-twitter"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/just2canada/" target="_blank"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/just2canada" target="_blank"><i class="fa fa-linkedin"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://just2canada.ca/skilled-worker-assessment-questionnaire/#" target="_blank"><i
                                class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=+19055860440" target="_blank"><i
                                class="fa-whatsapp fa" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Top Header_Area -->
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-3 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#min_navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="images/logo.png" alt=""
                            class="img-fluid"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-9 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php" class="active">Home</a>
                        </li>
                        <li>
                            <a class="js-scroll-trigger" href="about-us.html">About Us</a>
                        </li>


                        <li><a class="js-scroll-trigger" href="services.html">Services</a></li>
                        <li>
                            <a class="js-scroll-trigger" href="personal-immigration.html">Personal Immigration</a>
                        </li>

                        <li><a href="business-immigration.html">Business Immigration</a></li>
                        <!--<li><a href="contact-us.php">Contact Us</a></li> -->

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
