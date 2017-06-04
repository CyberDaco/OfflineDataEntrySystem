@extends('layouts.dataentry.dataentry',['title'=>'Recent Sales Application','folder'=>'recent_sales'])

@section('content')
<div class="container">
<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</h3>
        </div>
        {!! Form::open(array('role'=>'form','url'=>'/recent_sales/entry','action'=>'POST','class'=>'form-horizontal'))!!}
          @include('recent_sales.form',['status'=>'E'])
        {!! Form::close() !!}
    </div>
</div>
</div> <!-- end of container -->
@endsection

@push('scripts')
<script>
$(document).ready(function(){
    $("input[name='suburb']").blur(function(){
        $.get('/recent_sales/search_post_code/' + $("input[name='suburb']").val() + '/' + $("select[name='state']").val() , function (data) {
            console.log(data);
            if (data.post_code){
                $("input[name='post_code']").val(data.post_code);
            } else {
                $("input[name='post_code']").val("");
            }
        })
    });


    @if(session('last_record'))
        $("select[name='state']").val('{{ session('last_record')->state }}').change();
    @endif




});
</script>
@endpush
