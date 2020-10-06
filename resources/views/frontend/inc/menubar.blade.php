<!--start header-->
<header>
    <!--start header top-->
    <section style="background:#00adee" class="header-top clearfix py-3 wow fadeInDown" data-wow-duration="1s">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ht-contact">
                        <ul class="ht-ul">
                            <li><a href="javascript:;"><i class="fa fa-map mr-1"></i>Bangladesh</a></li>
                            <li><a href="javascript:;"><i class="fa fa-phone mr-1"></i>{{$SiteProfile->CorporatePhone}}</a></li>
                            <li><a href="javascript:;"><i class="fa fa-search mr-1"></i>Search</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end header top-->
    <nav style="background: #008abd" class="navbar wow fadeInDown py-0" data-wow-duration="1s">
        <div class="container menu-area">
            <a class="navbar-brand" href="{{asset('')}}">
                <img src="{{asset('')}}{{$SiteProfile->logo->imageurl}}" class="logo" alt="{{$SiteProfile->MainLogoTitleText}}">
            </a>
            <div class="main-nav ml-auto">
                <ul class="nav-ul">
                    <li><a href="{{asset('')}}">Home</a></li>
                    <li><a href="{{asset('')}}blog">Water and Health</a></li>
                    <li><a href="{{asset('')}}water-purifier-price-bd">Water Purifier</a></li>
                    <li><a href="{{asset('')}}water-purifier-kit-price-bangladesh">Order Kit</a></li>
                    <li><a href="{{asset('')}}">Water in news</a></li>
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
    <div class="mm-logo" style="padding: 15px;">
        <a style="color: #fff; font-size: 20px;display: block;" href="#"><i class="mr-2 fa fa-map-o"></i>Pureit</a>
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
                    <a href="{{asset('')}}">Water And Health</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}">Water Purifier</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="{{asset('')}}">Order GKK</a>
                </div>
            </div>
            <div class="menu-box">
                <div class="menu-link">
                    <a href="#">Water In News</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end mobile menu-->