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
        @foreach($patientreports as $key => $patientreport)
        {{-- @dd($patientreport)
        #attributes: array:18 [▼
        "id" => 1
        "patientId" => "1566"
        "patientName" => "Khushi"
        "patientAge" => "80Y"
        "patientSex" => "Female"
        "imageCategory" => "single"
        "refBy" => "Admin"
        "patientHistory" => "sdfas"
        "image" => "C:\Users\APON\AppData\Local\Temp\phpC7AD.tmp"
        "dicomFile" => "C:\Users\APON\AppData\Local\Temp\phpC72F.tmp"
        "doctor" => "sef"
        "startTime" => null
        "endTime" => null
        "type" => "DX"
        "typingStatus" => null
        "status" => null
        "created_at" => "2025-04-15 08:42:39"
        "updated_at" => "2025-04-15 08:42:39"
      ] --}}
            <tr style="cursor: pointer;">
                <td>
                    {!! Form::open(['route' => ['patientreports.destroy', $patientreport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('patientreports.show', [$patientreport->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Eye" data-placement="top" title="View"></i></a> --}}
                        {!! Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete">Delete</i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                <td>
                    <h3>{{ $patientreport->patientName }}</h3>
                    <span>Gender: {{ $patientreport->patientSex }}</span><br>
                    <span>Age: {{ $patientreport->patientAge }}</span>
                </td>
                <td>{{ $patientreport->imageCategory }}</td>
                <td>{{ $patientreport->startTime }}</td>
                <td>{{ $patientreport->endTime }}</td>
                <td>{{ $patientreport->type }}</td>
                <td>{{ $patientreport->typingStatus }}</td>
                <td>{{ $patientreport->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
