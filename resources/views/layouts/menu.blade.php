<li class="{{ Request::is('perfiles*') ? 'active' : '' }}">
    <a href="{{ route('perfiles.index') }}"><i class="fa fa-user-secret text-danger"></i><span>Perfiles</span></a>
</li>

<li class="{{ Request::is('instituciones*') ? 'active' : '' }}">
    <a href="{{ route('instituciones.index') }}"><i class="fa fa-university text-danger"></i><span>Instituciones</span></a>
</li>

<li class="{{ Request::is('contactos*') ? 'active' : '' }}">
    <a href="{{ route('contactos.index') }}"><i class="fa fa-user text-danger"></i><span>Contactos</span></a>
</li>

<li class="{{ Request::is('comunicaciones*') ? 'active' : '' }}">
    <a href="{{ route('comunicaciones.index') }}"><i class="fa fa-comments-o text-danger"></i><span>Comunicaciones</span></a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{{ route('usuarios.index') }}"><i class="fa fa-user-plus text-danger"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('reportes*') ? 'active' : '' }}">
    <a href="{{ route('reportes') }}"><i class="fa fa-file-pdf-o text-danger"></i><span>Reportes Generales</span></a>
</li>
