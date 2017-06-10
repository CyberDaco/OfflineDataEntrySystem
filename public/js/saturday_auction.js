$(document).ready(function() {

    $("select[name='filter_state']").change();


    //set locality on load focus
    $("select[name='locality']").focus();

    //form validation
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

    //search properties on suburb change
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

    //post code search
    $("input[name='suburb']").blur(function(){
        $.get('/sat_auction/search_post_code/' + $("input[name='suburb']").val() + '/' + $("input[name='state']").val() , function (data) {
            //console.log(data);
            if (data.post_code){
                $("input[name='post_code']").val(data.post_code);
            } else {
                $("input[name='post_code']").val("");
            }
        })
    });

    //focuses on unit in modal unload event
    $('#search_modal').on('hide.bs.modal', function () {
        $("input[name='unit_no']").focus();
    });

});

function generate(slug)
{
    $('#search_modal').modal('hide');

    $property = slug;
    $.get('/sat_auction/search_property_id/' + $property , function (data) {
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