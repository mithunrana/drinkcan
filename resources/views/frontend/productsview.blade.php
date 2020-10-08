@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Login | Soshine Marketing Company";
    $keywords =  "soshine marketing company, login, registration, avtech cctv camera price in bangladesh, avtech distributor in bangladesh";
    $description =  "Login soshine marketing company website, avtech cctv camera dealer price";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')

<style>
    .box-8 {
        width: 12.5%;
        padding: 10px;
        border-right: 1px solid #666;
        border-bottom: 1px solid #666;
        min-height: 350px;
        text-align: center;
    }

    .sp-img {
        width: 80px;
        height: 80px;
        border-radius: 100%;
        border: 1px solid #35c5f2;
        margin: 0 auto 15px;
        text-align: center;
        line-height: 5;
    }

    .sp-img img {}

    .pdf-download {
        background: #22B9EB;
        color: #fff !important;
        display: inline-block;
        padding: 5px 20px;
        border-radius: 10px;
        font-size: 25px;

    }

    .product-feature-txt .media {
        border-bottom: 1px solid blue;
        margin-bottom: 25px;
    }

    @media all and (max-width: 1080px) {

        .box-8 {
            width: 25%;
        }

    }
    @media all and (max-width: 576px) {

        .box-8 {
            width: 50%;
        }

    }

    @media all and (max-width: 450px) {
        .box-8 {
            width: 100%;
        }
    }
</style>

