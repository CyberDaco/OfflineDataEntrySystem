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

    @include('layouts.dataentry.header')

    @yield('content')

    <!-- Flash Messages Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('flash::message')
            </div>
        </div>
    </div>

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

<script>
    var $jqDate = jQuery('input.aussie_date[type=text]');

    //Bind keyup/keydown to the input
    $($jqDate).bind('keyup','keydown', function(e){
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

    $(document).on('click', '.delete', function() {
        $('#delete_id').val($(this).data("id"));
    });

</script>


<script>
    $(document).ready(function() {
        //Datemask dd/mm/yyyy
        $(".ddmmyyy").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    });
</script>



</body>
</html>
