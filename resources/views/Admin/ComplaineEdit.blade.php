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
                        <div class="card-header">Complain Checking</div>
                        <div class="card-body">
                            <form action="{{url('admin/complain-update',[$Order->id])}}" method="post">
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

                                        <div style="margin-top: 5px;" class="row">
                                            <div class="form-group col-sm-4">
                                                <input type="text" class="form-control" value="{{$Order->ProductDetails->CategoryDetails->CategoryName}}" readonly>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <input type="text" class="form-control" value="{{$Order->ProductDetails->Name}}" readonly>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <input type="text" class="form-control" value="{{$Order->ProductDetails->Model}}" readonly>
                                            </div>
                                            <div>
                                                <input type="hidden" value="{{$Order->ProductId}}" name="ProductId" placeholder="ProductId">
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
                                                    <option value="0" {{$Order->checkstatus == 0 ? 'selected="selected"' : ''}} >Not Check</option>
                                                    <option value="1" {{$Order->checkstatus == 1 ? 'selected="selected"' : ''}} >Check</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="name">Name
                                                    @if($errors->has('Name'))
                                                        <small style="color:red;"> {{$errors->first('Name')}}</small>
                                                    @endif
                                                </label>
                                                <input type="text" class="form-control" id="Name" value="{{$Order->Name}}" name="Name" placeholder="Name">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="Mobile">Mobile
                                                    @if($errors->has('Mobile'))
                                                        <small style="color:red;"> {{$errors->first('Mobile')}}</small>
                                                    @endif
                                                </label>
                                                <input type="text" class="form-control" id="Mobile" value="{{$Order->Mobile}}" name="Mobile" placeholder="Mobile">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="Email">Email
                                                    @if($errors->has('Email'))
                                                        <small style="color:red;"> {{$errors->first('Email')}}</small>
                                                    @endif
                                                </label>
                                                <input type="text" class="form-control" id="Email" value="{{$Order->Email}}" name="Email"  placeholder="Email">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="ComplainType">ComplainType
                                                    @if($errors->has('ComplainType'))
                                                        <small style="color:red;"> {{$errors->first('ComplainType')}}</small>
                                                    @endif
                                                </label>
                                                <input type="text" class="form-control" id="ComplainType" value="{{$Order->ComplainType}}" name="ComplainType" placeholder="ComplainType">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="Address">Address
                                                    @if($errors->has('Address'))
                                                        <small style="color:red;"> {{$errors->first('Address')}}</small>
                                                    @endif
                                                </label>
                                                <textarea type="text" class="form-control" id="Address" name="Address" placeholder="Address">{{$Order->Address}}</textarea>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label style="color:#f50101;" for="Comment">Comment
                                                    @if($errors->has('Comment'))
                                                        <small style="color:red;"> {{$errors->first('Comment')}}</small>
                                                    @endif
                                                </label>
                                                <textarea type="text" class="form-control" id="Comment" name="Comment" placeholder="write something about the order">{{old('Comment')}}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label style="color:#f50101;" for="ComplainDetails">Complain Details
                                                @if($errors->has('ComplainDetails'))
                                                    <small style="color:red;"> {{$errors->first('ComplainDetails')}}</small>
                                                @endif
                                            </label>
                                            <textarea type="text" class="form-control" id="ComplainDetails" name="ComplainDetails" placeholder="write something about the order">{{$Order->ComplainDetails}}</textarea>
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
