<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pureit || @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('frontend/logo/logo.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!--font-awesome-->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="{{asset('')}}frontend/font-awesome-4.7.0/css/font-awesome.css">
    <!--slick.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
    <!--slick.theme.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick-theme.css">
    <!--uikit.min.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/uikit.min.css">
    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.css">
    <!--animate.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <!--style.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <!--responsive.css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">
</head>
<body>

    <!--start header-->
    <header>
        <!--start header top-->
        <section class="header-top clearfix py-3 wow fadeInDown" data-wow-duration="1s">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="ht-contact">
                            <ul class="ht-ul">
                                <li><a href="javascript:;"><i class="fa fa-map mr-1"></i>Bangladesh</a></li>
                                <li><a href="javascript:;"><i class="fa fa-phone mr-1"></i>01755430927</a></li>
                                <li><a href="javascript:;"><i class="fa fa-search mr-1"></i>Search</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end header top-->
        <nav class="navbar wow fadeInDown py-0" data-wow-duration="1s">
            <div class="container menu-area">
                <a class="navbar-brand" href="{{route('frontend')}}">
                    <img src="{{asset('frontend/logo/logo.png')}}" class="logo" alt="Logo">
                </a>

                <div class="main-nav ml-auto">
                    <ul class="nav-ul">
                        <li><a href="{{route('frontend')}}">Home</a></li>
                        <li><a href="{{route('water.and.helth')}}">Water and helth</a></li>
                        <li><a href="{{route('water.purifire')}}">Water purifire</a></li>
                        <li><a href="{{route('order.gkk')}}">Order GKK</a></li>
                        <li><a href="{{route('water.in.news')}}">Water in news</a></li>
                    </ul>
                </div>
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </nav>
    </header>
    <!--end header-->

    <!--start mobile menu-->
    <div class="mobile-menu">
        <div class="mm-logo" style="padding: 15px;">
            <a style="color: #fff; font-size: 20px;display: block;" href="#"><i class="mr-2 fa fa-map-o"></i>Pureit</a>
        </div>
        <div class="mm-menu">
            <div class="accordion" id="accordionExample">
                <div class="menu-box">
                    <div class="menu-link">
                        <a href="{{route('frontend')}}">Home</a>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link">
                        <a href="{{route('water.and.helth')}}">Water And Helth</a>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link">
                        <a href="{{route('water.purifire')}}">Water Purifire</a>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link">
                        <a href="{{route('order.gkk')}}">Order GKK</a>
                    </div>
                </div>
                <div class="menu-box">
                    <div class="menu-link">
                        <a href="#">Water In News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end mobile menu-->
    
    @yield('content')

    <!--start footer section-->
    <footer class="footer-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-item">
                        <h5>About us</h5>
                        <ul class="m-0 p-0">
                            <li><a href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About Pureit</a></li>
                            <li><a href=""><i class="fa fa-angle-right mr-2"></i>Certificates</a></li>
                            <li><a href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-item">
                        <h5>Allready own a pureit</h5>
                        <ul class="m-0 p-0">
                            <li><a href="{{route('order.gkk')}}"><i class="fa fa-angle-right mr-2"></i>Order a fresh GKK</a></li>
                            <li><a href="{{route('complaint')}}"><i class="fa fa-angle-right mr-2"></i>Regi ster a Complaint</a></li>
                            <li><a href=""><i class="fa fa-angle-right mr-2"></i>FAQs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-item">
                        <h5>Buy a pureit water purifier</h5>
                        <ul class="m-0 p-0">
                            <li><a href="{{route('water.purifire')}}"><i class="fa fa-angle-right mr-2"></i>Pureit Range of Water Purifiers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer section-->

    <section class="copyright-section clearfix py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <div class="copy-link">
                        <ul class="p-0 m-0 copy-ul">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">© 2020 UBL, All Rights Reserved</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copy-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--jquery.min.js-->
    <script src="{{asset('frontend')}}/js/jquery-3.4.1.min.js"></script>
    <!--popper.min.js-->
    <script src="{{asset('frontend')}}/js/popper.min.js"></script>
    <!--bootstrap.min.js-->
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <!--main.js-->
    <script src="{{asset('frontend')}}/js/main.js"></script>
    <!--slick.js-->
    <script src="{{asset('frontend')}}/js/slick.js"></script>
    <!--owl.carousel.js-->
    <script src="{{asset('frontend')}}/js/owl.carousel.js"></script>
    <!--wow.js-->
    <script src="{{asset('frontend')}}/js/wow.min.js"></script>
    <!--waypoints.min.js-->
    <script src="{{asset('frontend')}}/js/jquery.waypoints.min.js"></script>
    <!--counterup.min.js-->
    <script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
    <!--uikit-icons.js-->
    <script src="{{asset('frontend')}}/js/uikit-icons.js"></script>
    <!--uikit.min.js-->
    <script src="{{asset('frontend')}}/js/uikit.min.js"></script>

    <script>
        $(document).ready(function() {

            /*wow.js*/
            new WOW().init();

        });
        $(document).ready(function() {
            $(".menu-icon").click(function() {
                $(".menu-icon").toggleClass("active");
                $(".mobile-menu").toggleClass("active");
            });
        });

    </script>
        <script>
        //////////Product slider       
        $(document).ready(function() {
            $('.products-slider').slick({
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: true,
                nextArrow: $('.nxt'),
                prevArrow: $('.prv'),
                dots: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });

    </script>
</body>
</html>
