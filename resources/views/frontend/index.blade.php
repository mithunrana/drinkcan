
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
<section style="background-color: #f6f6f6;margin-top:30px;" class="product-area clearfix py-5">
    <div class="container_info">
        <p style="text-align: center">
            A revolutionary product from the house of Unilever, Pureit is just what you need to ensure you and your loved ones always drink safe<br>
            and pure water. Pureit is here to reach out to all your purification needs with their widest range of RO, UV and Non-electric products.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4">
                    <h3 style="color:#00adee">DirnkCan Water Purifier In Bangladesh</h3>
                    <h5 class="text-secondary">Choose the water purifier that best suits your needs & budget</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color:white;margin-top:30px;" class="product-area clearfix py-5">
    <div class="container">
        @php
        $Counter = 0;
        @endphp
        @foreach(\App\Products::orderBy('id','ASC')->get() as $Product)
            @php
            $Counter = $Counter+1;
            @endphp
        @if($Counter % 2 == 0)
        <div class="row">
            <div class="col-sm-7">
                <div style="margin: 170px 0 150px;" class="info-box-product">
                    <h2 class="product-main__title">A blown jug to blow away water impurities</h2>
                    <div class="product-main__desc">
                        <p>10 glasses of fresh drinking water in a gracefully shaped design.</p>
                    </div>
                    <a style="display: inline-block;background-color:#0049bc;padding: 10px 15px;border-radius:8px;color:white;font-weight: bold;" href="#">Details</a>
                </div>
            </div>
            <div class="col-sm-5">
                <img style="max-width: 100%" src="{{asset('')}}{{$Product->image->imageurl}}">
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-5">
                <img style="max-width: 100%" src="{{asset('')}}{{$Product->image->imageurl}}">
            </div>
            <div class="col-sm-7">
                <div style="margin: 170px 0 150px;" class="info-box-product">
                    <h2 class="product-main__title">A blown jug to blow away water impurities</h2>
                    <div class="product-main__desc">
                        <p>10 glasses of fresh drinking water in a gracefully shaped design.</p>
                    </div>
                    <a style="display: inline-block;background-color:#0049bc;padding: 10px 15px;border-radius:8px;color:white;font-weight: bold;" href="#">Details</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</section>

<section style="background-color: #f6f6f6;margin-top:30px;" class="product-area clearfix py-5">
    <div style="width: 90%;" class="container-fluid">
        <div class="row">
            @foreach(\App\Products::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(4)->get() as $Products)
            <div style="margin-top: 20px;" class="col-xl-3 col-lg-3  col-md-4 col-sm-6 col-12">
                <div style="border: 1px solid #e9e9e9;background-color: #fff;position:relative;" class="product-box">
                    <!--<div style="height:50px;width:50px;position:absolute;border-radius: 50%;background-color: red;top:-15px;right:-15px;" class="price-box">
                    </div>-->
                    <div class="">
                        <a href="#">
                            <img style="display: block;margin-left: auto;margin-right: auto;max-width:80%;" src="{{asset('')}}{{$Products->image->imageurl}}"  alt="{{$Products->ImageAltText}}">
                        </a>
                    </div>
                    <div class="product-txt text-center">
                        <div class="product-title">
                            <h5 style="font-size: 15px;" class="my-2">
                                <a style="color:#00adee" href="#">{{$Products->CategoryDetails->CategoryName}}</a>
                            </h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>{{$Products->RegularPrice}}</del> | <span>{{$Products->CurrentPrice}}</span></p>
                        </div>
                    </div>
                    <div style="text-align: center;padding: 10px;background-color: #0049bc;" class="details-button">
                        <span style="color:white;"><i class="fa fa-shopping-cart"></i> Buy Now</span>
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
            @foreach(\App\BlogTutorial::where('ActiveStatus',1)->orderBy('id','DESC')->skip(0)->take(3)->get() as $Blog)
            <div class="col-md-4">
                <div class="sticky-post-box card mb-3">
                    <a href="#">
                        <div class="sticky-img p-1">
                            <img src="{{$Blog->featuredimage->imageurl}}" class="img-fluid" alt="Image">
                        </div>
                        <div class="sticky-txt p-2">
                            <h5 style="color:#00adee" class="text-uppercase">{{$Blog->BlogName}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
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
