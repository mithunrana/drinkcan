
@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Drinkcan | Water Purifier in Bangladesh";
    $keywords =  "Drinkcan, Water Purifier in Bangladesh, water filter price in bangladesh, water filter price in bd";
    $description =  "Drinkcan The best Water Purifier in Bangladesh, water filter price in bangladesh contact with us";
@endphp



@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.slider')
<!--start product section-->
<section style="background-color: #f6f6f6;margin-top:30px;" class="product-area clearfix py-5">
    <div class="container">
        <p style="text-align: center">
            Drinkcan is one of the leading brands in water purification machines in Bangladesh introduced by Syntax Technology. The brand,
            Drinkcan is designed and configured with the latest water purification technology to deliver the best drinkable water for our consumers.
            It is stylish and lucrative at outlook that can add an extra move for your aesthetic sense among your community and at the same time it will
            ensure best purified water without everyday hassle like boiling water or pouring water in existing filter machine.  It is empowered with Reverse
            Osmosis (RO) technology along with UV, Alkaline,TDS and MF filtration technology which are smartly tuned to deliver hygienic, safe and healthy water
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4">
                    <h3 style="color:#00adee">DirnkCan Water Purifier In Bangladesh</h3>
                    <h5 style="" class="text-secondary">In your budget price buy best water purifier</h5>
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
        @foreach(\App\Products::orderBy('id','ASC')->where('ActiveStatus',1)->skip(0)->take(4)->get() as $Product)

            @php
                $check = App\AboutProduct::where('products_id',$Product->id)->first();
                if($check!==null){
                 $ProductAbout =  App\AboutProduct::where('products_id',$Product->id)->orderBy('products_id','ASC')->first();
                }

            $Counter = $Counter+1;
            @endphp
        @if($Counter % 2 == 0)
            <div class="row">
                <div class="col-sm-7">
                    <div style="margin: 170px 0 150px;" class="info-box-product">
                        <h3 style="color:#0049bc;" class="product-main__title">
                            <a style="color:#0049bc;" href="{{asset('')}}{{$Product->Permalink}}">
                                {{$Product->Model}}
                            </a>
                        </h3>
                        <h3 style="font-size: 20px;" class="product-main__title">
                            <a style="color:#0a367b;" href="{{asset('')}}{{$Product->Permalink}}">
                                {{$Product->Name}}
                            </a>
                        </h3>
                        @if($check!==null)
                        <h6 class="product-main__title">{{$ProductAbout->Title}}</h6>
                        <div class="product-main__desc">
                            <p>{{$ProductAbout->Content}}</p>
                        </div>
                        @endif
                        <a style="display: inline-block;background-color:#0049bc;padding: 10px 15px;color:white;font-weight: bold;" href="{{asset('')}}{{$Product->Permalink}}">Details</a>
                        <a style="display: inline-block;background-color:#0049bc;padding: 10px 15px;color:white;font-weight: bold;" href="{{asset('')}}{{$Product->Permalink}}">Order Now</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <a href="{{asset('')}}{{$Product->Permalink}}">
                        <img style="max-width: 100%" src="{{asset('')}}{{$Product->image->imageurl}}">
                    </a>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-sm-5">
                    <a href="{{asset('')}}{{$Product->Permalink}}">
                        <img style="max-width: 100%" src="{{asset('')}}{{$Product->image->imageurl}}">
                    </a>
                </div>
                <div class="col-sm-7">
                    <div style="margin: 170px 0 150px;" class="info-box-product">
                        <h3 style="color:#0049bc;" class="product-main__title">
                            <a style="color:#0049bc;" href="{{asset('')}}{{$Product->Permalink}}">
                                {{$Product->Model}}
                            </a>
                        </h3>
                        <h3 style="font-size: 20px;" class="product-main__title">
                            <a style="color:#0a367b;" href="{{asset('')}}{{$Product->Permalink}}">
                                {{$Product->Name}}
                            </a>
                        </h3>

                        @if($check!==null)
                        <h6 class="product-main__title">{{$ProductAbout->Title}}</h6>
                        <div class="product-main__desc">
                            <p>{{$ProductAbout->Content}}</p>
                        </div>
                       @endif

                        <a style="display: inline-block;background-color:#0049bc;padding: 10px 15px;color:white;font-weight: bold;" href="{{asset('')}}{{$Product->Permalink}}">Details</a>
                        <a style="display: inline-block;background-color:#0049bc;padding: 10px 15px;color:white;font-weight: bold;" href="{{asset('')}}{{$Product->Permalink}}">Order Now</a>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
    </div>
