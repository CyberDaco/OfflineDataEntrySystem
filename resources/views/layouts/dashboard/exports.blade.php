<!-- TABLE: LATEST ORDERS -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Exports</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th>Application</th>
                    <th>Job Name</th>
                    <th>Job Date</th>
                    <th>Export Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exports as $export)
                <tr>
                    <td>{{ $export->application }}</td>
                    <td>{{ $export->job_name }}</td>
                    <td>{{ $export->job_date }}</td>
                    <td>{{ $export->export_date }}</td>
                    <td><span class="label label-success">{{ $export->job_status }}</span></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
