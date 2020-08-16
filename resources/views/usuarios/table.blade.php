<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
        <tr>
            <th>Usuario</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuarios)
            <tr>
            <td>{{ $usuarios->name }}</td>
            <td>{{ $usuarios->email }}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuarios->id]) }}" class='btn btn-default btn-xs' title="Asignar Perfiles"><i class="fa fa-cogs"></i></a>
                        <a href="{{ route('usuarios.edit', [$usuarios->id]) }}" class='btn btn-default btn-xs' title="Editar"><i class="glyphicon glyphicon-pencil text-primary"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
