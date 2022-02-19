@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Cart | Drinkcan India";
    $keywords =  "registration, login, signup, user panel, dirnkcan, how to login, how to registraion in drinkcan";
    $description =  "Drinkcan Bangladesh Login Here get more user facilities from user site. if you don't have account in drinkcan bangladesh easily signup";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')




<section class="py-5">
    <div class="container">
        <div class="row pageCart">
            
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
