<div class="box-header with-border">
  <h3 class="box-title">{{ $title or null }}</h3>
</div>
<div class="panel-body">

    {{ csrf_field() }}
      
      <div class="form-group">  
        {!! Form::label('application_name','Application Name',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('application_name', null, ['class'=>'form-control', 'required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('folder_path','Application Path',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('folder_path', null, ['class'=>'form-control', 'required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('entry_type','Entry Type',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::select('entry_type', ['Single Entry'=>'Single Entry','Dual Key'=>'Dual Key'], null, ['class'=>'form-control']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('status','Status',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::select('status', ['Active'=>'Active','InActive'=>'InActive'], null, ['class'=>'form-control']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('description','Description',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('description', null, ['class'=>'form-control']) !!}
        </div>
      </div>
    
      <hr style="height:1px;border:none;color:#D3D3D3;background-color:#D3D3D3;">
      
      <div class="form-group">
        <div class="col-md-offset-8">
          {!! Form::submit('SUBMIT', ['class'=>'btn btn-primary']) !!}
          <a role="button" class="btn btn-info" href="{{ url('/admin/setup/application/view') }}">CANCEL</a>
        </div>
      </div>

</div>

@if($errors->any())
  <ul class="alert alert-danger">
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif
      
