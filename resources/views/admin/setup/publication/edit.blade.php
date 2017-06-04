@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::model($results,array('role'=>'form','url'=>'/admin/setup/publication/'.$results->id.'/edit','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.publication.form',['title'=>'Modify Job'])
        {!! Form::close() !!}
    </div>
@endsection

@push('scripts')
<script>
    $('#state_list').select2({
        placeholder: 'Choose multiple state'
    });
</script>
@endpush