<?php $__env->startSection('title'); ?>
Patientreport <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content-header">
    
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'patientreports.store', 'files' => true,'class' => 'form-horizontal col-md-12']); ?>

                    <div class="row">
                        <?php echo $__env->make('patientreports.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dicom\resources\views/patientreports/create.blade.php ENDPATH**/ ?>