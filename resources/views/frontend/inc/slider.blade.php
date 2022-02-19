<!-- START SLIDER-->
<section class="showcase wow fadeInDown" data-wow-duration="1s">
    @php
        $count = App\ElectroPronoSlider::where('ActiveStatus',1)->count();
        $skip = 1;
        $limit = $count - $skip;
    @endphp
    @if($count>0)
        <div id="myslider" class="carousel slide" data-ride="carousel" data-interval='4000'>
            <ol class="carousel-indicators">
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(1)->get() as $Slider)
                    <li data-slide-to="0" data-target="#myslider" class="active"></li>
                @endforeach
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(1)->take($limit)->get() as $Slider)
                    <li data-slide-to="{{ $loop->iteration }}" data-target="#myslider"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(0)->take(1)->get() as $Slider)
                    <div class="carousel-item carousel-img-1 active">
                        <img style="width:100%" src="{{asset('')}}{{$Slider->image->imageurl}}">
                    </div>
                @endforeach
                @foreach(\App\ElectroPronoSlider::orderBy('id','DESC')->where('ActiveStatus',1)->skip(1)->take($limit)->get() as $Slider)
                    <div class="carousel-item carousel-img-1">
                        <img style="width:100%" src="{{asset('')}}{{$Slider->image->imageurl}}">
                    </div>
                @endforeach
            </div>
            <a href="#myslider" class="carousel-control-prev" role="button" data-slide="prev">
                <i class="fa fa-angle-left slider-control"></i>
            </a>
            <a href="#myslider" class="carousel-control-next" data-slide="next">
                <i class="fa fa-angle-right slider-control"></i>
            </a>
        </div>
    @endif
</section>
<!--END SLIDER-->