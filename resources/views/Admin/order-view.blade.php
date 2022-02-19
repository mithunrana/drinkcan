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
        <section  id="app" class="content">

           <div style="padding-top:10px;" class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">Order Details</div>
                        <div class="card-body">
                            <h6><b>Date:</b> {{$Order->created_at}}</h6>
                            <h5><b>Order ID:</b> THI000{{$Order->id}}</h5>
                            <p><b>Shiping Address:</b> 
                                {{$Order->ShipingAddress->DistrictName->Name}} 
                                {{$Order->ShipingAddress->Address}}
                            </p>
                            <p><b>Mobile:</b> 
                                {{$Order->ShipingAddress->Mobile}} 
                            </p>
                            <p><b>Mobile:</b> 
                                {{$Order->ShipingAddress->Email}} 
                            </p>
                            
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Model</th>
                                  <th scope="col">Qty</th>
                                  <th scope="col">Unit Price</th>
                                  <th scope="col">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($Order->Details as $SingleOrder)
                                <tr>
                                  <th scope="row">1</th>
                                  <td>{{$SingleOrder->ProductDetails->Name}}</td>
                                  <td>{{$SingleOrder->Qty}}</td>
                                  <td>{{$SingleOrder->Price}}</td>
                                  <td>{{$SingleOrder->Price * $SingleOrder->Qty}}</td>
                                </tr>
                                @endforeach
                              </tbody>
                                <tfoot>
                                    <tr>
                                      <td style="text-align:right;" colspan="4">Sub Total</td>
                                      <td>{{$Order->SubTotal}}</td>
                                    </tr>
                                    <tr>
                                      <td style="text-align:right;" colspan="4">Shiping Charge</td>
                                      <td>{{$Order->ShippingCharge}}</td>
                                    </tr>
                                    <tr>
                                      <td style="text-align:right;" colspan="4">Vat</td>
                                      <td>{{$Order->Vat}}</td>
                                    </tr>
                                    <tr>
                                      <td style="text-align:right;" colspan="4">Total</td>
                                      <td>{{$Order->TotalAmonut}}</td>
                                    </tr>
                                </tfoot>
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
@include('Admin.inc.footersource')
