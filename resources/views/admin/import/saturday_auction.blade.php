@extends('layouts.admin.admin',['title'=>'Import','icon'=>'fa fa-file-text'])

@section('content')

  @include('components.import',
           ['application'=>'Saturday Auction','options'=> \App\Publication::where('application','Saturday Auction')->pluck('pub_name','pub_name'),
           'url'=>'saturday_auction',
           'results' => $results])
@endsection

