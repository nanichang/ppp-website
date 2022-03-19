<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership Office) Website">
    <meta name="author" content="Nanichang Katzing">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership Office)"/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content="Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership Office)"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership Office)"/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://ppp.plateaustate.gov.ng"/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!--title-->
    <title>Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership Office)</title>

    <!--favicon icon-->
    <!-- <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16"> -->

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,800%7COpen+Sans:400,600&display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/themify-icons.css') }}">
    <!-- <link rel="stylesheet" href="https://ncovid.themetags.com/css/themify-icons.css    "> -->
    
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/all.min.css') }}">
    <!--Datable min css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/datatables.min.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">

</head>
<body>

<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--loader end-->

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ URL::asset('assets/img/LOGO_1.png') }}" width="60" alt="logo" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="/"> Home</a></li>
                    <li><a href="#" class="dropdown-toggle">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('pages.about') }}">What We Do</a></li>
                            <li><a href="{{ route('pages.board') }}">Board</a></li>
                            <li><a href="{{ route('pages.management') }}">Management</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('pages.discover') }}">Discover Plateau</a></li>
                    <li><a href="{{ route('pages.publications') }}">Publications</a></li>
                    <li><a href="#">Portal</a></li>
                    <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->

<!--body content wrap start-->
<div class="main">
    @yield('content')
</div>
<!--body content wrap end-->


<!--footer section start-->
<footer class="footer-section gradient-overlay ptb-100 position-relative" style="background: url('assets/img/header-bg-2.jpg')no-repeat center center / cover">
    <!-- <div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
    <div class="shape6 rotateme"><img src="assets/img/shape3.svg" width="64" alt="shape"></div>
    <div class="shape7"><img src="assets/img/shape4.svg" width="60" alt="shape"></div>
    <div class="shape8 rotateme"><img src="img/shape2.svg" alt="shape"></div> -->
    <div class="container">
        <!--footer top start-->
        <div class="row justify-content-between">
            <div class="col-md-4 col-lg-4">
                <div class="footer-nav-wrap text-white">
                    <img src="assets/img/LOGO_1.png" width="100" alt="logo" class="mb-3">
                    <p>Subscribe our newsletter for latest update.</p>

                    <form class="newsletter-form">
                        <input type="text" class="input-newsletter" placeholder="Enter your email address" name="EMAIL" required="" autocomplete="off">
                        <button type="submit" class="disabled" style="pointer-events: all; cursor: pointer;"><i class="fas fa-paper-plane"></i></button>
                    </form>

                    
                </div>
            </div>
            <div class="col-md-8 col-lg-7">
                <div class="row footer-top-wrap justify-content-around">
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-nav-wrap text-white">
                            <h4 class="text-white">QUICK LINKS</h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Portal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Discover Plateau</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Publications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-nav-wrap text-white">
                            <h4 class="text-white">HELPFULL LINK</h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Situation Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Advice For Public</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Prevention</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Symptoms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Donor & Partners</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer top end-->
        <hr class="custom-hr">
        <!--footer copyright start-->
        <div class="row align-items-center justify-content-between">
            <div class="col-md-5 col-lg-5">
                <p class="copyright-text pb-0 mb-0">
                    Copyrights &copy; 2021. All
                    rights reserved.
                </p>
            </div>
            <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                <ul class="list-inline policy-nav text-right">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
        <!--footer copyright end-->
    </div>
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-hand-point-up"></span>
</button>
<!--bottom to top button end-->


<!--jQuery-->
<script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<!--Popper js-->
<script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<!--Magnific popup js-->
<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery easing js-->
<script src="{{ URL::asset('assets/js/jquery.easing.min.js') }}"></script>
<!--datatable js-->
<script src="{{ URL::asset('assets/js/datatables.min.js') }}"></script>
<!--wow js-->
<script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
<!--owl carousel js-->
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<!--countdown js-->
<script src="{{ URL::asset('assets/js/jquery.countdown.min.js') }}"></script>
<!--custom js-->
<script src="{{ URL::asset('assets/js/scripts.js') }}"></script>
</body>
</html>