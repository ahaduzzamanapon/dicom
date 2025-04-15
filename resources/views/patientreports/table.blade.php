<div class="table-responsive">
    <table class="table" id="patientreports-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Patientid</th>
        <th>Patientname</th>
        <th>Patientage</th>
        <th>Patientsex</th>
        <th>Imagecategory</th>
        <th>Refby</th>
        <th>Patienthistory</th>
        <th>Image</th>
        <th>Dicomfile</th>
        <th>Doctor</th>
        <th>Starttime</th>
        <th>Endtime</th>
        <th>Type</th>
        <th>Typingstatus</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patientreports as $key => $patientreport)
            <tr>
                <td>{{ $patientreport->id }}</td>
            <td>{{ $patientreport->patientId }}</td>
            <td>{{ $patientreport->patientName }}</td>
            <td>{{ $patientreport->patientAge }}</td>
            <td>{{ $patientreport->patientSex }}</td>
            <td>{{ $patientreport->imageCategory }}</td>
            <td>{{ $patientreport->refBy }}</td>
            <td>{{ $patientreport->patientHistory }}</td>
            <td>{{ $patientreport->image }}</td>
            <td>{{ $patientreport->dicomFile }}</td>
            <td>{{ $patientreport->doctor }}</td>
            <td>{{ $patientreport->startTime }}</td>
            <td>{{ $patientreport->endTime }}</td>
            <td>{{ $patientreport->type }}</td>
            <td>{{ $patientreport->typingStatus }}</td>
            <td>{{ $patientreport->status }}</td>
            <td>{{ $patientreport->created_at }}</td>
            <td>{{ $patientreport->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['patientreports.destroy', $patientreport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patientreports.show', [$patientreport->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a>
                        <a href="{{ route('patientreports.edit', [$patientreport->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                class="im im-icon-Pen"  data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                        {!! Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
