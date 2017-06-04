@extends('layouts.dataentry.dataentry',['title'=>'REA NZ Keying','folder'=>'reanz'])

@section('content')
    @include('components.dataentry',['form_url'=>'/reanz','application'=>'REA NZ Keying'])
@endsection


