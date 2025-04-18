<div class="table-responsive">
    <table class="table" id="patientreports-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Patient id</th>
        <th>Patient name</th>
        <th>Patient age</th>
        <th>Patient sex</th>
        <th>Image category</th>
        <th>Ref.by</th>
        <th>Patient history</th>
        <th>Image</th>
        <th>Dicom file</th>
        <th>Doctor</th>
        <th>Start time</th>
        <th>End time</th>
        <th>Type</th>
        <th>Typing status</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $patientreports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $patientreport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($patientreport->id); ?></td>
            <td><?php echo e($patientreport->patientId); ?></td>
            <td><?php echo e($patientreport->patientName); ?></td>
            <td><?php echo e($patientreport->patientAge); ?></td>
            <td><?php echo e($patientreport->patientSex); ?></td>
            <td><?php echo e($patientreport->imageCategory); ?></td>
            <td><?php echo e($patientreport->refBy); ?></td>
            <td><?php echo e($patientreport->patientHistory); ?></td>
            <td><?php echo e($patientreport->image); ?></td>
            <td><?php echo e($patientreport->dicomFile); ?></td>
            <td><?php echo e($patientreport->doctor); ?></td>
            <td><?php echo e($patientreport->startTime); ?></td>
            <td><?php echo e($patientreport->endTime); ?></td>
            <td><?php echo e($patientreport->type); ?></td>
            <td><?php echo e($patientreport->typingStatus); ?></td>
            <td><?php echo e($patientreport->status); ?></td>
            <td><?php echo e($patientreport->created_at); ?></td>
            <td><?php echo e($patientreport->updated_at); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['patientreports.destroy', $patientreport->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('patientreports.show', [$patientreport->id])); ?>" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                        
                        <?php echo Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\dicom\resources\views/patientreports/table.blade.php ENDPATH**/ ?>