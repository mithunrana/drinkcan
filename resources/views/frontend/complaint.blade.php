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

<div class="customer-complaint-header">
    <img src="{{('frontend')}}/images/Header_Complaint.webp" class="img-fluid" alt="">
</div>


<!--start products area-->
<section class="Products-area clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col">
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
                            @foreach(\App\Products::where('ActiveStatus',1)->orderBy('id','DESC')->get() as $Product)
                            <div style="padding: 2px;" class="products-item">
                                <div style="background-color: #f1f1f1;">
                                    <input type="radio" name="dd" value="{{$Product->id}}" class="productid" style="height: 20px;width: 20px;">
                                    <div class="product-item text-center">
                                        <div class="product-s-img">
                                            <img src="{{('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" alt="Image">
                                        </div>
                                        <div class="product-s-txt p-2">
                                            <h5 style="color:#00adee;display: inline-block;width: 100%;text-align: center;">Pureit Classic 23L Pureit Classic 23L Pureit Classic 23L</h5>
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
                            Having a problem with your Pureit Purifier?
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
</body>
</html>
