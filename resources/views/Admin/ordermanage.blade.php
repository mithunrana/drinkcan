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

                            <form class="form-inline float-sm-right" method="POST" action="{{url('admin/order-export')}}">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="startdate" class="sr-only">From</label>
                                    <input type="date" class="form-control" id="startdate" name="startdate" placeholder="DD-MM-YYYY" >
                                </div>
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="enddate" class="sr-only">To</label>
                                    <input type="date" class="form-control" id="enddate" name="enddate" placeholder="DD-MM-YYYY">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2 ">Export Excel</button>
                            </form>

                            <!--<a style="margin-bottom: 5px;" class="btn btn-success float-right" href="{{url('admin/order-export')}}">Export Excel</a>-->

                           <div class="table-responsive">
                            <table id="mytable" class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">OrderID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(App\Order::orderBy('id', 'DESC')->get() as $Request)
                                    <tr>
                                        <td>THI000{{ $Request->id }}</td>
                                        <td>{{$Request->ShipingAddress->Name}}</td>
                                        <td>{{$Request->ShipingAddress->Mobile}}</td>
                                        <td>{{$Request->ShipingAddress->DistrictName->Name}}</td>
                                        <td>{{$Request->Status}}</td>
                                        <td>{{$Request->TotalAmonut}}</td>
                                        <td>
                                           <a href="{{url('admin/order-view',[$Request->id])}}" class="btn btn-primary"> 
                                               <i style="font-size:17px;" class="fas fa-eye"></i>
                                           </a>
                                            <a href="{{url('admin/order-edit',[$Request->id])}}" class="btn btn-info"> 
                                                <i style="font-size:17px;" class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{url('admin/order-delete',[$Request->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" >
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
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
