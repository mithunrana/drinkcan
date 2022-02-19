@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Purchase Request | Drinkcan India";
    $keywords =  "registration, login, signup, user panel, dirnkcan, how to login, how to registraion in drinkcan";
    $description =  "Drinkcan India Login Here get more user facilities from user site. if you don't have account in drinkcan India easily signup";
@endphp

@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')
<!--start login form area-->
<style>
        .order-sucess h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        .order-sucess p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      .order-sucess i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .order-sucess .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
<section class="login-form-area clearfix py-5 wow fadeInDown" data-wow-duration="1s">
    <div style="text-align: center;padding: 40px 0;background: #EBF0F5;" class="container order-sucess">
        <div class="card">
          <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
          </div>
            <h1>Success</h1> 
            <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
            <a style="margin-top:5px;padding:5px;border-radius:5px" href="{{asset('')}}">Continue Shoping</a>
            @if (\Session::has('order-sucess-message'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('order-sucess-message') !!}</li>
                    </ul>
                </div>
            @endif
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
