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
        <div style="margin: 0 auto;width: 100%" class="col-12 col-sm-7 col-md-6 col-lg-5">
            <div style="box-shadow: 1px 1px 7px 1px #787878;" class="card">
                <div style="color:red;font-weight: bold" class="card-header">New Password</div>

                @if(Session::has('message'))
                    <div style="background-color: #ce0909;color:white;font-weight: bold;width: 100%;" class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{Session::get('message')}}
                    </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ url('password/new-password-set') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">New Password :</label>
                            <div class="col-sm-9">
                                @if($errors->has('password'))<small style="color:red;font-weight: bold;">{{$errors->first('password')}}</small>@endif
                                <input type="password" class="form-control mb-3" name="password" id="password" placeholder="Enter Your New Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-3  col-form-label">Retype New Password : </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control mb-3" name="password_confirmation" id="password-confirm" placeholder="Enter Your New Password Again">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                           <input type="submit" name="submit" value="Save" class="btn btn-success">
                            </div>
                        </div>
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
