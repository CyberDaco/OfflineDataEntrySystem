<div class="box-body">
    {!! Form::token() !!}
    {!! Form::hidden('batch_name',session('batch_name'),['class'=>'form-control input-sm', 'required','readonly']) !!}
    {!! Form::hidden('status',$status,['class'=>'form-control input-sm', 'required','readonly']) !!}

    <!--
    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('state','State  ',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('state',null,['class'=>'form-control input-sm', 'readonly']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('listing_id','Listing ID',['class'=>'control-label ']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('listing_id',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ0-9-]{1,15}']) !!}
        </div>
    </div>
    -->
    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('unit_no','Unit No.',['class'=>'control-label ']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('unit_no',null,['class'=>'form-control input-sm', 'autofocus'=>'true','pattern'=>'[0-9aA-zZ-\.]{1,20}']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('street_no','Street No.',['class'=>'control-label ']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('street_no',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9aZ-zZ-.]{1,25}', 'required']) !!}
        </div>
        <!--
        <div class="col-sm-1 col-md-1">
            {!! Form::text('street_no_suffix',null,['class'=>'form-control input-sm','pattern'=>'[aA-zZ]{1}']) !!}
        </div>
        -->
    </div>
    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('street_name','Street Name',['class'=>'control-label ']) !!}
        </div>
        <div class="col-sm-4 col-md-3">
            {!! Form::text('street_name',null,['class'=>'form-control input-sm', 'required', 'pattern'=>'[aA-zZ0-9\s\'\.\-/&/]{1,25}', 'required']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::select('street_ext', $street_extension, null, ['class'=>'form-control input-sm']) !!}
        </div>
        <div class="col-sm-2 col-md-1">
            {!! Form::text('street_direction',null,['class'=>'form-control input-sm', 'pattern'=>'(North|South|East|West)']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('suburb','Suburb',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-4 col-md-3">
            {!! Form::text('suburb',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ\s\'\.\-]{1,25}', 'required']) !!}
        </div>
        <!--
        <div class="col-sm-2 col-md-2">
            {!! Form::text('post_code',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{4}', 'readonly']) !!}
        </div>
        -->
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('property_type','Property Type',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-4 col-md-3">
            {!! Form::text('property_type',null,['class'=>'form-control input-sm', 'required','readonly']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('sale_type','Sale Type',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-4 col-md-3">
            {!! Form::select('sale_type', ['Sold at Auction'=>'Sold At Auction','Sold Prior To Auction'=>'Sold Prior To Auction','Sold After Auction'=>'Sold After Auction' ], null, ['class'=>'form-control input-sm']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('sold_price','Sold Price',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-3 col-md-2">
            {!! Form::text('sold_price',null,['class'=>'form-control input-sm']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('contract_date','Contract Date',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-3 col-md-2">
            {!! Form::text('contract_date',null,['class'=>'form-control input-sm ddmmyyy', 'placeholder'=>'dd/mm/yyyy','pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('agency_name','Agency Name',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-5 col-md-4">
            {!! Form::text('agency_name',null,['class'=>'form-control input-sm', 'pattern'=>'[aA-zZ0-9\s\'\.\-/&/]{1,100}', 'list'=>'agency','required']) !!}
            <datalist id="agency">
                <option>Bayleys</option>
                <option>Harcourts</option>
                <option>Barfoot & Thompson</option>
                <option>Colliers</option>
                <option>Ray White City Apartments</option>
                <option>City Sales</option>
                <option>Impression Real Estate</option>
                <option>NAI Harcourts</option>
                <option>Knight Frank</option>
            </datalist>
        </div>
    </div>



    <!--
    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('settlement_date','Settle Date',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-3 col-md-2">
            {!! Form::text('settlement_date',null,['class'=>'form-control input-sm', 'pattern'=>'', 'readonly']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('bedroom','Bed',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-2 col-md-1">
            {!! Form::text('bedroom',null,['class'=>"form-control input-sm", 'pattern'=>'[0-9-]{1,2}', 'readonly']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('bath','Bath',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-2 col-md-1">
            {!! Form::text('bathroom',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}', 'readonly']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-2">
            {!! Form::label('car','Car',['class'=>'control-label']) !!}
        </div>
        <div class="col-sm-2 col-md-1">
            {!! Form::text('car',null,['class'=>'form-control input-sm', 'pattern'=>'[0-9-]{1,2}', 'readonly']) !!}
        </div>
    </div>
    -->
</div>
<!-- /.box-body -->
<div class="box-footer">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-2 col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-check"></span>  Submit</button>
        </div>
    </div>

</div>

