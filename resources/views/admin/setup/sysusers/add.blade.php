@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::open(array('role'=>'form','url'=>'/admin/setup/sysusers/add','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.sysusers.form',['title'=>'Add User'])
        {!! Form::close() !!}
    </div>
@endsection



