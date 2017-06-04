@extends('layouts.entry')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        {!! Form::open(array('role'=>'form','url'=>'/aunews/entry','action'=>'POST','class'=>'form-horizontal'))!!}
          @include('sandbox.form')
        {!! Form::close() !!}
    </div><!-- end of column -->
</div> <!-- end of row -->    
</div> <!-- end of container -->
@endsection


