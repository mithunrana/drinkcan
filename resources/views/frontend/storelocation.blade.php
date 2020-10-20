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


<div class="about-header">
    <img src="{{asset('')}}frontend/images/about-drinkcan.jpg" class="img-fluid" alt="">
</div>

<div style="margin-top: 30px;margin-bottom: 20px;" class="container">
    <div class="row">
        <div class="col-sm-12">
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

</body>
</html>
