<div class="form-group">  
    {!! Form::label('listing_type','Listing Type',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::select('listing_type', ['Rent'=>'RENT'], null, ['class'=>'form-control input-sm']) !!}
    </div>
</div>

<div class="form-group">  
    {!! Form::label('price_from','Price From',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::text('price_from',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,10}']) !!}
    </div>
</div>

<div class="form-group">  
      {!! Form::label('price_to','Price To',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::text('price_to',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,10}']) !!}
    </div>
</div>

<div class="form-group">  
    {!! Form::label('price_description','Price Description',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-7 col-sm-9 col-xs-9 custom">
      {!! Form::text('price_description',null,['class'=>'form-control input-sm']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('rental_period','Listing Type',['class'=>'control-label col-md-3 col-sm-2 col-xs-3']) !!}
    <div class="col-md-2 col-sm-3 col-xs-3 custom">
      {!! Form::select('rental_period', ['W'=>'WEEKLY', 'F'=>'FORNIGHTLY', 'M'=>'MONTHLY', 'A'=>'ANNUALLY'], null, ['class'=>'form-control input-sm']) !!}
    </div>
</div>

