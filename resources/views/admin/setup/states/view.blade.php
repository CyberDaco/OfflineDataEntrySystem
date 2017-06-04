@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')

  @include('components.datatable',[
                                   'title'=>'State Table',
                                   'add_url' => '/admin/setup/states/add',
                                   'add_label' => 'Add State',
                                   'headers'=> array('Country','State','Code','Action','Date Added'),
                                   'results'=>$results,
                                   'rows'=>array('country','state','code','id','created_at'),
                                   'modify_url' => '/admin/setup/states/',
                                  ])

  @include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/setup/states/delete','message'=>'Are you sure you want to delete this record?'])

@endsection

