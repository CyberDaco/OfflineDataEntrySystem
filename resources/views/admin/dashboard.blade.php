@extends('layouts.admin.admin',['title'=>'Dashboard','icon'=>'fa fa-home'])

@section('content')
<div class="container-fluid">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">REA NZ Keying</span>
          <span class="info-box-number">{{ $results->where('application','REA NZ Keying')->sum('records') }}<small></small></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Recent Sales</span>
          <span class="info-box-number">{{ $results->where('application','Recent Sales')->sum('records') }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Saturday Auction</span>
          <span class="info-box-number">{{ $results->where('application','Saturday Auction')->sum('records') }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Interest Auction Results</span>
          <span class="info-box-number">{{ $results->where('job_name','INTEREST AUCTION RESULTS')->sum('records') }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->




  <!-- Insert Graph.Blade.PHP here -->



  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <div class="col-md-8">

      @include('layouts.dashboard.active_users')

      @include('layouts.dashboard.batches')

      @include('layouts.dashboard.exports')

    </div>

    <!-- Right Col -->
    <div class="col-md-4">

      @include('layouts.dashboard.job_numbers')

    </div>

  </div>






</div> <!-- end of container -->
@endsection
