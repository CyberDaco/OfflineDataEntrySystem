@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
  @include('components.datatable',[
                                     'title'=>'Jobs Table',
                                     'add_url' => '/admin/setup/publication/add',
                                     'add_label' => 'Add New Job',
                                     'headers'=> array('Application','State','Publication Name','Source','Issue','Status','Code','Invalid','Action','Date Added'),
                                     'results'=>$results,
                                     'rows'=>array('application','state_code_only','pub_name','source','source','issue','status','code','invalid','id','created_at'),
                                     'modify_url' => '/admin/setup/publication/',
                                    ])

  @include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/setup/publication/delete','message'=>'Are you sure you want to delete this record?'])
@endsection

