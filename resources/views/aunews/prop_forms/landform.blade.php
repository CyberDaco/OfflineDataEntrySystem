<div class="form-group">  
    <div class="col-md-1 col-md-offset-2 col-sm-offset-2 col-sm-1 col-xs-2 label">
      {!! Form::text('land_area',null,['class'=>'form-control input-sm', 'pattern'=>'^\d*(\.\d{1,4}$)?']) !!}
    </div>
    <div class="col-md-1 col-sm-1 col-xs-2 custom label">
      {!! Form::select('land_area_metric', ['M2'=>'M2', 'ACRES'=>'ACRES', 'HECTARES'=>'HECTARES', 'PERCHES'=>'PERCHES'], null, ['class'=>'form-control input-sm']) !!}
    </div>
    <div class="col-md-2 col-sm-2 col-xs-2 custom">
      {!! Form::label('land_area','Land Area',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1 label">
      {!! Form::select('scenic_view_type', ['CITY'=>'CITY', 'LAKE'=>'LAKE', 'MOUNTAIN'=>'MOUNTAIN', 'OCEAN'=>'OCEAN', 'RIVER'=>'RIVER', 'SCENIC'=>'SCENIC'], null, ['class'=>'form-control input-sm', 'placeholder'=>'--']) !!}
    </div>
    <div class="col-md-3 col-sm-2 custom">
      {!! Form::label('scenic_view_type','Scenic View Type',['class'=>'control-label custom']) !!}
    </div>
</div>



<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('water_frontage', 'N') !!}
      {!! Form::checkbox('water_frontage', 'Y', null, ['id'=>'water_frontage']) !!}
      {!! Form::label('water_frontage','Water Frontage',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-2 col-xs-3 col-xs-offset-2">
      {!! Form::hidden('scenic_view', 'N') !!}
      {!! Form::checkbox('scenic_view', 'Y', null, ['id'=>'scenic_view']) !!}
      {!! Form::label('scenic_view','Scenic View',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('close_to_public', 'N') !!}
      {!! Form::checkbox('close_to_public', 'Y', null, ['id'=>'close_to_public']) !!}
      {!! Form::label('close_to_public','Close To Public Transport',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('vendor_trade', 'N') !!}
      {!! Form::checkbox('vendor_trade', 'Y', null, ['id'=>'vendor_trade']) !!}
      {!! Form::label('vendor_trade','Vendor Will Trade',['class'=>'control-label custom']) !!}
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
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('town_water', 'N') !!}
      {!! Form::checkbox('town_water', 'Y', null, ['id'=>'town_water']) !!}
      {!! Form::label('town_water','Town Water Available',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('town_sewerage', 'N') !!}
      {!! Form::checkbox('town_sewerage', 'Y', null, ['id'=>'town_sewerage']) !!}
      {!! Form::label('town_sewerage','Town Sewerage Available',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-xs-6 col-xs-offset-1">
      {!! Form::hidden('curb_channel', 'N') !!}
      {!! Form::checkbox('curb_channel', 'Y', null, ['id'=>'curb_channel']) !!}
      {!! Form::label('curb_channel','Curb Channeling On Frontage',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-5 col-xs-offset-0">
      {!! Form::hidden('all_weather', 'N') !!}
      {!! Form::checkbox('all_weather', 'Y', null, ['id'=>'all_weather']) !!}
      {!! Form::label('all_weather','All Weather Access To Land',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('flooding', 'N') !!}
      {!! Form::checkbox('flooding', 'Y', null, ['id'=>'flooding']) !!}
      {!! Form::label('flooding','Land Subject To Flooding',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('phone_service', 'N') !!}
      {!! Form::checkbox('phone_service', 'Y', null, ['id'=>'phone_service']) !!}
      {!! Form::label('phone_service','Phone Service Available',['class'=>'control-label custom']) !!}
    </div>
</div>

<div class="form-group">  
    <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-5 col-xs-offset-1">
      {!! Form::hidden('subdivision', 'N') !!}
      {!! Form::checkbox('subdivision', 'Y', null, ['id'=>'subdivision']) !!}
      {!! Form::label('subdivision','Land Can Be Subdivided',['class'=>'control-label custom']) !!}
    </div>
    <div class="col-md-2 col-md-offset-1 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
      {!! Form::hidden('trees', 'N') !!}
      {!! Form::checkbox('trees', 'Y', null, ['id'=>'trees']) !!}
      {!! Form::label('trees','Trees On Land',['class'=>'control-label custom']) !!}
    </div>
</div>