<section class="product-details-area bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product-d-image">
                    <img src="{{asset('')}}img/ddc2133f7cfed05b40def32a3dcb2653.webp" alt="adsf">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-d-details text-right">
                    <h2 class="text-primary">Marvella Slim RO+UV+MF</h2>
                    <h3 class="text-primary">MRP: <del>৳ 21,500</del> ৳ 20,000*</h3>
                    <p><a style="background: #f4dc2d; padding: 5px 20px; display: inline-block;margin-top: 15px; font-size: 22px; border-radius: 5px;" href="#">BUY NOW</a></p>
                    <a style="color: #666; border-bottom: 1px solid #666; font-size: 18px" href="#">View other RO purifiers</a>
                    <p><small>*MRP (inclusive of all taxes) for 1 unit</small></p>
                </div>
            </div>
        </div>
        <div class="row my-5 py-4">
            <div class="col-md-8">
                <div class="product-item-txt">
                    <h3 class="text-primary">About the Device</h3>
                    <p>Pureit brings to you the all new Marvella Slim RO+UV+MF with advanced 7 stage purification that purifies water and its mineral cartridge that enriches pure water with goodness of mineral.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item-img">
                    <img src="{{asset('')}}img/111.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row my-5 py-4">
            <div class="col-md-4">
                <div class="product-item-img">
                    <img src="{{asset('')}}img/111.webp" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-item-txt text-right">
                    <h3 class="text-primary">100% RO Purified Water</h3>
                    <p>All water passes through RO ensuring no mixing of purified and impure water. Only RO can remove harmful chemicals like Lead, Mercury, etc.</p>
                </div>
            </div>
        </div>
        <div class="row my-5 py-4">
            <div class="col-md-8">
                <div class="product-item-txt">
                    <h3 class="text-primary">Includes Mineral Cartridge</h3>
                    <p>Enriches water by adding essential minerals like Calcium and Magnesium.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item-img">
                    <img src="{{asset('')}}img/111.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row my-5 py-4">
            <div class="col-md-4">
                <div class="product-item-img">
                    <img src="{{asset('')}}img/111.webp" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-item-txt text-right">
                    <h3 class="text-primary">8 Litres1 Storage With Water-Level Indicator</h3>
                    <p>You will never run out of purified water.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-feauture-section py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4">
                    <h2 class="text-primary">Features</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="product-feature-txt">
                    <div class="media">
                        <img src="{{asset('')}}img/icon1.png" alt="image" class="mr-3" style="width: 50px">
                        <div class="media-body">
                            <p class="mb-1 text-primary">Advanced 7 Stage Purification</p>
                            <p class="text-muted">Every drop of water you drink is sweet and always safe</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="{{asset('')}}img/icon1.png" alt="image" class="mr-3" style="width: 50px">
                        <div class="media-body">
                            <p class="mb-1 text-primary">Advanced 7 Stage Purification</p>
                            <p class="text-muted">Every drop of water you drink is sweet and always safe</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-img">
                    <img src="{{asset('')}}img/feature-imgae.webp" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-feature-txt">
                    <div class="media">
                        <img src="{{asset('')}}img/icon1.png" alt="image" class="mr-3" style="width: 50px">
                        <div class="media-body">
                            <p class="mb-1 text-primary">Advanced 7 Stage Purification</p>
                            <p class="text-muted">Every drop of water you drink is sweet and always safe</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="{{asset('')}}img/icon1.png" alt="image" class="mr-3" style="width: 50px">
                        <div class="media-body">
                            <p class="mb-1 text-primary">Advanced 7 Stage Purification</p>
                            <p class="text-muted">Every drop of water you drink is sweet and always safe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-specification py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title mb-4 text-center">
                    <h2 class="text-primary">Specifications</h2>
                    <h4 class="text-primary">Specification for Water Purifier</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box-8" style="border-left: 1px solid #666;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>


            <div class="box-8" style="border-left: 1px solid #666; border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8" style="border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8" style="border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8" style="border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8" style="border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8" style="border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8" style="border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="box-8" style="border-bottom: none;">
                <div class="sp-img">
                    <img src="{{asset('')}}img/weight.png" alt="img">
                </div>
                <div class="sp-txt">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-specification-kit py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title mb-4 text-center">
                    <h2 class="text-primary">Specification for Germkill Kit™</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="border-right: 1px solid #666; border-bottom: 1px solid #666; border-left: 1px solid #666;">
                <div class="card-body">
                    <div class="media mb-5">
                        <img class="mr-3" src="{{asset('')}}img/ki.webp" alt="asdf">
                        <div class="media-body">
                            <p class="text-primary mb-0">Material of Construction</p>
                            <small>Food safe, non-toxic, engineering-grade plastics</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border-right: 1px solid #666; border-bottom: 1px solid #666;">
                <div class="card-body">
                    <div class="media mb-5">
                        <img class="mr-3" src="{{asset('')}}img/ki.webp" alt="asdf">
                        <div class="media-body">
                            <p class="text-primary mb-0">GKK Life: 6000 Litres</p>
                            <small>Meets stringent international criteria for microbiologically safe drinking water - e.g. Environmental Protection Agency (EPA), USA</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="border-right: 1px solid #666; border-left: 1px solid #666;">
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3" src="{{asset('')}}img/ki.webp" alt="asdf">
                        <div class="media-body">
                            <p class="text-primary mb-0">GKK Life: 6000 Litres</p>
                            <small>
                                Pre-Sediment Filter - 2 No. <br>
                                Pre-RO Carbon Filter - 1 No.<br>
                                Post-RO Carbon Filter - 1 No.<br>
                                Mini Filter - 1 No.<br>
                                RO Membrane - 1 No.<br>
                                Micro Filtration Membrane - 1 No.<br>
                                TDS Modulator - 1 No.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-manual py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4">
                    <h2 class="text-primary mb-3">Product Manual</h2>
                    <a class="pdf-download" href="#"><img src="{{asset('')}}img/downloadpdf_icon.webp" class="mr-4"> Download PDF <img src="{{asset('')}}img/downloadpdf_icon2.png" class="ml-4"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="border: 1px solid #666;">
                <div class="card-body">
                    <div class="card-body">
                        <p class="text-primary">Disclaimers:</p>
                        <ul style="margin: 0; padding: 0;">
                            <li>1. 7.8 to 8.1 under running water conditions</li>
                            <li>2. Under test condition Input TDS – 750 PPM, Turbidity &lt; 1 NTU, Input pressure – 10 psi, Input Hardness – Upto 300 ppm, Temp. – Room temp. </li>
                            <li>3. Assumption: 5 membered family needing 20 litres of water every day (4 litres per person per day).</li>
                            <li>4. For all water contact parts.</li>
                            <li>5. Permeate flow rate and recovery are based on standard test conditions and may vary depending on input water quality, TDS, pressure and life of Filter elements.</li>
                            <li>6. Input water quality and TDS content are important determinants of output water quality.</li>
                            <li>7. If input pressure exceeds 30 PSI, please install a company provided pressure reducing valve at an additional cost.<br>
                                If the pressure is less than 10 PSI then you need to buy ‘Pressure enhancing pump’ at an additional cost.
                                Device should not be installed in a house where input pressure is greater than 60 PSI. <br>
                                Post-RO Carbon Filter fitted in the device may need to be changed intermittently at extra cost in case you face smell issues. <br>
                                Technical specifications are subject to change or improvement without prior notice.</li>
                            <li>8. In case the TDS is &gt;1000 PPM, a company provided anti-scalant is recommended to be installed This has to be purchased at extra cost.</li>
                            <li>9. If the iron content in the input water is high, it is recommended to install a company provided iron removal filter at an additional cost.</li>
                            <li>10. Physical product may vary from the image on the website</li>
                        </ul>
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
