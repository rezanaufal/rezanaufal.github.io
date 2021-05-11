<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Fonts-->
    <link rel="icon" type="image/x-icon" href="{{ asset ('assets/img/mukak2.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/pe-icon.css')}}">
    <!-- Vendors-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/swiper.css')}}">
    <!-- App & fonts-->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,700">
    <link rel="stylesheet" type="text/css" id="app-stylesheet" href="{{ asset ('assets/css/main2.css')}}">
</head>
<body>
    <div class="page-wrap" id="root">
        <!-- header -->
        <header class="header header--fixed">
            <div class="header__inner">
                <div class="header__logo"><a href="/about"><img src="assets/img/logos.png" alt="" style="width: 122px;" /></a></div>
                <div class="navbar-toggle" id="fs-button">
                    <div class="navbar-icon"><span></span></div>
                </div>
            </div>
    
            <!-- fullscreenmenu__module -->
            <div class="fullscreenmenu__module" trigger="#fs-button">
    
                <!-- overlay-menu -->
                <nav class="overlay-menu">
    
                    
                    <ul class="wil-menu-list">
                        <li class="current-menu-item"><a href="/landing-page">Home</a>
                        </li>
                        <li><a href="/about">Profile</a>
                        </li>
                        
                    </ul>
    
                </nav>
    
            </div>
    
        </header>
    
        <!-- Content-->
        <div id="content" class="main-content">
            @yield('content')
        </div>
        <!-- End / Content-->
    
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 ">
                        <p class="footer__coppy">2018 &copy; Copyright <a href="http://awe7.com/">Awe7</a>. All rights
                            Reserved.</p>
                    </div>
                    <div class="col-md-6 col-lg-6 ">
                        <div class="footer__social">
                            <!--Logo-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    <script type="text/javascript" src="{{ asset ('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/imagesloaded.pkgd.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/isotope.pkgd.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/jquery.nav.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/jquery.matchHeight.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/masonry.pkgd.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/jquery.waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/swiper.jquery.js">')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/menu.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('assets/js/typed.min.js')}}"></script>
    <!-- App-->
    <script type="text/javascript" src="{{ asset ('assets/js/main.js')}}"></script>
</body>
</html>