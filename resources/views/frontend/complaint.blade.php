@extends('frontend.layouts.master')
@section('title','Complaint')
@section('content')
<div class="customer-complaint-header">
    <img src="{{('frontend')}}/images/Header_Complaint.webp" class="img-fluid" alt="">
</div>


<!--start products area-->
<section class="Products-area clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-header mb-5 ">
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
                            <div class="products-item">
                                <div class="product-item text-center">
                                    <div class="product-s-img">
                                        <img src="{{('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" alt="Image">
                                    </div>
                                    <div class="product-s-txt p-2">
                                        <h5 class="text-primary">Pureit Classic 23L</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="products-item">
                                <div class="product-item text-center">
                                    <div class="product-s-img">
                                        <img src="{{('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" alt="Image">
                                    </div>
                                    <div class="product-s-txt p-2">
                                        <h5 class="text-primary">Pureit Classic 23L</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="products-item">
                                <div class="product-item text-center">
                                    <div class="product-s-img">
                                        <img src="{{('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" alt="Image">
                                    </div>
                                    <div class="product-s-txt p-2">
                                        <h5 class="text-primary">Pureit Classic 23L</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="products-item">
                                <div class="product-item text-center">
                                    <div class="product-s-img">
                                        <img src="{{('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" alt="Image">
                                    </div>
                                    <div class="product-s-txt p-2">
                                        <h5 class="text-primary">Pureit Classic 23L</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="products-item">
                                <div class="product-item text-center">
                                    <div class="product-s-img">
                                        <img src="{{('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" alt="Image">
                                    </div>
                                    <div class="product-s-txt p-2">
                                        <h5 class="text-primary">Pureit Classic 23L</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="products-item">
                                <div class="product-item text-center">
                                    <div class="product-s-img">
                                        <img src="{{('frontend')}}/images/3c48c93f39acfaece66f6115395005cb.webp" alt="Image">
                                    </div>
                                    <div class="product-s-txt p-2">
                                        <h5 class="text-primary">Pureit Classic 23L</h5>
                                    </div>
                                </div>
                            </div>
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
            <div class="col-6">
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
        <form action="#">
            <div class="row mt-4">
                <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="First name">

                    <input type="text" class="form-control mb-3" placeholder="Email">

                    <textarea placeholder="Address" name="" id="" cols="30" rows="3" class="form-control mb-3"></textarea>

                    <select name="" id="" class="custom-select mb-3">
                        <option value="">Choose your complaint title</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                        <option value="">Option 3</option>
                    </select>

                    <textarea placeholder="Complaint Detailed Description" name="" id="" cols="30" rows="3" class="form-control mb-3"></textarea>

                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="Last name">

                    <input type="text" class="form-control mb-3" placeholder="+88">

                    <label>Complaint Image</label>
                    <input type="file" name="" class="form-control mb-3">

                    <select name="" id="" class="custom-select mb-3">
                        <option value="">Choose your complaint details</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                        <option value="">Option 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
