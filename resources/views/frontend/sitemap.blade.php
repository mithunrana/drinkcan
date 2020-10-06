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


<div class="about-header">
    <img src="{{asset('')}}frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
</div>

<div style="margin-top: 30px;margin-bottom: 20px;" class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <ul class="list-group">
                <li style="color:#00adee;border-bottom: 1px solid grey;" class="">About Us</li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;" href="{{asset('')}}about-drinkcan">About DrinkCan</a>
                </li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;"  href="{{asset('')}}news">News</a>
                </li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;"  href="{{asset('')}}contact">Contact Us</a>
                </li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;"  href="{{asset('')}}video">Video</a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <ul class="list-group">
                <li style="color:#00adee;border-bottom: 1px solid grey;" class="">Already own a DrinkCan</li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;"  href="{{asset('')}}water-purifier-kit-price-bangladesh">Order</a>
                </li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;"  href="{{asset('')}}complain-register">Complain</a>
                </li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;"  href="{{asset('')}}faqs">FAQ</a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <ul class="list-group">
                <li style="color:#00adee;border-bottom: 1px solid grey;" class="">DrinkCan</li>
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;"  href="{{asset('')}}water-purifier-price-bd">Products</a>
                </li>
                @foreach(\App\ProductsPrimaryCategory::get() as $Category)
                <li style="padding-top: 5px;" class="">
                    <a style="color:#525252;font-weight: bold;" href="{{asset('')}}product/{{$Category->CategoryUrl}}">{{$Category->CategoryName}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


@include('frontend.inc.footer')
@include('frontend.inc.footersource')
</body>
</html>
