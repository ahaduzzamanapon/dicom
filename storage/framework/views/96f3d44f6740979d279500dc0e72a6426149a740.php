<?php
    $Role = \App\Models\RoleAndPermission::all();
?>



<div class="table-responsive">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php $__currentLoopData = $Role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link <?php echo e($key == 0 ? 'active' : ''); ?>" id="<?php echo e($role->key); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo e($role->key); ?>" type="button" role="tab" aria-controls="<?php echo e($role->key); ?>" aria-selected="<?php echo e($key == 0 ? 'true' : 'false'); ?>"><?php echo e($role->name); ?></button>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </ul>
      <div class="tab-content" id="myTabContent">
        <?php $__currentLoopData = $Role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="tab-pane fade <?php echo e($key == 0 ? 'show active' : ''); ?>" id="<?php echo e($role->key); ?>" role="tabpanel" aria-labelledby="<?php echo e($role->key); ?>-tab">
            <table class="table" id="users-table">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Emp Id</th>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Designation</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $users = \App\Models\User::select('users.*', 'roles.name as role', 'designations.desi_name as designation')
                        ->leftjoin('roles', 'users.group_id', '=', 'roles.id')
                        ->leftjoin('designations', 'users.designation_id', '=', 'designations.id')
                        ->where('roles.key', '=', $role->key)
                        ->get();
                ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$key); ?></td>
                    <td><?php echo e($users->emp_id); ?></td>
                    <td><?php echo e($users->name); ?> <?php echo e($users->last_name); ?></td>
                    <td><?php echo e($users->role); ?></td>
                    <td><?php echo e($users->designation); ?></td>
                    <td><?php echo e($users->email); ?></td>
                        <td>
                            <div class='btn-group'>
                                <a href="<?php echo e(route('users.show', [$users->id])); ?>" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                                <a href="<?php echo e(route('users.edit', [$users->id])); ?>" class='btn btn-outline-primary btn-xs'><i
                                    class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                  <?php if(can('delete_option')): ?>
                                    <?php echo Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']); ?>

                                    <?php echo Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                                    <?php echo Form::close(); ?>

                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
 
</div>

<?php /**PATH C:\laragon\www\dicom\resources\views/users/table.blade.php ENDPATH**/ ?>