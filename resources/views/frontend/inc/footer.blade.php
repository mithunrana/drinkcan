<!--start footer section-->
<footer style="background:#00adee" class="footer-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-item">
                    <h5>About us</h5>
                    <ul class="m-0 p-0">
                        @foreach(\App\QuickLiinks::get() as $Links)
                        <li><a href="{{asset('')}}{{$Links->url}}"><i class="fa fa-angle-right mr-2"></i>{{$Links->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-item">
                    <h5>Allready own a DrinkCan</h5>
                    <ul class="m-0 p-0">
                        <li><a href="{{asset('')}}water-purifier-kit-price-bangladesh"><i class="fa fa-angle-right mr-2"></i>Order Purifier Kit</a></li>
                        <li><a href="{{asset('')}}complaint"><i class="fa fa-angle-right mr-2"></i>Register a Complaint</a></li>
                        <li><a href=""><i class="fa fa-angle-right mr-2"></i>FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-item">
                    <h5>Buy a DrinkCan water purifier</h5>
                    <ul class="m-0 p-0">
                        <li><a href="{{asset('')}}"><i class="fa fa-angle-right mr-2"></i>DrinkCan Range of Water Purifiers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer section-->


<section class="copyright-section clearfix py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 align-self-center">
                <div class="copy-link">
                    <ul class="p-0 m-0 copy-ul">
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">© 2020 UBL, All Rights Reserved</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="copy-social">
                    @foreach(\App\SocialLinks::get() as $Social)
                    <a target="_blank" href="{{$Social->url}}">{!! html_entity_decode($Social->icon) !!}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>