<!-- Ins Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('INS_ID', 'Institucion:') !!}
    {!! Form::select('INS_ID',$ins ,null, ['class' => 'form-control']) !!}
</div>

<!-- Con Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CON_NOMBRES', 'Nombres:') !!}
    {!! Form::text('CON_NOMBRES', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Con Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CON_CARGO', 'Cargo:') !!}
    {!! Form::text('CON_CARGO', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Con Telefono Field <--></-->
<div class="form-group col-sm-6">
    {!! Form::label('CON_TELEFONO', 'Telefono:') !!}
    {!! Form::text('CON_TELEFONO', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Con Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CON_EMAIL', 'Email:') !!}
    {!! Form::text('CON_EMAIL', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Con Obs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CON_OBS', 'Obs:') !!}
    {!! Form::text('CON_OBS', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Con Principal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CON_PRINCIPAL', 'Principal:') !!}
    {!! Form::select('CON_PRINCIPAL',['0'=>'NO','1'=>'SI'],null, ['class' => 'form-control']) !!}
</div>

<!-- Con Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CON_ESTADO', 'Estado:') !!}
    {!! Form::select('CON_ESTADO',['0'=>'Activo','1'=>'Inactivo'],null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contactos.index') }}" class="btn btn-danger pull-right">Salir</a>
</div>
