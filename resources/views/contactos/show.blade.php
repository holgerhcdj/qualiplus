@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comunicaciones con: {{$contactos->CON_NOMBRES}}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('contactos.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection