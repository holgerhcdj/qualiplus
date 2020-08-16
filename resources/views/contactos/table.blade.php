<div class="table-responsive">
    <table class="table" id="contactos-table">
        <thead>
            <tr>
                <th>#</th>
       <th>Institución</th>
        <th>Nombres del contacto</th>
        <th>Cargo</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Principal</th>
        <th>Estado</th>
        <th colspan="3">Action</th>
      </tr>
        </thead>
        <tbody>
            <?php $c=1;?>
        @foreach($contactos as $contactos)
            <tr>
                <td>{{$c++}}</td>
            <td>{{ $contactos->INS_DESCRIPCION }}</td>
            <td>{{ $contactos->CON_NOMBRES }}</td>
            <td>{{ $contactos->CON_CARGO }}</td>
            <td>{{ $contactos->CON_TELEFONO }}</td>
            <td>{{ $contactos->CON_EMAIL }}</td>
            <td>
                {{ $contactos->CON_PRINCIPAL==1?'SI':'NO'   }}
            </td>
            <td>{{ $contactos->CON_ESTADO==0?'Activo':'Inactivo'   }} </td>

                <td>
                    {!! Form::open(['route' => ['contactos.destroy', $contactos->CON_ID], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                   <a href="{{ route('contactos.show', [$contactos->CON_ID]) }}" class='btn btn-default btn-xs' title="Comunicaciones"><i class="fa fa-phone text-success"></i></a>
                        <a href="{{ route('contactos.edit', [$contactos->CON_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-pencil text-primary"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
