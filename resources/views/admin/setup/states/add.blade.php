@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::open(array('role'=>'form','url'=>'/admin/setup/states/add','action'=>'POST','class'=>'form-horizontal'))!!}
            @include('admin.setup.states.form',['title'=>'Add State'])
        {!! Form::close() !!}
    </div>
@endsection
