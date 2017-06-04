@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-md-10">
    <h3><b>Export : Australian Newspapers</b></h3>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-md-offset-0">
    <div class="panel panel-default">
      <div class="panel-body">
        {!! Form::open(array('role'=>'form','url'=>'/admin/export/aunews/batch','method'=>'GET','class'=>'form-inline'))!!}
        <div class="form-group">
        {!! Form::label('job_name','Select Batch',['class'=>'control-label']) !!}
        {!! Form::select('job_name', \App\Batch::where('application','Australian Newspapers')->where('job_status','Open')->lists('job_name','job_name'), isset($_GET['job_name']) ? $_GET['job_name'] : null , ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('batch_date','Job Date',['class'=>'control-label']) !!}
        {!! Form::text('batch_date',isset($_GET['batch_date']) ? $_GET['batch_date'] : '' , ['class'=>'form-control aussie_date', 'required']) !!}
        {!! Form::token() !!}
        </div>
        {!! Form::submit('View Batches',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
      </div> <!-- end of panel body-->
    </div> <!-- end of class panel-->
  </div> <!-- end of col-->
</div> <!-- end of row-->

@if(isset($batch))

<div class="row">
  <div class="col-md-9">
    <h3 style="margin-top:0">Valid Records</h3>
  </div>
  <div class="col-md-3">
    {!! Form::open(array('role'=>'form','url'=>'/admin/export/aunews/valid','method'=>'GET','class'=>'form-inline'))!!}
    {!! Form::token() !!}
      <div class = "input-group pull-right">
         {!! Form::hidden('id',$batch->id) !!}
         {!! Form::text('sequence',null,['class'=>'form-control','placeholder'=>'Sequence No.','required']) !!}
         <span class = "input-group-btn">
         {!! Form::submit('Export Text File',['class'=>'btn btn-primary']) !!}
         </span>
      </div><!-- /input-group -->
    {!! Form::close() !!}
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered table-hover">
      <thead style="background:#006080;color:white">
        <tr>
          <th>Batch Name</th>
          <th>Records</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($results as $result)
          <tr>
            <td>{{ $result->batch_name }}</td>
            <td>{{ $result->entry + $result->verify  }}</td>
            <td>
              <div class="progress" style="margin:0;">
                <div class="progress-bar progress-bar-success" role="progressbar" style="width:{{ ($result->verify / ($result->entry + $result->verify)) * 100  }}%">
                  Verified
                </div>
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:{{ ($result->entry / ($result->entry + $result->verify)) * 100  }}%">
                  For Verify
                </div>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div> <!-- end of col-->
</div> <!-- end of row-->  
        
<hr>

<div class="row">
  <div class="col-md-9">
    <h3 style="margin-top:0">Invalid</h3>
  </div>
  <div class="col-md-3">
    <a href="{{ url('/admin/export/invalid/'.$batch->id) }}"><button type="button" class="btn btn-primary pull-right btn-md">Export To Excel</button></a>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered table-hover">
      <thead style="background:#006080;color:white">
        <tr>
          <th>Batch Name</th>
          <th>Records</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($invalids as $invalid)
          <tr>
            <td>{{ $invalid->batch_name }}</td>
            <td>{{ $invalid->records}}</td>
            <td></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div> <!-- end of col-->
</div> <!-- end of row-->        
        

@else
  <h3></1><span class="label label-info">No Record to show</span></h3>
@endif



</div><!-- end of container -->
@endsection



@push('scripts')
<script>

  
</script>
@endpush
