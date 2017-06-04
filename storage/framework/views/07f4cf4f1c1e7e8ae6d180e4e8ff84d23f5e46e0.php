<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <img src="/images/userprofile/<?php echo e($results->profile_image ? $results->profile_image : 'user.jpg'); ?>" class="img-responsive thumbnail" alt="User Image" width="100%">
      <div class="list-group">
        <a href="<?php echo e(url('/dataentry')); ?>" class="list-group-item active"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
        <a href="<?php echo e(url('profile')); ?>" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Profile</a>
        <a href="<?php echo e(url('/logout')); ?>" class="list-group-item"><i class="glyphicon glyphicon-off"></i> Log Out</a>
     </div>
    </div>
    <div class="col-sm-9">
      <div class="page-header">
        <h1>Welcome, <?php echo e(Auth::guard('web')->user()->lastname.' '.Auth::guard('web')->user()->firstname); ?></h1>
      </div>

      <div class="row">
         <?php foreach($applications as $application): ?>
         <div class="col-sm-4">
           <!-- small box -->
           <div class="small-box bg-aqua">
             <div class="inner">
               <h3><?php echo e(\App\Batch::where('application',$application->application_name)->where('job_status','Open')->count()); ?></h3>
                  <h4><?php echo e($application->application_name); ?></h4>
             </div>
             <div class="icon">
               <i class="ion ion-bag"></i>
             </div>
             <a href="<?php echo e(url($application->folder_path)); ?>" class="small-box-footer">Go To Application <i class="fa fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <?php endforeach; ?>
      </div>
    </div>
  </div>

</div> <!-- end of container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dataentry.dataentry', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>