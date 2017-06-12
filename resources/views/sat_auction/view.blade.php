@extends('layouts.dataentry.dataentry',['title'=>'Saturday Auction App','folder'=>'sat_auction'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><strong>{{ session('batch_details')->job_name.' '.$results->batch_date }}</strong></h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input tabindex="-1" type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button tabindex="-1" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-hover">
            <tr>
              <th>State</th>
              <th>Property Address</th>
              <th>Type</th>
              <th>Sale Type</th>
              <th class="text-right">Price</th>
              <th class="text-center">Date</th>
              <th>Agency Name</th>
              <th>Bed</th>
              <th>Bath</th>
              <th>Car</th>
              <th class="text-center">Action</th>
            </tr>
            @foreach ($results->recent_sales as $result)
              <tr>
                <td>{{ $result->state }}</td>
                <td><a href="{{ url('/sat_auction/modify/'.$result->id) }}"><strong>{{ $result->address }}</strong></a></td>
                <td>{{ $result->property_type }}</td>
                <td>{{ $result->sale_type }}</td>
                <td class="text-right">{{ $result->sold_price }}</td>
                <td class="text-center">{{ $result->contract_date }}</td>
                <td>{{ $result->agency_name }}</td>
                <td>{{ $result->bedroom }}</td>
                <td>{{ $result->bathroom }}</td>
                <td>{{ $result->car }}</td>
                <td class="text-center">
                  <a tabindex="-1" href="{{ url('/sat_auction/modify/'.$result->id) }}" class="btn btn-info btn-xs">Modify</a></button>
                  <a tabindex="-1" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#delete-modal" data-id="{{ $result->id }}">Delete</a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <strong><span>{{ count($results) != 0 ? count($results->recent_sales).' Record(s) Found' : '0 Record' }}</span></strong>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</div> <!-- end of container -->

@include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/sat_auction/delete','message'=>'Are you sure you want to delete this record?'])

@endsection
