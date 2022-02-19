<!--start header-->
<header style="border-bottom: 1px solid #78909c;">
    <!--start header top-->
    <section class="header-top clearfix wow fadeInDown" data-wow-duration="1s">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ht-contact">
                        <ul class="ht-ul">
                            <li><a href="javascript:;"><i class="fa fa-phone mr-1"></i>{{$SiteProfile->CorporatePhone}}</a></li>
                            <li><a href="{{asset('')}}contact">Support</a></li>
                            @if(!Auth::check())
                                <li><a style="color: #fff;display: inline-block;" href="{{asset('')}}register">Register</a></li>
                                <li><a style="color: #fff;display: inline-block;" href="{{asset('')}}login">Login</a></li>
                            @endif
                            @if(Auth::check())
                                <li>
                                    <a style="color: #fff;margin-top: 5px;display: inline-block;text-decoration: none;color:white;" href="{{asset('')}}admin/admin-panel">
                                        {{Auth::user()->name}}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end header top-->
    <nav style="background: rgba(255,255,255,.96) none repeat scroll 0% 0%; visibility: visible; animation-duration: 1s; animation-name: fadeInDown;" class="navbar wow fadeInDown py-0" data-wow-duration="1s">
        <div class="container menu-area">
            <a style="padding-top: 7px;padding-bottom: 7px;" class="navbar-brand" href="{{asset('')}}">
                <img style="max-width: 167px;" src="{{asset('')}}{{$SiteProfile->logo->imageurl}}" class="logo" alt="{{$SiteProfile->MainLogoTitleText}}">
            </a>
            <div class="main-nav ml-auto">
                <ul class="nav-ul">
                    <li><a href="{{asset('')}}">Home</a></li>
                    <li><a href="{{asset('')}}water-filter-price-bangladesh">Water Purifier</a></li>
                    <li><a href="{{asset('')}}water-purifier-kit-price-bangladesh">Purifier Kit</a></li>
                    <li><a href="{{asset('')}}contact">Contact</a></li>
                    <li><a href="{{asset('')}}about-us">About Us</a></li>
                </ul>
            </div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</header>
<!--end header-->






<!--start mobile menu-->
<div class="mobile-menu">
    <div class="mm-logo">
        <a style="color: #fff; font-size: 20px;" href="{{asset('')}}">
            <img src="{{asset('')}}{{$SiteProfile->logo->imageurl}}" class="logo" alt="drinkcan" title="Drinkcan">
        </a>
        <div style="margin:6px 15px;" class="menu-icon res-menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="mm-menu">
        <div class="accordion" id="accordionExample">
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}">Home</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}water-filter-price-bangladesh">Water Purifier</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}water-purifier-kit-price-bangladesh">Purifier Kit</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}contact">Contact</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}about-us">About Us</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}drinkcan-office-address-bangladesh">Store Location</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end mobile menu-->
