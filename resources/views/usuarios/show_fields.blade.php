<form action="{{route('usuariosPerfiles.store')}}" method="POST">
    {{csrf_field()}}
    <div class="form-group col-sm-6">
    {!! Form::select('PRF_ID', $perfiles,null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    {!! Form::hidden('USU_ID', Auth::user()->id, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::submit('Agregar', ['class' => 'btn btn-success']) !!}
    </div>
</form>
<br>
<table class="table">
    <tr>
        <th>#</th>
        <th>Perfil</th>
        <th>Descripción</th>
        <th></th>
    </tr>
    @if(empty($asg_perfiles))
    <tr>
        <td colspan="4"><span class="alert alert-warning" style="padding:5px " role="alert">No existen perfiles asignados</span></td>
    </tr>
    @endif
    <?php $x=1;?>
    @foreach($asg_perfiles as $ap)
    <tr>
        <td>{{$x++}}</td>
        <td>{{$ap->PRF_DESCRIPCION}}</td>
        <td>{{$ap->PRF_OBS}}</td>
        <td>
            {!! Form::open(['route' => ['usuariosPerfiles.destroy', $ap->UPF_ID], 'method' => 'delete']) !!}
            <div class='btn-group'>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>



