<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.dataentry',['form_url'=>'/sat_auction','application'=>'Saturday Auction'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


















<?php echo $__env->make('layouts.dataentry.dataentry',['title'=>'Saturday Auction','folder'=>'sat_auction'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>