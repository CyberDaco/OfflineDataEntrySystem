@extends('layouts.admin.admin',['title'=>'Import','icon'=>'fa fa-file-text'])

@section('content')

  @include('components.import',
           ['application'=>'Interest Auction Results','options'=> \App\Publication::where('application','Interest Auction Results')->pluck('pub_name','pub_name'),
           'url'=>'interest',
           'results' => $results])
@endsection

