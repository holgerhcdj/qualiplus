<?php
$fecha=date('Y-m-d');
$time=date('H:i');
if(isset($comunicaciones)){
$fecha=$comunicaciones->COM_FECHA;
$time=$comunicaciones->COM_HORA;
}

?>
<!-- Con Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CON_ID', 'Contacto:') !!}
    {!! Form::select('CON_ID',$contactos,null, ['class' => 'form-control']) !!}
</div>

<!-- Com Fecha Field -->
<div class="form-group col-sm-3">
    {!! Form::label('COM_FECHA', 'Fecha:') !!}
    {!! Form::text('COM_FECHA', $fecha, ['class' => 'form-control','id'=>'COM_FECHA']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        $('#COM_FECHA').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
<!-- Com Hora Field -->
<div class="form-group col-sm-3">
    {!! Form::label('COM_HORA', 'Hora:') !!}
    {!! Form::text('COM_HORA', $time, ['class' => 'form-control']) !!}
</div>

<!-- Com Motivo Field -->
<div class="form-group col-sm-6">
    {!! Form::text('COM_MOTIVO', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'placeholder'=>'Motivo de la llamada']) !!}
</div>

<!-- Com Obs Field -->
<div class="form-group col-sm-6">
    {!! Form::textarea('COM_OBS', null, ['class' => 'form-control','maxlength' => 255,'rows'=>2,'maxlength' => 255,'placeholder'=>'Observaciones luego de la llamada']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comunicaciones.index') }}" class="btn btn-danger pull-right">Salir</a>
</div>
