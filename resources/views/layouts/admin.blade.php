<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    

    <title>CCCDMSI</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    
    <!-- Select2 Plugin -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        
        .navbar {
            background: #006080;
            color: white;
        }
        
        .navbar-default .navbar-nav>li>a {
            color: #f7f2f2;
        }
        a:hover{
            color: white;
        }
        .downlods.panel {
            margin-right: 20px;
            background: gray;
        }
        .navbar-default .navbar-brand{
            color: white;
        }
        .container-fluid{
            padding-left: 5%;
            padding-right: 5%;
        }
        .addbutton{
            margin-top: 10px;
        }
        .custom{
            padding-left:0px;
        }
        .form-group {
            margin-bottom: 3px;
        }
        
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    CCCDMSI
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="{{ setActive('admin')}}"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="dropdown {{ setActive('admin/batch')}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Batching</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/admin/batch/aunews') }}">Australian Newspapers</a></li>
                            <li><a href="{{ url('/admin/batch/interest') }}">Interest Auction Results</a></li>
                            <li><a href="{{ url('/admin/batch/reanz') }}">REA NZ Keying</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ setActive('admin/report')}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/admin/report/production') }}">Production Report</a></li>
                            <li><a href="{{ url('/news/pubexport') }}">Publication Exports</a></li>
                            <li><a href="{{ url('/news/perpublication') }}">Per Publication</a></li>
                            <li><a href="{{ url('/news/recsperhr') }}">Records Per Hour</a></li>
                            <li><a href="{{ url('/news/costanalysis') }}">Cost Analysis</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ setActive('admin/export')}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exports</a>
                        <ul class="dropdown-menu">
                            <li class="{{ setActive('admin/export/')}}"><a href="{{ url('/admin/export/interest') }}">Interest Auction Results</a></li>
                            <li><a href="{{ url('/admin/export/aunews') }}">Australian Newspapers</a></li>
                            <li><a href="{{ url('/admin/export/stats') }}">EP90 Stats Data</a></li>
                        </ul>
                      </li>
                    <li class="dropdown {{ setActive('admin/setup')}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setup</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/admin/setup/application/view') }}">Application</a></li>
                            <li><a href="{{ url('/admin/setup/sysusers/view') }}">System Users</a></li>
                            <li><a href="{{ url('/admin/setup/userprofile/view') }}">User Profile</a></li>
                            <li><a href="{{ url('/admin/setup/leave/view') }}">Leave Management</a></li>
                            <li><a href="{{ url('/admin/setup/jobnumber/view') }}">Job Numbers</a></li>
                            <li><a href="{{ url('/admin/setup/publication/view') }}">Jobs List</a></li>
                            <li><a href="{{ url('/admin/setup/states/view') }}">States</a></li>
                            <li><a href="{{ url('/admin/setup/aupostcode/view') }}">AU Postcode</a></li>
                            <li><a href="{{ url('/admin/setup/lookup/view') }}">Lookup</a></li>
                            <li><a href="{{ url('/admin/setup/eeleave/view') }}">Employee Leave</a></li>
                            
                        </ul>
                      </li> 
                    <li class="dropdown {{ setActive('admin/utilities')}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Utilities</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/admin/utilities/entrylogs') }}">Entry Logs</a></li>
                            <li><a href="{{ url('/news/databasebackup') }}">Backup Database</a></li>
                            <li><a href="{{ url('/news/deletepub') }}">Delete Publication</a></li>
                            <li><a href="{{ url('/news/importdata') }}">Import Data</a></li>
                            <li><a href="{{ url('/news/importkpidata') }}">Import KPI Data</a></li>
                            <li><a href="{{ url('/news/importcbhsfile') }}">Import CBHS File</a></li>
                        </ul>
                      </li> 
                    <li class="{{ setActive('admin/lms')}}"><a href="{{ url('/admin/lms') }}">Leave</a></li>
                    <li class="{{ setActive('news/contacts')}}"><a href="{{ url('/news/contacts') }}">Contacts</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (!Auth::guard('admin')->check())
                        {{ Auth::guard('admin')->check() }}
                        <li><a href="{{ url('/admin/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('#') }}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
                                <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            @include('flash::message')   
        </div>
        </div>    
    </div>
    
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
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
        
        $('#flash-overlay-modal').modal();
        
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
