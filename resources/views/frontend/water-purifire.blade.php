@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "DrinkCAN | Water Purifier in Bangladesh";
    $keywords =  "DrinkCAN | Water Purifier in Bangladesh";
    $description =  "DrinkCAN | Water Purifier in Bangladesh";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')



<div class="purifire-header py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ph-txt mb-4">
                    <h3 style="color:#00adee">A purity promise that will last you a lifetime</h3>
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
            <div class="col-md-5 mb-4">
                <select id="categorychange" name="category" class="form-control mb-3">
                    <option value="" selected disabled>====SELECT CATEGORY====</option>
                    @foreach(\App\ProductsPrimaryCategory::orderBy('id','DESC')->get() as $Category)
                        <option value="{{$Category->id}}">{{$Category->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach(\App\Products::where('ActiveStatus',1)->orderBy('id','DESC')->get() as $Products)
            <div style="margin-top: 10px;" class="col-md-4">
                <div class="product-box">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{asset('')}}{{$Products->image->imageurl}}" class="img-fluid" alt="{{$Products->ImageAltText}}">
                        </a>
                    </div>
                    <div class="product-txt text-center">
                        <div class="prodcut-buy">
                            <a href="#">Buy Now</a> |
                            <a href="#">Details</a>
                        </div>
                        <div class="product-title">
                            <h5 class="my-2">
                                <a style="color:#00adee" href="{{asset('')}}{{$Products->CategoryDetails->CategoryUrl}}">{{$Products->CategoryDetails->CategoryName}}</a>
                            </h5>
                        </div>
                        <div class="product-price">
                            <p class="prodcut-sell-price mb-1"><del>৳25,000</del></p>
                            <p class="product-discount-price">৳23,000</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col mt-4">
                <h3 style="color:#00adee" >Why do you need a water purifier?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, itaque eius nam facere similique dolorem. Ducimus repudiandae quisquam eum fugit culpa quo hic reiciendis architecto laboriosam. Non unde, laudantium, laboriosam quibusdam harum officia deserunt. Perferendis dolorem assumenda iusto delectus tempore veniam quod a dolore nostrum officiis eaque illo reiciendis harum cumque ad quo, sapiente, aperiam nam provident unde, modi. Blanditiis ad doloremque, laudantium eveniet nam nobis, natus sit sunt laborum ducimus quasi quos ex neque dolorem odio, officia pariatur repellendus?</p>
            </div>
        </div>
    </div>

</section>
<!--end product section-->

@include('frontend.inc.footer')
@include('frontend.inc.footersource')
</body>
</html>
