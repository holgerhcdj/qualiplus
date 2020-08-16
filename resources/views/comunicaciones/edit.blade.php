@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comunicaciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($comunicaciones, ['route' => ['comunicaciones.update', $comunicaciones->COM_ID], 'method' => 'patch']) !!}

                        @include('comunicaciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection