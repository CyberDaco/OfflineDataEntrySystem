<!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Active Users</h3>

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
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Job Name</th>
                    <th>Date</th>
                    <th>Batch Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($active_users as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->user->firstname.' '.$user->user->lastname }}</td>
                    <td><span class="label label-success">Online</span></td>
                    <td>{{ $user->log->job_name }}</td>
                    <td>{{ $user->log->batch_date }}</td>
                    <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $user->batch_name }}</div>
                    </td>
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