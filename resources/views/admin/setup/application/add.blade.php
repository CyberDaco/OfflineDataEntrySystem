@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::open(array('role'=>'form','url'=>'/admin/setup/application/add','action'=>'POST','class'=>'form-horizontal'))!!}
            @include('admin.setup.application.form',['title'=>'Add Application'])
        {!! Form::close() !!}
    </div>
@endsection


