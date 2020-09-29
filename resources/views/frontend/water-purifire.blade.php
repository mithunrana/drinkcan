@extends('frontend.layouts.master')
@section('title','Water Purifire')
@section('content')
<div class="purifire-header py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ph-txt mb-4">
                    <h3 class="text-primary">A purity promise that will last you a lifetime</h3>
                    <h5>Choose the water purifier that best suits your needs & budget</h5>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="purifire-category mb-3 mb-md-0">
                    <img src="{{asset('frontend')}}/images/allproductsliststabs_img01-new.webp" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="purifire-category mb-3 mb-md-0">
                    <img src="{{asset('frontend')}}/images/allproductsliststabs_img01-new.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4 text-muted">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, dolorum incidunt deserunt veritatis odio, labore non. Fuga consequatur pariatur nisi voluptatibus, deleniti perferendis doloribus earum ipsum incidunt suscipit, nostrum ducimus dolores autem esse at iste velit nesciunt, quisquam. Adipisci, recusandae? Hic voluptate molestiae quo eligendi, necessitatibus aliquam, eaque atque nisi.</p>
            </div>
        </div>
    </div>
</div>

<!--start product section-->
<section class="product-area clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <select name="" id="" class="form-control">
                    <option value="">Category name</option>
                    <option value="">Category name</option>
                    <option value="">Category name</option>
                </select>
            </div>
            <div class="col-md-3 mb-4">
                <select name="" id="" class="form-control">
                    <option value="">Category name</option>
                    <option value="">Category name</option>
                    <option value="">Category name</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('frontend')}}/images/product-img.jpg" class="img-fluid" alt="Image">
                        </a>
                    </div>
                    <div class="product-txt text-center">
                        <div class="prodcut-buy">
                            <a href="#">Buy Now</a> |
                            <a href="#">Details</a>
                        </div>
                        <div class="product-title">
                            <h5 class="my-2"><a href="#">Pureit Mineral Ultima RO + UV + MF</a></h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>৳25,000</del></p>
                            <p class="product-discount-price">৳23,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('frontend')}}/images/product-img.jpg" class="img-fluid" alt="Image">
                        </a>
                    </div>
                    <div class="product-txt text-center">
                        <div class="prodcut-buy">
                            <a href="#">Buy Now</a> |
                            <a href="#">Details</a>
                        </div>
                        <div class="product-title">
                            <h5 class="my-2"><a href="#">Pureit Mineral Ultima RO + UV + MF</a></h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>৳25,000</del></p>
                            <p class="product-discount-price">৳23,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('frontend')}}/images/product-img.jpg" class="img-fluid" alt="Image">
                        </a>
                    </div>
                    <div class="product-txt text-center">
                        <div class="prodcut-buy">
                            <a href="#">Buy Now</a> |
                            <a href="#">Details</a>
                        </div>
                        <div class="product-title">
                            <h5 class="my-2"><a href="#">Pureit Mineral Ultima RO + UV + MF</a></h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>৳25,000</del></p>
                            <p class="product-discount-price">৳23,000</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col mt-4">
                <h3 class="text-primary">Why do you need a water purifier?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, itaque eius nam facere similique dolorem. Ducimus repudiandae quisquam eum fugit culpa quo hic reiciendis architecto laboriosam. Non unde, laudantium, laboriosam quibusdam harum officia deserunt. Perferendis dolorem assumenda iusto delectus tempore veniam quod a dolore nostrum officiis eaque illo reiciendis harum cumque ad quo, sapiente, aperiam nam provident unde, modi. Blanditiis ad doloremque, laudantium eveniet nam nobis, natus sit sunt laborum ducimus quasi quos ex neque dolorem odio, officia pariatur repellendus?</p>
            </div>
        </div>
    </div>

</section>
<!--end product section-->
@endsection
