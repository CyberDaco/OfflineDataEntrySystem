@extends('layouts.aunews')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open(array('role'=>'form','url'=>'/aunews/propdetails','action'=>'POST','class'=>'form-horizontal','id'=>'frmNews'))!!}
          <legend>{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</legend>
          <h4> {{ $prop_address['unit_no']." ".$prop_address['street_no'].$prop_address['street_no_suffix']." ".
                           $prop_address['street_name']." ".$prop_address['street_extension']." ".
                           $prop_address['street_direction']." ".$prop_address['suburb']." ".
                           $prop_address['post_code'] }} </h4>
          
          {!! Form::token() !!}
                
          {!! Form::hidden('status','E') !!}      
                
                @include('aunews.propertyaddress',array('code'=>substr($prop_address['property_type'],0,2).'%'))    
        
                @if(substr($prop_address['sale_rent'],0,1) == 'S')    
                  @include('aunews.partials.propertysaledetails')
                @else(substr($prop_address['sale_rent'],0,1) == 'R')
                  @include('aunews.partials.propertyrentdetails')
                @endif
                
                @if(substr($prop_address['property_type'],0,2) == 'HO') 
                  @include('aunews.prop_forms.houseform')
                @elseif(substr($prop_address['property_type'],0,2) == 'UN')
                  @include('aunews.prop_forms.unitform')
                @elseif(substr($prop_address['property_type'],0,2) == 'CO')
                  @include('aunews.prop_forms.commform')
                @elseif(substr($prop_address['property_type'],0,2) == 'LA')
                  @include('aunews.prop_forms.landform')      
                @elseif($prop_address['property_type'] == 'FA')
                  @include('aunews.prop_forms.farmform')
                @else
                  <h1>Invalid Property Type</h1>
                @endif    
                
                @include('aunews.partials.propertyadditional')
                
                @include('aunews.partials.propertyad')  
    
                @include('aunews.partials.propertyagents')
            
            
                <div class="form-group">
                  <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-10 col-xs-2 col-xs-offset-10">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span>  Submit</button>
                  </div>
                </div>
        {!! Form::close() !!}
    </div><!-- end of column -->
</div> <!-- end of row --> 


@if($errors->any())
  <ul class="alert alert-danger">
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif

</div> <!-- end of container -->
@endsection

@push('scripts')
<script>
$(document).ready(function(){
    $('#frmNews').submit(function(e){
        var flag = false;
        var i = 0;
        var contacts = $('input[name="agent_contacts[]"');
        var agency = $('input[name="agency_names[]"]');

        contacts.each(function() {
            if(contacts[i].value == '' && agency[i].value == ''){
                flag = false;
            } else {
                flag = true;
                return;
            }
            i++;
        });
  
        if(flag == false){
            e.preventDefault();
            alert('Please input at least one valid agent');
            contacts[0].focus();
        }
    });
    
    $('#addrow').click(function(){
        var row = '<tr><td class="col-md-2 col-xs-2"><input type="text" class="form-control input-sm" name="agent_contacts[]" value=""></td>';
        row += '<td class="col-md-4 col-xs-4"><input type="text" class="form-control input-sm" name="agency_names[]" value=""></td>';
        row += '<td class="col-md-2 col-xs-2"><input type="text" class="form-control input-sm" name="agent_firstnames[]" value=""></td>';
        row += '<td class="col-md-2 col-xs-2"><input type="text" class="form-control input-sm" name="agent_lastnames[]" value=""></td></tr>';
        $('#tblContact').append(row);
        $("input[name='agent_contacts[]']").last().select().focus();
		$("html, body").animate({ scrollTop: $(document).height() }, "slow");
     });
     
     
    $("input[name='agent_contacts[]']").blur(function(){
        var index = $("input[name='agent_contacts[]']").index(this);

        $.get('/aunews/agent/' + $(this).val(), function (data) {
            if (data.agency_name) $("input[name='agency_names[]']").eq(index).val(data.agency_name);
            if (data.agent_firstname) $("input[name='agent_firstnames[]']").eq(index).val(data.agent_firstname);
            if (data.agent_lastname) $("input[name='agent_lastnames[]']").eq(index).val(data.agent_lastname);
        }); 
    });



    var isCtrl = false;
    var isShift = false;
    
    $(window).keydown(function(e){
      if(e.keyCode == 17){
        isCtrl = true;
      }
      
      if(e.keyCode == 16){
        isShift = true;
      }
      
      if(e.keyCode == 101 && isCtrl == true){
        e.preventDefault();
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        $("#ad_size").focus();
      }
      
      if ((e.keyCode) == 104 && isCtrl == true){ //numpad 8
			e.preventDefault();
			$("input[name='bedrooms']").focus();
		}

        if ((e.keyCode) == 102 && isCtrl == true){ //numpad 6
			e.preventDefault();
			$("input[name='lounge_rooms']").focus();
		}

        if ((e.keyCode) == 103 && isCtrl == true){ //numpad 7
			e.preventDefault();
			$("input[name='air_conditioned']").focus();
		}

        if ((e.keyCode) == 96 && isCtrl == true){ // numpad 0
			e.preventDefault();
			$("input[name='agent_contacts[]']").first().select().focus();
			$("html, body").animate({ scrollTop: $(document).height() }, "slow");
		}
		
		if ((e.keyCode) == 97 && isCtrl == true){ // numpad 1
			e.preventDefault();
			$("input[name='close_to_public']").focus();
		}
    
        if ((e.keyCode) == 98 && isCtrl == true){ //numpad 2
			e.preventDefault();
			$("input[name='swimming_pool']").focus();
		}
		
		if ((e.keyCode) == 105 && isCtrl == true){ //numpad 9
			e.preventDefault();
			$("input[name='open_plan']").focus();
		}

        return;
      
    });
    
    $(window).keyup(function(e) {
  		isCtrl = false;
  		isShift = false;
  		return;
	  });  
	
	$("select[name='ad_size']").on('blur change',function(){
		if($("select[name='ad_size']").val() == "CLASSIFIEDS"){
			$("select[name='ad_photo_type']").val('NO PHOTO');
			$("select[name='ad_photo_count']").val('NOT APPLICABLE');
		    $("select[name='ad_section']").val('CLASSIFIEDS');
		} else if ($("select[name='ad_size']").val() == ""){
			$("select[name='ad_photo_type']").val('NO PHOTO');
			$("select[name='ad_photo_count']").val('NOT APPLICABLE');
			$("select[name='ad_section']").val("");
		} else {
			$("select[name='ad_photo_type']").val('COLOUR');
			$("select[name='ad_photo_count']").val('SINGLE');
			$("select[name='ad_section']").val('MIDDLE')
		} 
	});

 
	$("select[name='ad_photo_type']").on('blur change',function(){
		if($("select[name='ad_photo_type']").val() == "NO PHOTO"){
			$("select[name='ad_photo_count']").val('NOT APPLICABLE');
		} else {
			$("select[name='ad_photo_count']").val('SINGLE');
		} 
	});
	
	
	$("select[name='ad_size']").val('SMALL');
	$("select[name='ad_photo_type']").val('COLOUR');
	$("select[name='ad_photo_count']").val('SINGLE');
	$("select[name='ad_section']").val('MIDDLE')
	
	if($("select[name='property_type']").val() == 'HO,10'){
	  $("input[name='total_floors']").val('1');
	}
});
</script>
@endpush


