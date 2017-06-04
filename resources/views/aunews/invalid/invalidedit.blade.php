@extends('layouts.aunews')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
                {!! Form::model($results,array('role'=>'form','url'=>'/aunews/invalid/'.$results->id.'/edit','action'=>'POST','class'=>'form-horizontal'))!!}
                  @include('aunews.invalid.invalidform')
                {!! Form::close() !!}
        </div>
    </div><!-- end of column -->
</div> <!-- end of row -->    
</div> <!-- end of container -->
@endsection