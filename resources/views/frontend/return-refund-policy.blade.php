@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Return And Refund Policy | Drinkcan India";
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
                <div class="col-md-12">
                    {!!$SiteProfile->RetunRefundPolicy!!}
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
