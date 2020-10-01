
@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "DrinkCAN | Water Purifier in Bangladesh";
    $keywords =  "DrinkCAN | Water Purifier in Bangladesh";
    $description =  "DrinkCAN | Water Purifier in Bangladesh";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.slider')
<!--start product section-->
<section class="product-area clearfix py-5">

    <div class="container_info">
        <!--<p style="text-align: center">
            A revolutionary product from the house of Unilever, Pureit is just what you need to ensure you and your loved ones always drink safe<br>
            and pure water. Pureit is here to reach out to all your purification needs with their widest range of RO, UV and Non-electric products.
        </p>-->
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4">
                    <h3 class="text-primary">DirnkCan Water Purifier In Bangladesh</h3>
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
                            <h5 style="font-size: 15px;" class="my-2">
                                <a href="#">{{$Products->CategoryDetails->CategoryName}}</a>
                            </h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>{{$Products->RegularPrice}}</del></p>
                            <p class="product-discount-price">{{$Products->CurrentPrice}}</p>
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
                            <img src="{{asset('frontend')}}/images/water_purifier_consumer_img3.webp" class="img-fluid" alt="Image">
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
                            <img src="{{asset('frontend')}}/images/water_purifier_consumer_img2.webp" class="img-fluid" alt="Image">
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
                            <img src="{{asset('')}}frontend/images/assured_icon01.png" class="img-fluid" alt="FAQS">
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
                            <img src="{{asset('')}}frontend/images/assured_icon02.png" class="img-fluid" alt="EASY TO REACH">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">EASY TO REACH</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('')}}frontend/images/assured_icon03.png" class="img-fluid" alt="COUNTRY-WIDE NETWORK">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">COUNTRY-WIDE NETWORK</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('')}}frontend/images/assured_icon04.png" class="img-fluid" alt="HIGHEST RATED SERVICE">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">HIGHEST RATED SERVICE</h5>
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