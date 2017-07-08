@extends('layouts.admin.admin',['title'=>'Import','icon'=>'fa fa-file-text'])

@section('content')

  @include('components.import',
           ['application'=>'REA NZ Keying','options'=> \App\Publication::where('application','REA NZ Keying')->pluck('pub_name','pub_name'),
           'url'=>'reanz',
           'results' => $results])
@endsection

