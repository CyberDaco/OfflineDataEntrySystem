@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')

  @include('components.datatable',[
                                   'title'=>'Lookup Table',
                                   'add_url' => '/admin/setup/lookup/add',
                                   'add_label' => 'Add Lookup',
                                   'headers'=> array('Filter','Name','Code','Action','Date Added'),
                                   'results'=>$results,
                                   'rows'=>array('filter','name','code','id','created_at'),
                                   'modify_url' => '/admin/setup/lookup/',
                                  ])

  @include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/setup/lookup/delete','message'=>'Are you sure you want to delete this record?'])

@endsection