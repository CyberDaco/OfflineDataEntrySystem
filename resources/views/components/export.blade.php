<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>{{ $application ? $application : '' }}</strong></h3>
            </div>
            <div class="box-body">
                <form method="GET">
                    <div class="col-md-1">
                        <label for="job_name" class="control-label">Job Name</label>
                    </div>
                    <div class="col-md-2">
                        {!! Form::select('job_name', $options, $job_name, ['class'=>'form-control','required']) !!}
                    </div>
                    <div class="col-md-1">
                        <label for="job_name" class="control-label">Batch Date</label>
                    </div>
                    <div class="col-md-2">
                        {!! Form::text('job_date',$job_date->format('d/m/Y'),['class'=>'form-control aussie_date', 'autofocus', 'required']) !!}
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">View Batches</button>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

@if($results)
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><strong>{{ $job_name.' '.$job_date->format('d/m/Y') }}</strong></h3>
                    <div class="box-tools">
                        <div>
                            <a href="{{ url('/admin/export/'.$url.'/'.$batch->id).'/csv' }}"><button class="btn btn-success btn-md addbutton pull-right"><i class="fa fa-download" aria-hidden="true"></i>  Export to CSV</button></a>
                            <a href="{{ url('/admin/export/'.$url.'/'.$batch->id.'/xlsx') }}"><button class="btn btn-success btn-md addbutton pull-right"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Export to Excel</button></a>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Job Name</th>
                            <th>Job Date</th>
                            <th>Batch Name</th>
                            <th class="text-center">Records</th>
                            <th class="text-center">Hours</th>
                            <th>Status</th>
                        </tr>
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $batch->job_name }}</td>
                                <td>{{ $batch->batch_date }}</td>
                                <td>{{ $result->batch_name }}</td>
                                <td class="text-center">{{ $result->records }}</td>
                                <td class="text-center">{{ $result->hours }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total Records</td>
                            <td class="text-center"><strong>{{ $total }}</strong></td>
                            <td class="text-center"><strong></strong></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <strong><span></span></strong>
                </div>
            </div> <!-- /.box -->
        </div>
    </div>
@endif