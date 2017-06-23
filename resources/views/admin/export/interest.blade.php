@extends('layouts.admin.admin',['title'=>'Export','icon'=>'fa fa-file-text'])

@section('content')

  @include('components.export',
        ['application'=>'Interest Auction Results','options'=> \App\Publication::where('application','Interest Auction Results')->pluck('pub_name','pub_name'),
         'url'=>'interest',
         'total'=> $batch ? $batch->interests()->count() : '',
         'lookup' => null])

@endsection

