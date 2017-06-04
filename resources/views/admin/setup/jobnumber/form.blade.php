<div class="box-header with-border">
  <h3 class="box-title">{{ $title or null }}</h3>
</div>
<div class="panel-body">
        
    {{ csrf_field() }}
    
      <div class="form-group">  
        {!! Form::label('job_number','Job Number',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('job_number', null, ['class'=>'form-control', 'required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('application','Job Name',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::select('application', \App\Publication::all()->pluck('pub_name','pub_name'), null, ['class'=>'form-control']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('section','Section',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::select('section', ['S'=>'Sale','R'=>'Rent','S'=>'Sold','L'=>'Land'], null, ['class'=>'form-control']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('current_month','For the Month of',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('current_month', null, ['class'=>'form-control', 'placeholder'=>'yyyy-mm-dd Please Enter the First day of the month','required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('job_date','Job Date From',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('job_date', null, ['class'=>'form-control', 'placeholder'=>'yyyy-mm-dd Please Enter the First day of the month','required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('stats_output','Stats Output String',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('stats_output', null, ['class'=>'form-control', 'required']) !!}
        </div>  
      </div>
    
      <hr style="height:1px;border:none;color:#D3D3D3;background-color:#D3D3D3;">
      
      <div class="col-md-offset-8">
        {!! Form::submit('SUBMIT', ['class'=>'btn btn-info']) !!}
        <a role="button" class="btn btn-info" href="{{ url('/admin/setup/jobnumber/view') }}">CANCEL</a>
      </div>
      
</div> <!-- end of panel body -->

    @if($errors->any())
      <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    @endif
      