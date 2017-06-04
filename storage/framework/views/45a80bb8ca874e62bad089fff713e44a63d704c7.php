<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><strong><?php echo e(isset($title) ? $title : null); ?></strong></h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <a href="<?php echo e(isset($add_url) ? $add_url : '#'); ?>" class="btn btn-success btn-md addbutton pull-right"><span class="glyphicon glyphicon-plus"></span> <?php echo e(isset($add_label) ? $add_label : null); ?></a>
                    </div>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table id="data_table" class="table table-hover">
                    <thead>
                    <tr>
                        <?php foreach($headers as $header): ?>
                            <th><?php echo e($header); ?></th>
                        <?php endforeach; ?>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $record): ?>
                            <tr>
                                <?php foreach($rows as $row): ?>
                                    <?php if($row == 'id'): ?>
                                        <td>
                                            <a href="<?php echo e(url($modify_url.$record[$row].'/edit')); ?>" class="btn btn-info btn-xs">MODIFY</a>
                                            <a class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#delete-modal" data-id="<?php echo e($record[$row]); ?>">DELETE</a>
                                        </td>
                                    <?php else: ?>
                                        <td><?php echo e($record[$row]); ?></td>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

