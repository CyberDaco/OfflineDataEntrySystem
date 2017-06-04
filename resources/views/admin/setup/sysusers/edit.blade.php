@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::model($results,array('role'=>'form','url'=>'/admin/setup/sysusers/'.$results->id.'/edit','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.sysusers.form',['title'=>'Modify User'])
        {!! Form::close() !!}
    </div>
@endsection
