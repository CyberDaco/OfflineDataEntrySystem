@extends('layouts.dataentry.dataentry',['title'=>'Recent Sales Application','folder'=>'recent_sales'])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><strong>{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</strong></h3>

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
              <th>State</th>
              <th>Property Address</th>
              <th>Property Type</th>
              <th>Sale Type</th>
              <th class="text-right">Sold Price</th>
              <th class="text-center">Contract Date</th>
              <th>Agency Name</th>
              <th>Bed</th>
              <th>Bath</th>
              <th>Car</th>
              <th class="text-center">Action</th>
            </tr>
            @foreach ($results as $result)

              @foreach ($result->recent_sales as $row)

                <tr>
                  <td>{{ $row->state }}</td>
                  <td><a><strong>{{ $row->address }}</strong></a></td>
                  <td>{{ $row->property_type }}</td>
                  <td>{{ $row->sale_type }}</td>
                  <td class="text-right">{{ $row->sold_price }}</td>
                  <td class="text-center">{{ $row->contract_date }}</td>
                  <td>{{ $row->agency_name }}</td>
                  <td>{{ $row->bedroom }}</td>
                  <td>{{ $row->bathroom }}</td>
                  <td>{{ $row->car }}</td>
                  <td class="text-center">
                    <a href="{{ url('/recent_sales/modify/'.$row->id) }}" class="btn btn-info btn-xs">Modify</a></button>
                    <a class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#delete-modal" data-id="{{ $row->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <strong><span>{{ count($results) != 0 ? $result[0].' Record(s) Found' : '0 Record' }}</span></strong>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</div> <!-- end of container -->

@include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/recent_sales/delete','message'=>'Are you sure you want to delete this record?'])

@endsection
