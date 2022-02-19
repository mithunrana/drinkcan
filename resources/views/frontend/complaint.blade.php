@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Complaint for Drinkcan Water Purifier In India";
    $keywords =  "Drinkcan water purifier in India, water filter price in India, water purifier price in India";
    $description =  "Complaint here about drinkcan water purifier. or if you want to purchase the purifier contact with us get best price with best product";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

<div class="about-header">
    <img src="{{asset('frontend')}}/images/about-drinkcan.jpg" class="img-fluid" alt="drinkcan">
</div>


<!--start products area-->
<section class="Products-area clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Drinkcan water purifier product Complaint</h1>
                <div class="section-header ">
                    <h5 class="text-muted">Select Product:</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="products-box">

                    <i class="fa fa-angle-left prv ps-control"></i>
                    <i class="fa fa-angle-right nxt ps-control"></i>

                    <div class="products-slider-width">
                        <div class="products-slider products-slider-custom">
                            <!--product-item-->
                            @foreach(\App\Products::where('ActiveStatus',1)->orderBy('id','DESC')->get() as $Products)
                            <div style="padding: 10px;" class="products-item">
                                <div style="background-color: #f1f1f1;">
                                    <input type="radio" name="dd" value="{{$Products->id}}" class="productid" style="height: 20px;width: 20px;">
                                    <div class="product-item text-center">
                                        <div class="product-s-img">
                                            <img src="{{asset('')}}{{$Products->image->imageurl}}" class="img-fluid" alt="{{$Products->ImageAltText}}">
                                        </div>
                                        <div class="product-s-txt p-2">
                                            <h5 style="color:#0049bc;display: inline-block;width: 100%;text-align: center;">{{$Products->Model}}</h5>
                                            <h6 style="text-align: center;">{{$Products->Name}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end products area-->


<section class="having-problem clearfix py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="media">
                    <img src="{{('frontend')}}/images/complaintreg_icon.png" class="img-fluid" alt="Image" style="width: 62px;margin-right: 10px;">
                    <div class="media-body">
                        <p class="text-muted">
                            Having a problem with your Drinkcan water Purifier?
                            Fill in the details of your issue below and we’ll make sure we fix it for you!
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <form method="POST" action="{{url('complain-store')}}">
                @csrf
                <div class="row mt-4">
                    <div class="col-md-6">
                        @if($errors->has('ProductId'))
                            <small style="color:red;"> Product Select Must Be Required</small>
                        @endif
                        <input type="hidden" class="form-control mb-3 py-2" name="ProductId" value="{{old('ProductId')}}" id="setproductid">
                            @if($errors->has('Name'))
                                <small style="color:red;"> {{$errors->first('Name')}}</small>
                            @endif
                        <input style="border-radius:0px;" type="text" class="form-control mb-3" name="Name" value="{{old('Name')}}"  placeholder="Name">
                        <input style="border-radius:0px;" type="text" class="form-control mb-3" name="Email" value="{{old('Email')}}" placeholder="Email">
                        <textarea style="border-radius:0px;" placeholder="Complaint Detailed Description" name="ComplainDetails" id="" cols="30" rows="3" class="form-control mb-3">{{old('ComplainDetails')}}</textarea>
                    </div>

                    <div class="col-md-6">
                        @if($errors->has('Name'))
                            <small style="color:red;"> {{$errors->first('Mobile')}}</small>
                        @endif
                        <input style="border-radius:0px;" type="text" class="form-control mb-3" name="Mobile" value="{{old('Mobile')}}"  placeholder="Mobile">
                            @if($errors->has('ComplainType'))
                                <small style="color:red;"> {{$errors->first('ComplainType')}}</small>
                            @endif
                        <select style="border-radius:0px;" name="ComplainType"  id="" class="custom-select mb-3">
                            <option value="">Select Complain Type</option>
                            <option value="6350">Device Not Working</option>
                            <option value="6353">GKK Order</option>
                            <option value="6354">Installation</option>
                            <option value="6357">Mandetroy Service</option>
                            <option value="6356">Low Filteration</option>
                        </select>
                            @if($errors->has('Name'))
                                <small style="color:red;"> {{$errors->first('Address')}}</small>
                            @endif
                        <textarea style="border-radius:0px;" placeholder="Address" name="Address" id="" cols="30" rows="3" class="form-control mb-3">{{old('Address')}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input style="background:#00adee;color:white;" class="btn btn-lg" type="submit" value="Submit">
                    </div>
                </div>
            </form>
    </div>
</section>

@include('frontend.inc.footer')
@include('frontend.inc.footersource')

<script>
    $(document).ready(function() {
        $(document).on('click', '.productid', function(){
            $productid = $(this).val();
            $('#setproductid').prop('value',$productid);
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
