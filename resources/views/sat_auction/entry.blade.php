@extends('layouts.dataentry.dataentry',['title'=>'Saturday Auction App','folder'=>'sat_auction'])

@section('content')
<div class="container">
<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date.' '.substr(session('batch_name'),4,3) }}</h3>
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
                <h3 class="box-title">Lookup</h3>
            </div>
                <div class="box-body">
                        {!! Form::select('filter_state',[strlen(session('batch_name')) == 10 ? substr(session('batch_name'),4,3) : substr(session('batch_name'),4,2) => strlen(session('batch_name')) == 10 ? substr(session('batch_name'),4,3) : substr(session('batch_name'),4,2) ], strlen(session('batch_name')) == 10 ? substr(session('batch_name'),4,3) : substr(session('batch_name'),4,2), ['class'=>'form-control input-sm']) !!}
                        <select name="locality" class="form-control input-sm " required></select>
                </div>

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>State</th>
                            <th>Property</th>
                            <th>Suburb</th>
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
        @if($errors->any())
        @else
            $('#search_modal').modal('show');
        @endif

        $("select[name='filter_state']").change(function(){
            var state = $(this).val();
            var batch = "{{ session('batch_name')}}";
            if(state){
                $.ajax({
                    type:"GET",
                    url:"{{url('/sat_auction/api/get-suburbs-list')}}?state=" + state,
                    success:function(res){
                        console.log(res);
                        if(res){
                            $("select[name='locality']").empty();
                            $.each(res,function(key,value){
                                if(key.charCodeAt(0) >= batch.charCodeAt(0) && key.charCodeAt(0) <= batch.charCodeAt(2)){
                                    $("select[name='locality']").append('<option value="'+key+'">'+value+'</option>');
                                }
                            });
                            $("select[name='locality']").val('{{ session('locality') }}');
                            $("select[name='locality']").change();
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

        $("select[name='locality']").focus();


        $("input[name='sold_price']").keydown(function(e){
            if(e.keyCode == 85){
                e.preventDefault();
                $("input[name='sold_price']").val('Undisclosed');
            }
        });

        $("select[name='sale_type']").keydown(function(e){
            if(e.keyCode == 80){
                e.preventDefault();
                $("select[name='sale_type']").val('Passed In');
            }
            if(e.keyCode == 86){
                e.preventDefault();
                $("select[name='sale_type']").val('Vendor Bid');
            }
            if(e.keyCode == 87){
                e.preventDefault();
                $("select[name='sale_type']").val('Withdrawn');
            }
            if(e.keyCode == 78){
                e.preventDefault();
                $("select[name='sale_type']").val('No Bid');
            }
        });


        $("#frmDataEntry").submit(function (e) {

            var input_date = $("input[name='contract_date']").val();
            var contract_date = new Date(input_date.split("/").reverse().join("-"));
            var current_date = new Date();

            var month_diff = (current_date.getMonth() + 1) - (contract_date.getMonth() + 1);

            if(contract_date.getTime() > current_date.getTime())
            {
                alert('date is future error!!! Invalid Date**');
                $("input[name='contract_date']").css('background-color','pink');
                $("input[name='contract_date']").focus();
                return false;
            } else if (month_diff > 3 ){
                alert('date is 4 months old!!! Invalid Date**');
                $("input[name='contract_date']").css('background-color','pink');
                $("input[name='contract_date']").focus();
                return false;
            }


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

        $("select[name='locality']").change(function(){
            var suburb = $("select[name='locality']").val();
            var filter_state = $("select[name='filter_state']").val();
            $.ajax({
                type: 'GET',
                url: "{{ url('/sat_auction/entry/lookup') }}?suburb="+ suburb + "&filter_state=" + filter_state,
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
                        report += '<td>' + value.suburb + '</td></tr>';
                        $('#records-list').append(report);
                    });
                },
                error: function (data) {
                    $('#records-list').remove();
                    console.log('Error:', data);
                }
            });
        });

        $("input[name='suburb']").blur(function(){
            $.get('/sat_auction/search_post_code/' + $("input[name='suburb']").val() + '/' + $("input[name='state']").val() , function (data) {
                if (data.post_code){
                    $("input[name='post_code']").val(data.post_code);
                } else {
                    $("input[name='post_code']").val("");
                }
            })
        });

        $('#search_modal').on('hide.bs.modal', function () {
            $("input[name='unit_no']").focus();
        });

    });

    function generate(slug)
    {
        $('#search_modal').modal('hide');

        $property = slug;
            $.get('/sat_auction/search_property_id/' + $property , function (data) {
                console.log(data);
            if (data.state){
                $("input[name='state']").val(data.state).css('background-color',data.color);
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
</script>
@endpush

