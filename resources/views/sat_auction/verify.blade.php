@extends('layouts.dataentry.dataentry',['title'=>'Saturday Auction App','folder'=>'sat_auction'])

@section('content')
<div class="container">
<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ session('batch_details')->job_name.' '.session('batch_details')->batch_date }}</h3>
        </div>

        {!! Form::model($record,array('role'=>'form','url'=>'/sat_auction/verify/'.$record->id,'action'=>'POST','class'=>'form-horizontal'))!!}
            @include('sat_auction.form',['status'=>'V'])
        {!! Form::close() !!}

    </div>
</div> <!-- end of row -->    
</div> <!-- end of container -->
@endsection



