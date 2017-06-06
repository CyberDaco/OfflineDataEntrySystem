@extends('layouts.dataentry.dataentry',['title'=>'Saturday Auction','folder'=>'sat_auction'])

@section('content')
    @include('components.sat_dataentry',['form_url'=>'/sat_auction','application'=>'Saturday Auction'])
@endsection

















