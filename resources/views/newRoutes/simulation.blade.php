@extends('templates.templateType1')

@section('titulo')
    Simulacion
@endsection

@section('estilos')
    <link rel="stylesheet" href='{{ asset('css/style-simulacion.css') }}'>
@endsection

@section('contenidoPrincipal')
    <div class="contenedor-formulario-simulacion">

        <div class="pestaniaSimulacion">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option value="0" selected>Informacion</option>
                <option value="1">Presupuesto</option>
                <option value="2">Presupuesto Total</option>
                <option value="3">Costos</option>
                <option value="4">Flujo</option>
            </select>
        </div>


        <p class="titulo-simulacion">{{ ($simulacion[0])['title'] }}</p>

        <div class="seccion-informacion">
            @include('templates.simulationForms.informacion')
        </div>

        <div class="seccion-presupuesto oculto">
            @include('templates.simulationForms.presupuesto')
        </div>

        <div class="seccion-presupuesto-total oculto">
            @include('templates.simulationForms.presupuestoTotal')
        </div>

        <div class="seccion-costos oculto">
            @include('templates.simulationForms.costos')
        </div>

        <div class="seccion-flujo oculto">
            @include('templates.simulationForms.flujo')
        </div>



    </div>
@endsection


@section('scripts')
    <script src='{{ asset('js/script-simulacion.js') }}' ></script>
@endsection
