<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=New+Rocker&family=Roboto+Mono:wght@100&display=swap"
        rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="https://www.umss.edu.bo/wp-content/uploads/2021/07/cropped-Logo7-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet' href='{{ asset('css/style-nav.css') }}'>
    <link rel="stylesheet" href='{{ asset('css/style-particles.css') }}'>
    <link rel="stylesheet" href='{{ asset('css/style-simulaciones.css') }}'>

    <title>Simulacion</title>
</head>

<body>


    <header>
        <div class="contenedor-navegacion">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto" href="{{ route('welcome') }}">UMSS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item   text-center">
                                <a class="nav-link  active" href="{{ route('simulations') }}">Simulaciones</a>
                            </li>


                            <li class='nav-item  text-center nav-item-usuario'>
                                <div class='info-usuario-menu '>
                                    <p class='nav-link  nombre-usuario-menu '>{{ $usuario->name }}</p>
                                    <div class='imagen-usuario'>
                                        <p class='texto-imagen-usuario'>{{ substr($usuario->name, 0, 1) }}</p>
                                    </div>
                                </div>
                                <div class='opciones-usuario oculto'>
                                    <div class='item-opciones-usuario item-opciones-usuario1'>
                                        <a href='{{ route('profile.show') }}'>Configuracion de Cuenta</a>
                                    </div>

                                    <form class='item-opciones-usuario' method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     this.closest('form').submit();">
                                            Cerrar Sesion
                                        </x-jet-responsive-nav-link>
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="particles-js">

    </div>

    <main class="contenido-main">


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
                                    <button href="#" class="btn btn-primary">Ingresar</button>
                                   
                                    <form action="{{route('simulation.deleate')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="idSimulation" value={{$simulacion->idSimulation}}>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('estas seguro de borrar?')"> Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>

        </div>


    </main>

    <div class="contenedor-crear-simulacion oculto">
        <div class="card">
            <div class="card-body">
                <form class="formulario-crear-simulacion" class="row g-3" autocomplete="off" id="form-crear-simulacion">
                    @csrf

                    <label for="input-nombre-simulacion" class="form-label-crear-simulacion">Nombre de la
                        Simulacion</label>
                    <input type="text" class="form-control" id="input-nombre-simulacion"
                        name="input-nombre-simulacion" placeholder="Ingresa el nombre">
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





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src='{{ asset('js/particles.js') }}'></script>
    <script src='{{ asset('js/scrip-particles.js') }}'></script>
    <script src='{{ asset('js/script-nav.js') }}'></script>
    <script src='{{ asset('js/script-simulations.js') }}'></script>




</body>

</html>
