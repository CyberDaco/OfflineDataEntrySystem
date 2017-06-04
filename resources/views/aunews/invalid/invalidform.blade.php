<legend><b>[INVALID] - </b>{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</legend>

{!! Form::token() !!}
          
<div class="form-group">
  {!! Form::label('batch_name','Batch Name',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-3 col-sm-2 col-xs-2 custom">
  {!! Form::text('batch_name', session('batch_name'), ['class'=>'form-control input-sm', 'required','readonly']) !!}
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('page_no','Page No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
  {!! Form::text('page_no', null, ['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ0-9]{1,5}', 'required','autofocus'=>'true']) !!}
  </div>
</div>

<br>
          
<div class="form-group">
  {!! Form::label('unit_no','Unit No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
  {!! Form::text('unit_no', null, ['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ0-9]{1,5}']) !!}
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('street_no','Street No.',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
  {!! Form::text('street_no', null, ['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,5}']) !!}
  </div>
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
  {!! Form::text('street_no_suffix', null, ['class'=>'form-control input-sm','placeholder'=>'SUFFIX', 'pattern'=>'[aA-zZ]{1,2}']) !!}
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('street_name','Street Name',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-4 col-sm-5 col-xs-4 custom">
  {!! Form::text('street_name', null, ['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ0-9\s\']{1,50}']) !!}
  </div>
  <div class="col-md-2 col-sm-1 col-xs-2 custom label">
  {!! Form::select('street_extension', $street_extension, null, ['class'=>'form-control input-sm']) !!} 
  </div>
  <div class="col-md-2 col-sm-1 col-xs-2 custom label">
  {!! Form::select('street_direction', ['North'=>'NORTH', 'South'=>'SOUTH', 'East'=>'EAST', 'West'=>'WEST'], null, ['class'=>'form-control input-sm','placeholder'=>'--']) !!} 
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('suburb','Suburb',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-4 col-sm-5 col-xs-4 custom">
  {!! Form::text('suburb', null, ['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ0-9\'\s\-]{1,50}']) !!}
  </div>
  {!! Form::label('state','Property State',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-4 custom label">
  {!! Form::select('state', $states, null, ['class'=>'form-control input-sm', 'placeholder'=>'--','required']) !!}
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('property_type','Property Type',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-4 col-sm-5 col-xs-4 custom">
  {!! Form::select('property_type', $prop_type, null, ['class'=>'form-control input-sm']) !!} 
  </div>
  {!! Form::label('multiple_properties','Multi-property',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-4 custom label">
  {!! Form::select('multiple_properties', ['Yes'=>'YES', 'No'=>'NO'], null, ['class'=>'form-control input-sm', 'placeholder'=>'--']) !!} 
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('sale_rent','Sale/Rent',['class'=>'control-label col-md-2 col-sm-2 col-xs-2']) !!}
  <div class="col-md-2 col-sm-2 col-xs-4 custom">
  {!! Form::select('sale_rent', ['Sale'=>'SALE', 'Rent'=>'RENT'], null, ['class'=>'form-control input-sm']) !!} 
  </div>
</div>
          
<br>
          
<div class="form-group">  
  {!! Form::label('listing_type','Listing Type',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
  <div class="col-md-2 col-sm-3 col-xs-3 custom">
  {!! Form::select('listing_type', ['A'=>'AUCTION', 'E'=>'ENQUIRIES OVER', 'M'=>'MORTGAGEE SALE', 'MA'=>'MORTGAGEE AUCTION', 'N'=>'NEGOTIATION', 'P'=>'PRICE ON APPLICATION', 'S'=>'NORMAL SALE', 'T'=>'TENDER', 'O'=>'OTHER'], 'S', ['class'=>'form-control input-sm']) !!}
  </div>
  {!! Form::label('auction_date','Auction/Tender Date',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
  <div class="col-md-2 col-sm-3 col-xs-3 custom">
  {!! Form::text('auction_date',null,['class'=>'form-control input-sm aussie_date', 'placeholder'=>'DD/MM/YYY', 'pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$']) !!}
  </div>
</div>
          
<div class="form-group">  
  {!! Form::label('price_from','Price From',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
  <div class="col-md-2 col-sm-3 col-xs-3 custom">
  {!! Form::text('price_from',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4,10}', 'autofocus'=>'true']) !!}
  </div>
  {!! Form::label('auction_time','Auction/Tender Time',['class'=>'control-label col-md-3 col-sm-3 col-xs-3 aussie_time']) !!}
  <div class="col-md-2 col-sm-3 col-xs-3 custom">
  {!! Form::text('auction_time',null,['class'=>'form-control input-sm aussie_time', 'placeholder'=>'HH:MM AM/PM', 'pattern'=>'^[0-1][0-9]:[0-5][0-9] [APap][mM]$']) !!}
  </div>
</div>
      
<div class="form-group">  
  {!! Form::label('price_to','Price To',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
  <div class="col-md-2 col-sm-3 col-xs-3 custom">
  {!! Form::text('price_to',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4,10}']) !!}
  </div>
  {!! Form::label('auction_venue','Auction Venue',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
  <div class="col-md-2 col-sm-3 col-xs-3 custom">
  {!! Form::text('auction_venue',null,['class'=>'form-control input-sm']) !!}
  </div>
</div>
      
<div class="form-group">  
  {!! Form::label('price_description','Price Description',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
  <div class="col-md-7 col-sm-9 col-xs-9 custom">
  {!! Form::text('price_description', null, ['class'=>'form-control input-sm']) !!}
  </div>
</div>
      
<br>
          
<div class="form-group">  
  <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1  label">
  {!! Form::text('bedrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9-]{1,5}']) !!}
  </div>
  <div class="col-md-2 col-sm-2 col-xs-2 custom">
  {!! Form::label('bedrooms','Bedrooms',['class'=>'control-label custom']) !!}
  </div>
  <div class="col-md-1 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
  {!! Form::text('bathrooms',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,5}']) !!}
  </div>
  <div class="col-md-2 col-xs-2 custom">
  {!! Form::label('bathrooms','Bathrooms',['class'=>'control-label custom']) !!}
  </div>
</div>
        
<div class="form-group">  
  <div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-2 col-xs-offset-1 label">
  {!! Form::text('lockup_garages',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9-]{1,5}']) !!}
  </div>
  <div class="col-md-3 col-sm-3 col-xs-3 custom">
  {!! Form::label('lockup_garages','Lockup Garage',['class'=>'control-label custom']) !!}
  </div>
  <div class="col-md-3 col-sm-3 col-sm-offset-1 col-xs-4 col-xs-offset-0">
  {!! Form::hidden('air_conditioned', 'N') !!}
  {!! Form::checkbox('air_conditioned', 'Y', null, ['id'=>'air_conditioned']) !!}
  {!! Form::label('air_conditioned','Air-Conditioned',['class'=>'control-label custom']) !!}
  </div>
</div>
          
<div class="form-group">  
  <div class="col-md-4 col-md-offset-2 col-sm-3 col-sm-offset-2 col-xs-4 col-xs-offset-1">
  {!! Form::hidden('swimming_pool', 'N') !!}
  {!! Form::checkbox('swimming_pool', 'Y', null, ['id'=>'swimming_pool']) !!}
  {!! Form::label('swimming_pool','Swimming Pool',['class'=>'control-label custom']) !!}
  </div>
  <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1">
  {!! Form::hidden('close_to_public', 'N') !!}
  {!! Form::checkbox('close_to_public', 'Y', null, ['id'=>'close_to_public']) !!}
  {!! Form::label('close_to_public','Close To Public Transport',['class'=>'control-label custom']) !!}
  </div>
</div>
          
@include('aunews.partials.propertyad')
    
<div class="form-group">
  {!! Form::label('agency_name','Agency Name',['class'=>'control-label col-md-2 col-sm-2 col-xs-3']) !!}
  <div class="col-md-9 col-sm-9 col-xs-9 custom">
  {!! Form::text('agency_name', null, ['class'=>'form-control input-sm','required']) !!}
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('agent_contact','Contact',['class'=>'control-label col-md-2 col-sm-2 col-xs-3']) !!}
  <div class="col-md-9 col-sm-9 col-xs-9 custom">
  {!! Form::text('agent_contact', null, ['class'=>'form-control input-sm']) !!}
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('agent_firstname','Firstname',['class'=>'control-label col-md-2 col-sm-2 col-xs-3']) !!}
  <div class="col-md-9 col-sm-9 col-xs-9 custom">
  {!! Form::text('agent_firstname', null, ['class'=>'form-control input-sm']) !!}
  </div>
</div>
          
<div class="form-group">
  {!! Form::label('agent_lastname','Lastname',['class'=>'control-label col-md-2 col-sm-2 col-xs-3']) !!}
  <div class="col-md-9 col-sm-9 col-xs-9 custom">
  {!! Form::text('agent_lastname', null, ['class'=>'form-control input-sm']) !!}
  </div>
</div>
          
<div class="form-group">
  <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-10 col-xs-2 col-xs-offset-10">
    <button type="submit" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-check"></span>  Submit</button>
  </div>
</div>

    
    
