@extends('layouts.aunews')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::model($record,array('role'=>'form','url'=>'/aunews/'.$record->au_news_addresses_id.'/update','action'=>'POST','class'=>'form-horizontal','id'=>'frmNews'))!!}
          <legend>{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</legend>
          
          {!! Form::token() !!}
              
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
</div> <!-- end of container -->
@endsection
@push('scripts')
<script>
    $('#frmNews').submit(function(e){
        var flag = false;
        var i = 0;
        var contacts = $('input[name="agent_contacts[]"]');
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
     });
     
     if($("select[name='property_type']").val() == 'HO,10'){
    	  $("input[name='total_floors']").val('1');
    	}
     
</script>
@endpush


