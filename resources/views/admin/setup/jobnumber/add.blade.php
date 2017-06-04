@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::open(array('role'=>'form','url'=>'/admin/setup/jobnumber/add','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.jobnumber.form',['title'=>'Add Job Number'])
        {!! Form::close() !!}
    </div>
@endsection


