<script>
    $(document).ready(function() {
        var table = $('.table').DataTable();

        // Clear the search box and redraw the table
        table.search('').draw();
    });
</script>

<!-- Datatables -->
<script src="<?php echo e(asset('vendors/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/datatables/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/datatables/buttons.server-side.js')); ?>"></script>
<?php /**PATH C:\laragon\www\dicom\resources\views/layouts/datatables_js.blade.php ENDPATH**/ ?>