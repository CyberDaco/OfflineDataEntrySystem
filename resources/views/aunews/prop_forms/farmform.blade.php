<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1  label">
      {!! Form::text('bedrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9-]{1,5}']) !!}
    </div>
    <div class="col-md-3 col-sm-3 col-xs-2 custom">
      {!! Form::label('bedrooms','Bedrooms',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('bathrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-2 col-xs-2 custom">
      {!! Form::label('bathrooms','Bathrooms',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('dining_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9]{1}']) !!}
    </div>
    <div class="col-md-4 col-sm-4 col-xs-3 custom">
      {!! Form::label('dining_rooms','Dining Rooms',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('land_area',null,['class'=>'form-control input-sm', 'pattern'=>'^\d*(\.\d{1,4}$)?']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 custom label">
      {!! Form::select('land_area_metric', ['M2'=>'M2', 'ACRES'=>'ACRES', 'HECTARES'=>'HECTARES', 'PERCHES'=>'PERCHES'], null, ['class'=>'form-control input-sm']) !!}
    </div>
    <div class="col-md-2 col-xs-2 custom">
      {!! Form::label('land_area','Land Area',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('year_built',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4}']) !!}
    </div>
    <div class="col-md-4 col-sm-4 col-xs-3 custom">
      {!! Form::label('year_built','Year Built',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('other_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-3 col-xs-4 custom">
      {!! Form::label('other_rooms','Other Rooms',['class'=>'control-label custom']) !!}
    </div>
</div>



<div class="form-group">  
  <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
    {!! Form::hidden('vendor_trade', 'N') !!}
    {!! Form::checkbox('vendor_trade', 'Y', null, ['id'=>'vendor_trade']) !!}
    {!! Form::label('vendor_trade','Vendor Will Trade',['class'=>'control-label custom']) !!}
  </div>
  <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-2">
    {!! Form::hidden('permanent_water', 'N') !!}
    {!! Form::checkbox('permanent_water', 'Y', null, ['id'=>'permanent_water']) !!}
    {!! Form::label('permanent_water','Permanent Water',['class'=>'control-label custom']) !!}
  </div>
</div>

<div class="form-group">  
  <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
    {!! Form::hidden('electricity', 'N') !!}
    {!! Form::checkbox('electricity', 'Y', null, ['id'=>'electricity']) !!}
    {!! Form::label('electricity','Mains Electricity Available',['class'=>'control-label custom']) !!}
  </div>
  <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-1">
    {!! Form::hidden('river_frontage', 'N') !!}
    {!! Form::checkbox('river_frontage', 'Y', null, ['id'=>'river_frontage']) !!}
    {!! Form::label('river_frontage','River Frontage',['class'=>'control-label custom']) !!}
  </div>
</div>

<div class="form-group">  
  <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
    {!! Form::hidden('coast_frontage', 'N') !!}
    {!! Form::checkbox('coast_frontage', 'Y', null, ['id'=>'coast_frontage']) !!}
    {!! Form::label('coast_frontage','Coast Frontage',['class'=>'control-label custom']) !!}
  </div>
  <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-2">
    {!! Form::hidden('canal_frontage', 'N') !!}
    {!! Form::checkbox('canal_frontage', 'Y', null, ['id'=>'canal_frontage']) !!}
    {!! Form::label('canal_frontage','Canal Frontage',['class'=>'control-label custom']) !!}
  </div>
</div>

<div class="form-group">  
  <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
    {!! Form::hidden('lake_frontage', 'N') !!}
    {!! Form::checkbox('lake_frontage', 'Y', null, ['id'=>'lake_frontage']) !!}
    {!! Form::label('lake_frontage','Lake Frontage',['class'=>'control-label custom']) !!}
  </div>
  <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-2">
    {!! Form::hidden('sealed_roads', 'N') !!}
    {!! Form::checkbox('sealed_roads', 'Y', null, ['id'=>'sealed_roads']) !!}
    {!! Form::label('sealed_roads','Sealed Roads To Property',['class'=>'control-label custom']) !!}
  </div>
</div>

<div class="form-group">  
  <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
    {!! Form::hidden('all_weather', 'N') !!}
    {!! Form::checkbox('all_weather', 'Y', null, ['id'=>'all_weather']) !!}
    {!! Form::label('all_weather','All Weather Access To Land',['class'=>'control-label custom']) !!}
  </div>
</div>
