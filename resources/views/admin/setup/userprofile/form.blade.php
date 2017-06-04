<div class="box-header with-border">
  <h3 class="box-title">{{ $title or null }}</h3>
</div>
<div class="panel-body">
        
    {{ csrf_field() }}
    
      <div class="form-group">  
        {!! Form::label('user_id','Operator ID',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
        <div class="col-md-7 col-sm-7 col-xs-8 custom">
          {!! Form::text('user_id', null, ['class'=>'form-control', 'readonly','required']) !!}
        </div>
        
      </div>
    
      <div class="form-group">  
        {!! Form::label('contact_no','Contact No.',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
        <div class="col-md-7 col-sm-7 col-xs-8 custom">
          {!! Form::text('contact_no', null, ['class'=>'form-control', 'required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('address','Home Address',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
        <div class="col-md-7 col-sm-7 col-xs-8 custom">
          {!! Form::text('address', null, ['class'=>'form-control']) !!}
        </div>
      </div>
      
      <div class="form-group">
        {!! Form::label('user_img','User Image',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
        <div class="col-md-7 col-sm-7 col-xs-8 custom">
          {!! Form::file('user_img', null, ['class'=>'form-control']) !!}
        </div>
      </div>
      
      <hr style="height:1px;border:none;color:#D3D3D3;background-color:#D3D3D3;">
      
      <div class="col-md-offset-8">
        {!! Form::submit('SUBMIT', ['class'=>'btn btn-info']) !!}
        <a role="button" class="btn btn-info" href="{{ url('/admin/setup/userprofile/view') }}">CANCEL</a>
      </div>

</div>
      
    @if($errors->any())
    <ul class="alert alert-danger">
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif
      
