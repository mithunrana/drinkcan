@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Login | Drinkcan India";
    $keywords =  "registration, login, signup, user panel, dirnkcan, how to login, how to registraion in drinkcan";
    $description =  "Drinkcan India Login Here get more user facilities from user site. if you don't have account in drinkcan India easily signup";
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
                            <h5 class="mb-4" style="font-size: 22px;">Login</h5>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input  id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder=" Enter Your Password" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input style="background-color: #35b5dc;border-color: #35b5dc;" class="btn btn-danger btn-block" type="submit" value="Login">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <a style="font-size: 14px;" href="{{asset('')}}password/reset">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="register-now mt-4">
                                    <label style="font-size: 15px;"><strong>Don't have an account? Register Now</strong></label>
                                    <a style="background-color: #35b5dc;border-color: #35b5dc;" class="btn btn-danger btn-block" href="{{asset('')}}register">Register</a>
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
