@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = $Product->BrowserTitle;
    $keywords =  $Product->SeoKeyword;
    $description =  $Product->SeoDescription;
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

<style>
    .box-8 {
        width: 12.5%;
        padding: 10px;
        border: 1px solid #666;
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





<section class="modal-section">
    <div style="top: 110px; padding-right: 17px;" class="modal fade show" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Order Water Purifier</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{url('order-gkk')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label style="color:#0049bc;" for="name">Your Name
                            </label>
                            <input type="text" class="form-control" id="name" name="Name" placeholder="Enter Your Name">
                            <input type="hidden" class="form-control" id="name" name="ProductId" value="{{$Product->id}}">
                        </div>
                        <div class="form-group">
                            <label style="color:#0049bc;" for="mobile">Mobile
                            </label>
                            <input type="text" class="form-control" id="mobile" name="Mobile" placeholder="Enter Your Mobile">
                        </div>
                        <div class="form-group">
                            <label style="color:#0049bc;" for="address">Address
                            </label>
                            <textarea type="text" class="form-control" id="address" name="Address" placeholder="Enter Your Address"></textarea>
                        </div>
                        <button style="width:100%;background-color:#0049bc;border-color:black;" type="submit" class="btn btn-primary">Submit Order</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #cee7ff">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol style="background-color: #cee7ff" class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('')}}water-filter-price-bangladesh">Purifier</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$Product->Model}}</li>
            </ol>
        </nav>
    </div>
</section>



<section class="product-details-area bg-light">
    <section style="background-color: white;margin-top: 30px;">
        <div class="container">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible" style="width: 100%;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="row">
                <div style="padding: 40px 30px 0px 30px;" class="col-md-6 produci-img-left-box">
                    <div style="text-align: center" class="product-d-image">
                        <img  src="{{asset('')}}{{$Product->image->imageurl}}" alt="{{$Product->ImageAltText}}" title="{{$Product->ImageTitleText}}">
                    </div>
                </div>
                <div style="padding: 40px 30px 0px 30px;" class="col-md-6 produci-shortcontent-right-box">
                    <div class="product-short-info">
                        <h1 style="font-size: 18px;padding:4px 0px;">{{$Product->SeoHeading}}</h1>
                        <h5 style="font-size: 16px;color:#0049bc"><strong>{{$Product->Name}}</strong></h5>
                        <table class="product-info-table">
                            <tbody>
                            <tr class="product-info-group">
                                <td style="font-weight: bold;display: block;position: relative;margin-right: 20px;" class="product-info-label">Model</td>
                                <td class="product-info-data product-price">{{$Product->Model}}</td>
                            </tr>
                            @if($Product->PriceStatus == 1)
                            <tr class="product-info-group">
                                <td style="font-weight: bold;display: block;position: relative;margin-right: 20px;" class="product-info-label">Price</td>
                                <td class="product-info-data product-price">{{$Product->CurrentPrice}}</td>
                            </tr>
                            <tr class="product-info-group">
                                <td style="font-weight: bold;display: block;position: relative;margin-right: 20px;"  class="product-info-label">Regular Price</td>
                                <td class="product-info-data product-regular-price">{{$Product->RegularPrice}}</td>
                            </tr>
                            @endif

                            @if(Auth::check() && Auth::user()->partner=='yes')
                            <tr class="product-info-group">
                                <td style="font-weight: bold;display: block;position: relative;margin-right: 20px;"  class="product-info-label">Partner Price</td>
                                <td class="product-info-data product-regular-price">{{$Product->PartnerPrice}}</td>
                            </tr>
                            @endif
                            <tr class="product-info-group">
                                <td style="font-weight: bold;display: block;position: relative;margin-right: 20px;"  class="product-info-label">Status</td>
                                <td class="product-info-data product-status">In Stock</td>
                            </tr>

                            <tr class="product-info-group"  itemscope="">
                                <td style="font-weight: bold;display: block;position: relative;margin-right: 20px;"  class="product-info-label">Brand</td>
                                <td class="product-info-data product-brand">{{$Product->productBrand->BrandName}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="short-description">
                        <h2 style="font-size: 17px;font-weight: bold;">Features</h2>
                        {!! html_entity_decode($Product->ProductShortDescription) !!}
                    </div>
                    <div class="product-d-details text-right">
                        <p style="text-align: left;">
                           <span style="display: inline-block;background-color: #4eabc7;padding: 4px 6px;color: white;font-weight: bold;border-radius: 6px;">In Stock: {{$Product->Stock}} Pcs</span>
                            <a style="display: inline-block;background-color:#0049bc;padding: 10px 15px;color:white;font-weight: bold;"  id="cartStore" href="{{$Product->id}}">Add To Cart</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="container">
        @php
            $Counter = 0;
        @endphp
        @foreach($Product->productAbout as $ProductAbout)
            @php
                $Counter = $Counter+1;
            @endphp
            @if($Counter % 2 == 0)
        <div class="row my-5 py-4">
            <div class="col-md-8">
                <div class="product-item-txt">
                    <h3 style="color:#063567" >{{$ProductAbout->Title}}</h3>
                    <p>
                        {{$ProductAbout->Content}}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item-img">
                    <img src="{{asset('')}}{{$ProductAbout->featuredimage->imageurl}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        @else
        <div class="row my-5 py-4">
            <div class="col-md-4">
                <div class="product-item-img">
                    <img src="{{asset('')}}{{$ProductAbout->featuredimage->imageurl}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="product-item-txt text-right">
                    <h3 style="color:#063567" >{{$ProductAbout->Title}}</h3>
                    <p>
                        {{$ProductAbout->Content}}
                    </p>
                </div>
            </div>
        </div>
        @endif
       @endforeach
    </div>
</section>




<!--<section class="product-feauture-section py-4 bg-light">
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
</section>-->





<section class="product-specification py-5 bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach($Product->productFeature as $Feature)
                <div class="box-8" style="border-left: 1px solid #666;">
                    <div class="sp-img">
                        <img src="{{asset('')}}{{$Feature->image->imageurl}}" alt="img">
                    </div>
                    <div class="sp-txt">
                        <h6>{{$Feature->Title}}</h6>
                        <p>{{$Feature->Content}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




<!--<section class="product-specification-kit py-5 bg-light">
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
</section>-->





<section class="product-manual">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title text-center mb-4">
                    @if($Product->Datasheet !== '#')
                    <h2 class="text-primary mb-3">Product Manual</h2>
                    <a class="pdf-download" href="{{asset('')}}{{$Product->Datasheet}}">
                        <img src="{{asset('')}}img/downloadpdf_icon.webp" class="mr-4"> Download PDF <img src="{{asset('')}}img/downloadpdf_icon2.png" class="ml-4">
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
                <div style="margin-bottom: 20px;" class="manual-infobox col-sm-12">
                    {!! html_entity_decode($Product->Specification) !!}
                </div>
        </div>
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
