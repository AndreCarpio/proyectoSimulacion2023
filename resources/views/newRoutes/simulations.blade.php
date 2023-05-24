@extends('templates.templateType1')

@section('title')
    Simulacion
@endsection

@section('estilos')
    <link rel="stylesheet" href='{{ asset('css/style-simulaciones.css') }}'>
@endsection


@section('contenidoPrincipal')
    <p class="titulo-seccion-simulaciones">LISTA DE SIMULACIONES</p>
    <div class="barra-opciones">
        <button type="button" class="btn btn-primary btn-crear-simulacion">Crear Simulacion</button>
    </div>
    <div class="contenedor-lista-simulaciones">
        <table class="table caption-top tabla-simulaciones">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha Creacion</th>
                    <th scope="col" style="text-align: center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $n = 0;
                @endphp
                @foreach ($simulaciones as $simulacion)
                    <tr class="fila-tabla-simulaciones">
                        <th class="celda-tabla-simulaciones" scope="row">
                            <p>{{ $n = $n + 1 }}</p>
                        </th>
                        <td class="celda-tabla-simulaciones celda-tabla-simulaciones-titulo">
                            <p>{{ $simulacion->title }}</p>
                        </td>
                        <td class="celda-tabla-simulaciones">
                            <p>{{ $simulacion->created_at }}</p>
                        </td>
                        <td>
                            <div class="seccion-btns">
                                <a href="{{ route('simulation.show', $simulacion->idSimulation) }}"
                                    class="btn btn-primary ">Ingresar</a>

                                <form action="{{ route('simulation.deleate') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="idSimulation" value={{ $simulacion->idSimulation }}>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('estas seguro de borrar?')"> Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection



@section('contenidoSecundario')
    <div class="contenedor-crear-simulacion oculto">
        <div class="card">
            <div class="card-body">
                <form class="formulario-crear-simulacion" class="row g-3" autocomplete="off" id="form-crear-simulacion">
                    @csrf

                    <label for="input-nombre-simulacion" class="form-label-crear-simulacion">Nombre de la
                        Simulacion</label>
                    <input type="text" class="form-control" id="input-nombre-simulacion" name="input-nombre-simulacion"
                        placeholder="Ingresa el nombre" spellcheck="false">
                    <span class="badge text-danger errors-nombre"></span>
                    <div class="btns-form-crear-simuacion">


                        <button type="text" id="btn-enviar" class="btn btn-primary">
                            <i class="fa fa-spinner fa-spin loader-btn-aceptar oculto"></i> Aceptar
                        </button>
                        <button type="text" id="btn-cancelar" class="btn btn-secondary"> Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src='{{ asset('js/script-simulations.js') }}'></script>
@endsection
