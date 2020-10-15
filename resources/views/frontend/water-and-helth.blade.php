
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
    <!--start section header area-->
    <section class="section-header clearfix">
        <div class="about-header">
            <img src="http://localhost:8000/frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
        </div>
    </section>
    <!--end section header area-->

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

<section style="padding-top: 10px;" class="water-helth-box clearfix pb-5">
    <div class="container">
        <div class="row">
            @foreach($Blogs as $Blog)
            <div style="margin-top: 8px;" class="col-md-4">
                <div class="water-helth-item">
                    <img src="{{asset('')}}{{$Blog->featuredimage->imageurl}}" class="img-fluid" alt="{{$Blog->ImageAltText}}">
                    <div class="water-item-txt">
                        <h4 class="m-0">{{$Blog->BlogName}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$Blogs->links()}}
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col align-self-center">
            <div class="boxes-txt">
                <p class="mb-0">Today’s Tip: <span>
                        Pregnant women should stay hydrated always, as it will lower their risk of having a C-section, and complications in the unborn baby’s health.</span>
                </p>
            </div>
        </div>
    </div>
</div>

@include('frontend.inc.footer')
@include('frontend.inc.footersource')
