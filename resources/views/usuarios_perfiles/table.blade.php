<div class="table-responsive">
    <table class="table" id="usuariosPerfiles-table">
        <thead>
            <tr>
                <th>Usu Id</th>
        <th>Prf Id</th>
        <th>Upf Estado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuariosPerfiles as $usuariosPerfiles)
            <tr>
                <td>{{ $usuariosPerfiles->USU_ID }}</td>
            <td>{{ $usuariosPerfiles->PRF_ID }}</td>
            <td>{{ $usuariosPerfiles->UPF_ESTADO }}</td>
                <td>
                    {!! Form::open(['route' => ['usuariosPerfiles.destroy', $usuariosPerfiles->UPF_ID], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuariosPerfiles.show', [$usuariosPerfiles->UPF_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('usuariosPerfiles.edit', [$usuariosPerfiles->UPF_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
