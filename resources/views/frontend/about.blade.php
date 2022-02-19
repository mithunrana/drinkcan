@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Abut Drinkcan | Water Filter in India";
    $keywords =  "water, purifier, filter, price, India, cartridge, BD, purifier machine";
    $description =  "Drinkcan is the best water purifier in India. drinkcan provide best product in cheap price";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')


      
      
    <div class="about-header">
        <img src="{{asset('frontend')}}/images/about-drinkcan.jpg" class="img-fluid" alt="">
    </div>


    <div style="margin-top:25px;" class="container">
        <h1 style="text-align: center;margin-top: 5px;">DrinkCan Water Purifier In India</h1>
        <p style="text-align: center;">technology. Due to their excellent features, they are widely used in educational institutes, offices, hospitals, pharmaceutical industries and defence establishments.

With the help of our diligent team of professionals and sound infrastructure facilities, we have been able to provide quality products and flexible services as per the varied international quality standards. Entire range of products is thoroughly tested and is delivered under the strict care of professionals. We have maintained a long lasting relationship with our clients due to our ethical business practice and visionary approach.

Under the supervision of our mentor, we have been able to meet the precise needs of our clients. With his experience and knowledge of this domain, we have been able to win the trust of our clients.
        </p>
    </div>


    <section>
        <div class="container">
            <fieldset style="border: 1px solid #0049bc;padding: 5px;">
                <legend style="background-color:#0049bc;padding:5px;max-width: 200px;margin-left: 20px;color: white;">ISO Member</legend>
                <p>Drinkcan is a ISO Certified company Water Quality Association India Drinkcan
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
                                <p>Assurance of quality water
                                    We use the filters for purifying the water as per the
                                    standard of health and safety guidelines to offer
                                    improved quality of the drinking water.
                                    Installation & Maintenance
                                    services
                                    Our proficient engineers and trained
                                    technicians are always available to help you
                                    for installing Merlin RO System in the correct
                                    ways. We are also dedicated for maintenance
                                    services and keep our valued customers happy
                                    and satisfied.
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
                                <p>100% Customer Satisfaction
                                Our aim is to concentrate on the customer's needs
                                and demands. We work dedicatedly to fulfil the
                                growing needs of our customers. Our main
                                objective is to provide 100% customer satisfaction.
                                Product Quality
                                We assure our potential customers about the
                                quality of our water purifiers products. Our water
                                purifiers are fully loaded with advanced technology
                                and automatic filter system for pure and clean
                                drinking water.
                                Our Quest
                                To provide high-tech Water Solutions and services
                                to customers whilst making a considerable amount
                                of contribution to society by constantly working
                                towards a healthy nation.
                            </p>
                        </div>
                    </li>

                    <li style="position: relative;padding-left:92px;margin-top: 40px;">
                        <div class="list-icon values">
                            <img style="width: 80px;height: 80px;text-align: center;position: absolute;left: 0;top: -20px;" src="{{asset('')}}frontend/images/value.png" alt="">
                        </div>
                        <div class="data">
                            <h2 style="font-size:22px;margin: 0px 0 5px 0;color: #323334;font-weight: 600;">Values</h2>
                            <p>Support 24x7
                            Our customer care team is always ready to help you,
                            whenever you have any problems with your water
                            purifier. Our team is available 24 hours to help you for
                            any difficulty.
                            Best in Class Quality products
                            We are fully dedicated in delivering the best quality
                            services to our valued customers. Our services always
                            keep our customers hassle free and give a happy and
                            healthy life with full purification water system.
                            Fast Delivery
                            We are fully dedicated in delivering the best quality
                            services to our valued customers. Our services always
                            keep our customers hassle free and give a happy and
                            healthy life with full purification water system.</p>
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