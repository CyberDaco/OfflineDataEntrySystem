<div class="box-header with-border">
    <h3 class="box-title">{{ $title or null }}</h3>
</div>
<div class="panel-body">
  
    {{ csrf_field() }}
    
    <div class="form-group">  
        {!! Form::label('application','Application',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::select('application', \App\Application::lists('application_name','application_name'), null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('state_list[]','State Selection',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
        {!! Form::select('state_list[]', \App\State::lists('code','id'),null, ['class'=>'form-control select2','multiple'=>'true']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('pub_name','Publication Name',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::text('pub_name', null, ['class'=>'form-control', 'required']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('source','Source',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::text('source', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('issue','Issue',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::select('issue',['Random'=>'Random','Daily'=>'Daily','Weekly'=>'Weekly','Bi-Weekly'=>'Bi-Weekly','Fornightly'=>'Fornightly','Monthly'=>'Monthly','Quarterly'=>'Quarterly','Yearly'=>'Yearly'],null, ['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('status','Status',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::select('status', ['Active'=>'Active','InActive'=>'InActive'], null, ['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('site','Site',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::text('site', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('code','Code',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::text('code', null, ['class'=>'form-control', 'pattern'=>'[A-Z]{3}', 'required']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('invalid','Invalid',['class'=>'control-label col-md-3 col-sm-2 col-xs-2']) !!}
        <div class="col-md-7 col-sm-3 col-xs-4 custom">
          {!! Form::select('invalid',['NO'=>'NO','YES'=>'YES'], null, ['class'=>'form-control']) !!}
        </div>
    </div>
    
      <hr style="height:1px;border:none;color:#D3D3D3;background-color:#D3D3D3;">
      
      <div class="col-md-offset-8">
        {!! Form::submit('SUBMIT', ['class'=>'btn btn-info']) !!}
        <a role="button" class="btn btn-info" href="{{ url('/admin/setup/publication/view') }}">CANCEL</a>
      </div>

    
</div> <!-- end of panel body -->

    


    @if($errors->any())
      <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    @endif
      