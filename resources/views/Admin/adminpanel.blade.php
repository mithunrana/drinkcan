@include('Admin.inc.header source')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('Admin.inc.adminHeader')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Admin.inc.adminSideBar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Products</h3>
                                <h4 style="color:white"> @php $Total =  \App\Products::get();$active = \App\Products::Where('ActiveStatus','1')->get();$Deactive = \App\Products::Where('ActiveStatus','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                                <h4 style="color:#001c4e">{{ 'Inactive: '.count($Deactive)}}</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{asset('')}}admin/products-manage" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>Orders</h3>
                                <h4 style="color:white"> @php $Total =  \App\Order::get(); $Pending = \App\Order::Where('Status','Pending')->get();  $active = \App\Order::Where('Status','Delivered')->get(); $Deactive = \App\Order::Where('Status','Cancel')->get(); echo 'Total: '.count($Total); echo ' Confirm: '.count($active); @endphp </h4>
                                <h4 style="color:#001c4e">{{ 'Pending: '.count($Pending)}} {{ 'Cancel: '.count($Deactive)}}</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{asset('')}}admin/order-manage" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>User</h3>
                                <h4 style="color:white"> @php $Total =  \App\User::get();  $active = \App\User::Where('activestatus','TechHelpInfoAdmin')->get(); $Deactive = \App\User::Where('activestatus','EndUserActive')->get(); echo 'Total: '.count($Total); echo ' Admin: '.count($active); @endphp </h4>
                                <h4 style="color:#001c4e">{{ 'General: '.count($Deactive)}}</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{asset('')}}admin/userdata-manage" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>Blog</h3>
                                <h4 style="color:white"> @php $Total =  \App\BlogTutorial::get();  $active = \App\BlogTutorial::Where('ActiveStatus','1')->get(); $Deactive = \App\BlogTutorial::Where('ActiveStatus','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                                <h4 style="color:#001c4e">{{ 'Deactivate: '.count($Deactive)}}</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{asset('')}}admin/blog-manage" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="{{asset('')}}">DrinkCan</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.3-pre
        </div>
    </footer>
</div>
<!-- ./wrapper -->
@include('Admin.inc.footersource')
