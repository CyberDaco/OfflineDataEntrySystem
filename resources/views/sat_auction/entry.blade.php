@extends('layouts.dataentry.dataentry',['title'=>'Saturday Auction App','folder'=>'sat_auction'])

@section('content')
<div class="container">
<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</h3>
        </div>
        {!! Form::open(array('role'=>'form','url'=>'/sat_auction/entry','action'=>'POST','class'=>'form-horizontal','id'=>'frmDataEntry'))!!}
        {!! Form::token() !!}
          @include('sat_auction.form',['status'=>'E'])
        {!! Form::close() !!}
    </div>
</div>
<div id="search_modal"class="modal">
    <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Property Search State: {{ session('last_record') ? session('last_record')->state : '' }}</h3>
            </div>
            <form method="post" id="frmLookup" class="form-horizontal" action="/sat_auction/entry/lookup">
                <div class="box-body">
                        {!! Form::select('filter_state',\App\Publication::where('pub_name',session('batch_details')->job_name)->first()->state_code, session('last_record') ? session('last_record')->state : null , ['class'=>'form-control input-sm']) !!}

                        @if (session('batch_details')->job_name == 'Real Estate View' )
                            {!! Form::select('locality', \App\Sat_Auction::select('suburb')->distinct()->pluck('suburb','suburb'), session('locality'), ['class'=>'form-control input-sm', 'required']) !!}
                        @else
                            {!! Form::select('locality', \App\HomePrice::select('suburb')->distinct()->pluck('suburb','suburb'), session('locality'), ['class'=>'form-control input-sm', 'required']) !!}
                        @endif
                      <button type="submit" class="btn btn-info btn-flat">Search</button>
                </div>
            </form>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>State</th>
                            <th>Property</th>
                            <th>Suburb</th>
                            <th>Type</th>
                            <th>Agency Name</th>
                            <th>Bed</th>
                        </tr>
                    </thead>
                    <tbody id="records-list">
                    </tbody>
                </table>
            </div>
        </div>
</div><!-- /.modal -->


</div> <!-- end of container -->
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $("#frmDataEntry").submit(function (e) {
            if ($("select[name='sale_type']").val() == 'Passed In' && $("input[name='sold_price']").val() != ''){
                $("input[name='sold_price']").css('background-color','pink');
                $("input[name='sold_price']").focus();
                return false;
            } else if ($("select[name='sale_type']").val() == 'No Bid' && $("input[name='sold_price']").val() != ''){
                $("input[name='sold_price']").css('background-color','pink');
                $("input[name='sold_price']").focus();
                return false;
            } else if ($("select[name='sale_type']").val() == 'Withdrawn' && $("input[name='sold_price']").val() != ''){
            $("input[name='sold_price']").css('background-color','pink');
                $("input[name='sold_price']").focus();
                return false;
            } else if ($("select[name='sale_type']").val() == 'Sold At Auction' && $("input[name='sold_price']").val() == ''){
                $("input[name='sold_price']").css('background-color','pink');
                $("input[name='sold_price']").focus();
                return false;
            } else if ($("select[name='sale_type']").val() == 'Sold After Auction' && $("input[name='sold_price']").val() == ''){
                $("input[name='sold_price']").css('background-color','pink');
                $("input[name='sold_price']").focus();
                return false;
            } else if ($("select[name='sale_type']").val() == 'Sold Prior To Auction' && $("input[name='sold_price']").val() == ''){
                $("input[name='sold_price']").css('background-color','pink');
                $("input[name='sold_price']").focus();
                return false;
            } else if ($("select[name='sale_type']").val() == 'Vendor Bid' && $("input[name='sold_price']").val() == ''){
                $("input[name='sold_price']").css('background-color','pink');
                $("input[name='sold_price']").focus();
                return false;
            }
            return true;
        });


        $("select[name='filter_state']").change(function(){
            var state = $(this).val();

            if(state){
                $.ajax({
                    type:"GET",
                    url:"{{url('/sat_auction/api/get-suburbs-list')}}?state=" + state,
                    success:function(res){
                        console.log(res);
                        if(res){
                            $("select[name='locality']").empty();
                            $.each(res,function(key,value){
                                $("select[name='locality']").append('<option value="'+key+'">'+value+'</option>');
                            });
                            $("select[name='locality']").val('{{ session('locality') }}');
                            $('#frmLookup').submit();
                        }else{
                            $("select[name='locality']").empty();
                        }
                    }
                });
            }else{
                $("select[name='locality']").empty();
            }
        });


        $("select[name='filter_state']").change();

        //search propertties form
        $("#frmLookup").submit(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })

            e.preventDefault();
            var formData = {
                suburb: $("select[name='locality']").val(),
                filter_state: $("select[name='filter_state']").val()
            }

            $.ajax({
                type: 'POST',
                url: "{{ url('/sat_auction/entry/lookup') }}",
                data: formData,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    $('#records-list > tr').remove();
                    $.each(data, function (index, value) {
                        var report = '<tr><td>' + value.state +'</td>';
                            report += "<td><a href='#' onClick='generate(" + value.id +  ")'><strong>";
                            report += value.unit_no;
                            if (value.unit_no != ''){
                                report += '/';
                            }
                            report += value.street_no + ' ' + value.street_name ;
                            report += '</strong></a></td>';
                            report += '<td>' + value.suburb + '</td>';
                            report += '<td>' + value.property_type + '</td>';
                            report += '<td>' + value.agency_name + '</td>';
                            report += '<td>' + value.bedroom  + '</td></tr>';
                            $('#records-list').append(report);
                    });
                },
                error: function (data) {
                    $('#records-list').remove();
                    console.log('Error:', data);
                }
            });
        });

        //submit form onload
        $('#frmLookup').submit();

        //search properties on suburb change
        $("select[name='locality']").change(function(){
            $('#frmLookup').submit();
        });
    });

    function generate(slug)
    {
        $('#search_modal').modal('hide');
        //$property = $(this).data('id');
        $property = slug;

        console.log($property);
        //$.get('/sat_auction/search_property/' + $property , function (data) {
            $.get('/sat_auction/search_property_id/' + $property , function (data) {
            console.log(data);
            if (data.state){

                $("select[name='state']").val(data.state.toUpperCase()).css('background-color',data.color);
                $("input[name='unit_no']").val(data.unit_no).css('background-color',data.color);
                $("input[name='street_no']").val(data.street_no).css('background-color',data.color);
                $("input[name='street_name']").val(data.street_name).css('background-color',data.color);
                $("input[name='street_ext']").val(data.street_ext).css('background-color',data.color);
                $("input[name='street_direction']").val(data.street_direction).css('background-color',data.color);
                $("input[name='suburb']").val(data.suburb).css('background-color',data.color);
                $("input[name='post_code']").val(data.post_code).css('background-color',data.color);

                $("input[name='agency_name']").val(data.agency_name).css('background-color',data.color);
                $("select[name='property_type']").val(data.property_type).css('background-color',data.color);
                $("select[name='sale_type']").val(data.sale_type).css('background-color',data.color);
                $("input[name='sold_price']").val(data.sold_price).css('background-color',data.color);
                $("input[name='bedroom']").val(data.bedroom).css('background-color',data.color);
                $("input[name='bathroom']").val(data.bathroom).css('background-color',data.color);
                $("input[name='car']").val(data.car).css('background-color',data.color);


                if(data.contract_date != ''){
                    var original_date = data.contract_date;
                    contract_date = original_date.split("-").reverse().join("/");
                    $("input[name='contract_date']").val(contract_date).css('background-color',data.color);
                }

                $("select[name='sale_type']").focus();

            } else {
                //alert(data.message);
                $("input[name='agency_name']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                $("input[name='bedroom']").val('').prop('readonly',false).css('background-color','#ffe6f3');;
                $("input[name='sold_price']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                $("input[name='contract_date']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                $("select[name='sale_type']").val('Sold At Auction').prop('readonly',false).css('background-color','#ffe6f3');
                $("input[name='bathroom']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                $("input[name='car']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                $("select[name='property_type']").val('HO').prop('readonly',false).css('background-color','#ffe6f3');

            }
        })
    }

$(document).ready(function(){
    //show modal on load

    @if($errors->any())

    @else
        $('#search_modal').modal('show');
    @endif




    //set locality on load focus
    $("select[name='locality']").focus();

    //post code search
    $("input[name='suburb']").blur(function(){
        $.get('/sat_auction/search_post_code/' + $("input[name='suburb']").val() + '/' + $("select[name='state']").val() , function (data) {
            console.log(data);
            if (data.post_code){
                $("input[name='post_code']").val(data.post_code);
            } else {
                $("input[name='post_code']").val("");
            }
        })
    });

    //set default state
    @if(session('last_record'))
        $("select[name='state']").val('{{ session('last_record')->state }}').change();
    @endif


    $('#search_modal').on('hide.bs.modal', function () {
        $("input[name='unit_no']").focus();
    });



});
</script>

<script>
    $(document).ready(function(){
        //search property throug manual input
        var slug = function(str) {
            var $slug = '';
            var trimmed = $.trim(str);
            $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                    replace(/-+/g, '-').
                    replace(/^-|-$/g, '');
            return $slug.toLowerCase();
        }

        $("input[name='street_name']").blur(function() {
            $address = $("select[name='state']").val() + ' ' + $("input[name='unit_no']").val() + ' ' + $("input[name='street_no']").val() + ' ' + $("input[name='street_name']").val() + ' ' + $("input[name='street_ext']").val();
            $property = slug($address);
            console.log($property);
            $.get('/sat_auction/search_suburb/' + $property , function (data) {
                console.log(data);
                if (data.state){
                    $('#suburbs').append('<option>'+data.suburb+'</option>');
                }
            })
        });

        $("input[name='suburb']").blur(function(){
            $address = $("select[name='state']").val() + ' ' + $("input[name='unit_no']").val() + ' ' + $("input[name='street_no']").val() + ' ' + $("input[name='street_name']").val()+ ' ' + $("input[name='street_ext']").val() + ' ' + $("input[name='suburb']").val();
            $property = slug($address);
            $.get('/sat_auction/search_property/' + $property , function (data) {
                console.log(data);
                if (data.state){
                    $("input[name='agency_name']").val(data.agency_name).css('background-color',data.color);
                    $("select[name='property_type']").val(data.property_type).css('background-color',data.color);
                    $("select[name='sale_type']").val(data.sale_type).css('background-color',data.color);
                    $("input[name='sold_price']").val(data.sold_price).css('background-color',data.color);
                    $("input[name='bedroom']").val(data.bedroom).css('background-color',data.color);
                    $("input[name='bathroom']").val(data.bathroom).css('background-color',data.color);
                    $("input[name='car']").val(data.car).css('background-color',data.color);

                    if(data.contract_date != ''){
                        var original_date = data.contract_date;
                        contract_date = original_date.split("-").reverse().join("/");
                        $("input[name='contract_date']").val(contract_date).css('background-color',data.color);
                    }

                    $("select[name='sale_type']").focus();

                } else {
                    //alert(data.message);
                    $("input[name='agency_name']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                    $("input[name='bedroom']").val('').prop('readonly',false).css('background-color','#ffe6f3');;
                    $("input[name='sold_price']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                    $("input[name='contract_date']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                    $("select[name='sale_type']").val('Sold At Auction').prop('readonly',false).css('background-color','#ffe6f3');
                    $("input[name='bathroom']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                    $("input[name='car']").val('').prop('readonly',false).css('background-color','#ffe6f3');
                    $("select[name='property_type']").val('HO').prop('readonly',false).css('background-color','#ffe6f3');

                }
            })
        });
    });
</script>
@endpush

