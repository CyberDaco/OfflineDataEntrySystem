@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
<div class="box box-info">
    {!! Form::model($results,array('role'=>'form','url'=>'/admin/setup/userprofile/'.$results->id.'/edit','action'=>'POST', 'files'=>'true', 'class'=>'form-horizontal'))!!}
    @include('admin.setup.userprofile.form',['title'=>'Update Profile'])
    {!! Form::close() !!}
</div>
@endsection