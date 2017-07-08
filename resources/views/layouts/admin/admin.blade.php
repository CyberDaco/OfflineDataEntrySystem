<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ODES | Administrator</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bower_components/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/css/ionicons-2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/bower_components/adminlte/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/bower_components/adminlte/plugins/select2/select2.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/bower_components/adminlte/plugins/datepicker/datepicker3.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/bower_components/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="/bower_components/adminlte/dist/css/skins/skin-green.min.css">
    <!-- Admin Custom css-->
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
    @include('layouts.admin.header')
    @include('layouts.admin.menu')
            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1><i class="{{ $icon or null }}"></i> {{ $title or null }}</h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Validation Error Section -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')

        </section>
    </div><!-- /.content-wrapper -->



    @include('layouts.admin.footer')
    @include('layouts.admin.control-sidebar')
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/bower_components/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bower_components/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/adminlte/dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="/bower_components/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/bower_components/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="/bower_components/adminlte/plugins/select2/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<script src="/bower_components/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- InputMask -->
<script src="/bower_components/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/bower_components/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/bower_components/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- Common Js File -->
<script src="/js/common_admin.js"></script>

@stack('scripts')

<script>
    $('#flash-overlay-modal').modal();

    // var $jqDate = jQuery('input[name="contract_date"]');
    var $jqDate = jQuery('input.aussie_date[type=text]');

    //Bind keyup/keydown to the input
    $jqDate.bind('keyup','keydown', function(e){

        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
        if(e.which !== 8) {
            var numChars = $jqDate.val().length;
            if(numChars === 2 || numChars === 5){
                var thisVal = $jqDate.val();
                thisVal += '/';
                $jqDate.val(thisVal);
            }
        }
    });

    // var $jqDate = jQuery('input[name="contract_date"]');
    var $jqTime = jQuery('input.aussie_time[type=text]');

    //Bind keyup/keydown to the input
    $jqTime.bind('keyup','keydown', function(e){

        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
        if(e.which !== 8) {
            var numChars = $jqTime.val().length;
            if(numChars === 2){
                var thisVal = $jqTime.val();
                thisVal += ':';
                $jqTime.val(thisVal);
            }
            else if(numChars === 5){
                var thisVal = $jqTime.val();
                thisVal += ' ';
                $jqTime.val(thisVal);
            }
        }
    });
</script>


</body>
</html>
