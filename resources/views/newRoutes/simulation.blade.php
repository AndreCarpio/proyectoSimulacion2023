@extends('templates.templateType1')

@section('title')
    Simulacion
@endsection

@section('estilos')
    <link rel="stylesheet" href='{{ asset('css/style-simulacion.css') }}'>
@endsection

@section('contenidoPrincipal')
    <div class="contenedor-formulario-simulacion">
        <p class="titulo-simulacion">Titulo de la simulacion ID: {{ $idSimulacion }}</p>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nombres y Apellidos (deudor/a):</label>
            <input type="text" class="form-control" id="formGroupExampleInput" >
        </div>

        <div class="row g-3 mb-3">
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Documento de Identidad No:</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Extensión</label>
                <input type="text" class="form-control"  aria-label="Last name">
            </div>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Edad:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" >
        </div>
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Estado civil:</label>
                <input type="text" class="form-control" aria-label="First name">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Teléfono:</label>
                <input type="text" class="form-control"  aria-label="Last name">
            </div>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Dirección Domicilio (deudor):</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" >
        </div>



    </div>
@endsection


@section('scripts')
    <script src='{{ asset('js/script-simulacion.js') }}'></script>
@endsection
