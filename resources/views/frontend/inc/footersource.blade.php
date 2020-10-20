<!--jquery.min.js-->
<script src="{{asset('frontend')}}/js/jquery-3.4.1.min.js"></script>
<!--popper.min.js-->
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<!--bootstrap.min.js-->
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<!--main.js-->
<!--<script src="{{asset('frontend')}}/js/main.js"></script>-->
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
            slidesToShow: 3,
            slidesToScroll: 3,
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
            ]
        });
    });
</script>