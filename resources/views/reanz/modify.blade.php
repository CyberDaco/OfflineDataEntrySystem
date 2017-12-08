@extends('layouts.dataentry.dataentry',['title'=>'REA NZ Keying','folder'=>'reanz'])

@section('content')
<div class="container">
    <div class="row">
        <!-- Horizontal Form -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</h3>
            </div>

            {!! Form::model($record,array('role'=>'form','url'=>'/reanz/'.$record->id.'/update','action'=>'POST','class'=>'form-horizontal'))!!}
            @if(substr(session('batch_name'),13,-3) == 'S' || substr(session('batch_name'),13,-3) == 's' )
                @include('reanz.form',['status'=>'E'])
            @elseif(substr(session('batch_name'),13,-3) == 'R' || substr(session('batch_name'),13,-3) == 'r')
                @include('reanz.form',['status'=>'E'])
            @endif
            {!! Form::close() !!}
        </div>
    </div>
</div> <!-- end of container -->
@endsection



