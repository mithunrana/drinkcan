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
                        <div class="card-header">Store Location Manage</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <form action="{{url('admin/store-location-store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="ThanaId">Select Thana</label>
                                            <select class="form-control" name="ThanaId" required>
                                                @foreach(\App\ThanaName::get() as $Thana)
                                                <option value="{{$Thana->id}}">{{$Thana->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="LocationName">Store Location Name</label>
                                            <input type="text" class="form-control{{$errors->has('LocationName') ? ' is-invalid' : ''}}" value="{{old('LocationName')}}" id="LocationName"  name="LocationName" placeholder="Enter Location Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="FullAddress">Store Location Address</label>
                                            <textarea type="text" class="form-control{{$errors->has('FullAddress') ? ' is-invalid' : ''}}"  id="FullAddress" name="FullAddress" placeholder="Enter FullAddress...." required>{{old('FullAddress')}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <table id="mytable" class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Thana</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(App\StoreLocation::all(); as $Store)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$Store->thanaDetails->districtDetails->Name}}</td>
                                                <td>{{$Store->thanaDetails->Name}}</td>
                                                <td>{{$Store->LocationName}}</td>
                                                <td>
                                                    <a href="{{url('admin/store-location-edit',[$Store->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                                    <a href="{{url('admin/store-location-delete',[$Store->id])}}" class="btn btn-danger" onclick="return ConfirmDelete();" ><i class="fas fa-trash-alt"></i></a>
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
