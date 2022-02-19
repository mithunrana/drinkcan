@php
    $Subtotal = Cart::subtotalFloat();
    $vatpercent = $cartSetting->vat;
    $vat = $Subtotal/100*$vatpercent;
    $shippingCharge = $cartSetting->shipping;
    $total = Cart::subtotalFloat()+ $vat+$shippingCharge;
@endphp

@if(Cart::count() != null)
<div class="col-md-8">
    <div class="cart-table">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th style="width:125px;">Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(Cart::content() as $product)
                <tr>
                    <td><img style="width:50px" src="{{asset('')}}{{$product->options->image}}" alt="image"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td class="text-center text-md-left">
                        <div style="justify-content: center;margin: 0 auto;" class="quantity">
                            <input type="button" value="-" class="minus cart-minus qtyDec" data-qty="{{$product->qty}}" id="{{$product->rowId}}">

                            <input readonly type="text" name="quantity" value="{{$product->qty}}" min="1" title="Qty" class="qty input-number__input cart-input {{$product->rowId}}" size="4">

                            <input type="button" value="+" class="plus qtyInc cart-plus" id="{{$product->rowId}}">
                        </div>
                    </td>
                    <td>{{$product->total}}</td>
                    <td class="text-center"><a href="{{asset('')}}cart/delete/{{$product->rowId}}">X</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="col-md-4">
    <div class="cart-total-table">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Subtotal</th>
                <td>{{Cart::subtotalFloat()}}</td>
            </tr>
            <tr>
                <th>Shipping</th>
                <td>{{$shippingCharge}}</td>
            </tr>
            <tr>
                <th>Vat</th>
                <td>{{$vat}}<span> (</span>{{$cartSetting->vat}}<span>%)</span></td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{$total}}</td>
            </tr>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="{{asset('')}}" class="btn btn-info btn-block btn-block mb-0 mb-md-2">Continue Shopping</a>
            </div>
            <div class="col-md-6">
                <a href="{{asset('')}}checkout" class="btn btn-primary btn-block btn-block mb-0 mb-md-2">Checkout</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-sm-12">
    <h4 style="text-align:center">Your Shoping Cart Is Empty</h4>
    <a class="d-flex justify-content-around btn btn-info" href="{{asset('')}}" style="text-align:center">Continue Shoping</a>
</div>
@endif
