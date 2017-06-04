<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <img class="img-responsive thumbnail" src="/img/user.jpg" alt="User" height="100%">
        <div class="col-sm-4 col-md-offset-4">
            <hr>
            <form role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <label for="email" class="control-label">Username</label>
                    <input id="email" type="text" class="form-control input-lg" name="name" value="<?php echo e(old('name')); ?>" autofocus>
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <label for="password" class="control-label">Password</label>
                    <input id="password" type="password" class="form-control input-lg" name="password">
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>