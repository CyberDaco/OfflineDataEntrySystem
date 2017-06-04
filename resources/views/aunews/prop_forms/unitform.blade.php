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
      {!! Form::text('lockup_garages',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9-]{1,5}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('lockup_garages','Lockup Garage',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('floor_level',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-2 col-xs-2 custom">
      {!! Form::label('floor_level','Floor Level',['class'=>'control-label custom']) !!}
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
      {!! Form::text('floor_area',null,['class'=>'form-control input-sm', 'pattern'=>'^\d*(\.\d{1,2}$)?']) !!}
    </div>
    <div class="col-md-3 col-xs-4 custom">
      {!! Form::label('floor_area','M2 Total Floor Area',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('lounge_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9]{1,2}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('lounge_rooms','Lounge Rooms',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('dining_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9]{1}']) !!}
    </div>
    <div class="col-md-2 col-xs-3 custom">
      {!! Form::label('dining_rooms','Dining Rooms',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('study_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9]{1}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('study_rooms','Study Rooms',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('family_rumpus',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-3 col-xs-4 custom">
      {!! Form::label('family_rumpus','Family/Rumpus Room',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('toilets',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9]{1}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('toilets','Toilets',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('ensuites',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9]{1}']) !!}
    </div>
    <div class="col-md-1 col-xs-1 custom">
      {!! Form::label('ensuites','Ensuites',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('lounge_dining',null,['class'=>'form-control input-sm', 'pattern'=>'[1-9]{1}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('lounge_dining','Lounge/Dining',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('other_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-2 col-xs-4 custom">
      {!! Form::label('other_rooms','Other Rooms',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::text('total_floors',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-4 col-sm-3 col-xs-3 custom">
      {!! Form::label('total_floors','Total Floors in Bldg.',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 label">
      {!! Form::text('floor_level_inside',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
    </div>
    <div class="col-md-4 col-xs-4 custom">
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
     <div class="col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-0 label">
      {!! Form::select('construction_type', ['BRICK'=>'BRICK', 'TIMBER'=>'TIMBER', 'RENDERED'=>'RENDERED', 'STONE'=>'STONE'], null, ['class'=>'form-control input-sm', 'placeholder'=>'--']) !!}
    </div>
    <div class="col-md-3 col-sm-2 col-xs-3 custom">
      {!! Form::label('construction_type','Construction Type',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
      {!! Form::select('roof_material', ['TILED'=>'TILED', 'GALVANIZED IRON'=>'GALVANIZED IRON', 'COLOUR BOND'=>'COLOUR BOND'], null, ['class'=>'form-control input-sm', 'placeholder'=>'--']) !!}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-3 custom">
      {!! Form::label('roof_material','Roof Material',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-0 col-xs-2 col-xs-offset-1 label">
      {!! Form::select('scenic_view_type', ['CITY'=>'CITY', 'LAKE'=>'LAKE', 'MOUNTAIN'=>'MOUNTAIN', 'OCEAN'=>'OCEAN', 'RIVER'=>'RIVER', 'SCENIC'=>'SCENIC'], null, ['class'=>'form-control input-sm', 'placeholder'=>'--']) !!}
    </div>
    <div class="col-md-3 col-sm-2 custom">
      {!! Form::label('scenic_view_type','Scenic View Type',['class'=>'control-label custom']) !!}
    </div>
</div>



<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('air_conditioned', 'N') !!}
      {!! Form::checkbox('air_conditioned', 'Y', null, ['id'=>'air_conditioned']) !!}
      {!! Form::label('air_conditioned','Air-Conditioned',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-2">  
      {!! Form::hidden('scenic_view', 'N') !!}
      {!! Form::checkbox('scenic_view', 'Y', null, ['id'=>'scenic_view']) !!}
      {!! Form::label('scenic_view','Scenic View',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('ducted_heating', 'N') !!}
      {!! Form::checkbox('ducted_heating', 'Y', null, ['id'=>'ducted_heating']) !!}
      {!! Form::label('ducted_heating','Ducted Heating',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-3 col-xs-offset-2">
      {!! Form::hidden('lift_installed', 'N') !!}
      {!! Form::checkbox('lift_installed', 'Y', null, ['id'=>'lift_installed']) !!}
      {!! Form::label('lift_installed','Lift Installed',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('swimming_pool', 'N') !!}
      {!! Form::checkbox('swimming_pool', 'Y', null, ['id'=>'swimming_pool']) !!}
      {!! Form::label('swimming_pool','Swimming Pool',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-5 col-xs-offset-2">
      {!! Form::hidden('access_security', 'N') !!}
      {!! Form::checkbox('access_security', 'Y', null, ['id'=>'access_security']) !!}
      {!! Form::label('access_security','Access Security Installed',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-5 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-6 col-xs-offset-1">
      {!! Form::hidden('close_to_public', 'N') !!}
      {!! Form::checkbox('close_to_public', 'Y', null, ['id'=>'close_to_public']) !!}
      {!! Form::label('close_to_public','Close to Public Transportation',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-sm-3 col-sm-offset-0 col-xs-4 col-xs-offset-0">
      {!! Form::hidden('water_frontage', 'N') !!}
      {!! Form::checkbox('water_frontage', 'Y', null, ['id'=>'water_frontage']) !!}
      {!! Form::label('water_frontage','Water Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('polished_floors', 'N') !!}
      {!! Form::checkbox('polished_floors', 'Y', null, ['id'=>'polished_floors']) !!}
      {!! Form::label('polished_floors','Polished Floors',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-2">
      {!! Form::hidden('canal_frontage', 'N') !!}
      {!! Form::checkbox('canal_frontage', 'Y', null, ['id'=>'canal_frontage']) !!}
      {!! Form::label('canal_frontage','Canal Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-3 col-xs-offset-1">
      {!! Form::hidden('open_plan', 'N') !!}
      {!! Form::checkbox('open_plan', 'Y', null, ['id'=>'open_plan']) !!}
      {!! Form::label('open_plan','Open Plan',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-3">
      {!! Form::hidden('river_frontage', 'N') !!}
      {!! Form::checkbox('river_frontage', 'Y', null, ['id'=>'river_frontage']) !!}
      {!! Form::label('river_frontage','River Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-3 col-xs-offset-1">
      {!! Form::hidden('renovated', 'N') !!}
      {!! Form::checkbox('renovated', 'Y', null, ['id'=>'renovated']) !!}
      {!! Form::label('renovated','Renovated',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-2 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-3">
      {!! Form::hidden('lake_frontage', 'N') !!}
      {!! Form::checkbox('lake_frontage', 'Y', null, ['id'=>'lake_frontage']) !!}
      {!! Form::label('lake_frontage','Lake Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('ducted_vacuum', 'N') !!}
      {!! Form::checkbox('ducted_vacuum', 'Y', null, ['id'=>'ducted_vacuum']) !!}
      {!! Form::label('ducted_vacuum','Ducted Vacuum',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-2">
      {!! Form::hidden('coast_frontage', 'N') !!}
      {!! Form::checkbox('coast_frontage', 'Y', null, ['id'=>'coast_frontage']) !!}
      {!! Form::label('coast_frontage','Coast Frontage',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('double_storey', 'N') !!}
      {!! Form::checkbox('double_storey', 'Y', null, ['id'=>'double_storey']) !!}
      {!! Form::label('double_storey','Double Storey',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-2 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-2">
      {!! Form::hidden('fireplace', 'N') !!}
      {!! Form::checkbox('fireplace', 'Y', null, ['id'=>'fireplace']) !!}
      {!! Form::label('fireplace','Fireplace',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-5 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('boat_ramp', 'N') !!}
      {!! Form::checkbox('boat_ramp', 'Y', null, ['id'=>'boat_ramp']) !!}
      {!! Form::label('boat_ramp','Boat,Ramp/Mooring/Space',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-sm-3 col-sm-offset-0 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('selling_off', 'N') !!}
      {!! Form::checkbox('selling_off', 'Y', null, ['id'=>'selling_off']) !!}
      {!! Form::label('selling_off','Selling Off the Plan',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('vendor_trade', 'N') !!}
      {!! Form::checkbox('vendor_trade', 'Y', null, ['id'=>'vendor_trade']) !!}
      {!! Form::label('vendor_trade', 'Vendor Will Trade', ['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-5 col-xs-offset-2">
      {!! Form::hidden('heritage_other', 'N') !!}
      {!! Form::checkbox('heritage_other', 'Y', null, ['id'=>'heritage_other']) !!}
      {!! Form::label('heritage_other','Heritage/Other Classification',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('granny_flat', 'N') !!}
      {!! Form::checkbox('granny_flat', 'Y', null, ['id'=>'granny_flat']) !!}
      {!! Form::label('granny_flat','Granny Flat/Self-Contained',['class'=>'control-label custom']) !!}
    </div>
</div>
