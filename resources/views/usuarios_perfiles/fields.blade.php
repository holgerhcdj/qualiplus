<!-- Usu Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('USU_ID', 'Usu Id:') !!}
    {!! Form::number('USU_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Prf Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PRF_ID', 'Prf Id:') !!}
    {!! Form::number('PRF_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Upf Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UPF_ESTADO', 'Upf Estado:') !!}
    {!! Form::number('UPF_ESTADO', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuariosPerfiles.index') }}" class="btn btn-default">Cancel</a>
</div>
