@extends('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'])

@section('content')
    <div class="box box-info">
        {!! Form::open(array('role'=>'form','url'=>'/admin/setup/publication/add','action'=>'POST','class'=>'form-horizontal'))!!}
        @include('admin.setup.publication.form',['title'=>'Add New Job'])
        {!! Form::close() !!}
    </div>
@endsection

@push('scripts')
<script>


</script>
@endpush


