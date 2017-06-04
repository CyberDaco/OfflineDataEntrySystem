@extends('layouts.interest')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        {!! Form::model($record,array('role'=>'form','url'=>'/interest/verify/'.$record->id,'action'=>'POST','class'=>'form-horizontal'))!!}
        
            @include('interest.form')
            
        {!! Form::close() !!}
    </div><!-- end of column -->
</div> <!-- end of row -->    
</div> <!-- end of container -->
@endsection



