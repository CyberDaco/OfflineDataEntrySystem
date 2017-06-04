<div class="form-group">  
    {!! Form::label('listing_type','Listing Type',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::select('listing_type', ['S'=>'NORMAL SALE','A'=>'AUCTION','M'=>'MORTGAGEE SALE','MA'=>'MORTGAGEE AUCTION','T'=>'TENDER','O'=>'OTHER'], null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'autofocus'=>'true', 'required']) !!}
    </div>
      {!! Form::label('auction_date','Auction/Tender Date',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::text('auction_date',null,['class'=>'form-control input-sm aussie_date', 'placeholder'=>'DD/MM/YYYY', 'pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$']) !!}
    </div>
</div>

<div class="form-group">  
    {!! Form::label('price_from','Price From',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::text('price_from',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,10}',]) !!}
    </div>
      {!! Form::label('auction_time','Auction/Tender Time',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::text('auction_time',null,['class'=>'form-control input-sm aussie_time', 'placeholder'=>'HH:MM AM/PM', 'pattern'=>'^[0-1][0-9]:[0-5][0-9] [APap][mM]$']) !!}
    </div>
</div>

<div class="form-group">  
      {!! Form::label('price_to','Price To',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::text('price_to',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,10}']) !!}
    </div>
      {!! Form::label('auction_venue','Auction Venue',['class'=>'control-label col-md-3 col-sm-3 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::text('auction_venue',null,['class'=>'form-control input-sm']) !!}
    </div>
</div>

<div class="form-group">  
    {!! Form::label('price_description','Price Description',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-7 col-sm-9 col-xs-9 custom">
      {!! Form::text('price_description',null,['class'=>'form-control input-sm']) !!}
    </div>
</div>



