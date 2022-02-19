@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Water Purifier Filter Price In India | Drinkcan";
    $keywords =  "drinkcan, water, purifier, filter, price, India, stand, bd, RO, UV, TDS CONTROLLER, UF, MINERAL, CARTAGE";
    $description =  "Water Purifier Filter Price In India, Drinkcan is the best water purifier filter in India cheap rate best product";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

<div class="about-header">
    <img src="{{asset('frontend')}}/images/about-drinkcan.jpg" class="img-fluid" alt="">
</div>


<div class="purifire-header py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ph-txt mb-4">
                    <h1 style="color:#0049bc;text-align:center;">Water Purifier Filter Price In India</h1>
                    <p style="text-align: center;">drinkcan is the best water purifier in India. It is empowered with Reverse Osmosis (RO) technology along with UV, Alkaline,TDS and MF filtration technology
                        which are smartly tuned to deliver hygienic, safe and healthy water.
                        also drinkcan provide cheap price in best product.<br>
                        water purifier machine price in India contact 01611830852
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--start product section-->
<section class="product-area clearfix py-5">

    <!--<div class="container">
        <div class="row">
            <div class="col-md-5 mb-4">
                <select id="categorychange" name="category" class="form-control mb-3">
                    <option value="" selected disabled>====SELECT CATEGORY====</option>
                    @foreach(\App\ProductsPrimaryCategory::orderBy('id','DESC')->get() as $Category)
                        <option value="{{$Category->id}}">{{$Category->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>-->


    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach(\App\Products::where('ActiveStatus',1)->orderBy('id','DESC')->where('ProductsType',1)->get() as $Products)
            <div style="margin-top: 10px;" class="col-md-4">
                <div class="product-box">
                    <div class="product-img">
                        <a href="{{asset('')}}{{$Products->Permalink}}">
                            <img src="{{asset('')}}{{$Products->image->imageurl}}" style="max-width:316px;max-height:316px;" class="img-fluid" alt="{{$Products->ImageAltText}}">
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
                            @if($Products->PriceStatus == 1)
                                <p class="prodcut-sell-price mb-1"><del>{{$Products->RegularPrice}}</del> | <span>{{$Products->CurrentPrice}}</span></p>
                            @endif
                            @if(Auth::check() && Auth::user()->partner=='yes')
                                <p class="prodcut-sell-price mb-1">Partner Price: <span>{{$Products->PartnerPrice}}</span></p>
                            @endif
                        </div>
                    </div>
                    <div style="text-align: center;padding: 10px;background-color: #0049bc;" class="details-button">
                        @if($Products->Stock>0)
                            <span style="display: inline-block;background-color: #4eabc7;padding: 4px 6px;color: white;font-weight: bold;border-radius: 6px;">
                               In Stock
                            </span>
                            <a style="display: inline-block;background-color:#0049bc;color:white;font-weight: bold;"  id="cartStore" href="{{$Products->id}}"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                        @else
                            <span style="display: inline-block;background-color: #cd4658;padding: 4px 6px;color: white;font-weight: bold;border-radius: 6px;" >
                               Out Of Stock
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col mt-4">
                <h3 style="color:#00adee" >Why do you need a water purifier?</h3>
                <p>আমরা সবাই জানি পানির অপর নাম জীবন । তাই বলে কি যে কোন পানি পান করলেই আমরা বেচে যাব ? তা কখোনই না । পানি যেমন আমাদের জীবনের
                    জন্য খুব উপকারী একটা উপাদান । ঠিক তেমনি পানি অনেক সময় আমাদের জীবনের হুমকির কারণ হয়ে দারাই । সেটা হলো সেই পানি যদি বিসুদ্ধ না হয় ।
                    আর তাই পানির পানি পান করার আগে অব্যশই পানির বিশুদ্ধা নিশ্চিত করতে
                    হবে । আর তার জন্য আছে আমাদের Drinkcan water purifier. যা আপনার পানিকে বিশুদ্ধ করবে ১০০%
                </p>

                <p>
                    We all know water is another name for life. So do we drink any water to survive? Never. Water is a very beneficial element for our
                    lives. In the same way, water is often a threat to our lives. That is if the water is not pure. And so before drinking water,
                    you must ensure the purity of the water. And for that we have Drinkcan water purifier. Which will purify your water 100%
                </p>

                <h3>10 Benefits of Drinking Water</h3>
                <p><strong>1. It lubricates the joints</strong></p>
                <p><strong>2. It forms saliva and mucus</strong></p>
                <p><strong>3. </strong><strong>It delivers oxygen throughout the body</strong></p>
                <p><strong>4. It boosts skin health and beauty</strong></p>
                <p><strong>5. It cushions the brain, spinal cord, and other sensitive tissues</strong></p>
                <p><strong>6. It regulates body temperature</strong></p>
                <p><strong>7, The digestive system depends on it</strong></p>
                <p><strong>8. It flushes body waste</strong></p>
                <p><strong>9. It helps maintain blood pressure</strong></p>
                <p><strong>10. The airways need it</strong></p>
                <a href="https://www.medicalnewstoday.com/articles/290814#benefits" target="_blank">For more details 10 Benefits of Drinking Water visit</a>
            </div>
        </div>
    </div>

</section>
<!--end product section-->

@include('frontend.inc.footer')
@include('frontend.inc.footersource')
@if(Session::has('demo-message'))
    <script>
        toastr.success("{{ Session::get('demo-message') }}");
    </script>
@endif
@include('frontend.inc.messenger')
</body>
</html>
