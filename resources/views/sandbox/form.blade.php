<div class="panel panel-default">
  <div class="panel-heading"><b><h4>Publication Name</h4></b></div>
    
  <div class="panel-body">
        
    {!! Form::token() !!}
    
    <div class="form-group">
        {!! Form::label('property_type','Property Type',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-1 col-sm-4 col-xs-4 custom">
          {!! Form::select('property_type', ['House'=>'House', 'Unit/Townhouse'=>'Unit/Townhouse'], null, ['class'=>'form-control input-sm']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('listing_type','Listing Type',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-1 col-sm-6 col-xs-6 custom">
          {!! Form::select('listing_type',['Normal Sale'=>'Normal Sale', 'Auction'=>'Auction', 'Tender'=>'Tender'],null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
          {!! Form::label('auction_date','Auction/Tender Date',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-1 col-sm-2 col-xs-3 custom">
          {!! Form::text('auction_date',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4}']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('price_from','Price From',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-1 col-sm-6 col-xs-6 custom">
          {!! Form::text('price_from',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
          {!! Form::label('auction_time','Auction/Tender Time',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-1 col-sm-2 col-xs-3 custom">
          {!! Form::text('auction_time',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4}']) !!}
        </div>
    </div>
    
    <div class="form-group">  
          {!! Form::label('price_to','Price To',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-1 col-sm-6 col-xs-6 custom">
          {!! Form::text('price_to',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
          {!! Form::label('auction_venue','Auction Venue',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-1 col-sm-2 col-xs-3 custom">
          {!! Form::text('auction_venue',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4}']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        {!! Form::label('price_description','Price Description',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
        <div class="col-md-2 col-sm-6 col-xs-6 custom">
          {!! Form::text('price_description',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
    </div>
    
    <br>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('bedrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('bedrooms','Bedrooms',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('bathrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('bathrooms','Bathrooms',['class'=>'control-label custom']) !!}
        </div>
    </div>
  
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('lockup_garages',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('lockup_garages','Lockup Garage',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('land_area',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
          <!-- {!! Form::select('land_area_metric', [''], null, ['class'=>'form-control input-sm']) !!} -->
        </div>
        <div class="col-md-1 custom">
          {!! Form::label('land_area','Land Area',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('car_spaces',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('car_spaces','Car Spaces',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('floor_area',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('floor_area','M2 Total Floor Area',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('lounge_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('lounge_rooms','Lounge Rooms',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('dining_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-1 custom">
          {!! Form::label('dining_rooms','Dining Rooms',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('study_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('study_rooms','Study Rooms',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('family_rumpus',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('family_rumpus','Family/Rumpus Room',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('toilets',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('toilets','Toilets',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('ensuites',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-1 custom">
          {!! Form::label('ensuites','Ensuites',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('lounge_dining',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('lounge_dining','Lounge/Dining Combined',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('other_rooms',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-1 custom">
          {!! Form::label('other_rooms','Other Rooms',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('total_floors',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('total_floors','Total Building Floors',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('tennis_court',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-1 custom">
          {!! Form::label('tennis_court','Tennis Court',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('year_built',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('year_built','Year Built',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('year_refurbished',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-1 custom">
          {!! Form::label('year_refurbished','Year Refurbished',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::select('construction_type', ['--'=>'--', 'Brick'=>'Brick', 'Wood'=>'Wood'], null, ['class'=>'form-control input-sm']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('construction_type','Construction Type',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::select('roof_material', ['--'=>'--', 'Tiled'=>'Tiled', 'Uhhh'=>'Uhhh'], null, ['class'=>'form-control input-sm']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('roof_material','Roof Material',['class'=>'control-label custom']) !!}
        </div>
    </div>

    <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::select('scenic_view_type', ['--'=>'--', 'Garden'=>'Garden', 'Night Sky'=>'Night Sky'], null, ['class'=>'form-control input-sm']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('scenic_view_type','Scenic View Type',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <br>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('air_conditioned', 1, null, ['id'=>'air_conditioned']) !!}
          {!! Form::label('air_conditioned','Air-Conditioned',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('scenic_view', 1, null, ['id'=>'scenic_view']) !!}
          {!! Form::label('scenic_view','Scenic View',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('ducted_heating', 1, null, ['id'=>'ducted_heating']) !!}
          {!! Form::label('ducted_heating','Ducted Heating',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('lift_installed', 1, null, ['id'=>'lift_installed']) !!}
          {!! Form::label('lift_installed','Lift Installed',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('swimming_pool', 1, null, ['id'=>'swimming_pool']) !!}
          {!! Form::label('swimming_pool','Swimming Pool',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('access_security', 1, null, ['id'=>'access_security']) !!}
          {!! Form::label('access_security','Access Security Installed',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('close_to_public', 1, null, ['id'=>'close_to_public']) !!}
          {!! Form::label('close_to_public','Close to Public Transportation',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('water_frontage', 1, null, ['id'=>'water_frontage']) !!}
          {!! Form::label('water_frontage','Water Frontage',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('polished_floors', 1, null, ['id'=>'polished_floors']) !!}
          {!! Form::label('polished_floors','Polished Floors',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('canal_frontage', 1, null, ['id'=>'canal_frontage']) !!}
          {!! Form::label('canal_frontage','Canal Frontage',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('open_plan', 1, null, ['id'=>'open_plan']) !!}
          {!! Form::label('open_plan','Open Plan',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('river_frontage', 1, null, ['id'=>'river_frontage']) !!}
          {!! Form::label('river_frontage','River Frontage',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('renovated', 1, null, ['id'=>'renovated']) !!}
          {!! Form::label('renovated','Renovated',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('lake_frontage', 1, null, ['id'=>'lake_frontage']) !!}
          {!! Form::label('lake_frontage','Lake Frontage',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('ducted_vacuum', 1, null, ['id'=>'ducted_vacuum']) !!}
          {!! Form::label('ducted_vacuum','Ducted Vacuum',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('coast_frontage', 1, null, ['id'=>'coast_frontage']) !!}
          {!! Form::label('coast_frontage','Coast Frontage',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('double_storey', 1, null, ['id'=>'double_storey']) !!}
          {!! Form::label('double_storey','Double Storey',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('fireplace', 1, null, ['id'=>'fireplace']) !!}
          {!! Form::label('fireplace','Fireplace',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('boat_ramp', 1, null, ['id'=>'boat_ramp']) !!}
          {!! Form::label('boat_ramp','Boat,Ramp/Mooring/Space',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('selling_off', 1, null, ['id'=>'selling_off']) !!}
          {!! Form::label('selling_off','Selling Off the Plan',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('vendor_trade', 1, null, ['id'=>'vendor_trade']) !!}
          {!! Form::label('vendor_trade', 'Vendor Will Trade', ['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('heritage_other', 1, null, ['id'=>'heritage_other']) !!}
          {!! Form::label('heritage_other','Heritage/Other Classification',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('granny_flat', 1, null, ['id'=>'granny_flat']) !!}
          {!! Form::label('granny_flat','Granny Flat/Self-Contained',['class'=>'control-label custom']) !!}
        </div>
    </div>
    
    <br>
    
    <div class="form-group"> 
      <div class="col-md-2 col-md-offset-1">
        {!! Form::label('additional_property','Additional Property Details',['class'=>'control-label']) !!}
      </div>  
    </div>
    <div class="form-group">
        <div class="col-md-2 col-md-offset-1">
          {!! Form::textarea('additional_property',null,['size'=>'95x5'], ['class'=>'form-control', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
    </div>
    
    <br>
    
    <div class="form-group">
      {!! Form::label('ad_size','Ad Sizes',['class'=>'col-md-1 col-md-offset-1']) !!}
      {!! Form::label('ad_photo_type','Photo Type',['class'=>'col-md-1']) !!}
      {!! Form::label('ad_photo_count','Photo Count',['class'=>'col-md-1']) !!}
      {!! Form::label('ad_section','Section',['class'=>'col-md-1']) !!}
      {!! Form::label('ad_exclusive','Exclusive Agent',['class'=>'col-md-1']) !!}
    </div>
    
    <div class="form-group">
      <div class="col-md-1 col-md-offset-1">
        {!! Form::select('ad_size', ['Small'=>'SMALL', '1/4'=>'1/4'], null, ['class'=>'form-control input-sm']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::select('ad_photo_type', ['Colored'=>'COLORED', 'Black & White'=>'BLACK & WHITE'], null, ['class'=>'form-control input-sm']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::select('ad_photo_count', ['Single'=>'SINGLE', 'Multiple'=>'MULTIPLE'], null, ['class'=>'form-control input-sm']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::select('ad_section', ['Middle'=>'MIDDLE', 'Front'=>'FRONT'], null, ['class'=>'form-control input-sm']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::select('ad_exclusive', ['Unknown'=>'UNKNOWN', 'Other'=>'OTHER'], null, ['class'=>'form-control input-sm']) !!}
      </div>
    </div>
    
    <br>
    
    <div class="form-group">
      {!! Form::label('agent_contact', 'CONTACT',['class'=>'col-md-1 col-md-offset-1']) !!}
      {!! Form::label('agency_name','AGENCY NAME',['class'=>'col-md-2']) !!}
      {!! Form::label('agent_firstname','FIRST NAME',['class'=>'col-md-1']) !!}
      {!! Form::label('agent_lastname','LAST NAME',['class'=>'col-md-1']) !!}
    </div>
    
    <div class="form-group">
      <div class="col-md-1 col-md-offset-1">
        {!! Form::text('agent_contact',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('agency_name',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_firstname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_lastname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-1 col-md-offset-1">
        {!! Form::text('agent_contact',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('agency_name',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_firstname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_lastname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-1 col-md-offset-1">
        {!! Form::text('agent_contact',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('agency_name',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_firstname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_lastname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-1 col-md-offset-1">
        {!! Form::text('agent_contact',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('agency_name',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_firstname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_lastname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-1 col-md-offset-1">
        {!! Form::text('agent_contact',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-2">
        {!! Form::text('agency_name',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_firstname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('agent_lastname',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
      </div>
    </div>
    
  </div> <!-- end of panel body -->
  
  <div class="panel-footer">
    <div class="form-group">
      <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-10 col-xs-2 col-xs-offset-10">
        <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-check"></span>  Submit</button>
      </div>
    </div>
  </div>
</div> 
    
    

@if($errors->any())
  <ul class="alert alert-danger">
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif

<!-- <div class="form-group">  
        <div class="col-md-1 col-md-offset-1 col-sm-6 col-xs-6 label">
          {!! Form::text('',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-2 custom">
          {!! Form::label('','',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-1 col-sm-6 col-xs-6 label">
          {!! Form::text('',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <div class="col-md-1 custom">
          {!! Form::label('','',['class'=>'control-label custom']) !!}
        </div>
    </div> 
    
    <div class="form-group">  
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('', 1, null, ['id'=>'']) !!}
          {!! Form::label('','',['class'=>'control-label custom']) !!}
        </div>
        <div class="col-md-2 col-md-offset-1">
          {!! Form::checkbox('', 1, null, ['id'=>'']) !!}
          {!! Form::label('','',['class'=>'control-label custom']) !!}
        </div>
    </div> -->
    
    
    
    