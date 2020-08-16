<?php
date_default_timezone_set('America/Guayaquil');
$fecha=date('Y-m-d');
$time=date('H:i');
//if(!empty($comunicaciones)){
    // $fecha=$comunicaciones->COM_FECHA;
    // $time=$comunicaciones->COM_HORA;
//}

?>
 <div class="row">
     <div class="col-sm-6">
  <!-- FORMULARIO        -->
   <form action="{{route('comunicaciones.store')}}" method="POST">
    {{csrf_field()}}
    <div class="form-group col-sm-3" hidden>
        {!! Form::label('CON_ID', 'Id:') !!}
        {!! Form::number('CON_ID',$contactos->CON_ID , ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('COM_FECHA', 'Fecha:') !!}
        {!! Form::text('COM_FECHA',$fecha , ['class' => 'form-control','id'=>'COM_FECHA']) !!}
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
    <div class="form-group col-sm-6">
        {!! Form::label('COM_HORA', 'Hora:') !!}
        {!! Form::text('COM_HORA', $time, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::text('COM_MOTIVO', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'placeholder'=>'Motivo de la llamada']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::textarea('COM_OBS', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'rows'=>2,'placeholder'=>'Observaciones luego de la llamada']) !!}
    </div>

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contactos.index') }}" class="btn btn-danger pull-right">Salir</a>
</div>
</form>

     </div>
     <div class="col-sm-6">
        <!-- ///LISTA  -->
    <table class="table" id="comunicaciones-table">
        <thead>
       <tr>
        <th>#</th>
        <th>Fecha</th>
        <th>Motivo</th>
        <th>Observaciones</th>
                <th colspan="3">...</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1; ?>
        @foreach($comunicaciones as $comunicaciones)
            <tr>
                <td>{{$x++}}</td>
            <td>{{ $comunicaciones->COM_FECHA.' '.$comunicaciones->COM_HORA }}</td>
            <td>{{ $comunicaciones->COM_MOTIVO }}</td>
            <td>{{ $comunicaciones->COM_OBS }}</td>
                <td>
                    {!! Form::open(['route' => ['comunicaciones.destroy', $comunicaciones->COM_ID], 'method' => 'delete']) !!}
                    <div class='btn-group' title="Eliminar item">
<!--                         <a href="{{ route('comunicaciones.edit', [$comunicaciones->COM_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> -->
                        {!! Form::button('<i class="fa fa-close"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
     </div>
 </div>
