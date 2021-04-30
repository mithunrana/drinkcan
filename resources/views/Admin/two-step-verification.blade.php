@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Two Step Verification | Drinkcan Bangladesh";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

<!--start login form area-->
<section class="login-form-area clearfix py-5 wow fadeInDown" data-wow-duration="1s">
    <div class="container">
        <div class="login-width">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-img">

                    </div>
                </div>
                <div class="col-md-6">
                    @if(Session::has('message'))
                        <div style="background-color: #ce0909;color:white;font-weight: bold;width: 100%;" class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="login-main-form">
                        <div class="log" style="padding: 40px 10px;padding-left: 0;padding-right: 15px;">
                            <h5 class="mb-4" style="font-size: 22px;">Two Step Verification</h5>
                            <form action="{{url('two-factor-verification') }}" method="POST">
                                @csrf
                                <input id="two_factor_code" type="number" class="form-control mb-3 @error('two_factor_code') is-invalid @enderror" name="two_factor_code" placeholder="Two Factor Code">
                                @error('two_factor_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input style="background-color: #35b5dc;border-color: #35b5dc;" class="btn btn-danger btn-block" type="submit" value="Verify">
                                <div class="row mt-3">
                                    <p style="padding:15px;">you have receive an email which contains two factor login code. if you haven't receive it pres</p>
                                    <div class="col-6">
                                        <a style="font-size: 14px;" href="{{asset('')}}resend-factor-verification">Resent Verification Code</a>
                                    </div>
                                </div>
                                <div class="register-now mt-4">
                                    <a style="background-color: #35b5dc;" class="btn btn-danger btn-block" href="{{url('logout')}}">Logout</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end login form area-->
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
