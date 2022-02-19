@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Sitemap Drinkcan India Official Website";
    $keywords =  "sitemap, drinkcan, India, website, water, purifier, India";
    $description =  "here is the sitemap of drinkcan India official website";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

<div class="about-header">
    <img src="{{asset('')}}frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
</div>

<div style="margin-top: 30px;margin-bottom: 20px;" class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <ul class="list-group">
                <li style="color:#00adee;border-bottom: 1px solid grey;" class="">COMPANY</li>
            </ul>
            <ul class="m-0 p-0">
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}news">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">News</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}blog">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Blog</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}contact">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Contact Us</span>
                    </a>
                </li>
                <li>
                    <a style="color: #0239b7;font-size: 17px;" href="{{asset('')}}about-us"><span data-lang="" class="cmn waterPurifiers">About Us</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <ul class="list-group">
                <li style="color:#00adee;border-bottom: 1px solid grey;" class="">CUSTOMER</li>
            </ul>
            <ul class="m-0 p-0">
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}contact">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Support</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}contact">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Contact</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}water-purifier-kit-price-bangladesh">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Order Water Purifier</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}water-filter-price-bangladesh">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Product</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}complaint">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Complaint</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="{{asset('')}}drinkcan-office-address-bangladesh">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Store Location</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <ul class="list-group">
                <li style="color:#00adee;border-bottom: 1px solid grey;" class="">USER READING</li>
            </ul>
            <ul class="m-0 p-0">
                <li>
                    <a style="font-size:14px;" href="#">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Terms &amp; Condition</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="#">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Privacy Policy</span>
                    </a>
                </li>
                <li>
                    <a style="font-size:14px;" href="#">
                        <span style="color: #0239b7;font-size: 17px;" data-lang="" class="cmn waterPurifiers">Disclaimer</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <ul class="list-group">
                <li style="color:#00adee;border-bottom: 1px solid grey;" class="">PRODUCTS</li>
                @foreach(\App\Products::all() as $Products)
                    <a style="color: #0239b7;font-size: 17px;"  href="{{asset('')}}{{$Products->Permalink}}">
                        {{$Products->Name}}
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
</div>


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
