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

<div style="margin-top: 30px;margin-bottom: 20px;" class="container">
    <div class="row">
        <div style="margin: 0 auto;width: 100%" class="col-12 col-sm-10 col-md-8 col-lg-8">
            <div style="box-shadow: 1px 1px 7px 1px #787878;" class="card">
                <div style="color:red;font-weight: bold" class="card-header">E-mail Verification Here</div>
                <div class="card-body">
                    <form action="{{url('password/forget-token-checker')}}" method="POST">
                        @csrf
                        <div class="row">
                            @if(Session::has('message'))
                                <div style="background-color: #ce0909;color:white;font-weight: bold;width: 100%;" class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{Session::get('message')}}
                                </div>
                            @endif
                            <div class="form-group col-6 col-sm-12 col-md-6 col-lg-6">
                                <label style="margin-bottom: 0px;" for="email">Email</label>
                                @if($errors->has('email'))<small style="color:red;font-weight: bold;">{{$errors->first('email')}}</small>@endif
                                <input type="text" class="form-control mb-3"  @if(Session::has('message'))value="{{Session::get('Email')}}"@endif value="" id="email"  name="email">
                            </div>
                            <div class="form-group col-6 col-sm-12 col-md-6 col-lg-6">
                                <label style="margin-bottom: 0px;" for="VerifyCode">Verification Code</label>
                                @if($errors->has('VerifyCode'))<small style="color:red;font-weight: bold;">{{$errors->first('VerifyCode')}}</small>@endif
                                <input type="text" class="form-control mb-3" value="{{old('VerifyCode')}}" id="VerifyCode" name="VerifyCode" >
                            </div>
                        </div>
                        <button style="background-color: #d71920" type="submit" class="btn btn-danger">Verify</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.inc.footer')
@include('frontend.inc.footersource')
</body>
</html>