</section>



<section style="background-color: #f6f6f6;margin-top:30px;" class="product-area clearfix py-5">
    <div style="width: 90%;" class="container-fluid">
        <h2 style="text-align: center;color: grey">Drinkcan Discover Water Purifier Filter</h2>
        <div class="row d-flex justify-content-center">
            @foreach(\App\Products::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(4)->get() as $Products)
            <div style="margin-top: 20px;" class="col-xl-3 col-lg-3  col-md-4 col-sm-6 col-12">
                <div style="border: 1px solid #e9e9e9;background-color: #fff;position:relative;" class="product-box">
                    <!--<div style="height:50px;width:50px;position:absolute;border-radius: 50%;background-color: red;top:-15px;right:-15px;" class="price-box">
                    </div>-->
                    <div class="">
                        <a href="{{asset('')}}{{$Products->Permalink}}">
                            <img style="display: block;margin-left: auto;margin-right: auto;max-width:80%;" src="{{asset('')}}{{$Products->image->imageurl}}"  alt="{{$Products->ImageAltText}}" title="{{$Products->ImageTitleText}}">
                        </a>
                    </div>
                    <div class="product-txt text-center">
                        <div class="product-title">
                            <h4><a style="color:#0049bc" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Model}}</a></h4>
                            <h5 style="font-size: 15px;" class="my-2">
                                <a style="color:#00adee" href="{{asset('')}}{{$Products->Permalink}}">{{$Products->Name}}</a>
                            </h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>{{$Products->RegularPrice}}</del> | <span>{{$Products->CurrentPrice}}</span></p>
                        </div>
                    </div>
                    <div style="text-align: center;padding: 10px;background-color: #0049bc;" class="details-button">
                        <a href="{{asset('')}}{{$Products->Permalink}}">
                            <span style="color:white;"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                        </a>
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
        <h2 style="text-align: center;color: grey">Benefits Of Pure Drinking Water</h2>
        <div class="row">
            @foreach(\App\BlogTutorial::where('ActiveStatus',1)->orderBy('id','DESC')->skip(0)->take(3)->get() as $Blog)
            <div class="col-md-4">
                <div class="sticky-post-box card mb-3">
                    <a href="#">
                        <div class="sticky-img p-1">
                            <a href="{{asset('')}}blog/{{$Blog->Permalink}}">
                                <img src="{{$Blog->featuredimage->imageurl}}" class="img-fluid" alt="{{$Blog->ImageAltText}}">
                            </a>
                        </div>
                        <div class="sticky-txt p-2">
                            <a href="{{asset('')}}blog/{{$Blog->Permalink}}">
                            <h5 style="color:#0049bc" class="text-uppercase">{{$Blog->BlogName}}</h5>
                            </a>
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
                            <img src="{{asset('')}}frontend/images/quality product.png" class="img-fluid" alt="FAQS">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">Good Quality Product</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('')}}frontend/images/support.png" class="img-fluid" alt="EASY TO REACH">
                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2">24/7 Quick Support</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hc-box text-center">
                    <div class="hc-img">
                        <div class="hc-img-box">
                            <img src="{{asset('')}}frontend/images/area.png" class="img-fluid" alt="HIGHEST RATED SERVICE">
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
                            <img src="{{asset('')}}frontend/images/client-satisfication.png" class="img-fluid" alt="COUNTRY-WIDE NETWORK">

                        </div>
                    </div>
                    <div class="hc-txt">
                        <h5 class="mt-2"> Client Satisfaction</h5>
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
