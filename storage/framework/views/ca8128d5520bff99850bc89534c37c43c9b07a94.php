<?php $__env->startSection('content'); ?>
    <div class="box box-info">
        <?php echo Form::open(array('role'=>'form','url'=>'/admin/setup/jobnumber/add','action'=>'POST','class'=>'form-horizontal')); ?>

        <?php echo $__env->make('admin.setup.jobnumber.form',['title'=>'Add Job Number'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>