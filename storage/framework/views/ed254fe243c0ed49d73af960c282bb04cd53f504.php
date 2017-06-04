<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <!-- Horizontal Form -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(session('batch_name')); ?></h3>
            </div>
        
            <?php echo Form::model($record,array('role'=>'form','url'=>'/sat_auction/'.$record->id.'/update','action'=>'POST','class'=>'form-horizontal')); ?>

                <?php echo $__env->make('sat_auction.form',['status'=>$record->status], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::close(); ?>


        </div>
    </div>
</div> <!-- end of container -->
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.dataentry.dataentry',['title'=>'Saturday Auction App','folder'=>'sat_auction'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>