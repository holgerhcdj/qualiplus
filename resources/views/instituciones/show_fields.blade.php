<form action="{{route('guarda_contactos')}}" method="POST">
    {{csrf_field()}}
    <!-- Ins Id Field -->
    {!! Form::hidden('INS_ID',$instituciones->INS_ID, ['class' => 'form-control']) !!}

    <!-- Con Nombres Field -->
    <div class="form-group col-sm-6">
        {!! Form::text('CON_NOMBRES', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150,'placeholder'=>'Título / Nombres y Apellidos']) !!}
    </div>
    <!-- Con Cargo Field -->
    <div class="form-group col-sm-6">
        {!! Form::text('CON_CARGO', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150,'placeholder'=>'Cargo en la Institución']) !!}
    </div>

    <!-- Con Telefono Field <--></-->
    <div class="form-group col-sm-6">
        {!! Form::text('CON_TELEFONO', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50,'placeholder'=>'Teléfono']) !!}
    </div>

    <!-- Con Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::text('CON_EMAIL', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50,'placeholder'=>'email']) !!}
    </div>
    <!-- Con Principal Field -->
    <!-- Con Obs Field -->
    <div class="form-group col-sm-12">
        {!! Form::textarea('CON_OBS', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150, 'rows'=>1,'placeholder'=>'Observaciones']) !!}
    </div>

    <div class="form-group col-sm-2 text-muted">
        Contacto Principal
    </div>
    <div class="form-group col-sm-2">
        {!! Form::select('CON_PRINCIPAL',['0'=>'NO','1'=>'SI'],null, ['class' => 'form-control']) !!}
    </div>
    <!-- Con Estado Field -->
    <div class="form-group col-sm-2 hidden">
        {!! Form::label('CON_ESTADO', 'Estado:') !!}
        {!! Form::select('CON_ESTADO',['0'=>'Activo','1'=>'Inactivo'],null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-8">
        {!! Form::submit('Agregar', ['class' => 'btn btn-success']) !!}
        <a href="{{ route('instituciones.index') }}" class="btn btn-danger pull-right">Salir</a>
    </div>
<div class="col-sm-12">
    <hr size="2">
</div>
    <!-- Submit Field -->
</form>


<table class="table">
    <tr>
        <th>#</th>
        <th>Nombres</th>
        <th>Cargo</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Obs</th>
        <th>Principal</th>
        <th>Estado</th>
        <th></th>
    </tr>
    <?php $c=1;?>
    @foreach($contactos as $con)
            <tr>
                <td>{{$c++}}</td>
            <td>{{ $con->CON_NOMBRES }}</td>
            <td>{{ $con->CON_CARGO }}</td>
            <td>{{ $con->CON_TELEFONO }}</td>
            <td>{{ $con->CON_EMAIL }}</td>
            <td>{{ $con->CON_OBS }}</td>
            <td>
                {{$con->CON_PRINCIPAL==1?'SI':'NO'}}
            </td>
            <td>
            @if($con->CON_ESTADO==0)
            {{'Activo'}}
            @else
            {{'Inactivo'}}
            @endif    
            </td>
                <td>
                    {!! Form::open(['route' => ['contactos.destroy', $con->CON_ID], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- <a href="{{ route('contactos.edit', [$con->CON_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> -->
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>

    @endforeach
</table>
