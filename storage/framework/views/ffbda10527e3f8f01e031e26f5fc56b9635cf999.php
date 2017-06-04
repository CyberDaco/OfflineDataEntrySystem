<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><?php echo e(isset($title) ? $title : "Offline Data Entry System"); ?></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php if(session('batch_name')): ?>
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo e(setActiveapp($folder.'/view')); ?>"><a href="<?php echo e(url('/'.$folder.'/view')); ?>"><i class="fa fa-tasks" aria-hidden="true"></i> View</a></li>
                    <li class="<?php echo e(setActiveapp($folder.'/entry')); ?>"><a href="<?php echo e(url('/'.$folder.'/entry')); ?>"><i class="fa fa-plus" aria-hidden="true"></i> Entry</a></li>
                    <?php if(setActive($folder.'/modify/')=='active'): ?>
                        <li class="<?php echo e(setActive($folder.'/modify/')); ?>"><a href=""><i class="fa fa-plus" aria-hidden="true"></i> Modify</a></li>
                    <?php endif; ?>
                    <!--
                    <li class="<?php echo e(setActiveapp($folder.'/verify')); ?>"><a href="<?php echo e(url('/'.$folder.'/verify')); ?>"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verify</a></li>
                    -->
                    <li class="<?php echo e(setActiveapp($folder)); ?>"><a href="<?php echo e(url('/'.$folder)); ?>"><i class="fa fa-reply" aria-hidden="true"></i> Close</a></li>
                </ul>
            </div>
            <?php endif; ?>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
<!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container">
        <!-- Main content -->
        <section class="content">