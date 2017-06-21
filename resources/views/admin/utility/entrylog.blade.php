@extends('layouts.admin.admin')

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><strong>View Entry Logs</strong></h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="data_table" class="table table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Application</th>
              <th>Job Name</th>
              <th>Date</th>
              <th>Batch Name</th>
              <th>Record ID</th>
              <th>User ID</th>
              <th>Action</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Total Time</th>
              <th>Job Number</th>
            </tr>
            </thead>
            <tbody>
              @foreach($entry_logs as $entry_log)
                <tr>
                  <td>{{ $entry_log->id  }}</td>
                  <td>{{ $entry_log->log->application }}</td>
                  <td>{{ $entry_log->log->job_name }}</td>
                  <td>{{ $entry_log->log->batch_date }}</td>
                  <td>{{ $entry_log->batch_name }}</td>
                  <td>{{ $entry_log->record_id }}</td>
                  <td>{{ $entry_log->user_id }}</td>
                  <td>{{ $entry_log->action }}</td>
                  <td>{{ $entry_log->start }}</td>
                  <td>{{ $entry_log->end }}</td>
                  <td>{{ (strtotime($entry_log->end) - strtotime($entry_log->start))/60 }}</td>
                  <td>{{ $entry_log->job_log->job_number }}</td>
                </tr>
              @endforeach
            </tbody>
            <tfoot></tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
  $('#data_table').DataTable( {
  "lengthMenu": [[50, 75, 100, -1], [50, 75, 100, "All"]]
  } );
} );
</script>
@endpush

