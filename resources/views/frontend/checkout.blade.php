@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Checkout | Drinkcan India";
    $keywords =  "registration, login, signup, user panel, dirnkcan, how to login, how to registraion in drinkcan";
    $description =  "Drinkcan India Login Here get more user facilities from user site. if you don't have account in drinkcan India easily signup";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

        @php
        $Subtotal = Cart::subtotalFloat();
        $vatpercent = $cartSetting->vat;
        $vat = $Subtotal/100*$vatpercent;
        $shippingCharge = $cartSetting->shipping;
        $total = Cart::subtotalFloat()+ $vat+$shippingCharge;
        @endphp


<section class="py-5">
    <div class="container">
       <form action="{{url('confirm-order')}}" method="post">
        <div class="row">
                <div class="col-md-8">
                    <div class="cart-table">
                        <div class="card-body card" data-select2-id="41">
                               @csrf
                                <h3 class="card-title">Shipping details</h3>
                                <div class="form-group mb-3">
                                    <p style="background-color: #8acfff;padding: 15px;font-size: 18px;">Already have an account? <a href="{{asset('')}}login">Login</a></p>
                                </div>
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" name="Name" value="{{old('Name')}}" placeholder="Full name" class="form-control{{$errors->has('Name') ? ' is-invalid' : ''}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('Name'))?($errors->first('Name')):''}}</div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="">Mobile</label>
                                        <input type="text" name="Mobile" value="{{old('Mobile')}}" placeholder="Phone number" class="form-control{{$errors->has('Mobile') ? ' is-invalid' : ''}}">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('Mobile'))?($errors->first('Mobile')):''}}</div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">Email</label>
                                        <input type="text" name="Email" value="{{old('Email')}}" placeholder="Email" class="form-control{{$errors->has('Email') ? ' is-invalid' : ''}}">
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('Email'))?($errors->first('Email')):''}}</div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="">Division</label>
                                            <select class="form-control m-0 first_null not_chosen" name="City" id="division_id">
                                            <option value="">Select Division</option>
                                                @foreach($Divisions as $Division)
                                                    <option value="{{$Division->id}}">{{$Division->DivisionName}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="">District</label>
                                        <select class="form-control m-0 first_null not_chosen" name="City" id="district_id">
                                            <option value="">Select District</option>
                                        </select>
                                        <div style='color:red; padding: 0 5px;'>{{($errors->has('City'))?($errors->first('City')):''}}</div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Full Address</label>
                                    <textarea name="Address"  value="{{old('Address')}}" id="" rows="4" class="form-control" placeholder="Full Address"></textarea>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('Address'))?($errors->first('Address')):''}}</div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" name="agree" value="1" checked="checked">
                                    I have read and agree to the 
                                    <a href="{{asset('')}}terms-condition" target="_blank"><b>Terms and Conditions</b></a>, 
                                    <a href="{{asset('')}}privacy-policy" target="_blank"><b>Privacy Policy</b></a>
                                    and 
                                    <a href="{{asset('')}}return-refund-policy" target="_blank"><b>Refund and Return Policy</b></a>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('agree'))?($errors->first('agree')):''}}</div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{asset('')}}" class="btn btn-info btn-block btn-block mb-0 mb-md-2">Continue Shopping</a>
                                    </div>
                                    <div class="col-md-6">
                                            <input type="submit" value="Confirm Order" class="btn btn-primary btn-block btn-block mb-0 mb-md-2">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="cart-total-table">
                        <table class="table table-bordered table-striped">
                           <tr>
                                <th colspan="2"> Shoping Amount</th>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td>{{Cart::subtotalFloat()}} Tk</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td id="shipingcharge" shc="{{$shippingCharge}}">{{$shippingCharge}} Tk</td>
                            </tr>
                            <tr>
                                <td>Vat</td>
                                <td>{{$vat}}<span> (</span>{{$cartSetting->vat}}<span>%)</span> Tk</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th id="totalcharge" tc="{{$total}}">{{$total}} Tk</th>
                            </tr>
                        </table>
                    </div>
                    <div class="card">
                       <div class="card-body">
                            <div class="page-section ws-box">
                                <div class="section-head">
                                    <h2>Payment Method</h2>
                                </div>
                                <p>Select a payment method</p>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('payment_method'))?($errors->first('payment_method')):''}}</div>
                                <label class="radio-inline">
                                <input type="radio" name="payment_method" value="COD" checked="checked">
                                    Cash on Delivery</label>
                                <label class="radio-inline">
                                    <input type="radio" name="payment_method" value="Online">
                                    Online Payment</label>
                                <div class="accepted-logo">
                                    <h5>We Accepted : </h5>
                                    <a href="#"><img class="logo logo-visa" src="https://www.startech.com.bd/catalog/view/theme/starship/images/card-logo.png"></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="page-section ws-box">
                                <div class="section-head">
                                    <h2>Delivery Method</h2>
                                </div>
                                <p>Select a delivery method</p>
                                <div style='color:red; padding: 0 5px;'>{{($errors->has('shipping_method'))?($errors->first('shipping_method')):''}}</div>
                                 <label class="radio-inline">
                                <input type="radio" name="shipping_method" class="DeliveryMethod" value="HomeDelivery" checked="checked">
                                <input type="hidden" name="regdeliverycharge" class="regdeliverycharge" value="{{$cartSetting->shipping}}">
                                   Home Delivery - 60৳ </label>
                                   
                                <input type="radio" class="DeliveryMethod" name="shipping_method" value="Pickup">
                                    Store Pickup - 0৳</label><br><br>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


@section('CustomJS')
    <script>
    $(function() {
        $(document).on('change', '#division_id', function() {
            var division_id = $(this).val();
            $.ajax({
                type: "Get",
                url: "{{url('/get/division/')}}/" + division_id,
                dataType: "json",
                success: function(data) {
                    var html = '<option value="">Select District</option>';
                    $.each(data, function(key, val) {
                        html += '<option value="' + val.id + '">' + val.Name + '</option>';
                    });
                    $('#district_id').html(html);
                },

            });
        });
    });
        
    $(".DeliveryMethod").click(function(){
            let regdeliverycharge = $(".regdeliverycharge").val()
            var radioValue = $("input[name='shipping_method']:checked").val();
            var shipingcharge = $('#shipingcharge').attr('shc');
            var TotalCharge = $('#totalcharge').attr('tc');
            if(radioValue==='Pickup'){
                $('#totalcharge').html(TotalCharge-shipingcharge);
                $('#shipingcharge').html(0);
            }else{
               $('#totalcharge').html(TotalCharge);
               $('#shipingcharge').html(regdeliverycharge);
            }
     });
</script>
@endsection


<!--end login form area-->
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
