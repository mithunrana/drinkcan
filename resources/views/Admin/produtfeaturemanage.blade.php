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
        <section id="app" style="margin-top: 10px;" class="content">
            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Product Feature</div>
                        <div class="card-body">
                            <div class="row">
                                <div id="app" class="col-sm-6">

                                    <!-- Modal -->
                                    <products-image-component></products-image-component>
                                    <!-- Modal -->

                                    <form action="{{url('admin/store-product-feature')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                @if($errors->has('FeaturedImage'))
                                                    <p style="color:red;">Please Select Image</p>
                                                @endif
                                                <img id="previewImage" style="width: 100%;margin-top: 27px;" src="{{asset('images')}}/default-image.png">
                                                <div style="width:100%;border-top-left-radius: 0px;border-top-right-radius: 0px;" data-toggle="modal" data-target="#imagemodal" class="btn btn-success">Select Image One</div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="ProductId">Product Model</label>
                                                <select class="form-control{{$errors->has('ProductId') ? ' is-invalid' : ''}}" id="ProductId" name="ProductId">
                                                    <option value="" selected disabled>=============Select Product Model===========</option>
                                                    @foreach(App\Products::all() as $Product)
                                                        <option value="{{$Product->id}}">{{$Product->Model}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Title">About Title</label>
                                            <input type="text" class="form-control{{$errors->has('Title') ? ' is-invalid' : ''}}" value="{{old('Title')}}" id="Title"  name="Title" placeholder="Enter Title ">
                                        </div>
                                        <div class="form-group">
                                            <label for="Content">Details</label>
                                            <textarea type="text" rows="7" class="form-control{{$errors->has('Content') ? ' is-invalid' : ''}}"  id="Content" name="Content" placeholder="Enter Content Details....">{{old('Content')}}</textarea>
                                        </div>

                                        <input type="hidden" name="FeaturedImage" id="setimageid" value="{{old('FeaturedImage')}}">
                                        <input type="hidden" name="ImageAltText" id="setImageAltText"  value="{{old('setImageAltText')}}">
                                        <input type="hidden" name="ImageTitleText" id="setImageTitleText" value="{{old('ImageTitleText')}}">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\ProductFeature::all() as $Category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Category->ProdutDetails->Model}}</td>
                                                <td>{{$Category->Title}}</td>
                                                <td>
                                                    <a href="{{url('admin/product-feature-edit',[$Category->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/product-feature-delete',[$Category->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

    $(document).ready( function () {

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

        $('#mytable').DataTable();
    } );

    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x){
            return true;
        }
        else{
            return false;
        }
    }
</script>
@include('Admin.inc.footersource')
