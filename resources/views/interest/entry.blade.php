@extends('layouts.dataentry.dataentry',['title'=>'Interest Auction Results','folder'=>'interest'])

@section('content')
<div class="container">
<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ session('batch_name') }}</h3>
        </div>

        {!! Form::open(array('role'=>'form','url'=>'/interest/entry','action'=>'POST','class'=>'form-horizontal'))!!}
          @include('interest.form',['status'=>'E'])
        {!! Form::close() !!}
    </div>
</div>
</div> <!-- end of container -->
@endsection

@push('scripts')
<script>
$(document).ready(function(){

    if($('h3').text().substring(0,2) == 'BC'){
        $("select[name='sale_type']").val("Normal Sale");
    } else {

    }

    $("input[name='listing_id']").blur(function(){
        $.get('/interest/search/' + $("input[name='listing_id']").val(), function (data) {
            console.log(data);
            if (data.unit_no) $("input[name='unit_no']").val(data.unit_no);
            if (data.street_no) $("input[name='street_no']").val(data.street_no);
            if (data.street_no_suffix) $("input[name='street_no_suffix']").val(data.street_no_suffix);
            if (data.street_name) $("input[name='street_name']").val(data.street_name);
            if (data.street_ext) $("select[name='street_ext']").val(data.street_ext);
            if (data.street_direction) $("input[name='street_direction']").val(data.street_direction);
            if (data.suburb) $("input[name='suburb']").val(data.suburb);
            if (data.sold_price) $("input[name='sold_price']").val(data.sold_price);
            if (data.sale_type) $("select[name='sale_type']").val(data.sale_type);
            if (data.agency_name) $("input[name='agency_name']").val(data.agency_name);
            if (data.contract_date) $("input[name='contract_date']").val(data.contract_date);
        }) 
    });
});
</script>
@endpush
