@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Daily Water News In India | Drinkcan";
    $keywords =  "drinkcan, water, news, India, water, purifier, price";
    $description =  "drinkcan provide daily water news in India,";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')
<!--start news section-->
<section class="water-news clearfix " style="padding-bottom: 30px;">

    <div class="about-header">
        <img src="http://localhost:8000/frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
    </div>

    <div style="background: #deeff7;" class="water-helth-txt text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="">Drinkcan water purifier is best water purifier by price and quality. drinkcan water purifier
                        publish daily bangla and english news in India.</p>
                    <span style="text-align: center;font-weight: bold;">
                        <a style="color:#0049bc" href="{{asset('')}}">Home</a>
                        |
                        <a style="color:#0049bc" href="{{asset('')}}news">News</a>
                    </span>
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
            background: #0049bc;
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
                                <img src="{{asset('')}}{{$News->featuredimage1->imageurl}}" class="img-fluid" alt="{{$News->ImageAltText}}" title="{{$News->ImageTitleText}}">
                                <h4 style="position: relative;padding: 5px;padding-bottom: 10px;font-size: 22px;margin-top: 10px;border-bottom: 1px solid #ddd;font-weight: 400;color: #0049bc !important;" class="text-custom">
                                    {{$News->NewsName}}
                                </h4>
                            </a>
                        </div>
                        <div class="sh-txt">
                            <a style="color:#0049bc" href="{{asset('')}}news/{{$News->Permalink}}">Learn More →</a>
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
@if(Session::has('demo-message'))
    <script>
        toastr.success("{{ Session::get('demo-message') }}");
    </script>
@endif
@include('frontend.inc.messenger')
</body>
</html>