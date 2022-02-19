@foreach($Products as $Product)
                       <div style="border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 30px;" class="select-pro-item">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="media">
                                    <div class="radio_list mr-4">
                                        <input type="radio" name="dd" value="'.$Product->id.'" class="productid">
                                    </div>
                                    <div class="media-body">
                                        <div class="select-product-title">
                                            <h5 style="color:#00adee;">{{$Product->Name}}</h5>
                                            <h5>৳{{$Product->CurrentPrice}}</h5>
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
                                    <img src="{{$Product->image->imageurl}}" title="" alt="'.$Product->ImageAltText.'">
                                </div>
                            </div>
                        </div>
</div>
@endforeach