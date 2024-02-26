<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BG Football</title>
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= RT Icons CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rt-icons.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

    <!--================= Magnific popup Plugin =================-->
    {{-- <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css"> --}}
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
    <!--================= Mobile Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/metisMenu.css">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rtsmenu.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/variables/variable1.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>
    @include('user.include.preloader')

    @include('user.include.navbar')

    @yield('content')

@include('user.include.scrolltotop')

@include('user.include.footer');
    <!--================= Jquery latest version =================-->
 <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
 <!--================= Bootstrap latest version =================-->
 <script src="assets/js/vendors/bootstrap.min.js"></script>
 <!--================= Wow.js =================-->
 <script src="assets/js/vendors/wow.min.js"></script>
 <!--================= Swiper Slider =================-->
 <script src="assets/js/vendors/swiper-bundle.min.js"></script>
 <!--================= Zoom Plugin =================-->
 <script src="assets/js/vendors/zoom.js"></script>
 <!--================= counter up Plugin =================-->
 <script src="assets/js/vendors/jquery.counterup.min.js"></script>
 <!--================= Timer Plugin =================-->
 <script src="assets/js/vendors/timer.js"></script>
 <!--================= metisMenu Plugin =================-->
 <script src="assets/js/vendors/metisMenu.min.js"></script>
 <!--================= Main Menu Plugin =================-->
 <script src="assets/js/vendors/rtsmenu.js"></script>
 <!--================= Mobile Menu Plugin =================-->
 <script src="assets/js/vendors/metisMenu.min.js"></script>
 <!--================= Magnefic Popup Plugin =================-->
 <script src="assets/js/vendors/isotope.pkgd.min.js"></script>
 <!--================= Magnefic Popup Plugin =================-->
 <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
 <!--================= Main Script =================-->
 <script src="assets/js/main.js"></script>
</body>
</html>
