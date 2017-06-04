	@extends('layouts.batch_aunews')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

          {!! Form::open(array('role'=>'form','url'=>'/aunews','action'=>'POST','class'=>'form-horizontal'))!!}
          <legend>Batch Details</legend>
          
          {!! Form::token() !!}
          
          <div class="form-group">
            {!! Form::label('job_number','Job Number : ',['class'=>'control-label col-md-3']) !!}
          <div class="col-md-8">
            {!! Form::text('job_number', null, ['class'=>'form-control', 'pattern'=>'[0-9]{4}', 'required']) !!}
          </div>  
          </div>
          
          <div class="form-group">
            {!! Form::label('job_name','Job Name : ',['class'=>'control-label col-md-3']) !!}
          <div class="col-md-8">
            {!! Form::select('job_name', \App\Publication::where('application','Australian Newspapers')->lists('pub_name','pub_name'), null, ['class'=>'form-control', 'readonly']) !!}
          </div>  
          </div>
          
          <div class="form-group">
            {!! Form::label('batch_date','Date : ',['class'=>'control-label col-md-3']) !!}
          <div class="col-md-8">
            {!! Form::text('batch_date', null, ['class'=>'form-control aussie_date', 'pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$', 'required']) !!}
          </div>  
          </div>
          
          <div class="form-group">
            {!! Form::label('batch_name','Batch Name : ',['class'=>'control-label col-md-3']) !!}
          <div class="col-md-8">
            {!! Form::text('batch_name', null, ['class'=>'form-control', 'pattern'=>'[aA-zZ]{3}[/_/][0-9]{8}[/_/][Ss|Rr][/_/][0-9]{2}', 'required']) !!}
          </div>  
          </div>
          
          <hr>
          
          <div class="form-group">
          <div class="col-md-9 col-md-offset-3">
            @if($errors->any())
              <ul class="alert alert-danger">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
              @endforeach
              </ul>
            @endif
          </div>
          </div>
          
          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <button type="submit" class="btn btn-info">SUBMIT</button>
              <a href="{{ url('/dataentry') }}" class="btn btn-primary">Back To Application</a>
            </div>
          </div>
          </form>


    </div><!-- end of column -->
  </div> <!-- end of row -->    
</div> <!-- end of container -->
@endsection


