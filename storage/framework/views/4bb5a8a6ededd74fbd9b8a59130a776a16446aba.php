<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><strong><?php echo e(session('batch_details')->job_name.' '.$results->batch_date); ?></strong></h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>State</th>
              <th>Property Address</th>
              <th>Property Type</th>
              <th>Sale Type</th>
              <th class="text-right">Sold Price</th>
              <th class="text-center">Contract Date</th>
              <th>Agency Name</th>
              <th>Bed</th>
              <th>Bath</th>
              <th>Car</th>
              <th class="text-center">Action</th>
            </tr>
            <?php foreach($results->recent_sales as $result): ?>
              <tr>
                <td><?php echo e($result->state); ?></td>
                <td><a><strong><?php echo e($result->address); ?></strong></a></td>
                <td><?php echo e($result->property_type); ?></td>
                <td><?php echo e($result->sale_type); ?></td>
                <td class="text-right"><?php echo e($result->sold_price); ?></td>
                <td class="text-center"><?php echo e($result->contract_date); ?></td>
                <td><?php echo e($result->agency_name); ?></td>
                <td><?php echo e($result->bedroom); ?></td>
                <td><?php echo e($result->bathroom); ?></td>
                <td><?php echo e($result->car); ?></td>
                <td class="text-center">
                  <a href="<?php echo e(url('/sat_auction/modify/'.$result->id)); ?>" class="btn btn-info btn-xs">Modify</a></button>
                  <a class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#delete-modal" data-id="<?php echo e($result->id); ?>">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <strong><span><?php echo e(count($results) != 0 ? count($results->recent_sales).' Record(s) Found' : '0 Record'); ?></span></strong>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</div> <!-- end of container -->

<?php echo $__env->make('components.dialog',['dialog_type'=>'modal-danger','title'=>'Confirm','action'=>'/sat_auction/delete','message'=>'Are you sure you want to delete this record?'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dataentry.dataentry',['title'=>'Saturday Auction App','folder'=>'sat_auction'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>