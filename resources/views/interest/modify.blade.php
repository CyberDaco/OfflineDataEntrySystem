@extends('layouts.dataentry.dataentry',['title'=>'Interest Auction Results','folder'=>'interest'])

@section('content')
<div class="container">
    <div class="row">
        <!-- Horizontal Form -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ session('batch_name') }}</h3>
            </div>
        
            {!! Form::model($record,array('role'=>'form','url'=>'/interest/'.$record->id.'/update','action'=>'POST','class'=>'form-horizontal'))!!}
                @include('interest.form',['status'=>$record->status])
            {!! Form::close() !!}

        </div>
    </div>
</div> <!-- end of container -->
@endsection



