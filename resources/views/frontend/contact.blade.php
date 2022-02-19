@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Contact | Drinkcan India";
    $keywords =  "drinkcan, support, India, help line, purifier, contact, contact number";
    $description =  "Drinkcan support in India, fetch problem about drinkcan product fell free to contact with us";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

    <div class="contact-header">
        <img style="width:100%;" src="{{asset('frontend')}}/images/drinkcan-water-purifier.jpg" class="img-fluid" alt="Drinkcan Water Purifier">
    </div>

    <section class="contact-us py-5">
        <div class="container">
            <div class="contact-us-box card card-body">
                <div class="row">
                    @if(Session::has('success'))
                        <div style="width: 100%;" class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <b>Successfully</b> Send Your Query As Soon As Possible We Contact With You....!
                        </div>
                    @endif
                    <div class="col-md-6">
                        <div class="contact-us-form">
                            <h4 class="text-primary font-weight-normal">Send a message to us</h4>
                            <div class="contact-form mt-4">
                                <form action="{{url('contact')}}" method="post">
                                    @csrf
                                    <label for="name">
                                        <b>Name</b>
                                        @if($errors->has('name'))
                                            <small style="color:red;"> {{$errors->first('name')}}</small>
                                        @endif
                                    </label>
                                    <input class="form-control mb-2" type="text" name="name" id="name" placeholder="Enter name">

                                    <label for="">
                                        <b>Email</b>
                                        @if($errors->has('name'))
                                            <small style="color:red;"> {{$errors->first('email')}}</small>
                                        @endif
                                    </label>
                                    <input class="form-control mb-2" type="email" name="email" id="email" placeholder="Enter email">

                                    <label for="phone_no">
                                        <b>Phone Number</b>
                                        @if($errors->has('phone_no'))
                                            <small style="color:red;"> {{$errors->first('phone_no')}}</small>
                                        @endif
                                    </label>
                                    <input class="form-control mb-2" type="text" name="phone_no" id="phone_no" placeholder="Enter phone number">

                                    <label for="address">
                                        <b>Address</b>
                                        @if($errors->has('address'))
                                            <small style="color:red;"> {{$errors->first('address')}}</small>
                                        @endif
                                    </label>
                                    <input class="form-control mb-2" type="text" name="address" id="address" placeholder="Enter address">

                                    <label for="enquiry_type">
                                        <b>Contact For</b>
                                        @if($errors->has('enquiry_type'))
                                            <small style="color:red;">Please Select Why You Contact</small>
                                        @endif
                                    </label>
                                    <select id="enquiry_type" name="enquiry_type" class="form-control">
                                        <option value="" selected="">Select Enquiry Type</option>
                                        <option value="job_enquiry">Job Enquiry</option>
                                        <option value="product_quality">Product Quality</option>
                                        <option value="technical_support">Technical Support</option>
                                        <option value="sales">Sales</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="website">Website</option>
                                    </select>

                                    <label for="usermessage">
                                        <b>Message</b>
                                        @if($errors->has('usermessage'))
                                            <small style="color:red;"> Please Type Something Write Here</small>
                                        @endif
                                    </label>
                                    <textarea placeholder="message" class="form-control mb-2" name="usermessage" id="usermessage" cols="30" rows="2"></textarea>
                                    <button class=" btn btn-primary"><i class="fa fa-paper-plane mr-1"></i>Submit Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="contact-us-details">
                            <h4 class="text-primary font-weight-normal">Help &amp; information</h4>
                            <div class="office-address mt-4">
                                <h5 class="mb-4 text-info">Our Office Address:</h5>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-map-marker mr-1 text-danger"></i><strong>Head Office: </strong>{{$SiteProfile->HeadAddress}}</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-map-marker mr-1 text-danger"></i><strong>Local Office: </strong>{{$SiteProfile->CorporateAddress}}</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-phone mr-1 text-danger"></i><strong>Phone Number: </strong>{{$SiteProfile->CorporatePhone}}</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-phone mr-1 text-danger"></i><strong>Support: </strong>{{$SiteProfile->Phone1}}</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-envelope mr-1 text-danger"></i><strong>Email: </strong>{{$SiteProfile->CorporateEmail}}</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-envelope mr-1 text-danger"></i><strong>Email: </strong>{{$SiteProfile->Email2}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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