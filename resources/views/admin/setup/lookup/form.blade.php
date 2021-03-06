<div class="box-header with-border">
  <h3 class="box-title">{{ $title or null }}</h3>
</div>
<div class="panel-body">
        
    {{ csrf_field() }}
      
      <div class="form-group">  
        {!! Form::label('filter','Filter',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('filter', null, ['class'=>'form-control', 'required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('name','Name',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}
        </div>
      </div>
      
      <div class="form-group">  
        {!! Form::label('code','Code',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-7 custom">
          {!! Form::text('code', null, ['class'=>'form-control', 'required']) !!}
        </div>
      </div>
    
      <hr style="height:1px;border:none;color:#D3D3D3;background-color:#D3D3D3;">
      
      <div class="col-md-offset-8">
        {!! Form::submit('SUBMIT', ['class'=>'btn btn-info']) !!}
        <a role="button" class="btn btn-info" href="{{ url('/admin/setup/lookup/view') }}">CANCEL</a>
      </div>

</div>
  
    @if($errors->any())
      <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    @endif
      
      
