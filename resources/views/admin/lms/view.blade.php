@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
    <h3><b>Leave Management System</b></h3>
  </div>
</div>  
<div>
  <div class="col-md-2">
    <ul class="nav nav-pills nav-stacked">
      <li class="{{ setActivecount('admin/lms/all') }}" ><a href="{{ url('/admin/lms/all') }}">All <span class="badge pull-right">{{ count($all) != 0 ? count($all) : '0' }}</span></a></li>
      <li class="{{ setActivecount('admin/lms/approved') }}"><a href="{{ url('/admin/lms/approved') }}">Approved <span class="badge pull-right">{{ count($approved) != 0 ? count($approved) : '0' }}</span></a></li>
      <li class="{{ setActivecount('admin/lms/declined') }}"><a href="{{ url('/admin/lms/declined') }}">Declined <span class="badge pull-right">{{ count($declined) != 0 ? count($declined) : '0' }}</span></a></li>
      <li class="{{ setActivecount('admin/lms/pending') }}"><a href="{{ url('/admin/lms/pending') }}">Pending <span class="badge pull-right">{{ count($pending) != 0 ? count($pending) : '0' }}</span></a></li>
    </ul>
  </div>
  <div class="col-md-10">
    <table class="table table-hover">
        <thead>
          <tr>
            <th class="text-center">DATE ADDED</th>
            <th class="text-center">TYPE OF LEAVE</th>
            <th class="text-center">FROM</th>
            <th class="text-center">TO</th>
            <th class="text-center">NO. OF DAYS</th>
            <th class="text-center">REASON</th>
            <th class="text-center">STATUS</th>
            <th class="text-center">APPROVED BY</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach($results as $result)
            <tr>
              <td class="text-center">{{ $result->created_at }}</td>
              <td class="text-center">{{ $result->leave_type }}</td>
              <td class="text-center">{{ $result->date_from }}</td>
              <td class="text-center">{{ $result->date_to }}</td>
              <td class="text-center">{{ $result->no_days }}</td>
              <td class="text-center">{{ $result->reason }}</td>
              <td class="text-center">{{ $result->status }}</td>
              <td class="text-center">{{ $result->approved_by }}</td>
              <td class="text-center">
                @if ($result->status == 'APPROVED' || $result->status == 'DECLINED')
                  <a href="{{ url('/admin/lms/'.$result->id.'/forapproval') }}" class="btn btn-info btn-xs disabled">APPROVE</a>
                  <a href="{{ url('/admin/lms/'.$result->id.'/fordeclinement') }}" class="btn btn-danger btn-xs disabled">DECLINE</a>
                @else
                  <a href="{{ url('/admin/lms/'.$result->id.'/forapproval') }}" class="btn btn-info btn-xs">APPROVE</a>
                  <a href="{{ url('/admin/lms/'.$result->id.'/fordeclinement') }}" class="btn btn-danger btn-xs">DECLINE</a>
                @endif
              </td>
            </tr>
          @endforeach  
        </tbody>
      </table>
    
  </div>
</div>
</div> <!-- end of container-->
@endsection

@push('scripts')
<script>
  $(document).on('click', '.delete', function() {
      $('#delete_id').val($(this).data("id"));
  });
  
</script>

@endpush
