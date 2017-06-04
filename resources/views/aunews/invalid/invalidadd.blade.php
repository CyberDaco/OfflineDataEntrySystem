@extends('layouts.aunews')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::open(array('role'=>'form','url'=>'/aunews/invalid/add','action'=>'POST','class'=>'form-horizontal'))!!}
          @include('aunews.invalid.invalidform')
        {!! Form::close() !!}
            
    </div><!-- end of column-->
  </div><!-- end of row -->
</div> <!-- end of container -->

@endsection    
    

@if($errors->any())
  <ul class="alert alert-danger">
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
@endif

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
	$("select[name='ad_section']").val('MIDDLE');
	
	$("select[name='state']").val("{{ session('state') }}");
	
});
</script>
@endpush