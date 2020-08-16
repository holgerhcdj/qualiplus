<div class="table-responsive">
    <table class="table" id="comunicaciones-table">
        <thead>
            <tr>
        <th>#</th>
        <th>Institución</th>
        <th>Contacto</th>
        <th>Motivo</th>
        <th>Fecha</th>
        <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1?>
        @foreach($comunicaciones as $comunicaciones)
            <tr>
                <td>{{$x++}}</td>
            <td>{{ $comunicaciones->INS_DESCRIPCION }}</td>
            <td>{{ $comunicaciones->CON_NOMBRES.' / '.$comunicaciones->CON_CARGO }}</td>
            <td>{{ $comunicaciones->COM_MOTIVO }}</td>
            <td>{{ $comunicaciones->COM_FECHA.' '.$comunicaciones->COM_HORA }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('comunicaciones.show', [$comunicaciones->COM_ID]) }}" class='btn btn-default btn-xs'><i class="fa fa-comments-o"></i></a>
                        <a href="{{ route('comunicaciones.edit', [$comunicaciones->COM_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-pencil text-primary"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
