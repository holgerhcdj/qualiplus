    <!-- Ins Descripcion Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('USU_ID', 'Asesor:') !!}
        {!! Form::select('USU_ID',$asesor,null, ['class' => 'form-control']) !!}
    </div>
    <!-- Ins Descripcion Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('INS_DESCRIPCION', 'Nombre de la Institución:') !!}
        {!! Form::text('INS_DESCRIPCION', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
    </div>
    <!-- Ins Direccion Field -->
    <div class="form-group col-sm-8">
        {!! Form::label('INS_DIRECCION', 'Direccion:') !!}
        {!! Form::text('INS_DIRECCION', null, ['class' => 'form-control','maxlength' => 250,'maxlength' => 250]) !!}
    </div>
    <!-- Ins Pais Field -->
    <div class="form-group col-sm-6" hidden="">
        {!! Form::label('INS_PAIS', 'Pais:') !!}
        {!! Form::text('INS_PAIS', 'ECUADOR', ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
    </div>

<!-- Ins Provincia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_PROVINCIA', 'Provincia:') !!}
    {!! Form::text('INS_PROVINCIA', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
<!-- Ins Canton Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_CANTON', 'Canton:') !!}
    {!! Form::text('INS_CANTON', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
<!-- Ins Parroquia Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_PARROQUIA', 'Parroquia:') !!}
    {!! Form::text('INS_PARROQUIA', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
<!-- Ins Distrito Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_DISTRITO', 'Distrito:') !!}
    {!! Form::text('INS_DISTRITO', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>
<!-- Ins Zona Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_ZONA', 'Zona:') !!}
    {!! Form::text('INS_ZONA', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Ins Cod Cirtcuito Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_COD_CIRTCUITO', 'Cod Cirtcuito:') !!}
    {!! Form::text('INS_COD_CIRTCUITO', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Ins Regimen Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_REGIMEN', 'Regimen:') !!}
    {!! Form::select('INS_REGIMEN',['0'=>'Sierra','1'=>'Costa'] ,null, ['class' => 'form-control']) !!}
</div>
<!-- Ins Telefono Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_TELEFONO', 'Telefono:') !!}
    {!! Form::text('INS_TELEFONO', null, ['class' => 'form-control','maxlength' => 250,'maxlength' => 250]) !!}
</div>

<!-- Ins Email Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_EMAIL', 'Email:') !!}
    {!! Form::text('INS_EMAIL', null, ['class' => 'form-control','maxlength' => 250,'maxlength' => 250]) !!}
</div>

<!-- Ins Tipo Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_TIPO', 'Tipo:') !!}
    {!! Form::select('INS_TIPO',['0'=>'Pública','1'=>'Particular','2'=>'Municipal'],null, ['class' => 'form-control']) !!}
</div>

<!-- Ins Oferta Field -->
<div class="form-group col-sm-8">
    {!! Form::label('INS_OFERTA', 'Oferta:') !!}
    {!! Form::text('INS_OFERTA', null, ['class' => 'form-control']) !!}
</div>
<div class="col-sm-12 bg-gray text-center">Número de estudiantes</div>
<!-- Ins Nest Inicial Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_NEST_INICIAL', 'Inicial:') !!}
    {!! Form::number('INS_NEST_INICIAL', null, ['class' => 'form-control']) !!}
</div>  
<!-- Ins Nest Basica Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_NEST_BASICA', 'Basica:') !!}
    {!! Form::number('INS_NEST_BASICA', null, ['class' => 'form-control']) !!}
</div>
<!-- Ins Nest Bachillerato Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_NEST_BACHILLERATO', 'Bachillerato:') !!}
    {!! Form::number('INS_NEST_BACHILLERATO', null, ['class' => 'form-control']) !!}
</div>
<div class="col-sm-12 bg-gray text-center">Número de profesores</div>
<!-- Ins Profs Inicial Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_PROFS_INICIAL', 'Inicial:') !!}
    {!! Form::number('INS_PROFS_INICIAL', null, ['class' => 'form-control']) !!}
</div>
<!-- Ins Profs Basica Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_PROFS_BASICA', 'Basica:') !!}
    {!! Form::number('INS_PROFS_BASICA', null, ['class' => 'form-control']) !!}
</div>
<!-- Ins Profs Bachillerato Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_PROFS_BACHILLERATO', 'Bachillerato:') !!}
    {!! Form::number('INS_PROFS_BACHILLERATO', null, ['class' => 'form-control']) !!}
</div>

<!-- Ins Estado Field -->
<div class="form-group col-sm-4">
    {!! Form::label('INS_ESTADO', 'Estado:') !!}
    {!! Form::select('INS_ESTADO',['0'=>'Activo','1'=>'Inactivo'],null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('instituciones.index') }}" class="btn btn-danger pull-right">Cancelar</a>
</div>
