<!-- TABLE: LATEST ORDERS -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Batches</h3>

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
                    <th>No. Of Open Batches</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($batches as $batch)
                <tr>
                    <td>{{ $batch->application }}</td>
                    <td>{{ $batch->open_batches }}</td>
                    <td><span class="label label-success">{{ $batch->job_status }}</span></td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <!--
    <div class="box-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
    </div>
    -->
    <!-- /.box-footer -->
</div>
<!-- /.box -->