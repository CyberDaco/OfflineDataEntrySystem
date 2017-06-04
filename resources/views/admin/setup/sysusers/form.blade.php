<div class="box-header with-border">
    <h3 class="box-title">{{ $title or null }}</h3>
</div>
<div class="panel-body">
        
      {!! Form::token() !!}
      
      <div class="form-group{{ $errors->has('operator_id') ? ' has-error' : '' }}">
        <label for="operator_id" class="col-md-3 control-label">Operator ID</label>

        <div class="col-md-6">
            {!! Form::text('operator_id',null,['class'=>'form-control']) !!}
            
            @if ($errors->has('operator_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('operator_id') }}</strong>
                </span>
            @endif
        </div>
      </div>
    
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-3 control-label">Username</label>
  
        <div class="col-md-6">
            {!! Form::text('name',null,['class'=>'form-control']) !!}
  
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
      </div>    
    
      <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
        <label for="name" class="col-md-3 control-label">Firstname</label>
  
        <div class="col-md-6">
            {!! Form::text('firstname',null,['class'=>'form-control']) !!}
  
            @if ($errors->has('firstname'))
                <span class="help-block">
                    <strong>{{ $errors->first('firstname') }}</strong>
                </span>
            @endif
        </div>
      </div> 
      
      <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
        <label for="lastname" class="col-md-3 control-label">Lastname</label>
  
        <div class="col-md-6">
            {!! Form::text('lastname',null,['class'=>'form-control']) !!}
  
            @if ($errors->has('lastname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
        </div>
      </div> 

      
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-3 control-label">Email</label>

          <div class="col-md-6">
              {!! Form::text('email',null,['class'=>'form-control']) !!}

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      
      <div class="form-group{{ $errors->has('access_level') ? ' has-error' : '' }}">
        <label for="access_level" class="col-md-3 control-label">Access Level</label>
  
        <div class="col-md-6">
            {!! Form::text('access_level',null,['class'=>'form-control']) !!}
  
            @if ($errors->has('access_level'))
                <span class="help-block">
                    <strong>{{ $errors->first('access_level') }}</strong>
                </span>
            @endif
        </div>
      </div>
      
      
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-3 control-label">Password</label>
  
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password">
  
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
      </div>
      
      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>
  
          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
  
              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      
      <div class="col-md-offset-8">
        {!! Form::submit('SUBMIT', ['class'=>'btn btn-info']) !!}
        <a role="button" class="btn btn-info" href="/admin/setup/sysusers/view">CANCEL</a>
      </div>
      
</div>

    @if($errors->any())
      <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    @endif
      