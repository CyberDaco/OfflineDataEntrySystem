@extends('layouts.aunews')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open(array('role'=>'form','url'=>'/aunews/propdetails','method'=>'GET','class'=>'form-horizontal','id'=>'frmPropertyAddress'))!!}
          @include('aunews.formaddress')
        {!! Form::close() !!}
    </div><!-- end of column -->
</div> <!-- end of row -->    
</div> <!-- end of container <-->
@endsection


@push('scripts')
<script>
$(document).ready(function(){
    $('#suburb').blur(function(){
        $.get('/aunews/postcode/' + $('#suburb').val(), function (data) {
            console.log(data.post_code);
            $('#post_code').val(data.post_code);
        }) 
    });
    
    $('input[name="page_no"]').val({{ session('page_no') }})
});
</script>
@endpush