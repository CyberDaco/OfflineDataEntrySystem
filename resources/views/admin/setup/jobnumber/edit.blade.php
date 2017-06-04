@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::model($results,array('role'=>'form','url'=>'/admin/setup/jobnumber/'.$results->id.'/edit','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.jobnumber.form',['title'=>'Modify Job Number'])
        {!! Form::close() !!}
    </div>
@endsection
