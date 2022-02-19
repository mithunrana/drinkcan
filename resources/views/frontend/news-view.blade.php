@php
    $SiteProfile = App\SiteProfile::first();
    $title = $News->BrowserTitle;
    $keywords =  $News->SeoKeyword;
    $description =  $News->SeoDescription;
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
                    <h1 style="font-size: 21px;">{{$News->NewsName}}</h1>
                    <span style="text-align: center;font-weight: bold;">
                        <a style="color:#0049bc" href="{{asset('')}}">Home</a>
                        |
                        <a style="color:#0049bc" href="{{asset('')}}news">News</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 10px;" class="container">
        <div class="row">
            <div class="col-sm-8">
                <img src="{{asset('')}}{{$News->featuredimage1->imageurl}}" alt="{{$News->ImageAltText}}" class="img-fluid">
                <div style="margin-top: 10px;" class="content">
                    {!! $News->ProjectDetails !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    @foreach($RelatedNews as $EachNews)
                    <div class="col-sm-12">
                        <div style="margin-top: 5px;margin-bottom: 5px;border: 1px solid #0049bc;" class="news-box">
                            <a href="{{asset('')}}news/{{$EachNews->Permalink}}">
                                <img src="{{asset('')}}{{$EachNews->featuredimage1->imageurl}}" alt="{{$EachNews->ImageAltText}}">
                            </a>
                            <div class="news-title">
                                <h4 style="font-size: 18px;padding: 5px;">
                                    <a style="color:#0049bc" href="{{asset('')}}news/{{$EachNews->Permalink}}">
                                    {{$EachNews->NewsName}}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
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