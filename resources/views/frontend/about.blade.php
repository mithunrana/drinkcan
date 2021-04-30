@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Abut Drinkcan | Water Filter in Bangladesh";
    $keywords =  "water, purifier, filter, price, bangladesh, cartridge, BD, purifier machine";
    $description =  "Drinkcan is the best water purifier in bangladesh. drinkcan provide best product in cheap price";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')


      
      
    <div class="about-header">
        <img src="{{asset('frontend')}}/images/about-drinkcan.jpg" class="img-fluid" alt="">
    </div>


    <div style="margin-top:25px;" class="container">
        <h1 style="text-align: center;margin-top: 5px;">DrinkCan Water Purifier In Bangladesh</h1>
        <p style="text-align: center;"><b>Our Main Company Is Syntex Technology</b> Syntax Technology is a technology based business hub which mainly deals with products
            that ensures safety and security. Syntax aims at delivering products related to safety and security which are innovative
            and at the same time widely used in developed countries. Bangladesh is heading towards middle income countries status and it
            needs various types of technology based products to adapt. We are working as a bridge between modern world and third world.
            We dream for a civilized community as well as country that is capable to keep pace with the most modern and sophisticated world.
            We are struggling to connect our people with superhighway of ultra-modern technologies that save our time, reduce labor and make
            worthy to our money. Syntax Technology is here to ensure a safe, secure and better life.
        </p>
    </div>


    <section>
        <div class="container">
            <fieldset style="border: 1px solid #0049bc;padding: 5px;">
                <legend style="background-color:#0049bc;padding:5px;max-width: 200px;margin-left: 20px;color: white;">ISO Member</legend>
                <p>Drinkcan is a ISO Certified company Water Quality Association Bangladesh Drinkcan
                    water purifier meet's all the quality requiremt's and ensure that every drop of water is pure and safe for drinking
                </p>
            </fieldset>

            <fieldset style="border: 1px solid #0049bc;padding: 5px;margin-top: 10px;">
                <legend style="background-color:#0049bc;padding:5px;max-width: 200px;margin-left: 20px;color: white;">Free Pre-Filter</legend>
                <p>
                    Drinkcan R O System come with complimentary Free Pre-filter to ensure safety and long life or filter. pre-filter witll remove hard dust partcal's which increase the life of inline filters.
                    the drinkcan purifier is sutable for purification of brackish, tap & municipal water upto 2000ppm
                </p>
            </fieldset>
        </div>
    </section>

    <section class="about-us clearfix py-5">
        <div class="container">
                <ul style="list-style: none;padding-left:0px;" class="list">
                    <li style="position:relative;padding-left:92px;">
                        <div class="list-icon vision">
                            <img style="width: 80px;height: 80px;text-align: center;position: absolute;left: 0;top: -20px;" src="{{asset('')}}frontend/images/vision.png" alt="">
                        </div>
                        <div class="data">
                            <h2 style="font-size:22px;margin: 0px 0 5px 0;color: #323334;font-weight: 600;">Our Vision</h2>
                            <div class="heading" style="">
                                <p>
                                    Our main concern are security &amp; Eliminate unemployment. cause Tech Help Info want
                                    unemployment Get away from our country. by security service we protect our country and prevent crime.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li style="position:relative;padding-left:92px;margin-top: 40px;">
                        <div class="list-icon mission">
                            <img style="max-width: 80px;max-height: 80px;text-align: center;position: absolute;left: 0;top: -20px;" src="{{asset('')}}frontend/images/mission.png" alt="">
                        </div>
                        <div class="data">
                            <h2 style="font-size:22px;margin: 0px 0 5px 0;color: #323334;font-weight: 600;">Our Mission</h2>
                            <p>
                                We are committed to explore creative ways to better perceive
                                and understand our world. and we make the world secure and user friendly can user use the technolgy very easily.
                            </p>
                        </div>
                    </li>

                    <li style="position: relative;padding-left:92px;margin-top: 40px;">
                        <div class="list-icon values">
                            <img style="width: 80px;height: 80px;text-align: center;position: absolute;left: 0;top: -20px;" src="{{asset('')}}frontend/images/value.png" alt="">
                        </div>
                        <div class="data">
                            <h2 style="font-size:22px;margin: 0px 0 5px 0;color: #323334;font-weight: 600;">Values</h2>
                            <p>
                                Put Customer first, Get Value, Be Honest and Pursue Excellence
                            </p>
                        </div>
                    </li>
                </ul>
        </div>
    </section>

<section style="margin-top: 10px;">
    <div class="container">
        <div class="client-feedback">
            @foreach(\App\ClientFeedBack::where('ActiveStatus',1)->orderBy('id','DESC')->get() as $Feedback)
            <div style="width: 100%;margin: 0 auto;text-align: center;padding-top: 10px;padding-bottom: 10px;">
                <img class="img-thumbnail" style="max-width: 280px;height: auto;margin: 0 auto;border: 2px solid #1f8fff;" src="{{asset('')}}{{$Feedback->featuredimage->imageurl}}" alt="{{$Feedback->ImageAltText}}">
                <div style="padding: 20px;border: 3px solid #0049bc;margin-top: 10px;" class="feedback-box">
                    <div style="text-align: center;padding-top: 10px;margin: 0 auto;">{{$Feedback->Details}}</div>
                    <h4>{{$Feedback->Name}}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    @include('frontend.inc.footer')
    @include('frontend.inc.footersource')
    <script>
        $(document).ready(function() {
            $('.client-feedback').slick({
                autoplay: true,
                arrows:false
            });
        });
    </script>
    @if(Session::has('demo-message'))
    <script>
        toastr.success("{{ Session::get('demo-message') }}");
    </script>
    @endif
    @include('frontend.inc.messenger')
</body>
</html>