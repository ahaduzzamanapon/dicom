<!-- Patientid Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('patientId', 'Patientid:',['class'=>'control-label']) !!}
        {!! Form::text('patientId', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Patientname Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('patientName', 'Patientname:',['class'=>'control-label']) !!}
        {!! Form::text('patientName', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Patientage Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('patientAge', 'Patientage:',['class'=>'control-label']) !!}
        {!! Form::text('patientAge', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Patientsex Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('patientSex', 'Patientsex:',['class'=>'control-label']) !!}
        {!! Form::text('patientSex', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Imagecategory Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('imageCategory', 'Imagecategory:',['class'=>'control-label']) !!}
        {!! Form::select('imageCategory', ['single' => 'single', 'dable' => 'dable'], null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Refby Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('refBy', 'Refby:',['class'=>'control-label']) !!}
        {!! Form::text('refBy', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Patienthistory Field -->
<div class="col-md-12">
    <div class="form-group ">
        {!! Form::label('patientHistory', 'Patienthistory:',['class'=>'control-label']) !!}
        {!! Form::textarea('patientHistory', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Image Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('image', 'Image:',['class'=>'control-label']) !!}
        {!! Form::file('image') !!}
    </div>
</div>
 <div class="clearfix"></div>


<!-- Dicomfile Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('dicomFile', 'Dicomfile:',['class'=>'control-label']) !!}
        {!! Form::file('dicomFile') !!}
    </div>
</div>
 <div class="clearfix"></div>


<!-- Doctor Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('doctor', 'Doctor:',['class'=>'control-label']) !!}
        {!! Form::text('doctor', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Starttime Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('startTime', 'Starttime:',['class'=>'control-label']) !!}
        {!! Form::text('startTime', null, ['class' => 'form-control','id'=>'startTime']) !!}
    </div>
</div>
@section('footer_scripts')
<script type="text/javascript">
    $('#startTime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Endtime Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('endTime', 'Endtime:',['class'=>'control-label']) !!}
        {!! Form::text('endTime', null, ['class' => 'form-control','id'=>'endTime']) !!}
    </div>
</div>
@section('footer_scripts')
<script type="text/javascript">
    $('#endTime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Type Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('type', 'Type:',['class'=>'control-label']) !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Typingstatus Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('typingStatus', 'Typingstatus:',['class'=>'control-label']) !!}
        {!! Form::text('typingStatus', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Status Field -->
<div class="col-md-3">
    <div class="form-group">
        {!! Form::label('status', 'Status:',['class'=>'control-label']) !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12" style="text-align-last: right;">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('patientreports.index') }}" class="btn btn-danger">Cancel</a>
</div>
