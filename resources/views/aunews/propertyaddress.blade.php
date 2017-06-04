<div class="hidden">
<div class="form-group">
    {!! Form::label('batch_name','Batch Name',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-2 col-sm-2 col-xs-2 custom">
      {!! Form::text('batch_name', $prop_address['batch_name'], ['class'=>'form-control input-sm', 'required']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('page_no','Page No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-1 col-sm-2 col-xs-2 custom">
      {!! Form::text('page_no', $prop_address['page_no'], ['class'=>'form-control input-sm']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('listing_id','Listing No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-2 col-sm-2 col-xs-2 custom">
      {!! Form::text('listing_id', $prop_address['listing_id'], ['class'=>'form-control input-sm']) !!}
    </div>
</div>

<br>

<div class="form-group">
    {!! Form::label('unit_no','Unit No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-2 col-sm-2 col-xs-2 custom">
      {!! Form::text('unit_no', $prop_address['unit_no'], ['class'=>'form-control input-sm']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('street_no','Street No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-2 col-sm-2 col-xs-2 custom">
      {!! Form::text('street_no', $prop_address['street_no'], ['class'=>'form-control input-sm']) !!}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2 custom">
      {!! Form::text('street_no_suffix', $prop_address['street_no_suffix'], ['class'=>'form-control input-sm']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('street_name','Street Name',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-4 col-sm-5 col-xs-4 custom">
      {!! Form::text('street_name', $prop_address['street_name'], ['class'=>'form-control input-sm']) !!}
    </div>
    <div class="col-md-2 col-sm-1 col-xs-2 custom label">
      {!! Form::select('street_extension', $street_extension, $prop_address['street_extension'], ['class'=>'form-control input-sm']) !!} 
    </div>
    <div class="col-md-2 col-sm-1 col-xs-2 custom label">
      {!! Form::select('street_direction', ['NORTH'=>'NORTH', 'SOUTH'=>'SOUTH', 'EAST'=>'EAST', 'WEST-'=>'WEST'], $prop_address['street_direction'], ['class'=>'form-control input-sm','placeholder'=>'--']) !!} 
    </div>
</div>

<div class="form-group">
    {!! Form::label('suburb','Suburb',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-4 col-sm-5 col-xs-4 custom">
      {!! Form::text('suburb', $prop_address['suburb'], ['class'=>'form-control input-sm']) !!}
    </div>
    <div class="col-md-2 col-sm-1 col-xs-2 custom label">
    {!! Form::text('post_code', $prop_address['post_code'], ['class'=>'form-control input-sm','id'=>'post_code','tabindex'=>'-1','readonly']) !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('property_type','Property Type',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-4 col-sm-4 col-xs-4 custom">
      {!! Form::select('property_type', $prop_type, $prop_address['property_type'], ['class'=>'form-control input-sm']) !!} 
    </div>
    {!! Form::label('state','State',['class'=>'control-label col-md-1 col-sm-1 col-xs-2']) !!}
    <div class="col-md-1 col-sm-2 col-xs-2 custom label">
      {!! Form::text('state', $prop_address['state'], ['class'=>'form-control input-sm']) !!}
    </div>
</div>
  
<div class="form-group">
    {!! Form::label('sale_rent','Sale/Rent',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
    <div class="col-md-2 col-sm-4 col-xs-4 custom">
      {!! Form::select('sale_rent', ['S'=>'SALE', 'R'=>'RENT'], $prop_address['sale_rent'], ['class'=>'form-control input-sm']) !!} 
    </div>
</div>
</div> <!-- end of hidden -->

<div class="form-group">  
    {!! Form::label('property_type','Property Type',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-4 col-sm-4 col-xs-4 custom">
    {!! Form::select('property_type', \App\Lookup::where('filter','property_type')->where('name','like',$code)->lists('name','code'), $prop_address['property_type'], ['class'=>'form-control input-sm']) !!} 
    
    </div>
</div>


    