<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>{{ $title or 'Application' }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bower_components/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/css/ionicons-2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/bower_components/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="/bower_components/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/bower_components/adminlte/plugins/datatables/dataTables.bootstrap.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/dataentry_cus.css">



    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper">

    @include('layouts.dataentry.header',['title' => 'Help Page'])

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Live Auction Property Sites</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item">VIC - https://www.reviewproperty.com.au/Live-Auction/Melbourne-Region,-VIC%3bNorthern-Victoria,-VIC%3bSouth-Eastern-Victoria,-VIC%3bSouth-Western-Victoria,-VIC/True/1</li>
                        <li class="list-group-item">SA - https://www.reviewproperty.com.au/Live-Auction/Adelaide,-SA%3bFar-North,-SA%3bMid-North,-SA%3bSouth-SA%3bSpencer-Gulf-and-West-Coast,-SA/True/1</li>
                        <li class="list-group-item">WA - https://www.reviewproperty.com.au/Live-Auction/Pert-Region,-WA%3bNorth-Region,-WA%3bSouther,-WA/True/1</li>
                        <li class="list-group-item">NT - https://www.reviewproperty.com.au/Live-Auction/Norther-Territory,-NT/True/1</li>
                        <li class="list-group-item">QLD - http://www.reviewproperty.com.au/Live-Auction/Brisbane-Region,-QLD%3bCentral--and--West,-QLD%3bCoastal,-QLD%3bSouth-East,-QLD/True/1</li>
                        <li class="list-group-item">ACT - https://www.reviewproperty.com.au/Live-Auction/Canberra,-ACT/True/1</li>
                        <li class="list-group-item">TAS - https://www.reviewproperty.com.au/Live-Auction/Tasmania,-TAS/True/1</li>
                        <li class="list-group-item">NSW - https://www.reviewproperty.com.au/Live-Auction/Sydney-Region,-NSW%3bHunter,-Central--and--North-Coasts,-NSW%3bIllawarra--and--South-Coast,-NSW%3bRegional-NSW,-NSW/True/1</li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-12">
            <div class="box box-primary collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Recent Sales Sites</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item">VIC - https://www.reviewproperty.com.au/Live-Auction/Melbourne-Region,-VIC%3bNorthern-Victoria,-VIC%3bSouth-Eastern-Victoria,-VIC%3bSouth-Western-Victoria,-VIC/True/1</li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>


    @include('layouts.dataentry.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/bower_components/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bower_components/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/bower_components/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/bower_components/adminlte/dist/js/demo.js"></script>
<!-- InputMask -->
<script src="/bower_components/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/bower_components/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/bower_components/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- DataTables -->
<script src="/bower_components/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/bower_components/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

@stack('scripts')

        <!-- Saturday Auction -->
<script src="/js/saturday_auction.js"></script>
</body>
</html>
