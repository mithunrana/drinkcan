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
                       @if ($errors->any())
                             @foreach ($errors->all() as $error)
                                 <div>{{$error}}</div>
                             @endforeach
                         @endif
                        <div class="card-header">Order Checking</div>
                        <div class="card-body">
                            <form action="{{url('admin/order-update',[$Order->id])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                    <div class="row">
                                        <div class="form-group col-sm-4">
                                            <label style="color:#f50101;" for="name">Name
                                                @if($errors->has('name'))
                                                    <small style="color:red;"> {{$errors->first('name')}}</small>
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="name" value="{{$Order->ShipingAddress->Name}}" name="Name" aria-describedby="emailHelp" placeholder="Name">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label style="color:#f50101;" for="mobile">Mobile
                                                @if($errors->has('mobile'))
                                                    <small style="color:red;"> {{$errors->first('mobile')}}</small>
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="mobile" value="{{$Order->ShipingAddress->Mobile}}" name="Mobile" placeholder="Mobile">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label style="color:#f50101;" for="Email">Email
                                                @if($errors->has('Email'))
                                                    <small style="color:red;"> {{$errors->first('Email')}}</small>
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="mobile" value="{{$Order->ShipingAddress->Email}}" name="Email" placeholder="Mobile">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label style="color:#f50101;" for="Status">Oder Status
                                                @if($errors->has('Status'))
                                                    <small style="color:red;"> {{$errors->first('Status')}}</small>
                                                @endif
                                            </label>
                                            <select class="form-control" name="Status">
                                                <option value="Cancel" {{$Order->Status == "Cancel" ? 'selected="selected"' : ''}} >Cancel</option>
                                                <option value="Pending" {{$Order->Status == "Pending" ? 'selected="selected"' : ''}} >Pending</option>
                                                <option value="Processing" {{$Order->Status == "Processing" ? 'selected="selected"' : ''}} >Processing</option>
                                                <option value="Confirm" {{$Order->Status == "Confirm" ? 'selected="selected"' : ''}} >Confirm</option>
                                                <option value="Shipped" {{$Order->Status == "Shipped" ? 'selected="selected"' : ''}} >Shipped</option>
                                                <option value="Delivered" {{$Order->Status == "Delivered" ? 'selected="selected"' : ''}} >Delivered</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-sm-4">
                                            <label style="color:#f50101;" for="City">District
                                                @if($errors->has('City'))
                                                    <small style="color:red;"> {{$errors->first('City')}}</small>
                                                @endif
                                            </label>
                                            <select class="form-control" name="City">
                                                @foreach($Districts as $District)
                                                    <option  value="{{$District->id}}" {{$Order->ShipingAddress->City == $District->id ? 'selected="selected"' : ''}}>{{$District->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-sm-4">
                                            <label style="color:#f50101;" for="address">Address
                                                @if($errors->has('address'))
                                                    <small style="color:red;"> {{$errors->first('address')}}</small>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control" id="address" name="Address" placeholder="Address">{{$Order->ShipingAddress->Address}}</textarea>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label style="color:#f50101;" for="comment">Comment
                                                @if($errors->has('Comment'))
                                                    <small style="color:red;"> {{$errors->first('Comment')}}</small>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control" id="Comment" name="Comment" placeholder="write something about the order">{{$Order->Comment}}</textarea>
                                        </div>
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
