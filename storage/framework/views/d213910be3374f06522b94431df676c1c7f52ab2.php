<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><strong><?php echo e(isset($title) ? $title : null); ?></strong> <a href="#">A</a> | B | C | D | E | F</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <button type="button" class="btn btn-primary btn-md addbutton pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-plus"></span> Close</button>
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
                                <?php if($row == 'property_address'): ?>
                                    <td><strong><a class="generate"  data-id='<?php echo e(str_slug($record->address_only)); ?>'><?php echo e($record->property_address); ?></a></strong></td>
                                <?php elseif($row == 'agency_name'): ?>
                                    <td><?php echo e(substr($record->agency_name,0,15)); ?></td>
                                <?php else: ?>
                                    <td><?php echo e($record[$row]); ?></td>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>


