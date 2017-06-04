@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::open(array('role'=>'form','url'=>'/admin/setup/aupostcode/add','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.aupostcode.form',['title'=>'Add Suburb'])
        {!! Form::close() !!}
    </div>
@endsection
