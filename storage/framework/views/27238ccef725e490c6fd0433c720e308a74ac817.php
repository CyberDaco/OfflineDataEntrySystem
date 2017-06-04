<div class="box-header with-border">
  <h3 class="box-title"><?php echo e(isset($title) ? $title : null); ?></h3>
</div>
<div class="panel-body">
        
    <?php echo e(csrf_field()); ?>

    
      <div class="form-group">  
        <?php echo Form::label('job_number','Job Number',['class'=>'control-label col-md-3']); ?>

        <div class="col-md-7 custom">
          <?php echo Form::text('job_number', null, ['class'=>'form-control', 'required']); ?>

        </div>
      </div>
      
      <div class="form-group">  
        <?php echo Form::label('application','Job Name',['class'=>'control-label col-md-3']); ?>

        <div class="col-md-7 custom">
          <?php echo Form::select('application', \App\Publication::all()->pluck('pub_name','pub_name'), null, ['class'=>'form-control']); ?>

        </div>
      </div>
      
      <div class="form-group">  
        <?php echo Form::label('section','Section',['class'=>'control-label col-md-3']); ?>

        <div class="col-md-7 custom">
          <?php echo Form::select('section', ['S'=>'Sale','R'=>'Rent','S'=>'Sold','L'=>'Land'], null, ['class'=>'form-control']); ?>

        </div>
      </div>
      
      <div class="form-group">  
        <?php echo Form::label('current_month','For the Month of',['class'=>'control-label col-md-3']); ?>

        <div class="col-md-7 custom">
          <?php echo Form::text('current_month', null, ['class'=>'form-control', 'placeholder'=>'yyyy-mm-dd Please Enter the First day of the month','required']); ?>

        </div>
      </div>
      
      <div class="form-group">  
        <?php echo Form::label('job_date','Job Date From',['class'=>'control-label col-md-3']); ?>

        <div class="col-md-7 custom">
          <?php echo Form::text('job_date', null, ['class'=>'form-control', 'placeholder'=>'yyyy-mm-dd Please Enter the First day of the month','required']); ?>

        </div>
      </div>
      
      <div class="form-group">  
        <?php echo Form::label('stats_output','Stats Output String',['class'=>'control-label col-md-3']); ?>

        <div class="col-md-7 custom">
          <?php echo Form::text('stats_output', null, ['class'=>'form-control', 'required']); ?>

        </div>  
      </div>
    
      <hr style="height:1px;border:none;color:#D3D3D3;background-color:#D3D3D3;">
      
      <div class="col-md-offset-8">
        <?php echo Form::submit('SUBMIT', ['class'=>'btn btn-info']); ?>

        <a role="button" class="btn btn-info" href="<?php echo e(url('/admin/setup/jobnumber/view')); ?>">CANCEL</a>
      </div>
      
</div> <!-- end of panel body -->

    <?php if($errors->any()): ?>
      <ul class="alert alert-danger">
      <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
      