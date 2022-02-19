
@php
    $SiteProfile = App\SiteProfile::first();

    $title = "DrinkCAN India | Best Water Purifier in India";
    $keywords =  "drinkcan, India, purifier, water, price";
    $description =  "Drinkcan water purifier best water purifier in India";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

    <!--start section header area-->
    <section class="section-header clearfix">
        <div class="about-header">
            <img src="http://localhost:8000/frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
        </div>
    </section>
    <!--end section header area-->

<div style="background: #deeff7;" class="water-helth-txt text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <p style="">Drinkcan water purifier is best water purifier by price and quality. drinkcan water purifier
                    publish daily bangla and english news in India.</p>
                <span style="text-align: center;font-weight: bold;">
                        <a style="color:#0049bc" href="{{asset('')}}">Home</a>
                        |
                        <a style="color:#0049bc" href="{{asset('')}}blog">Blog</a>
                </span>
            </div>
        </div>
    </div>
</div>

<section style="padding-top: 10px;" class="water-helth-box clearfix pb-5">
    <div class="container">
        <div class="row">
            @foreach($Blogs as $Blog)
            <div style="margin-top: 8px;" class="col-md-4">
                <div class="water-helth-item">
                    <a href="{{asset('')}}blog/{{$Blog->Permalink}}">
                    <img src="{{asset('')}}{{$Blog->featuredimage->imageurl}}" class="img-fluid" alt="{{$Blog->ImageAltText}}">
                    </a>
                    <div class="water-item-txt">
                        <a href="{{asset('')}}blog/{{$Blog->Permalink}}">
                        <h4 style="color:white;" class="m-0">{{$Blog->BlogName}}</h4>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$Blogs->links()}}
    </div>
</section>


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