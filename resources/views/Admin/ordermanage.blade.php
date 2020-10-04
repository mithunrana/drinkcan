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
            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <table id="mytable" class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Check</th>
                                    <th scope="col">Order</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(App\Order::orderBy('id', 'DESC')->get() as $Request)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$Request->name}}</td>
                                        <td>{{$Request->mobile}}</td>
                                        <td>
                                            @if($Request->checkstatus==0)
                                                <a class="btn btn-danger" href="#">NotCheck <i class="fa fa-ban" aria-hidden="true"></i></a>
                                            @endif
                                            @if($Request->checkstatus==1)
                                                <a class="btn btn-success" href="#">Check <i class="fa fa-check"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($Request->orderstatus==0)
                                                <a class="btn btn-danger" href="{{url('admin/products-price-active-deactive',[$Request->orderstatus,$Request->id])}}">Cancel <i class="fa fa-ban" aria-hidden="true"></i></a>
                                            @endif
                                            @if($Request->orderstatus==1)
                                                <a class="btn btn-success" href="{{url('admin/products-price-active-deactive',[$Request->orderstatus,$Request->id])}}">Confirm <i class="fa fa-check"></i></a>
                                            @endif
                                            @if($Request->orderstatus==2)
                                                <a class="btn btn-warning" href="{{url('admin/products-price-active-deactive',[$Request->orderstatus,$Request->id])}}">Pending <i class="fa fa-spinner"></i> </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/user-request-edit',[$Request->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                            <a href="{{url('admin/user-request-delete',[$Request->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
