<?php $__env->startSection('title'); ?>
    Dashboard <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_styles'); ?>
    <link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Active Doctors List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th style="width: 40px">Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $users = \App\Models\User::select('users.*', 'roles.name as role', 'designations.desi_name as designation')
                                            ->leftjoin('roles', 'users.group_id', '=', 'roles.id')
                                            ->leftjoin('designations', 'users.designation_id', '=', 'designations.id')
                                            ->where('roles.key', '=', 'doctor')
                                            ->where('users.last_activity', '>', now()->subMinutes(3))
                                            ->get();
                                ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($index + 1); ?></td>
                                        <td><?php echo e($doctor->name . ' ' . $doctor->last_name); ?></td>
                                        <td><?php echo e($doctor->designation); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dicom\resources\views/index.blade.php ENDPATH**/ ?>