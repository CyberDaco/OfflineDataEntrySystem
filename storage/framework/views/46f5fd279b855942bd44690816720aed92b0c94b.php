<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Saturday Auction</h3>
      </div>
      <div class="box-body">
        <div class="row">
          <form method="post">
            <?php echo e(csrf_field()); ?>

            <div class="col-md-1">
              <label for="job_name" class="control-label">Job Name</label>
            </div>
            <div class="col-md-2">
              <?php echo Form::select('job_name', \App\Publication::where('application','Saturday Auction')->pluck('pub_name','pub_name'), null, ['class'=>'form-control','required']); ?>

            </div>
            <div class="col-md-1">
              <label for="job_name" class="control-label">Batch Date</label>
            </div>
            <div class="col-md-2">
              <?php echo Form::text('job_date',null,['class'=>'form-control aussie_date', 'required']); ?>

            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary">View Batches</button>
            </div>
          </form>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
    <?php if($results): ?>
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><strong></strong></h3>

        <div class="box-tools">
          <div>
            <a href="<?php echo e(url('/admin/export/sat_auction/'.$batch->id)); ?>"><button class="btn btn-success btn-md addbutton pull-right"><i class="fa fa-download" aria-hidden="true"></i>  Export to CSV</button></a>
            <a href="<?php echo e(url('/admin/export/sat_auction/'.$batch->id.'/excel')); ?>"><button class="btn btn-success btn-md addbutton pull-right"><i class="fa fa-file-excel-o" aria-hidden="true"></i>  Export to Excel</button></a>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Batch Name</th>
            <th>Records</th>
            <th>Status</th>
          </tr>
          <?php foreach($results as $result): ?>
            <tr>
              <td><?php echo e($result->batch_name); ?></td>
              <td><?php echo e($result->records); ?></td>
              <td></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix">
        <!-- <strong><span></span></strong> -->
      </div>
    </div> <!-- /.box -->
    <?php endif; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.admin',['title'=>'Export','icon'=>'fa fa-file-text'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>