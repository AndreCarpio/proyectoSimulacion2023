@extends('templates.templateType1')

@section('title')
    Simulacion
@endsection

@section('estilos')
<link rel="stylesheet" href='{{ asset('css/style-simulacion.css') }}'>
@endsection

@section('contenidoPrincipal')

   <div class="contenedor-formulario-simulacion">
    <p class="titulo-simulacion">Titulo de la simulacion ID: {{$idSimulacion}}</p>

   </div>

@endsection


@section('scripts')
<script src='{{ asset('js/script-simulacion.js') }}'></script>
@endsection