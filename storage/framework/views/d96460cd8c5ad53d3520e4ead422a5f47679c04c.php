<?php $__env->startSection('content'); ?>

  <?php echo $__env->make('components.datatable',[
                                   'title'=>'Job Number Table',
                                   'add_url' => '/admin/setup/jobnumber/add',
                                   'add_label' => 'Add Job Number',
                                   'headers'=> array('Job Number','Description','Sale/Rent','Current Month','Publication Date','Stats Output','Actions','Date Added'),
                                   'results'=>$results,
                                   'rows'=>array('job_number','application','section','current_month_format','current_publication_date_format','stats_output','id','created_at'),
                                   'modify_url' => '/admin/setup/jobnumber/',
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/admin/setup/jobnumber/delete','message'=>'Are you sure you want to delete this record?'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin',['title'=>'Setup','icon'=>'fa fa-clock-o'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>