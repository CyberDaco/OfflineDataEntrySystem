@extends('layouts.aunews')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-9">
      <h3>{{ $results->job_name.' '.$results->batch_date }}</h3>
    </div>
  </div> <!-- end of row -->
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#valid">Valid <span class="badge">{{ count($results) != 0 ? count($results->au_news_addresses) : '0' }}</span></a></li>
    <li><a data-toggle="tab" href="#invalid">Invalid <span class="badge">{{ count($results) != 0 ? count($results->au_news_invalids) : '0' }}</span></a></li>
    <li><a href="#">{{ session('batch_name') }}</a></li>
  </ul>

  <!-- tab content -->
  <div class="tab-content">
    <div id="valid" class="tab-pane fade in active">
      <!-- valid -->  
      <div class="row">
      <div class="col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Page</th>
              <th class="text-center">State</th>
              <th>Property Address</th>
              <th>Post Code</th>
              <th>Property Type</th>
              <th>Listing Type</th>
              <th>Sale Price</th>
              <th class="text-center">Bed</th>
              <th class="text-center">Bath</th>
              <th class="text-center">Car</th>
              <th>Agency</th>
              <th class="text-center">Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($results->au_news_addresses as $result)
                  <tr>
                    <td>{{ isset($count) ? $count++ : $count = 1 }}</td>
                    <td>{{ $result->page_no }}</td>
                    <td class="text-center">{{ $result->state }}</td>
                    <td><strong>{{ $result->unit_no }} {{ $result->unit_no != '' ? '/' : '' }} {{ trim($result->street_no).' '.$result->street_no_suffix.' '.$result->street_name.' '.$result->street_ext.' '.$result->street_direction.' '.$result->suburb }}</strong></td>
                    <td>{{ $result->post_code }}</td>
                    <td>{{ $result->property_type }}</td>
                    <td>{{ $result->property_detail->listing_type }}</td>
                    <td>{{ $result->property_detail->price_from ? $result->property_detail->price_from.' - '.$result->property_detail->price_to : $result->property_detail->price_description }}</td>
                    <td class="text-center">{{ $result->property_detail->bedrooms }}</td>
                    <td class="text-center">{{ $result->property_detail->bathrooms }}</td>
                    <td class="text-center">{{ $result->property_detail->car_spaces }}</td>
                    <td>{{ $result->property_agents->first()->agency_name }}</td>
                    <td class="text-center">{{ $result->status }}</td>
                    <td class="text-center"><a href="{{ url('/aunews/modify/'.$result->id) }}" class="btn btn-info btn-xs">Modify</a></button>
                    <a class="btn btn-info btn-xs delete" data-toggle="modal" data-target="#delete-modal" data-id="{{ $result->id }}">Delete</a></td>
                  </tr>
                @endforeach
          </tbody>
        </table>
      </div> <!-- end of col-->
    </div> <!-- end of row-->
    </div>
    
    
    <div id="invalid" class="tab-pane fade">
      <!-- invalid--> 
      <div class="row">
      <div class="col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>State</th>
              <th>Property Address</th>
              <th>Post Code</th>
              <th>Property Type</th>
              <th>Listing Type</th>
              <th>Sale Price</th>
              <th>Bed</th>
              <th>Bath</th>
              <th>Car</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($results->au_news_invalids as $result)
                  <tr>
                    <td>{{ $result->id }}</td>
                    <td>{{ $result->state }}</td>
                    <td>{{ $result->unit_no }} {{ $result->unit_no != '' ? '/' : '' }} {{ trim($result->street_no).' '.$result->street_no_suffix.' '.$result->street_name.' '.$result->street_ext.' '.$result->street_direction.' '.$result->suburb }}</td>
                    <td>{{ $result->post_code }}</td>
                    <td>{{ $result->property_type }}</td>
                    <td>{{ $result->listing_type }}</td>
                    <td>{{ $result->price_from ? $result->price_from.' - '.$result->price_to : $result->price_description }}</td>
                    <td>{{ $result->bedrooms }}</td>
                    <td>{{ $result->bathrooms }}</td>
                    <td>{{ $result->lockup_garages }}</td>
                    <td><a href="{{ url('/aunews/invalid/'.$result->id.'/edit') }}" class="btn btn-info btn-xs">Modify</a></button>
                    <a class="btn btn-info btn-xs delete" data-toggle="modal" data-target="#delete-modal1" data-id="{{ $result->id }}">Delete</a></td>
                  </tr>
                @endforeach
          </tbody>
        </table>
      </div> <!-- end of col-->
    </div> <!-- end of row-->
    </div>
    
  
  </div> <!-- end of tab content-->
</div> <!-- end of container -->


<div id="delete-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>DELETE</b></h4>
      </div>
        <form class="form-horizontal" action="{{ url('/aunews/delete') }}" method="post">
          <div class="modal-body">
            <h4>Are you sure you want to delete?</h4>
            {{ csrf_field() }}
            <input name="delete_id" id="delete_id" type="hidden" value="" />
          </div> <!-- end of modal body -->
    
            <div class="modal-footer">
              <button type="submit" class="btn btn-default">Yes</button> <!-- data dismiss? -->
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
    
          </form> <!-- end of form horizontal -->
        
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

<div id="delete-modal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>DELETE</b></h4>
      </div>
        <form class="form-horizontal" action="{{ url('/aunews/invalid/delete') }}" method="post">
          <div class="modal-body">
            <h4>Are you sure you want to delete?</h4>
            {{ csrf_field() }}
            <input name="delete_id" id="delete_id2" type="hidden" value="" />
          </div> <!-- end of modal body -->
    
            <div class="modal-footer">
              <button type="submit" class="btn btn-default">Yes</button> <!-- data dismiss? -->
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
    
          </form> <!-- end of form horizontal -->
        
    </div><br> <!-- end of modal content -->
  </div> <!-- end of modal dialog -->
</div> <!-- end of modal -->

@endsection


@push('scripts')
<script>
  $(document).on('click', '.delete', function() {
      $('#delete_id').val($(this).data("id"));
  });
  
  $(document).on('click', '.delete', function() {
      $('#delete_id2').val($(this).data("id"));
  });
</script>
@endpush