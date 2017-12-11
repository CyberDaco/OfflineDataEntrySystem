@extends('layouts.dataentry.dataentry',['title'=>'REA NZ Keying','folder'=>'reanz'])

@section('content')
<div class="container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><strong>{{ session('batch_details')->job_name.' '.$results->batch_date }}</strong></h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Listing Id</th>
                <th>Property ID</th>
                <th>List Date</th>
                <th>Property Type</th>
                <th>Property Address</th>
                <th>City</th>
                <th>Price Guide</th>
                <th>Bed</th>
                <th>Bath</th>
                <th>Car</th>
                <th>Agency Name</th>
                <th>First Agent</th>
                <th>First Mobile</th>
                <th>Second Agent</th>
                <th>Second Mobile</th>
                <th class="text-center">Action</th>
              </tr>
              @foreach ($results->reanzs as $result)
                <tr>
                  <td>{{ $result->listing_id }}</td>
                  <td>{{ $result->property_id }}</td>
                  <td>{{ $result->site_area }}</td>
                  <td>{{ $result->list_date }}</td>
                  <td>{{ $result->property_address }}</td>
                  <td>{{ $result->city }}</td>
                  <td>{{ $result->price_guide }}</td>
                  <td>{{ $result->bedrooms }}</td>
                  <td>{{ $result->bathrooms }}</td>
                  <td>{{ $result->car_spaces }}</td>
                  <td>{{ $result->agency_name }}</td>
                  <td>{{ $result->first_agent_name }}</td>
                  <td>{{ $result->first_agent_mobile }}</td>
                  <td>{{ $result->second_agent_name }}</td>
                  <td>{{ $result->second_agent_mobile }}</td>
                  <td class="text-center">
                    <a href="{{ url('/reanz/'.$result->id.'/edit') }}" class="btn btn-info btn-xs">Modify</a></button>
                    <a class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#delete-modal" data-id="{{ $result->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <strong><span>{{ count($results) != 0 ? count($results->reanzs).' Record(s) Found' : '0 Record' }}</span></strong>
          </div>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </div> <!-- end of container -->

  @include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/reanz/delete','message'=>'Are you sure you want to delete this record?'])

@endsection
