<div class="sbc-content">
    @if(Cart::count() == 0)
    <img class="sbc-empty-img img-fluid" src="{{asset('frontend/assets/img/empty-cart.jpg')}}" alt="img">
    @else
    <div class="sbc-cart-items">
        <ul class="cart_list">
            @foreach(Cart::content() as $product)
            <li>
                <a href="#" class="item_remove cartdelete" id="{{ $product->rowId }}"><i class="fa fa-times"></i></a>
                <a href="{{route('product.details',$product->options->slug)}}"><img src="{{asset($product->options->image)}}" alt="cart_thumb2">{{Str::limit($product->name,60)}}</a>
                <p class="mb-2"><span>Color : <span> @if($product->options->color) {{$product->options->color}} @else N/A @endif</span></span>
                    <span class="ml-3">Size : <span>@if($product->options->size) {{$product->options->size}} @else N/A @endif</span></span>
                </p>
                <p class="sbc-amm"><span class=""> {{$product->qty}} x <span class="cart_amount"> <span class="price_symbole">৳</span></span>{{$product->price}}</span></p>
            </li>
            
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="sbc-footer d-flex">
    <div class="sbc-total text-center">
        <p>মোট দাম</p>
        <span>৳ {{Cart::subtotalFloat()}}</span>
    </div>
    <div class="sbc-proccess">
        <a href="{{route('cart')}}" @if(Cart::subtotalFloat() == 0)  style=" cursor: not-allowed; pointer-events: none;" @endif>কার্ট পেজ</a>
    </div>
</div>
