<?php $__env->startSection('title'); ?>
Patientreports <?php echo \Illuminate\View\Factory::parentPlaceholder('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    
</section>

<!-- Main content -->
<div class="content">
    <div class="clearfix"></div>

    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="clearfix"></div>
    <div class="card" width="88vw;">
        <section class="card-header">
            <h5 class="card-title d-inline">Patientreports</h5>
            <span class="float-right">
                <a class="btn btn-primary pull-right" href="<?php echo e(route('patientreports.create')); ?>">Add New</a>
            </span>
        </section>
        <div class="card-body table-responsive" >
            <?php echo $__env->make('patientreports.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="text-center">
        
        <?php echo $__env->make('adminlte-templates::common.paginate', ['records' => $patientreports], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dicom\resources\views/patientreports/index.blade.php ENDPATH**/ ?>