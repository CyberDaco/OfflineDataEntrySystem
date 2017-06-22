@extends('layouts.admin.admin',['title'=>'Export','icon'=>'fa fa-file-text'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">EP 90 Stats Output</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <form method="GET" id="frmProductionReport">
                        <div class="col-md-1">
                            <label for="job_name" class="control-label pull-right">Production Date</label>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control aussie_date" value="{{ $production_date->format('d/m/Y') }}" id="production_date" name="production_date" placeholder="dd/mm/yyyy" required pattern='^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$'>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="btn-search" class="btn btn-primary">View Logs</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
<div class="row" id="results_table">
    <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><strong></strong></h3>
                    <div class="box-tools">
                        <div>
                            {!! Form::open(array('role'=>'form','url'=>'/admin/report/stats_output','method'=>'GET','class'=>'form-inline'))!!}
                                <div class = "input-group pull-right">
                                    <input type="hidden" name="prod_date" id="prod_date" value="{{ $production_date->format('d/m/Y') }}" class="form-control"/>
                                    {{  Form::button('<i class="fa fa-file-text" aria-hidden="true"></i> Export To Text File',['class'=>'btn btn-primary','type'=>'submit']) }}
                                </div><!-- /input-group -->
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                            <tr>
                                <th>Action</th>
                                <th>Job Number</th>
                                <th>Batch Name</th>
                                <th>Record ID</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{ $result->action }}</td>
                                    <td>{{ $result->jobnumber_id }}</td>
                                    <td>{{ $result->batch_name }}</td>
                                    <td>{{ $result->record_id }}</td>
                                    <td>{{ $result->start }}</td>
                                    <td>{{ $result->end }}</td>
                                </tr>
                            @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <!-- <strong><span></span></strong> -->
                </div>
            </div> <!-- /.box -->
    </div>
</div>
@endsection
