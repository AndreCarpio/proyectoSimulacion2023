@extends('templates.templateType1')

@section('titulo')
    Simulacion
@endsection

@section('estilos')
    <link rel="stylesheet" href='{{ asset('css/style-simulacion.css') }}'>
@endsection

@section('contenidoPrincipal')
    <div class="contenedor-formulario-simulacion">
        <p class="titulo-simulacion">Titulo de la simulacion ID: {{ $idSimulacion }}</p>

        @include('templates.simulationForms.form1')
        @include('templates.simulationForms.form2')
        @include('templates.simulationForms.form3')
        @include('templates.simulationForms.form4')
        @include('templates.simulationForms.form5')
        
        
        
    </div>
@endsection


@section('scripts')
    <script src='{{ asset('js/script-simulacion.js') }}'></script>
@endsection
