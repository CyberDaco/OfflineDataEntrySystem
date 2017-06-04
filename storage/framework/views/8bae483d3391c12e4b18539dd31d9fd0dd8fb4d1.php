<?php $__env->startSection('content'); ?>
    <div class="box box-info">
        <?php echo Form::model($results,array('role'=>'form','url'=>'/admin/setup/jobnumber/'.$results->id.'/edit','action'=>'POST','class'=>'form-horizontal')); ?>

        <?php echo $__env->make('admin.setup.jobnumber.form',['title'=>'Modify Job Number'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>