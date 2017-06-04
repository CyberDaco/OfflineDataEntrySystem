<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><strong>Saturday Auction</strong></h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <button id="btn-add" name="btn-add" class="btn btn-success btn-md addbutton pull-right"><span class="glyphicon glyphicon-plus"></span> Add New Record</button>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table id="data_table" class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Application</th>
                            <th>Job Name</th>
                            <th>Batch Date</th>
                            <th>Status</th>
                            <th>Records</th>
                            <th>Remarks</th>
                            <th>Date Added</th>
                            <th>Export Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach($batches as $batch): ?>
                        <tr id="batch<?php echo e($batch->id); ?>">
                            <td><?php echo e($batch->id); ?></td>
                            <td><?php echo e($batch->application); ?></td>
                            <td><?php echo e($batch->job_name); ?></td>
                            <td><?php echo e($batch->batch_date); ?></td>
                            <td><?php echo e($batch->job_status); ?></td>
                            <td><?php echo e($batch->records); ?></td>
                            <td><?php echo e($batch->remarks); ?></td>
                            <td><?php echo e($batch->add_date); ?></td>
                            <td><?php echo e($batch->export_date); ?></td>

                            <td>
                                <button class="btn btn-warning btn-xs btn-detail open-modal" data-toggle="modal" data-target="#myModal" value="<?php echo e($batch->id); ?>">Modify</button>
                                <button class="btn btn-danger btn-xs btn-delete delete" data-toggle="modal" data-target="#delete-modal" data-id="<?php echo e($batch->id); ?>">Delete</button>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
</div>

<?php echo $__env->make('components.batches',['application'=>'Saturday Auction'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/batch/delete','message'=>'Are you sure you want to delete this record?'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if($errors->any()): ?>
    <ul class="alert alert-danger">
        <?php foreach($errors->all() as $error): ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
$(document).ready(function(){
     // ADD button ::
    $('#btn-add').click(function(){
        $('#frmBatch').trigger("reset");
        $('.modal-title').html('Add New Batch');
        $('#btn-save').html("Save");
        $('#myModal').modal('show');
    });
    // UPDATE button ::
    $('.open-modal').click(function(){
        $("#frmBatch").attr("action", "/admin/batch/" + $(this).val() + '/edit' );
        $.get('/admin/batch/' + $(this).val(), function (data) {
            console.log(data);
            $('#batch_id').val(data.id);
            $('#application').val(data.application);
            $('#jobnumber').val(data.jobnumber);
            $('#job_name').val(data.job_name);
            $('#batch_date').val(data.batch_date);
            $('#job_status').val(data.job_status);
            $('#remarks').val(data.remarks);
            $('.modal-title').html('Update Record');
            $('#btn-save').html("Update");
            $('#jobnumber').focus();
        })
    });
});
</script>
<script>
    $(document).ready(function(){
        var isCtrl = false;
        var isShift = false;

        $(window).keydown(function(e){
            if(e.keyCode == 17){
                isCtrl = true;
            }
            if(e.keyCode == 16){
                isShift = true;
            }
            if(e.keyCode == 65 && isCtrl == true && isShift == true){
                e.preventDefault();
                $('#frmBatch').trigger("reset");
                $('.modal-title').html('Add New Batch');
                $('#btn-save').html("Save");
                $('#myModal').modal('show');
            }
        });

        $(window).keyup(function(e) {
            isCtrl = false;
            isShift = false;
            return;
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.admin',['title'=>'Batches','icon'=> 'fa fa-pencil-square'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>