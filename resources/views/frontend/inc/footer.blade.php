<!--start footer section-->
<footer style="background:#0049bc;padding: 5px 0;" class="footer-section clearfix">
    <div class="container">
        <div class="row">
            <div style="margin-top: 10px;" class="col-md-3">
                <div class="footer-item">
                    <h5 style="margin-bottom: 2px;">Products</h5>
                    <ul class="m-0 p-0">
                        @foreach(\App\Products::where('ActiveStatus',1)->get() as $Products)
                        <a style="font-size:14px;" href="{{asset('')}}{{$Products->Permalink}}">
                            <p style="margin-bottom: 2px;">
                                <span data-lang="" class="cmn waterPurifiers">{{$Products->Model}}</span>
                            </p>
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div style="margin-top: 10px;" class="col-md-3">
                <div class="footer-item">
                    <h5 style="margin-bottom: 2px;">Company</h5>
                    <ul class="m-0 p-0">
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}news">
                            <span data-lang="" class="cmn waterPurifiers">News</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}blog">
                            <span data-lang="" class="cmn waterPurifiers">Blog</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}contact">
                                <span data-lang="" class="cmn waterPurifiers">Contact Us</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}about-us"><span data-lang="" class="cmn waterPurifiers">About Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="margin-top: 10px;" class="col-md-3">
                <div class="footer-item">
                    <h5 style="margin-bottom: 2px;">Customer</h5>
                    <ul class="m-0 p-0">
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}contact">
                                <span data-lang="" class="cmn waterPurifiers">Contact</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}water-purifier-kit-price-bangladesh">
                                <span data-lang="" class="cmn waterPurifiers">Order Water Purifier</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}water-filter-price-bangladesh">
                                <span data-lang="" class="cmn waterPurifiers">Product</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}complaint">
                                <span data-lang="" class="cmn waterPurifiers">Complaint</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="{{asset('')}}drinkcan-office-address-bangladesh">
                                <span data-lang="" class="cmn waterPurifiers">Store Location</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="margin-top: 10px;" class="col-md-3">
                <div class="footer-item">
                    <h5 style="margin-bottom: 2px;">User Reading</h5>
                    <ul class="m-0 p-0">
                        <li>
                            <a style="font-size:14px;" href="#">
                                <span data-lang="" class="cmn waterPurifiers">Terms & Condition</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="#">
                                <span data-lang="" class="cmn waterPurifiers">Privacy Policy</span>
                            </a>
                        </li>
                        <li>
                            <a style="font-size:14px;" href="#">
                                <span data-lang="" class="cmn waterPurifiers">Disclaimer</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer section-->


<section style="background:#0049bc" class="copyright-section clearfix py-4 footer-for-responsive">
    <div class="container">
        <div class="row">
            <div style="margin-top: 10px;" class="col-md-8 align-self-center footer-for-responsive">
               <img src="{{asset('')}}frontend/images/payment-option.png">
            </div>
            <div style="margin-top: 10px;" class="col-md-4">
                <div class="copy-social footer-for-responsive">
                    @foreach(\App\SocialLinks::get() as $Social)
                    <a target="_blank" href="{{$Social->url}}">{!! html_entity_decode($Social->icon) !!}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background:#0049bc" class="copyright-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <ul class="p-0 m-0 copy-ul">
                        <li><a style="color: white;" href="#">{{$SiteProfile->CopyRightText}}</a></li>
                    </ul>
            </div>

            <div class="col-md-8 align-self-center">
                <div class="copy-social footer-for-responsive">
                    <ul class="p-0 m-0 copy-ul">
                        <li><a style="color: white;" href="#">Sitemap</a></li>
                        <li><a style="color: white;" href="#">Terms of Use</a></li>
                        <li><a style="color: white;" href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #0049bc;">
<div style="text-align: center;color: white;font-size: 14px;" class="container">
    <div  class="row">
        <div style="text-align: right;" class="col-sm-12">
            <p style="margin-bottom: 0px;">
               <a rel="nofollow" style="color:white;" href="https://www.facebook.com/imran.emonn" target="_blank">
                   <span>Design By: Imran Ahmed</span>
               </a>  |
                <a style="color:white;" href="{{$SiteProfile->DesignerDeveloperDomain}}" target="_blank">
                    <span>Development: {{$SiteProfile->DesignerDeveloperName}}</span>
                </a>
            </p>
        </div>
    </div>
</div>
</section>