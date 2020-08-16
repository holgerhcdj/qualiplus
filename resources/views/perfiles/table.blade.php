<div class="table-responsive">
    <table class="table" id="perfiles-table">
        <thead>
            <tr>
                <th>Descripcion</th>
        <th>Codigo</th>
        <th>Observaciones</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($perfiles as $perfiles)
            <tr>
                <td>{{ $perfiles->PRF_DESCRIPCION }}</td>
            <td>{{ $perfiles->PRF_CODIGO }}</td>
            <td>{{ $perfiles->PRF_OBS }}</td>
                <td>
                    {!! Form::open(['route' => ['perfiles.destroy', $perfiles->PRF_ID], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('perfiles.edit', [$perfiles->PRF_ID]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-pencil text-primary"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
