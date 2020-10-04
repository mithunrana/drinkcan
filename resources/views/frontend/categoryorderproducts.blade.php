@foreach($Products as $Product)
    <div style="border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 30px;" class="select-pro-item">
        <div class="row">
            <div class="col-md-7">
                <div class="media">
                    <div class="radio_list mr-4">
                        <input type="radio" name="dd" id="">
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