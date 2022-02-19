
@php
    $SiteProfile = App\SiteProfile::first();

    $title = "Water Purifier Kit Price In India | Drinkcan";
    $keywords =  "drinkit water purifier kit price in India, water filter stand price in bd, water filter price in India";
    $description =  "Drinkcan provide Water Purifier Kit Price In India also drincan sell water purifier in India";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

<div class="gkk-title py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="background-color:#0049bc;text-align: center;color: white;font-size: 21px;" class="text-light p-1" style="color: #00adee;">Water Purifier Kit Price In India</h1>
            </div>
        </div>
    </div>
</div>

<section class="gkk-section clearfix py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="gkk-product-img">
                    <img src="{{asset('')}}productsImage/drinkcan-grand.png" class="img-fluid" alt="drinkcan">
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
                            <option value="" selected disabled>====SELECT KIT MODEL====</option>
                            @foreach(\App\Products::orderBy('id','DESC')->where('ProductsType',2)->get() as $Category)
                                <option value="{{$Category->id}}">{{$Category->Model}}</option>
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
                        <input class="btn btn-primary" type="submit" value="Order">
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div style="background: #f9f9f9;" class="gkk-select-product card-body">
                    <h4 style="border-bottom: 2px solid #ccc;color: #0049bc;" class="pt-3 pb-2 mb-5">Select Product</h4>
                    @php
                        $Products = \App\Products::where('ActiveStatus',1)->where('ProductsType',2)->orderBy('id','DESC')->get()
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
                                                    <h4 style="color:#0049bc;font-size: 23px;">{{$Product->Model}}</h4>
                                                    <h5 style="color:#002661;">{{$Product->Name}}</h5>
                                                    @if($Product->PriceStatus == 1)<h5>৳ {{$Product->CurrentPrice}}</h5>@endif
                                                    <p class="text-muted">Standard Delivery Charge Applicable</p>
                                                    @if($Product->Stock>0)
                                                        <span style="display: inline-block;background-color: #4eabc7;padding: 4px 6px;color: white;font-weight: bold;border-radius: 6px;">
                                                           In Stock
                                                        </span>
                                                        <a style="display: inline-block;background-color:#0049bc;color:white;font-weight: bold;padding:10px;"  id="cartStore" href="{{$Product->id}}"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                                    @else
                                                        <span style="display: inline-block;background-color: #cd4658;padding: 4px 6px;color: white;font-weight: bold;border-radius: 6px;" >
                                                           Out Of Stock
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="select-gkk-img">
                                            <img src="{{asset('')}}{{$Product->image->imageurl}}" title="{{$Product->ImageTitleText}}" alt="{{$Product->ImageAltText}}">
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
            var ProductId = $('#categorychange').val();
            $('#setproductid').prop('value',ProductId);
            $.ajax({
                dataType: 'html',
                url:"{{ url('categoryproduct') }}",
                method:'GET',
                data:{ProductId:ProductId},
                success:function(response){
                    console.log(response);
                    $("#productsection").html(response);
                }
            })
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
