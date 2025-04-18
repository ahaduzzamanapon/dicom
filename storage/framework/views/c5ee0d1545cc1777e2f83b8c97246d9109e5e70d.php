<div class="table-responsive" style="">
    <table class="table" id="patientreports-table">
        <thead>
            <tr>
                <th>Action</th>
                <th>Patient</th>
                <th>Image Category</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Type</th>
                <th>Typing Status</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $patientreports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $patientreport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <tr style="cursor: pointer;">
                <td>
                    <?php echo Form::open(['route' => ['patientreports.destroy', $patientreport->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        
                        <?php echo Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete">Delete</i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
                <td>
                    <h3><?php echo e($patientreport->patientName); ?></h3>
                    <span>Gender: <?php echo e($patientreport->patientSex); ?></span><br>
                    <span>Age: <?php echo e($patientreport->patientAge); ?></span>
                </td>
                <td><?php echo e($patientreport->imageCategory); ?></td>
                <td><?php echo e($patientreport->startTime); ?></td>
                <td><?php echo e($patientreport->endTime); ?></td>
                <td><?php echo e($patientreport->type); ?></td>
                <td><?php echo e($patientreport->typingStatus); ?></td>
                <td><?php echo e($patientreport->status); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\dicom\resources\views/patientreports/table.blade.php ENDPATH**/ ?>