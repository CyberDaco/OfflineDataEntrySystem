<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">EP 90 Stats Output</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <form method="post" id="frmProductionReport">
                        <div class="col-md-1">
                            <label for="job_name" class="control-label pull-right">Production Date</label>
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control aussie_date" id="production_date" name="production_date" placeholder="dd/mm/yyyy" required pattern='^(((0[1-9]|[12]\d|3[01])/(0[13578]|1[02])/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)/(0[13456789]|1[012])/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])/02/((19|[2-9]\d)\d{2}))|(29/02/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$'>
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
                            <?php echo Form::open(array('role'=>'form','url'=>'/admin/export/stats_output','method'=>'GET','class'=>'form-inline')); ?>

                            <?php echo Form::token(); ?>

                                <div class = "input-group pull-right">
                                    <input type="hidden" name="prod_date" id="prod_date" value="" class="form-control"/>
                                    <?php echo e(Form::button('<i class="fa fa-file-text" aria-hidden="true"></i> Export To Text File',['class'=>'btn btn-primary','type'=>'submit'])); ?>

                                </div><!-- /input-group -->
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Job Number</th>
                                <th>Batch Name</th>
                                <th>Record ID</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                        </thead>
                        <tbody id="records-list">
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <!-- <strong><span></span></strong> -->
                </div>
            </div> <!-- /.box -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
$(document).ready(function(){
    $('#datepicker').datepicker({
        autoclose: true
    });


    $('#results_table').hide();
      
    // search button ajax
    $("#frmProductionReport").submit(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        
        e.preventDefault(); 
        var formData = {
            production_date: $('#production_date').val(),
        }

        $.ajax({
            type: 'POST',
            url: "<?php echo e(url('/admin/export/stats')); ?>",
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                
                if(data == ""){
                  $('#results_table').hide();
                } else {
                  $('#results_table').show();
                }
                
                $('#records-list > tr').remove();
                $.each(data, function (index, value) {
                  var report = '<tr><td>' + value.action +'</td>';
                  report += '<td>' + value.jobnumber_id + '</td>';
                  report += '<td>' + value.batch_name + '</td>';
                  report += '<td>' + value.record_id + '</td>';
                  report += '<td>' + value.start + '</td>';
                  report += '<td>' + value.end + '</td></tr>';
                  $('#records-list').append(report);
                });
                $('#prod_date').val($('#production_date').val());
            },
            error: function (data) {
                $('#records-list').remove();
                console.log('Error:', data);
            }
        });
    });
});
  
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin.admin',['title'=>'Export','icon'=>'fa fa-file-text'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>