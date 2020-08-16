@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comunicaciones
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('comunicaciones.show_fields')
                    <br>
                    <a href="{{ route('comunicaciones.index') }}" class="btn btn-warning">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
