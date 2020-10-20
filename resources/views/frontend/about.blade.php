@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "About DrinkCan | Water Purifier";
    $keywords =  "about us, drinkcan, water filter stand price in bd, water filter price in bangladesh, water purifier price in bangladesh";
    $description =  "DrinkCAN | Water Purifier in Bangladesh";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
    <div class="about-header">
        <img src="{{asset('frontend')}}/images/about-drinkcan.jpg" class="img-fluid" alt="">
    </div>


    <div style="margin-top:25px;" class="container">
        <h1 style="text-align: center;margin-top: 5px;">DrinkCan Water Purifier In Bangladesh</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa veritatis expedita, omnis vero, excepturi deleniti
            debitis tempora atque voluptatem harum quaerat dolorum rem, dolores, laudantium alias. Nobis quibusdam vero recusandae possimus
            repudiandae neque, ipsum quo maiores quam culpa aspernatur aliquid unde assumenda ut ullam ex architecto reiciendis tenetur laudantium animi! Animi,
            recusandae, incidunt modi magni esse eligendi saepe impedit dolore cum nisi aut architecto quo in! Voluptatibus provident est, porro temporibus. Eius
            architecto ad natus ratione minima incidunt repellat laborum necessitatibus
            soluta explicabo et totam eligendi earum qui, harum dolorum nam velit voluptatibus ipsa. Quia consequatur optio voluptatem architecto facilis.
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
            <div style="width: 100%;margin: 0 auto;text-align: center;padding-top: 10px;padding-bottom: 10px;">
                <img class="img-thumbnail" style="max-width: 280px;height: auto;margin: 0 auto;border: 2px solid #1f8fff;" src="{{asset('')}}frontend/images/1598534374_09.jpg">
                <div style="padding: 20px;border: 3px solid #0049bc;margin-top: 10px;" class="feedback-box">
                    <div style="text-align: center;padding-top: 10px;margin: 0 auto;">industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing
                    </div>
                    <h4>Mithun Rana</h4>
                </div>
            </div>
            <div style="width: 100%;margin: 0 auto;text-align: center;padding-top: 10px;padding-bottom: 10px;">
                <img style="max-width: 280px;height: auto;margin: 0 auto;border: 2px solid #1f8fff;" class="img-thumbnail" style="max-width: 280px;height: auto;margin: 0 auto;" src="{{asset('')}}frontend/images/1598534374_09.jpg">
                <div style="padding: 20px;border: 3px solid #0049bc;margin-top: 10px;" class="feedback-box">
                    <div style="text-align: center;padding-top: 10px;margin: 0 auto;">industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing
                    </div>
                    <h4>Mithun Rana</h4>
                </div>
            </div>
            <div style="width: 100%;margin: 0 auto;text-align: center;padding-top: 10px;padding-bottom: 10px;">
                <img style="max-width: 280px;height: auto;margin: 0 auto;border: 2px solid #1f8fff;" class="img-thumbnail" style="max-width: 280px;height: auto;margin: 0 auto;" src="{{asset('')}}frontend/images/1598534374_09.jpg">
                <div style="padding: 20px;border: 3px solid #0049bc;margin-top: 10px;" class="feedback-box">
                    <div style="text-align: center;padding-top: 10px;margin: 0 auto;">industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                        recently with desktop publishing
                    </div>
                    <h4>Mithun Rana</h4>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('frontend.inc.footer')
    @include('frontend.inc.footersource')
    <script>
        $(document).ready(function() {
            $('.client-feedback').slick({
                autoplay: false,
                arrows:false
            });
        });
    </script>

</body>
</html>