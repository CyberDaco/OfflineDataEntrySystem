@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::model($results,array('role'=>'form','url'=>'/admin/setup/states/'.$results->id.'/edit','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.states.form',['title'=>'Modify State'])
        {!! Form::close() !!}
    </div>
@endsection

