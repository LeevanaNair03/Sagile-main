

<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>
<div class="row">
    <div class="col-md-12">
        <!-- Draggable default card start -->
        <div class="card">
            <div class="card-header">
                <h5>Drag and drop cards</h5>
                <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card-body">
                <div class="row tabbable">
                    <div class="col-md-3">
                        <caption><h4>Up Next</h4></caption>
                        <table class="tables_ui" id="2">
                            <tbody class="t_sortable">
                                <tr><th><hr style="width: 120px;"></th></tr>
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if($task->status_id == 2): ?> 
                                <tr id="<?php echo e($task->id); ?>">
                                    <td>
                                        <div class="card-header">
                                            <h6><?php echo e($task->title); ?></h6>
                                            <p><?php echo e($task->description); ?></p>
                                        </div>
                                        <div class="card-body">
                                            <label for="">Sprint: <?php echo e($task->sprint_id); ?></label><br>
                                            <label for="">User Stories: <?php echo e($task->u_id); ?></label><br>
                                            <label for="">Start Date: <?php echo e($task->start_date); ?></label><br>
                                            <label for="">End Date: <?php echo e($task->end_date); ?></label><br>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a class="btn btn-warning" href="<?php echo e(route('task.edit', collect($task)->first() )); ?>">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-danger btn-fill" href="#" data-toggle="modal" data-target="#delete_confirm" data-id="<?php echo e(route('task.destroy', collect($task)->first() )); ?>">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <caption><h4>In Progress</h4></caption>
                        <table class="tables_ui" id="3">
                            <tbody class="t_sortable">
                                <tr><th><hr style="width: 120px;"></th></tr>
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if($task->status_id == 3): ?>
                                <tr id="<?php echo e($task->id); ?>">
                                    <td>
                                        <div class="card-header">
                                            <h6><?php echo e($task->title); ?></h6>
                                            <p><?php echo e($task->description); ?></p>
                                        </div>
                                        <div class="card-body">
                                            <label for="">Sprint: <?php echo e($task->sprint_id); ?></label><br>
                                            <label for="">User Stories: <?php echo e($task->u_id); ?></label><br>
                                            <label for="">Start Date: <?php echo e($task->start_date); ?></label><br>
                                            <label for="">End Date: <?php echo e($task->end_date); ?></label><br>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a class="btn btn-warning" href="<?php echo e(route('task.edit', collect($task)->first() )); ?>">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-danger btn-fill" href="#" data-toggle="modal" data-target="#delete_confirm" data-id="<?php echo e(route('task.destroy', collect($task)->first() )); ?>">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <caption><h4>Done</h4></caption>
                        <table class="tables_ui" id="4">
                            <tbody class="t_sortable">
                                <tr><th><hr style="width: 120px;"></th></tr>
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if($task->status_id == 4): ?>
                                <tr id="<?php echo e($task->id); ?>">
                                    <td>
                                        <div class="card-header">
                                            <h6><?php echo e($task->title); ?></h6>
                                            <p><?php echo e($task->description); ?></p>
                                        </div>
                                        <div class="card-body">
                                            <label for="">Sprint: <?php echo e($task->sprint_id); ?></label><br>
                                            <label for="">User Stories: <?php echo e($task->u_id); ?></label><br>
                                            <label for="">Start Date: <?php echo e($task->start_date); ?></label><br>
                                            <label for="">End Date: <?php echo e($task->end_date); ?></label><br>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a class="btn btn-warning" href="<?php echo e(route('task.edit', collect($task)->first() )); ?>">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-danger btn-fill" href="#" data-toggle="modal" data-target="#delete_confirm" data-id="<?php echo e(route('task.destroy', collect($task)->first() )); ?>">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <caption><h4>Pending</h4></caption>
                        <table class="tables_ui" id="1">
                            <tbody class="t_sortable">
                                <tr><th><hr style="width: 120px;"></th></tr>
                                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if($task->status_id == 1): ?>
                                <tr id="<?php echo e($task->id); ?>">
                                    <td>
                                        <div class="card-header">
                                            <h6><?php echo e($task->title); ?></h6>
                                            <p><?php echo e($task->description); ?></p>
                                        </div>
                                        <div class="card-body">
                                            <label for="">Sprint: <?php echo e($task->sprint_id); ?></label><br>
                                            <label for="">User Stories: <?php echo e($task->u_id); ?></label><br>
                                            <label for="">Start Date: <?php echo e($task->start_date); ?></label><br>
                                            <label for="">End Date: <?php echo e($task->end_date); ?></label><br>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a class="btn btn-warning" href="<?php echo e(route('task.edit', collect($task)->first() )); ?>">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-danger btn-fill" href="#" data-toggle="modal" data-target="#delete_confirm" data-id="<?php echo e(route('task.destroy', collect($task)->first() )); ?>">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- Draggable default card start -->
    </div>
  </div>

<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Are you sure to delete this Item? This operation is irreversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"   ></script>
<script>
    $(document).ready(function() {
        var $tabs = $('.tabbable')
        $("tbody.t_sortable").sortable({
            connectWith: ".t_sortable",
            items: "> tr:not(:first)",
            appendTo: $tabs,
            helper:"clone",
            zIndex: 999990,
            start: function(event, ui) {
                item = ui.item;
                newList = oldList = ui.item.parent().parent();
            },
            stop: function(event, ui) {
                var task_id = ui.item.attr('id');
                var status = newList.attr('id');
                $.ajax({
                    type: 'get',
                    url: "<?php echo URL::to('change-status'); ?>",
                    data: {
                        'task_id': task_id,
                        'status': status
                    },
                    success: function(data) {
                        alert("Status Has Changed!");
                    },
                    error: function() {
                        alert("Error!")
                    }

                });
            },
            change: function(event, ui) {
                if (ui.sender)
                    newList = ui.placeholder.parent().parent();
            }
        }).disableSelection();

        $('#delete_confirm').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var $recipient = button.data('id');
            var modal = $(this);
            modal.find('.modal-footer a').prop("href",$recipient);
        })
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\SAgile\resources\views/kanbanboard/index.blade.php ENDPATH**/ ?>