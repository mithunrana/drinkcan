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
<!--start news section-->
<section class="water-news clearfix " style="padding-bottom: 30px;">

    <div class="about-header">
        <img src="http://localhost:8000/frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
    </div>

    <div class="water-helth-txt text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="">Every day, your body needs water to rejuvenate and stay hydrated.
                        The water you drink is the core essence of life so it’s always important to drink pure.</p>
                </div>
            </div>
        </div>
    </div>


    <style>
        .sh-img a h4::after {
            content: '';
            display: block;
            height: 5px;
            width: 50px;
            background: #d71920;
            position: absolute;
            left: 0;
            bottom: -2px;
        }
    </style>

    <div style="margin-top: 10px;" class="container">
        <div class="row">
            @foreach($Newses as $News)
                <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                    <div style="border-radius: 0;" class="sh-box">
                        <div class="sh-img">
                            <a href="{{asset('')}}news/{{$News->Permalink}}">
                                <img src="{{asset('')}}{{$News->featuredimage1->imageurl}}" class="img-fluid" alt="{{$News->featuredimage1->imageurl}}">
                                <h4 style="position: relative;padding: 5px;padding-bottom: 10px;font-size: 22px;margin-top: 10px;border-bottom: 1px solid #ddd;font-weight: 400;color: #d30411 !important;" class="text-custom">
                                    Pan Pacific Sonargaon Hotel
                                </h4>
                            </a>
                        </div>
                        <div class="sh-txt">
                            <a style="color:#d30411" href="http://localhost/soshine-bd-laravel/public/portfolio/#">Learn More →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$Newses->links()}}
    </div>
</section>
<!--end news section-->

@include('frontend.inc.footer')
@include('frontend.inc.footersource')
</body>
</html>