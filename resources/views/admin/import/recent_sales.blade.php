@extends('layouts.admin.admin',['title'=>'Import','icon'=>'fa fa-file-text'])

@section('content')

  @include('components.import',
           ['application'=>'Recent Sales','options'=> \App\Publication::where('application','Recent Sales')->pluck('pub_name','pub_name'),
           'url'=>'recent_sales',
           'results' => $results])
@endsection

