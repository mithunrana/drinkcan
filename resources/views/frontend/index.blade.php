@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.slider')
<!--start product section-->
<section class="product-area clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4">
                    <h3 class="text-primary">Unilever Pureit Water Purifier In Bangladesh</h3>
                    <h5 class="text-secondary">Choose the water purifier that best suits your needs & budget</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach(\App\Products::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(4)->get() as $Products)
            <div class="col-xl-3 col-lg-3  col-md-4 col-sm-6 col-12">
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('')}}{{$Products->image->imageurl}}" class="img-fluid" alt="{{$Products->ImageAltText}}">
                        </a>
                    </div>
                    <div class="product-txt text-center">
                        <div class="prodcut-buy">
                            <a href="#">Buy Now</a> |
                            <a href="#">Details</a>
                        </div>
                        <div class="product-title">
                            <h5 class="my-2"><a href="#">Pureit Mineral Ultima RO + UV + MF</a></h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>৳25,000</del></p>
                            <p class="product-discount-price">৳23,000</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--end product section-->



<!--start sticky post section-->
<section class="sticky-post clearifix py-4 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sticky-post-box card mb-3">
                    <a href="#">
                        <div class="sticky-img p-1">
                            <img src="{{asset('frontend')}}/images/water_purifier_consumer_img1.webp" class="img-fluid" alt="Image">
                        </div>
                        <div class="sticky-txt p-2">
                            <h5 class="text-uppercase">Water and helth</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sticky-post-box card mb-3">
                    <a href="#">
                        <div class="sticky-img p-1">
                            <img src="{{asset('frontend')}}/images/water_purifier_consumer_img1.webp" class="img-fluid" alt="Image">
                        </div>
                        <div class="sticky-txt p-2">
                            <h5 class="text-uppercase">Water and helth</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sticky-post-box card mb-3">
                    <a href="#">
                        <div class="sticky-img p-1">
                            <img src="{{asset('frontend')}}/images/water_purifier_consumer_img1.webp" class="img-fluid" alt="Image">
                        </div>
                        <div class="sticky-txt p-2">
                            <h5 class="text-uppercase">Water and helth</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end sticky post section-->

<!--start home contact section-->
<section class="home-contact text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('frontend')}}/images/assured_icon01.png" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">FAQS</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('frontend')}}/images/assured_icon01.png" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">FAQS</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('frontend')}}/images/assured_icon01.png" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">FAQS</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('frontend')}}/images/assured_icon01.png" class="img-fluid" alt="Image">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">FAQS</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end home contact section-->
@include('frontend.inc.footer')
@include('frontend.inc.footersource')
</body>
</html>