<div class="table-responsive">
    <table class="table" id="instituciones-table">
        <thead>
            <tr>
        <th>Asesor</th>
        <th>Descripcion</th>
        <th>Provincia</th>
        <th>Distrito</th>
        <th>Zona</th>
        <th>Regimen</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Oferta</th>
        <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($instituciones as $instituciones)
            <tr>
            <td>{{ $instituciones->name }}</td>
            <td>{{ $instituciones->INS_DESCRIPCION }}</td>
            <td>{{ $instituciones->INS_PROVINCIA }}</td>
            <td>{{ $instituciones->INS_DISTRITO }}</td>
            <td>{{ $instituciones->INS_ZONA }}</td>
            <td>
                @if($instituciones->INS_REGIMEN==1)
                {{'Costa'}}
                @else
                {{'Sierra'}}
                @endif                
            </td>
            <td>{{ $instituciones->INS_TELEFONO }}</td>
            <td>{{ $instituciones->INS_EMAIL }}</td>
            <td>
                @if($instituciones->INS_TIPO==0)
                {!!'Pública'!!}
                @elseif($instituciones->INS_TIPO==1)
                {{'Privada'}}
                @elseif($instituciones->INS_TIPO==2)
                {{'Municipal'}}
                @endif
            </td>
            <td>{{ $instituciones->INS_OFERTA }}</td>
            <td>
                @if($instituciones->INS_ESTADO==0)
                {{'Activa'}}
                @else
                {{'Inaciva'}}
                @endif

            </td>
                <td>
                    {!! Form::open(['route' => ['instituciones.destroy', $instituciones->INS_ID], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('instituciones.show', [$instituciones->INS_ID]) }}" class='btn btn-default btn-xs' title="Contactos"><i class="glyphicon glyphicon-user"></i></a>
                        <a href="{{ route('instituciones.edit', [$instituciones->INS_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-pencil"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
