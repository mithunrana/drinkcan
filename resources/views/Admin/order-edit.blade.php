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
                        <div class="card-header">Blog Add Here</div>
                        <div class="card-body">
                            <form action="{{url('admin/user-request-update',[$UserData->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label style="color:#f50101;" for="date">Check Status
                                                    @if($errors->has('checkstatus'))
                                                        <small style="color:red;"> {{$errors->first('checkstatus')}}</small>
                                                    @endif
                                                </label>
                                                <select class="form-control" name="checkstatus">
                                                    <option value="0" {{$UserData->checkstatus == 0 ? 'selected="selected"' : ''}} >Not Check</option>
                                                    <option value="1" {{$UserData->checkstatus == 1 ? 'selected="selected"' : ''}} >Check</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label style="color:#f50101;" for="time">Oder Status
                                                    @if($errors->has('orderstatus'))
                                                        <small style="color:red;"> {{$errors->first('orderstatus')}}</small>
                                                    @endif
                                                </label>
                                                <select class="form-control" name="orderstatus">
                                                    <option value="0" {{$UserData->orderstatus == 0 ? 'selected="selected"' : ''}} >Cancel</option>
                                                    <option value="2" {{$UserData->orderstatus == 2 ? 'selected="selected"' : ''}} >Pending</option>
                                                    <option value="1" {{$UserData->orderstatus == 1 ? 'selected="selected"' : ''}} >Confirm</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#f50101;" for="name">Your Name
                                                @if($errors->has('name'))
                                                    <small style="color:red;"> {{$errors->first('name')}}</small>
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="name" value="{{$UserData->name}}" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#f50101;" for="mobile">Mobile
                                                @if($errors->has('mobile'))
                                                    <small style="color:red;"> {{$errors->first('mobile')}}</small>
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="mobile" value="{{$UserData->mobile}}" name="mobile" placeholder="Enter Your Mobile">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label style="color:#f50101;" for="date">Date
                                                    @if($errors->has('date'))
                                                        <small style="color:red;"> {{$errors->first('date')}}</small>
                                                    @endif
                                                </label>
                                                <input type="date" class="form-control" id="date" value="{{$UserData->date}}" name="date" placeholder="Enter Your Mobile">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label style="color:#f50101;" for="time">Time
                                                    @if($errors->has('time'))
                                                        <small style="color:red;"> {{$errors->first('time')}}</small>
                                                    @endif
                                                </label>
                                                <input type="time" class="form-control" id="time" value="{{$UserData->time}}" name="time" placeholder="Enter Your Mobile">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#f50101;" for="servicedetails">Service Details
                                                @if($errors->has('servicedetails'))
                                                    <small style="color:red;"> {{$errors->first('servicedetails')}}</small>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control" id="servicedetails" name="servicedetails" placeholder="Enter Your Service Details">{{$UserData->servicedetails}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label style="color:#f50101;" for="address">Address
                                                @if($errors->has('address'))
                                                    <small style="color:red;"> {{$errors->first('address')}}</small>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address">{{$UserData->address}}</textarea>
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
