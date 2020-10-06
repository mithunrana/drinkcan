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
<section class="water-news clearfix py-5">
    <div class="container">


        @foreach($Newses as $News)
        <div class="news-box mb-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="news-img">
                        <img src="{{$News->featuredimage1->imageurl}}" class="img-fluid" alt="{{$News->ImageAltText}}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="news-description">
                        <h5 style="color:" class="text-primary font-weight-bold">{{$News->NewsName}}</h5>
                        <p class="text-muted news-date" style="font-size: 18px;">
                            {{$News->created_at->diffForHumans()}}
                        </p>
                        <p style="color:#00adee" class="text-muted news-desc">
                            {!! html_entity_decode($News->ProjectDetails) !!}
                        </p>
                        <div class="news-read-more text-right">
                            <a style="display: inline-block;" class="btn btn-primary" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{$Newses->links()}}
    </div>
</section>
<!--end news section-->

@include('frontend.inc.footer')
@include('frontend.inc.footersource')
</body>
</html>