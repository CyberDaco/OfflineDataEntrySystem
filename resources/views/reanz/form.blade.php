<div class="box-body">
    {!! Form::token() !!}
    {!! Form::hidden('batch_name',session('batch_name'),['class'=>'form-control input-sm', 'required','readonly']) !!}
    {!! Form::hidden('status',$status,['class'=>'form-control input-sm', 'required','readonly']) !!}

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('listing_id','Listing ID',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('listing_id', null, ['class'=>'form-control input-sm','pattern'=>'[0-9]{7}','required','autofocus']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('property_id','Property ID',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('property_id', null, ['class'=>'form-control input-sm','required']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('list_date','List Date',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('list_date', null, ['class'=>'form-control input-sm ddmmyyy', 'pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$']) !!}
        </div>
    </div>

    {!! Form::hidden('scrape_date', null,['class'=>'form-control input-sm']) !!}

    {!! Form::hidden('url', null,['class'=>'form-control input-sm']) !!}

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('site_area','Site Area',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('site_area', $site_area,['class'=>'form-control input-sm', 'readonly']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('property_address','Address',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-8 col-md-6">
            {!! Form::text('property_address', null,['class'=>'form-control input-sm', 'required']) !!}
        </div>
    </div>
      
    <div class="hidden">
        {!! Form::label('unit_no','Unit No.',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('unit_no', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('st_no_pref','Street No. Prefix.',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('st_no_pref', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('street_no','Street No.',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('street_no', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('st_no_suffix','Street No. Suffix',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('st_no_suffix', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('street_name','Street Name',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('street_name', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('street_type','Street Type',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('street_type', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('quadrant','Quadrant',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('quadrant', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('suburb','Suburb',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('suburb', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('city','City',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('city', null,['class'=>'form-control input-sm']) !!}
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('price_guide','Price Guide',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-4 col-md-3">
          {!! Form::text('price_guide', null,['class'=>'form-control input-sm']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('bedrooms','Bedrooms',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-1">
            {!! Form::text('bedrooms', null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('bathrooms','Bathrooms',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-1">
            {!! Form::text('bathrooms', null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('car_spaces','Car Spaces',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-1">
            {!! Form::text('car_spaces', null,['class'=>'form-control input-sm', 'pattern'=>'[0-9]{1,2}']) !!}
        </div>
    </div>

    <div class="hidden">
        {!! Form::label('sale_method','Sale Method',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('sale_method', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('auction_day','Auction Day',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('auction_day', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('auction_time','Auction Time',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('auction_time', null,['class'=>'form-control input-sm']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('auction_date','Auction Date',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('auction_date',null,['class'=>'form-control input-sm ddmmyyy', 'pattern'=>'^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('land_size','Land Size',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('land_size', null,['class'=>'form-control input-sm land_size','pattern'=>'[mha0-9\s\.,]{1,10}']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('floor_size','Floor Size',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-2 col-md-2">
            {!! Form::text('floor_size', null,['class'=>'form-control input-sm', 'pattern'=>'[m0-9\s\.,]{1,10}']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('agency_name','Agency Name',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-8 col-md-6">
            {!! Form::text('agency_name', null,['class'=>'form-control input-sm', 'required']) !!}
        </div>
    </div>

    {!! Form::hidden('agency_id', null,['class'=>'form-control input-sm']) !!}

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('first_agent_name','Agent Name 1',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-4 col-md-3">
            {!! Form::text('first_agent_name', null,['class'=>'form-control input-sm']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('first_agent_mobile','Mobile 1',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-3 col-md-3">
            {!! Form::text('first_agent_mobile', null,['class'=>'form-control input-sm', 'pattern'=>'[0-9\s\-]{8,25}']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('second_agent_name','Agent Name 2',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-4 col-md-3">
            {!! Form::text('second_agent_name', null,['class'=>'form-control input-sm']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-md-offset-1">
            {!! Form::label('second_agent_mobile','Mobile 2',['class'=>'control-label pull-right']) !!}
        </div>
        <div class="col-sm-3 col-md-3">
            {!! Form::text('second_agent_mobile', null,['class'=>'form-control input-sm', 'pattern'=>'[0-9\s\-]{8,25}']) !!}
        </div>
    </div>

    {!! Form::hidden('photo_count', null,['class'=>'form-control input-sm']) !!}

    <div class="hidden">
        {!! Form::label('agent_id','Agent ID',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('agent_id', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('agent_phone','Agent Phone',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('agent_phone', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('direct_dial','Agent Direct Dial',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('direct_dial', null,['class'=>'form-control input-sm']) !!}
        </div>
        {!! Form::label('photo_count','Photo Count',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-6 custom">
          {!! Form::text('photo_count', null,['class'=>'form-control input-sm']) !!}
        </div>
    </div>

</div> <!-- end of body -->

<div class="box-footer">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-3">
            <button type="submit" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-check"></span>  Submit</button>
        </div>
    </div>

</div>
