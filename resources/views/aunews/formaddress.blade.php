<legend>{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</legend>
        
<div class="form-group">
  {!! Form::label('batch_name','Batch Name',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-3 col-sm-2 col-xs-2 custom">
    {!! Form::text('batch_name', session('batch_name'), ['class'=>'form-control input-sm', 'required','readonly']) !!}
  </div>
</div>
    
<div class="form-group">
  {!! Form::label('listing_id','Listing No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
    {!! Form::text('listing_id', null, ['class'=>'form-control input-sm']) !!}
  </div>
</div>
    
<div class="form-group">
  {!! Form::label('page_no','Page No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
    {!! Form::text('page_no', null, ['class'=>'form-control input-sm', 'required']) !!}
  </div>
</div>
    

<fieldset style="margin-top: 25px;">
<div class="form-group">
  {!! Form::label('unit_no','Unit No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
    {!! Form::text('unit_no', null, ['class'=>'form-control input-sm','autofocus'=>'true']) !!}
  </div>
</div>
    
<div class="form-group">
  {!! Form::label('street_no','Street No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
    {!! Form::text('street_no', null, ['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,5}', 'required']) !!}
  </div>
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
    {!! Form::text('street_no_suffix', null, ['class'=>'form-control input-sm','maxlength'=>'1','placeholder'=>'SUFFIX', 'pattern'=>'[aA-zZ]']) !!}
  </div>
</div>
    
<div class="form-group">
  {!! Form::label('street_name','Street Name',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-4 col-sm-5 col-xs-4 custom">
    {!! Form::text('street_name', null, ['class'=>'form-control input-sm', 'required']) !!}
  </div>
  <div class="col-md-2 col-sm-1 col-xs-2 custom label">
    {!! Form::select('street_extension', $street_extension, 'Street', ['class'=>'form-control input-sm']) !!} 
  </div>
  <div class="col-md-2 col-sm-1 col-xs-2 custom label">
    {!! Form::select('street_direction', ['NORTH'=>'NORTH', 'SOUTH'=>'SOUTH', 'EAST'=>'EAST', 'WEST'=>'WEST'], null, ['class'=>'form-control input-sm','placeholder'=>'--']) !!} 
  </div>
</div>
    
<div class="form-group">
  {!! Form::label('suburb','Suburb',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-4 col-sm-4 col-xs-6 custom">
    {!! Form::text('suburb', null, ['class'=>'form-control input-sm', 'required']) !!}
  </div>
  <div class="col-md-2 col-sm-1 col-xs-2 custom label">
    {!! Form::text('post_code', null, ['class'=>'form-control input-sm','id'=>'post_code','tabindex'=>'-1','readonly']) !!}
  </div>
</div>
    
<div class="form-group">
  {!! Form::label('property_type','Property Type',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-4 col-sm-4 col-xs-4 custom">
    {!! Form::select('property_type', $prop_type, null, ['class'=>'form-control input-sm']) !!} 
  </div>
  {!! Form::label('state','State',['class'=>'control-label col-md-1 col-sm-1 col-xs-2']) !!}
  <div class="col-md-3 col-sm-2 col-xs-2 custom">
    {!! Form::select('state',\App\Publication::where('pub_name',session('batch_details')->job_name)->first()->state_code,null, ['class'=>'form-control input-sm']) !!}
  </div>
</div>
      
<div class="form-group">
  {!! Form::label('sale_rent','Sale/Rent',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-4 col-xs-4 custom">
    {!! Form::select('sale_rent', substr(session('batch_name'),-4,1) == 'S' ? ['S'=>'SALE'] : ['R'=>'RENT'], substr(session('batch_name'),-4,1), ['class'=>'form-control input-sm','readonly'=>'true']) !!} 
  </div>
</div>
</fieldset>

<hr>

<div class="form-group">
  <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-10 col-xs-2 col-xs-offset-9">
    <button type="submit" class="btn btn-primary btn-md">Submit</button>
  </div>
</div>


@if($errors->any())
  <ul class="alert alert-danger">
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif

