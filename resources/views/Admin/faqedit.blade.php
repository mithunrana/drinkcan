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
                        <div class="card-header">Faq Edit</div>
                        <div class="card-body">
                            <div class="row">
                                <div id="app" class="col-sm-6">
                                    <form action="{{url('admin/product-faq-update',[$FAQ->id])}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="ProductId">Product Model</label>
                                                <select class="form-control{{$errors->has('ProductId') ? ' is-invalid' : ''}}" id="ProductId" name="ProductId">
                                                    <option value="" selected disabled>=============Select Product Model===========</option>
                                                    @foreach(App\Products::all() as $Product)
                                                        <option value="{{$Product->id}}" {{$Product->id == $FAQ->ProductId ? 'selected="selected"' : ''}}>{{$Product->Model}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Title">Question</label>
                                            <input type="text" class="form-control{{$errors->has('Question') ? ' is-invalid' : ''}}" value="{{$FAQ->Question}}" id="Question"  name="Question" placeholder="Enter Question">
                                        </div>
                                        <div class="form-group">
                                            <label for="Content">Answer</label>
                                            <textarea type="text" rows="7" class="form-control{{$errors->has('Answer') ? ' is-invalid' : ''}}"  id="Answer" name="Answer" placeholder="Enter Answer Details....">{{$FAQ->Answer}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Question</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\Faq::all() as $Category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Category->ProdutDetails->Model}}</td>
                                                <td>{{$Category->Question}}</td>
                                                <td>
                                                    <a href="{{url('admin/product-faq-edit',[$Category->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/product-faq-delete',[$Category->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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
