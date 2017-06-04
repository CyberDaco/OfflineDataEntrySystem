<div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1  label">
  {!! Form::text('bedrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9-]{1,5}']) !!}
</div>
<div class="col-md-3 col-sm-2 col-xs-2 custom">
  {!! Form::label('bedrooms','Bedrooms',['class'=>'control-label custom']) !!}
</div>

<div class="col-md-1 col-sm-1 col-xs-2 col-xs-offset-1 label">
  {!! Form::text('bathrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
</div>
<div class="col-md-2 col-xs-2 custom">
  {!! Form::label('bathrooms','Bathrooms',['class'=>'control-label custom']) !!}
</div>