<!-- Prf Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRF_DESCRIPCION', 'Nombre del Perfil:') !!}
    {!! Form::text('PRF_DESCRIPCION', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Prf Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRF_CODIGO', 'Codigo:') !!}
    {!! Form::text('PRF_CODIGO', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Prf Obs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRF_OBS', 'Observaciones:') !!}
    {!! Form::text('PRF_OBS', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perfiles.index') }}" class="btn btn-danger pull-right">Salir</a>
</div>
