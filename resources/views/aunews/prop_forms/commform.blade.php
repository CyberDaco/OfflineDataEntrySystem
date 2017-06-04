<div class="form-group">
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
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('car_spaces',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('car_spaces','Car Spaces',['class'=>'control-label custom']) !!}
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
      {!! Form::text('floor_level',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('floor_level','Floor Level',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('floor_area',null,['class'=>'form-control input-sm', 'pattern'=>'^\d*(\.\d{1,2}$)?']) !!}
    </div>
    <div class="col-md-3 col-xs-4 custom">
      {!! Form::label('floor_area','M2 Total Floor Area',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('total_floors',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('total_floors','Total Bldg. Floors',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('floor_level_inside',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-3 col-xs-3 custom">
      {!! Form::label('floor_level_inside','No. of Floor Level Inside',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('year_built',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('year_built','Year Built',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('year_refurbished',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4}']) !!}
    </div>
    <div class="col-md-3 col-xs-4 custom">
      {!! Form::label('year_refurbished','Year Refurbished',['class'=>'control-label custom']) !!}
    </div>
</div>



<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('air_conditioned', 'N') !!}
      {!! Form::checkbox('air_conditioned', 'Y', null, ['id'=>'air_conditioned']) !!}
      {!! Form::label('air_conditioned','Air-Conditioned',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2">
      {!! Form::hidden('close_to_public', 'N') !!}
      {!! Form::checkbox('close_to_public', 'Y', null, ['id'=>'close_to_public']) !!}
      {!! Form::label('close_to_public','Close to Public Transport',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('water_frontage', 'N') !!}
      {!! Form::checkbox('water_frontage', 'Y', null, ['id'=>'water_frontage']) !!}
      {!! Form::label('water_frontage','Water Frontage',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-2">
      {!! Form::hidden('vendor_trade', 'N') !!}
      {!! Form::checkbox('vendor_trade', 'Y', null, ['id'=>'vendor_trade']) !!}
      {!! Form::label('vendor_trade','Vendor Will Trade',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('scenic_view', 'N') !!}
      {!! Form::checkbox('scenic_view', 'Y', null, ['id'=>'scenic_view']) !!}
      {!! Form::label('scenic_view','Scenic View',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2">
      {!! Form::hidden('river_frontage', 'N') !!}
      {!! Form::checkbox('river_frontage', 'Y', null, ['id'=>'river_frontage']) !!}
      {!! Form::label('river_frontage','River Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-5 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-6 col-xs-offset-1">
      {!! Form::hidden('heritage_other', 'N') !!}
      {!! Form::checkbox('heritage_other', 'Y', null, ['id'=>'heritage_other']) !!}
      {!! Form::label('heritage_other','Heritage/Other Classification',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-sm-3 col-sm-offset-0 col-xs-4 col-xs-offset-0">
      {!! Form::hidden('coast_frontage', 'N') !!}
      {!! Form::checkbox('coast_frontage', 'Y', null, ['id'=>'coast_frontage']) !!}
      {!! Form::label('coast_frontage','Coast Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('lift_installed', 'N') !!}
      {!! Form::checkbox('lift_installed', 'Y', null, ['id'=>'lift_installed']) !!}
      {!! Form::label('lift_installed','Lift Installed',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-2">
      {!! Form::hidden('canal_frontage', 'N') !!}
      {!! Form::checkbox('canal_frontage', 'Y', null, ['id'=>'canal_frontage']) !!}
      {!! Form::label('canal_frontage','Canal Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('access_security', 'N') !!}
      {!! Form::checkbox('access_security', 'Y', null, ['id'=>'access_security']) !!}
      {!! Form::label('access_security','Access Security Installed',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('lake_frontage', 'N') !!}
      {!! Form::checkbox('lake_frontage', 'Y', null, ['id'=>'lake_frontage']) !!}
      {!! Form::label('lake_frontage','Lake Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

