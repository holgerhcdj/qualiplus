@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reportes
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">

                    <div class="card bg-info col-sm-6" style="width: 18rem;border:solid 1px #ccc; padding:10px;border-radius:5px;box-shadow:5px 5px 8px #ccc    ">
                      <div class="card-body">
                        <h5 class="card-title bg-primary text-center" style="padding:5px;border-radius:3px;opacity:0.8  ">
                            <i class="fa fa-university"></i>
                           Instituciones
                        </h5>
                        <p class="card-text">Detalle de todas las Instuciones registradas en el sistema</p>
                        <a href="{{url('/institutes')}}" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Reporte</a>
                    </div>
                    </div>

                    <div class="card bg-info col-sm-6" style="width:18rem;border:solid 1px #ccc; padding:10px;border-radius:5px;box-shadow:5px 5px 8px #ccc; margin-left:5px;     ">
                      <div class="card-body">
                        <h5 class="card-title bg-primary text-center" style="padding:5px;border-radius:3px;opacity:0.8  ">
                           <i class="fa fa-user"></i>
                           Contactos
                       </h5>
                        <p class="card-text">Todos los datos de los contactos registrados en el sistema</p>
                        <a href="{{url('/contacts')}}" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Reporte</a>
                    </div>
                    </div>

                    <div class="card bg-info col-sm-6" style="width:18rem;border:solid 1px #ccc; padding:10px;border-radius:5px;box-shadow:5px 5px 8px #ccc; margin-left:5px;     ">
                      <div class="card-body">
                        <h5 class="card-title bg-primary text-center" style="padding:5px;border-radius:3px;opacity:0.8  ">
                           <i class="fa fa-user"></i>
                           Comunicaciones
                       </h5>
                        <p class="card-text">Comunicaciones realizadas con los contactos</p>
                        <a href="{{url('/comunications')}}" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Reporte</a>
                    </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
