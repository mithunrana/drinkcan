<div class="dropcart">
    @if(Cart::count() == 0)
    <tr>
        <p class="text-center m-0">কার্টে কোনও পণ্য নেই</p>
    </tr>
    @else
    <ul class="dropcart__list">
        @foreach(Cart::content() as $product)
        <li class="dropcart__item">
            <div class="dropcart__item-image image image--type--product"><a class="image__body" href="product-full.html"><img class="image__tag" src="{{asset($product->options->image)}}" alt=""></a></div>
            <div class="dropcart__item-info">
                <div class="dropcart__item-name"><a href="{{route('product.details',$product->options->slug)}}">{{Str::limit($product->name,20)}}</a></div>
                <div class="dropcart__item-meta">
                    <div class="dropcart__item-quantity">{{$product->qty}}</div>
                    <div class="dropcart__item-price">৳{{$product->price}}</div>
                </div>
            </div>
            <button type="button" class="dropcart__item-remove cartdelete" id="{{ $product->rowId }}">
                <svg width="10" height="10">
                    <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z"></path>
                </svg>
            </button>
        </li>
        <li class="dropcart__divider" role="presentation"></li>
        @endforeach
    </ul>
    <div class="dropcart__totals">
        <table>
            <tr>
                <th  style="font-size:14px;font-weight:600">প্রোডাক্টের মোট দাম</th>
                <td>৳{{Cart::subtotalFloat()}}</td>
            </tr>
        </table>
    </div>
    <div class="dropcart__actions">
        <a href="{{route('cart')}}" class="btn btn-secondary">কার্ট পেজ</a>
        <a href="{{route('checkout')}}" class="btn btn-primary">চেক আউট</a>
    </div>
    @endif
</div>
