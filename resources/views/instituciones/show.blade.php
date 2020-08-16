@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Contactos de {{$instituciones->INS_DESCRIPCION}}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('instituciones.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
