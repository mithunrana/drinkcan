@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
    <div class="contact-header">
        <img src="{{asset('frontend')}}/images/Header_Contact-us.webp" class="img-fluid" alt="">
    </div>

    <section class="contact-us py-5">
        <div class="container">
            <div class="contact-us-box card card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-us-form">
                            <h4 class="text-primary font-weight-normal">Send a message to us</h4>
                            <div class="contact-form mt-4">
                                <form action="#">

                                    <label for="">Name</label>
                                    <input class="form-control mb-2" type="text" name="last name" placeholder="Enter name">

                                    <label for="">Email</label>
                                    <input class="form-control mb-2" type="email" name="email" placeholder="Enter email">

                                    <label for="">Phone Number</label>
                                    <input class="form-control mb-2" type="text" name="phone number" placeholder="Enter phone number">

                                    <label for="">Message</label>
                                    <textarea placeholder="Message" class="form-control mb-2" name="" id="" cols="30" rows="2"></textarea>
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
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-map-marker mr-1 text-danger"></i><strong>Location: </strong>Baliadangi, Dhaka Bangladesh.</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-phone mr-1 text-primary"></i><strong>Phone Number: </strong>01755430927</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-phone mr-1 text-primary"></i><strong>Tel: </strong>0900000540</p>
                                <p class="mb-4 pb-2 text-muted"><i class="fa fa-envelope mr-1 text-danger"></i><strong>Email: </strong>imranemon.developer@gmail.com</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@include('frontend.inc.footer')
@include('frontend.inc.footersource')
