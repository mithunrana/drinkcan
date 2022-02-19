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
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

@yield('CustomJS')

<script>
    $(document).ready(function() {

        /*wow.js*/
        //new WOW().init();

        $('.fix-form-img').on('click', function() {
            $('.fix-form').toggleClass('fix-form-block');
            $('.form-close').fadeToggle();
        });

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


<!--////////////////////////// Cart Area ////////////////////////-->


<script>
    /*
       //Header Cart Item
        function headerCartItem() {
            $.ajax({
                url: "{{ url('/drop/cart') }}",
                success: function(data) {
                    $('.dropCart').html(data);
                }
            })
        }*/


    //page Cart
    function pageCart() {
        $.ajax({
            url: "{{ url('/page/cart') }}",
            success: function(data) {
                $('.pageCart').html(data);
            }
        })
    }

    pageCart();


    //Cart Count
    function cartCount() {
        $.ajax({
            url: "{{ url('/cart/count') }}",
            success: function(data) {
                $('.cartQty').html(data);
            }
        })
    }
    cartCount();


    //Cart total
    function cartTotal() {
        $.ajax({
            url: "{{ url('/cart/total') }}",
            success: function(data) {
                $('.cartTotal').html(data);
            }
        })
    }

</script>


<!-- Add cart -->
<script>
    $(document).on('click', '#cartStore', function(e) {
        e.preventDefault();

        var id = $(this).attr('href');

        $.ajax({
            url: "{{ url('/cart/store') }}/" + id,
            method: "GET",
            dataType: "JSON",

            beforeSend: function() {
                $(".ajaxloading").fadeIn();
            },

            success: function(data) {
                cartCount();
                cartTotal();
                if ($.isEmptyObject(data.error)) {
                    toastr.success(data.success, 'Success', {
                        timeOut: 3000
                    });
                } else {
                    toastr.error(data.error, {
                        timeOut: 3000
                    });
                }
            },

            complete: function() {
                $(".ajaxloading").fadeOut();
            },
        });
    });
</script>




<!-- Details cart -->
<script>
    $(document).on('click', '.detailscart', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var size = $("#product_size:checked").val();
        var color = $("#product_color:checked").val();
        var qty = $("#product_qty").val();
        $.ajax({
            url: "{{ url('/details/cart/store') }}/" + id,
            method: "GET",
            dataType: "JSON",
            data: {
                qty: qty,
                color_id: color,
                size_id: size,
            },
            success: function(data) {

                cartCount();
                cartTotal();
                headerCartItem();
                pageCart();
                sideCartItem();
                toastr.success('পণ্যটি কার্টে যুক্ত হয়েছে !', 'Success', {
                    timeOut: 3000
                });
            },
        });
    });

</script>




<!--Cart Delete-->
<script>
    $(document).on('click', '.cartdelete', function(e) {
        e.preventDefault();
        var id = $(this).attr('id');

        $.ajax({
            url: "{{ url('cart/delete') }}/" + id,
            method: "GET",
            dataType: "JSON",
            type: "DELETE",

            success: function(data) {
                cartCount();
                cartTotal();
                headerCartItem();
                pageCart();
                sideCartItem();
                toastr.success('পণ্যটি কার্ট থেকে মুছে ফেলা হয়েছে !', 'Removed', {
                    timeOut: 3000
                });
            },
        });
    });

</script>



<!--Qty Inc-->
<script>
    $(document).on('click', '.qtyInc', function(e) {
        e.preventDefault();
        var rowId = $(this).attr('id');

        $.ajax({
            url: "{{ url('/qty/inc') }}/" + rowId,
            method: "GET",
            dataType: "JSON",

            beforeSend: function() {
                $(".ajaxloading").fadeIn();
            },
            success: function(data) {
                cartCount();
                cartTotal();
                //headerCartItem();
                //pageCart();
                //sideCartItem();
                pageCart();
                toastr.success('পণ্যের পরিমাণ আপডেট হয়েছে!', 'Updated', {
                    timeOut: 3000
                });
            },

            complete: function() {
                $(".ajaxloading").fadeOut();
            },
        });
    });

</script>




<!--Qty Dec-->
<script>
    $(document).on('click', '.qtyDec', function(e) {
        e.preventDefault();

        var rowId = $(this).attr('id');
        var qty = $(this).attr('data-qty');
        if (qty<=1) {

            toastr.error('পণ্যের পরিমাণ ১ চেয়ে কম হবে না!', 'Updated', {
                timeOut: 3000
            });

        }else {
            $.ajax({
                url: "{{ url('/qty/dec') }}/" + rowId,
                method: "GET",
                dataType: "JSON",
                beforeSend: function() {
                    $(".ajaxloading").fadeIn();
                },

                success: function(data) {
                    cartCount();
                    cartTotal();
                    pageCart();
                    toastr.success('পণ্যের পরিমাণ আপডেট হয়েছে!', 'Updated', {
                        timeOut: 3000
                    });
                },

                complete: function() {
                    $(".ajaxloading").fadeOut();
                },
            });
        }
    });

</script>