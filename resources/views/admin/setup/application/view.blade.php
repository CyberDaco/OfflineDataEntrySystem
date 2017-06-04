@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')

  @include('components.datatable',[
                                   'title'=>'Application Table',
                                   'add_url' => '/admin/setup/application/add',
                                   'add_label' => 'Add Application',
                                   'headers'=> array('Application Name','Folder Path','Entry Type','Status','Description','Action','Date Added'),
                                   'results'=>$results,
                                   'rows'=>array('application_name','folder_path','entry_type','status','description','id','created_at'),
                                   'modify_url' => '/admin/setup/application/',
                                  ])

  @include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/setup/application/delete','message'=>'Are you sure you want to delete this record?'])

@endsection
