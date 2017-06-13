@extends('layouts.admin.admin',['title'=>'Export','icon'=>'fa fa-file-text'])

@section('content')
  @include('components.export',
          ['application'=>'Recent Sales','options'=> \App\Publication::where('application','Recent Sales')->pluck('pub_name','pub_name'),
           'url'=>'recent_sales',
           'total'=> $batch ? $batch->recent_sales()->count() : ''])
@endsection

