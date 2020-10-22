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
                        <div class="card-header">Thana Name Edit</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <form action="{{url('admin/thana-name-update',[$Thana->id])}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="DistrictId">Select District</label>
                                            <select class="form-control" name="DistrictId" required>
                                                @foreach(\App\District::get() as $District)
                                                    <option value="{{$District->id}}" {{$District->id == $Thana->DistrictId ? 'selected="selected"' : ''}}>{{$District->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Name">Thana Name</label>
                                            <input type="text" class="form-control{{$errors->has('Name') ? ' is-invalid' : ''}}" value="{{$Thana->Name}}" id="Name"  name="Name" placeholder="Enter Thana Name" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Thana</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\ThanaName::all() as $Store)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Store->districtDetails->Name}}</td>
                                                <td>{{$Store->Name}}</td>
                                                <td>
                                                    <a href="{{url('admin/thana-name-edit',[$Store->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/thana-name-delete',[$Store->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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
        var x = confirm("Are you sure you want to delete this location");
        if (x){
            return true;
        }
        else{
            return false;
        }
    }
</script>
@include('Admin.inc.footersource')
