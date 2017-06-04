@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-3">
      <h1>{{ Auth::guard('web')->user()->firstname.' '.Auth::guard('web')->user()->lastname }}</h1>
    </div>
    <div class="col-sm-1">
      <img src="{{ asset('/images/userprofile/'.Auth::guard('web')->user()->id.'.jpg') }}" />
    </div>
  </div> <!-- second row -->

  <hr>
  
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    {!! Form::model($results,array('role'=>'form','url'=>'/profile/'.$results->id.'/edit','action'=>'POST', 'files'=>'true', 'class'=>'form-horizontal'))!!}
          @include('admin.setup.userprofile.form')
    {!! Form::close() !!}
    </div> <!-- end of column -->
  </div> <!-- end of row -->
  
</div> <!-- end of container -->
@endsection
