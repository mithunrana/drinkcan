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
    <div class="about-header">
        <img src="{{asset('frontend')}}/images/about-us-banner.webp" class="img-fluid" alt="">
    </div>

    <section class="about-us clearfix py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 about-border-right">
                    <div style="border-bottom: 1px solid #ccc;padding-bottom: 10px;margin-bottom: 30px;" class="best-water-purifire">
                        <h2 class="bg-primary text-light p-2 mb-4">Best Water Purifier in Bangladesh</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa veritatis expedita, omnis vero, excepturi deleniti debitis tempora atque voluptatem harum quaerat dolorum rem, dolores, laudantium alias. Nobis quibusdam vero recusandae possimus repudiandae neque, ipsum quo maiores quam culpa aspernatur aliquid unde assumenda ut ullam ex architecto reiciendis tenetur laudantium animi! Animi, recusandae, incidunt modi magni esse eligendi saepe impedit dolore cum nisi aut architecto quo in! Voluptatibus provident est, porro temporibus. Eius architecto ad natus ratione minima incidunt repellat laborum necessitatibus soluta explicabo et totam eligendi earum qui, harum dolorum nam velit voluptatibus ipsa. Quia consequatur optio voluptatem architecto facilis.</p>
                    </div>
                    <div class="about-uniliver">
                        <h3 class="text-primary">About Unilever Bangladesh</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius assumenda repellendus, beatae recusandae quidem, dicta odit corrupti sit consequuntur quae, voluptatum cupiditate voluptatem optio asperiores pariatur sint nulla quis quia?</p>
                        <img src="{{asset('frontend')}}/images/logos.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-certified" style="border-bottom: 1px solid #ccc;padding-bottom: 10px;margin-bottom: 30px;">
                        <h3 class="text-primary font-weight-normal">Certified by more than 20 international laboratories across the globe.</h3>

                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-muted">Pureit has been certified by more than 20 international laboratories for meeting the highest safety standards. It meets the most stringent international criteria of the Environmental Protection Agency, United States (EPA,US) for the removal of harmful bacteria and viruses from water and thus offer the most superior safety.</p>
                                <a class="btn btn-primary mb-3" href="#">Read More</a>
                            </div>
                            <div class="col-md-4 text-center align-self-center">
                                <img src="{{asset('frontend')}}/images/pureit-awards.webp" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="about-certified" style="border-bottom: 1px solid #ccc;padding-bottom: 10px;margin-bottom: 30px;">
                        <h3 class="text-primary font-weight-normal">A product that has been recognized by the Harvard University</h3>

                        <div class="row">
                            <div class="col-md-4 text-center align-self-center">
                                <img src="{{asset('frontend')}}/images/recognition.webp" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-8">
                                <p class="text-muted">Pureit's aim to provide access to clean drinking water to more than 500 million people which has drawn the attention of Harvard University. They have published Pureit's work in a case study about paradigm-shifting innovations.</p>
                                <a class="btn btn-primary mb-3" href="#">Know More</a>
                            </div>

                        </div>

                    </div>
                    <div class="about-certified" style="border-bottom: 1px solid #ccc;padding-bottom: 10px;margin-bottom: 30px;">
                        <h3 class="text-primary font-weight-normal">An after sales service that is par excellence</h3>

                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-muted">Pureit customers enjoy the best after sales services in the business. You can connect with us between 8 AM to 12 AM on: 16627.</p>
                            </div>
                            <div class="col-md-4 text-center align-self-center">
                                <img src="{{asset('frontend')}}/images/phone1.png" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.inc.footer')
    @include('frontend.inc.footersource')
</body>
</html>