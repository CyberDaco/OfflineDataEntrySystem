@extends('layouts.admin.admin',['title'=>'Export','icon'=>'fa fa-file-text'])

@section('content')

  @include('components.import',
           ['application'=>'REA NZ Keying','options'=> \App\Publication::where('application','REA NZ Keying')->pluck('pub_name','pub_name'),
           'url'=>'reanz'])
@endsection

