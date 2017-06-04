@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')

@include('components.datatable',[
                               'title'=>'User Table',
                               'add_url' => '/admin/setup/sysusers/add',
                               'add_label' => 'Add User',
                               'headers'=> array('Operator ID','Username','Firstname','Lastname','Email','Access','Actions','Date Added'),
                               'results'=>$results,
                               'rows'=>array('operator_id','name','firstname','lastname','email','access_level','id','created_at'),
                               'modify_url' => '/admin/setup/sysusers/',
                              ])

@include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/setup/sysusers/delete','message'=>'Are you sure you want to delete this record?'])

@endsection

