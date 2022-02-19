@php
    $SiteProfile = App\SiteProfile::first();
@endphp

@php
    $title = "Drinkcan Office Address In India";
    $keywords =  "water purifier, drinkcan, price, India, address, office";
    $description =  "Drinkcan is the world wide water purifier brand. also drinkcan have hold India office easily search drinkcan office address from here";
@endphp


@include('frontend.inc.headersource')
@include('frontend.inc.menubar')
@include('frontend.inc.homedemo')

<div class="about-header">
    <img src="{{asset('')}}frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
</div>

<div style="margin-top: 30px;margin-bottom: 20px;" class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 style="font-size: 25px;text-align: center;">Drinkcan Office address In India | Country Wide Drinkcan Network</h1>
            <p style="text-align: center;font-size: 19px;">Drinkcan is the world wide water purifier brand. also drinkcan
                have hold India office easily search drinkcan office address from here</p>
            <form>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label style="font-weight: bold" for="district">Select District</label>
                        <select class="form-control" id="district">
                            @foreach(\App\District::orderBy('id','ASC')->get() as $District)
                                <option value="{{$District->id}}">{{$District->Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label style="font-weight: bold" for="thana">Select Thana</label>
                        <select class="form-control" id="thana">
                        </select>
                    </div>
                </div>
            </form>

            <div class="row" id="store-location-box">
            </div>

        </div>
    </div>
</div>


@include('frontend.inc.footer')
@include('frontend.inc.footersource')


<script>
    $(document).ready(function() {

        $('#district').change(function(){
            var DistrictId = $(this).val();
            $.ajax({
                url:"{{ url('districtby-thana') }}",
                method:'GET',
                data:{DistrictId:DistrictId},
                dataType:'json',
                success:function(data)
                {
                    $('#thana').empty();
                    $('#thana').html(data.TotalThana);
                }
            })
        });

        $('#thana').change(function(){
            var ThanaId = $(this).val();
            $.ajax({
                url:"{{ url('thanaby-store') }}",
                method:'GET',
                data:{ThanaId:ThanaId},
                dataType:'json',
                success:function(data)
                {
                    $('#store-location-box').empty();
                    $('#store-location-box').html(data.StoreBox);
                }
            })
        });

    });
</script>
@if(Session::has('demo-message'))
    <script>
        toastr.success("{{ Session::get('demo-message') }}");
    </script>
    @endif
    @include('frontend.inc.messenger')
</body>
</html>
