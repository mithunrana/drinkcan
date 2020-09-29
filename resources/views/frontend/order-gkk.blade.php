@extends('frontend.layouts.master')
@section('title','Order GKK')
@section('content')
<div class="gkk-title py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="bg-primary text-light p-1" style="display: inline;">Order Pureit Classic Germkill</h2>
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
                <div class="gkk-product-form">
                    <h4>Pureit Classic 23L</h4>
                    <form action="#">
                        <select name="" class="form-control mb-3">
                            <option value="">Pureit Classic 23L</option>
                            <option value="">Pureit Classic 23L</option>
                            <option value="">Pureit Classic 23L</option>
                        </select>
                        <input type="text" class="form-control mb-3 py-2" placeholder="Name">
                        <input type="text" class="form-control mb-3 py-2" placeholder="+88">
                        <small>Please enter your number registered with Pureit.</small>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Submit">

                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="gkk-select-product card-body">
                    <h4 style="border-bottom: 2px solid #ccc;" class="text-primary pt-3 pb-2 mb-5">Select Germkill Kit™</h4>

                    <div style="border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 30px;" class="select-pro-item">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="media">
                                    <div class="radio_list mr-4">
                                        <input type="radio" name="dd" id="">
                                    </div>
                                    <div class="media-body">
                                        <div class="select-product-title">
                                            <h5 class="text-primary">CLASSIC GKK (1500 LITRES)</h5>
                                            <h5>৳ 700*</h5>
                                            <p class="text-muted">Standard Delivery Charge Applicable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="select-gkk-img">
                                    <img src="{{asset('frontend')}}/https://www.pureitwater.com/BD/uploads/gkk/b6f6aeb9c5cc91c530dff10fe3249e22.JPG" title="CLASSIC GKK (1500 LITRES)" alt="CLASSIC GKK (1500 LITRES)">
                                </div>

                            </div>
                        </div>


                    </div>
                    <div style="border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 15px;" class="select-pro-item">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="media">
                                    <div class="radio_list mr-4">
                                        <input type="radio" name="dd" id="">
                                    </div>
                                    <div class="media-body">
                                        <div class="select-product-title">
                                            <h5 class="text-primary">CLASSIC GKK (1500 LITRES)</h5>
                                            <h5>৳ 700*</h5>
                                            <p class="text-muted">Standard Delivery Charge Applicable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="select-gkk-img">
                                    <img src="{{asset('frontend')}}/https://www.pureitwater.com/BD/uploads/gkk/b6f6aeb9c5cc91c530dff10fe3249e22.JPG" title="CLASSIC GKK (1500 LITRES)" alt="CLASSIC GKK (1500 LITRES)">
                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
