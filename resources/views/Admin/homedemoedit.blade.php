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
        <section style="margin-top: 10px;" id="app" class="content">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Home Demo Checking</div>
                        <div class="card-body">
                            <form action="{{url('admin/homedemo-update',[$Demo->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div style="border-bottom: 1px solid grey" class="row">
                                            <div class="form-group col-lg-4">
                                                <p style="margin-bottom:0px;font-weight: bold;">Category</p>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <p style="margin-bottom:0px;font-weight: bold;">Name</p>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <p style="margin-bottom:0px;font-weight: bold;">Model</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label style="color:#f50101;" for="date">Check Status
                                                    @if($errors->has('checkstatus'))
                                                        <small style="color:red;"> {{$errors->first('checkstatus')}}</small>
                                                    @endif
                                                </label>
                                                <select class="form-control" name="checkstatus">
                                                    <option value="0" {{$Demo->checkstatus == 0 ? 'selected="selected"' : ''}} >Not Check</option>
                                                    <option value="1" {{$Demo->checkstatus == 1 ? 'selected="selected"' : ''}} >Check</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label style="color:#f50101;" for="time">Oder Status
                                                    @if($errors->has('orderstatus'))
                                                        <small style="color:red;"> {{$errors->first('orderstatus')}}</small>
                                                    @endif
                                                </label>
                                                <select class="form-control" name="orderstatus">
                                                    <option value="0" {{$Demo->orderstatus == 0 ? 'selected="selected"' : ''}} >Cancel</option>
                                                    <option value="2" {{$Demo->orderstatus == 2 ? 'selected="selected"' : ''}} >Pending</option>
                                                    <option value="1" {{$Demo->orderstatus == 1 ? 'selected="selected"' : ''}} >Confirm</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label style="color:#f50101;" for="name">Name
                                                @if($errors->has('name'))
                                                    <small style="color:red;"> {{$errors->first('name')}}</small>
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="name" value="{{$Demo->Name}}" name="name" aria-describedby="emailHelp" placeholder="Name">
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="mobile">Mobile
                                                    @if($errors->has('mobile'))
                                                        <small style="color:red;"> {{$errors->first('mobile')}}</small>
                                                    @endif
                                                </label>
                                                <input type="text" class="form-control" id="mobile" value="{{$Demo->Mobile}}" name="mobile" placeholder="Mobile">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="mobile">Email
                                                    @if($errors->has('Email'))
                                                        <small style="color:red;"> {{$errors->first('Email')}}</small>
                                                    @endif
                                                </label>
                                                <input type="text" class="form-control" id="Email" value="{{$Demo->Email}}" name="Email" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label style="color:#f50101;" for="address">Address
                                                @if($errors->has('address'))
                                                    <small style="color:red;"> {{$errors->first('address')}}</small>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Address">{{$Demo->Address}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#f50101;" for="servicedetails">Comment
                                                @if($errors->has('Comment'))
                                                    <small style="color:red;"> {{$errors->first('Comment')}}</small>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control" id="Comment" name="Comment" placeholder="write something about the order">{{$Demo->Comment}}</textarea>
                                        </div>
                                    </div>
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
@include('Admin.inc.footersource')
