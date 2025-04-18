<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-primary text-white" style="padding: 13px;">
        <h5 class="mb-0 text-white">Patient Report Entry</h5>
    </div>
    <div class="card-body">

        <!-- Image Information -->
        <div class="border rounded p-3 mb-4">
            <h6 class="mb-3 text-primary">Image Information</h6>
            <div class="row g-3">

                <!-- Image Category -->
                <div class="col-md-4">
                    <label for="imageCategory" class="form-label">Image Category</label>
                    {!! Form::select('imageCategory', ['single' => 'Single', 'dable' => 'Double', 'multiple' => 'Multiple'], null, ['class' => 'form-select', 'id' => 'imageCategory']) !!}
                </div>

                <!-- DICOM File -->
                <div class="col-md-4">
                    <label for="dicomFile" class="form-label">DICOM File</label>
                    {!! Form::file('dicomFile', ['class' => 'form-control']) !!}
                </div>

                <!-- Image Upload -->
                <div class="col-md-4">
                    <label for="image" class="form-label">Image</label>
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                </div>

            </div>
        </div>

        <!-- Patient Information -->
        <div class="border rounded p-3 mb-4">
            <h6 class="mb-3 text-primary">Patient Information</h6>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="patientId" class="form-label">Patient ID</label>
                    {!! Form::text('patientId', null, ['class' => 'form-control']) !!}
                </div>

                <div class="col-md-3">
                    <label for="patientName" class="form-label">Patient Name</label>
                    {!! Form::text('patientName', null, ['class' => 'form-control']) !!}
                </div>

                <div class="col-md-3">
                    <label for="patientAge" class="form-label">Patient Age</label>
                    {!! Form::text('patientAge', null, ['class' => 'form-control']) !!}
                </div>

                <div class="col-md-3">
                    <label for="patientSex" class="form-label">Patient Sex</label>
                    {!! Form::text('patientSex', null, ['class' => 'form-control']) !!}
                </div>

                <div class="col-md-3">
                    <label for="refBy" class="form-label">Referred By</label>
                    {!! Form::text('refBy', null, ['class' => 'form-control']) !!}
                </div>
                <div class="col-md-3">
                    <label for="type" class="form-label">Type</label>
                    {!! Form::text('type', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="mb-4">
                <label for="patientHistory" class="form-label">Patient History</label>
                {!! Form::textarea('patientHistory', null, ['class' => 'form-control', 'rows' => 3]) !!}
            </div>
        </div>
        <div class="border rounded p-3 mb-4">
            <h6 class="mb-3 text-primary">Doctor Information</h6>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="doctor" class="form-label">Select Doctor</label>
                    {!! Form::select('doctor', \App\Models\User::where('group_id', \App\Models\RoleAndPermission::where('key', 'doctor')->value('id'))->pluck('name', 'id')->prepend('All'), null, ['class' => 'form-select']) !!}
                </div>
            </div>
        </div>

        <div class="text-end">
            {!! Form::submit('Save', ['class' => 'btn btn-primary me-2']) !!}
            <a href="{{ route('patientreports.index') }}" class="btn btn-outline-danger">Cancel</a>
        </div>

    </div>
</div>

<!-- Include dicom-parser -->
@section('script')
    <script src="{{ asset('assets/js/dicomParser.min.js') }}" defer></script>
    <script>
        document.querySelector('input[name="dicomFile"]').addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const arrayBuffer = reader.result;
                const byteArray = new Uint8Array(arrayBuffer);

                try {
                    const dataSet = dicomParser.parseDicom(byteArray);

                    // Auto-fill form fields using DICOM tags
                    const getString = (tag) => {
                        try {
                            return dataSet.string(tag) || '';
                        } catch {
                            return '';
                        }
                    };

                    // Fill inputs
                    document.querySelector('input[name="patientId"]').value = getString(
                    'x00100020'); // Patient ID
                    document.querySelector('input[name="patientName"]').value = getString(
                    'x00100010'); // Patient Name
                    document.querySelector('input[name="patientAge"]').value = getString(
                    'x00101010'); // Patient Age
                    const sexCode = getString('x00100040');
                    let sexValue;
                    if (sexCode === 'F') {
                        sexValue = 'Female';
                    } else if (sexCode === 'M') {
                        sexValue = 'Male';
                    } else {
                        sexValue = 'Other';
                    }
                    document.querySelector('input[name="patientSex"]').value = sexValue;
                    document.querySelector('input[name="refBy"]').value = getString(
                    'x00080090'); // Referring Physician Name
                    document.querySelector('input[name="type"]').value = getString(
                    'x00080060'); // Modality as Type


                    console.log("DICOM loaded successfully");

                } catch (e) {
                    console.error('Error parsing DICOM:', e);
                    alert('Invalid DICOM file.');
                }
            };

            reader.readAsArrayBuffer(file);
        });
    </script>
@endsection
