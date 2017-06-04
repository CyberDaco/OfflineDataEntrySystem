<div id="delete-modal" class="modal <?php echo e($dialog_type); ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php echo e($title); ?></h4>
            </div>
            <form class="form-horizontal" action="<?php echo e($action); ?>" method="post">
                <div class="modal-body">
                    <h4><?php echo e($message); ?></h4>
                    <?php echo e(csrf_field()); ?>

                    <input name="delete_id" id="delete_id" type="hidden" value="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-outline">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>