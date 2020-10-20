
@php
    $SiteProfile = App\SiteProfile::first();

    $title = "Water Purifier Kit Price In Bangladesh | Drinkcan";
    $keywords =  "drinkit water purifier kit price in bangladesh, water filter stand price in bd, water filter price in bangladesh";
    $description =  "Drinkcan provide Water Purifier Kit Price In Bangladesh also drincan sell water purifier in bangladesh";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')

<div class="gkk-title py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="background-color:#0049bc;text-align: center;color: white;font-size: 21px;" class="text-light p-1" style="color: #00adee;">Water Purifier Kit Price In Bangladesh</h1>
            </div>
        </div>
    </div>
</div>

<section class="gkk-section clearfix py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="gkk-product-img">
                    <img src="{{asset('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" class="img-fluid" alt="">
                </div>
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{Session::get('message')}}
                    </div>
                @endif
                <div class="gkk-product-form">
                    <h4>Drinkcan Water Purifier</h4>
                    <form action="{{url('order-gkk')}}" method="post">
                        @csrf
                        @if($errors->has('ProductId'))
                            <small style="color:red;"> Must Select Someone Product</small>
                        @endif
                        <select id="categorychange" name="category" class="form-control mb-3">
                            <option value="" selected disabled>====SELECT OPTIONS====</option>
                            @foreach(\App\ProductsPrimaryCategory::orderBy('id','DESC')->get() as $Category)
                            <option value="{{$Category->id}}">{{$Category->CategoryName}}</option>
                            @endforeach
                        </select>
                        <input type="hidden" class="form-control mb-3 py-2" name="ProductId" value="" id="setproductid">
                        <input type="text" class="form-control mb-3 py-2" value="{{old('Name')}}" placeholder="Name" name="Name">
                        @if($errors->has('Name'))
                            <small style="color:red;"> {{$errors->first('Name')}}</small>
                        @endif
                        <input type="text" class="form-control mb-3 py-2" value="{{old('Mobile')}}" placeholder="Mobile" name="Mobile">
                        @if($errors->has('Mobile'))
                            <small style="color:red;"> {{$errors->first('Mobile')}}</small>
                        @endif
                        <textarea type="text" class="form-control mb-3 py-2" placeholder="Enter Address" value="{{old('Address')}}" name="Address">{{old('Address')}}</textarea>
                        @if($errors->has('Address'))
                            <small style="color:red;"> {{$errors->first('Address')}}</small>
                        @endif
                        <small>Please enter your number registered with DrinkCan.</small>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="gkk-select-product card-body">
                    <h4 style="border-bottom: 2px solid #ccc;color: #00adee;" class="pt-3 pb-2 mb-5">Select Germkill Kit</h4>
                    @php
                    $Products = \App\Products::where('ActiveStatus',1)->orderBy('id','DESC')->get()
                    @endphp
                    <div id="productsection">
                        @foreach($Products as $Product)
                            <div style="border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 30px;" class="select-pro-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="media">
                                            <div class="radio_list mr-4">
                                                <input type="radio" name="dd" value="{{$Product->id}}" class="productid">
                                            </div>
                                            <div class="media-body">
                                                <div class="select-product-title">
                                                    <h5 style="color:#00adee;">{{$Product->Name}}</h5>
                                                    <h5>৳ {{$Product->CurrentPrice}}</h5>
                                                    <p class="text-muted">Standard Delivery Charge Applicable</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="select-gkk-img">
                                            <img src="{{$Product->image->imageurl}}" title="{{$Product->ImageTitleText}}" alt="{{$Product->ImageAltText}}">
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
</section>
<!--end home contact section-->
@include('frontend.inc.footer')
@include('frontend.inc.footersource')

<script>
    $(document).ready(function() {

        $(document).on('click', '.productid', function(){
            $productid = $(this).val();
            $('#setproductid').prop('value',$productid);
        });

        $('#categorychange').change(function(){
            var CategoryId = $('#categorychange').val();
            $.ajax({
                dataType: 'html',
                url:"{{ url('categoryproduct') }}",
                method:'GET',
                data:{CategoryId:CategoryId},
                success:function(response){
                    console.log(response);
                    $("#productsection").html(response);
                }
            })
        });
    });
</script>


</body>
</html>
