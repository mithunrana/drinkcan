@include('Admin.inc.header source')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('Admin.inc.adminHeader')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Admin.inc.adminSideBar')
<!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section id="app" style="margin-top:10px;" class="content">

            <!-- Modal -->
            <image-component></image-component>
            <!-- Modal -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Client Feedback Edit</div>
                        <div class="card-body">
                            <form action="{{url('admin/client-feedback-update',[$feedback->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            @if($errors->has('FeaturedImage'))
                                                <div  class="error" style="color: red;border-bottom: 1px solid black;">
                                                    {{$errors->first('FeaturedImage')}}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="Name">Feed Back Name:</label>
                                            <input style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('Name') ? ' is-invalid' : ''}}" value="{{$feedback->Name}}" placeholder="Enter Feedback name" name="Name" id="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="Details">Feed Back Details:</label>
                                            <textarea style="border: 1px solid #586bde;" type="text" class="form-control{{$errors->has('Details') ? ' is-invalid' : ''}}" value="{{old('Details')}}" placeholder="Enter Feedback Details" name="Details" id="Details">{{$feedback->Details}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <img id="previewImage" style="width: 100%;margin-top: 27px;" src="/{{$feedback->featuredimage->imageurl}}">
                                        <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" id="featuredimage" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                    </div>
                                    <input type="hidden" name="FeaturedImage" id="setimageid" value="{{$feedback->FeaturedImage}}">
                                    <input type="hidden" name="ImageAltText" id="setImageAltText"  value="{{$feedback->ImageAltText}}">
                                    <input type="hidden" name="ImageTitleText" id="setImageTitleText" value="{{$feedback->ImageTitleText}}">
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.3-pre
        </div>
    </footer>
</div>
<!-- ./wrapper -->
<script src=" {{ mix('js/app.js') }} "></script>
<script>
    $(document).ready(function() {

        $('#featuredimage').click(function(){
            $('#previousimage').attr('src','/'+'{{$feedback->featuredimage->imageurl}}');
            $('#imagelocation').attr('value','{{$feedback->featuredimage->imageurl}}');
            $('#getimageId').attr('value','{{$feedback->FeaturedImage}}');
            $('#getImageAltText').attr('value','{{$feedback->ImageAltText}}');
            $('#getImageTitleText').attr('value','{{$feedback->ImageTitleText}}');
        });

        $('#selectimagedata').click(function(){
            var imageid = $('#getimageId').val();
            var imagealttext = $('#getImageAltText').val();
            var imagetitletext = $('#getImageTitleText').val();
            var imageurl = $('#imagelocation').val();

            $('#previewImage').attr('src','/'+imageurl);
            $('#setimageid').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })

    });
</script>
@include('Admin.inc.footersource')
