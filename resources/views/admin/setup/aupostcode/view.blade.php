@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')

  @include('components.datatable',[
                                   'title'=>'Suburb Table',
                                   'add_url' => '/admin/setup/aupostcode/add',
                                   'add_label' => 'Add Suburb',
                                   'headers'=> array('State','Suburb','Post code','Action','Date Added'),
                                   'results'=>$results,
                                   'rows'=>array('state','suburb','post_code','id','created_at'),
                                   'modify_url' => '/admin/setup/aupostcode/',
                                  ])

  @include('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/setup/aupostcode/delete','message'=>'Are you sure you want to delete this record?'])

@endsection

