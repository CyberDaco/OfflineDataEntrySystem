@extends('layouts.admin.admin',['title'=>'Export','icon'=>'fa fa-file-text'])

@section('content')

  @include('components.export',
        ['application'=>'Saturday Auction','options'=> \App\Publication::where('application','Saturday Auction')->pluck('pub_name','pub_name'),
         'url'=>'sat_auction',
         'total'=> $batch ? $batch->recent_sales()->count() : ''])
@endsection

