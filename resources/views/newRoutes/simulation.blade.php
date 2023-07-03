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
                <option value="0" selected>Informacion 1</option>
                <option value="1">Informacion 2</option>
                <option value="2">Informacion 3</option>
                <option value="3">Presupuesto</option>
                <option value="4">Presupuesto Total</option>
                <option value="5">Costos</option>
                <option value="6">Flujo</option>
            </select>

            <button class="btn-guardar-simulacion">
                <i style="margin-right: 5px;" class="fa fa-spinner fa-spin loader-btn-guardar-simulacion oculto"></i>
                Guardar
            </button>
            <button class="btn-exportar-simulacion" onclick="exportarPDF()">Exportar</button>
        </div>


        <p class="titulo-simulacion">{{ $simulacion[0]['title'] }}</p>


        <form class="formulario-guardar-simulacion" method="post">
            @csrf
            <div class="seccion seccion-informacion">
                @include('templates.simulationForms.informacion')
            </div>

            <div class="seccion seccion-informacion2 oculto">
                @include('templates.simulationForms.informacion2')
            </div>

            <div class="seccion seccion-informacion3 oculto">
                @include('templates.simulationForms.informacion3')
            </div>

            <div class="seccion seccion-presupuesto oculto">
                @include('templates.simulationForms.presupuesto')
            </div>

            <div class="seccion seccion-presupuesto-total oculto">
                @include('templates.simulationForms.presupuestoTotal')
            </div>

            <div class="seccion seccion-costos oculto">
                @include('templates.simulationForms.costos')
            </div>

            <div class="seccion seccion-flujo oculto">
                @include('templates.simulationForms.flujo')
            </div>
        </form>


    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>
    
    <script src='{{ asset('js/script-simulacion.js') }}'></script>
    <script src='{{ asset('js/script-guardar-simulacion.js') }}'></script>
@endsection
