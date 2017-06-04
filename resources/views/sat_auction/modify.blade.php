@extends('layouts.dataentry.dataentry',['title'=>'Saturday Auction App','folder'=>'sat_auction'])

@section('content')
<div class="container">
    <div class="row">
        <!-- Horizontal Form -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ session('batch_name') }}</h3>
            </div>
        
            {!! Form::model($record,array('role'=>'form','url'=>'/sat_auction/'.$record->id.'/update','action'=>'POST','class'=>'form-horizontal'))!!}
                @include('sat_auction.form',['status'=>$record->status])
            {!! Form::close() !!}

        </div>
    </div>
</div> <!-- end of container -->
@endsection



