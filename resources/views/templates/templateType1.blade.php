<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=CHARSET" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=New+Rocker&family=Roboto+Mono:wght@100&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href='{{ asset('css/style-particles.css') }}'>

    @yield('estilos')

    <title>@yield('titulo')</title>
    <link rel='stylesheet' href='{{ asset('css/style-nav.css') }}'>

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
    
    <main class="contenido-main">
        @yield('contenidoPrincipal')
    </main>

    @yield('contenidoSecundario')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    

   
    <script src='{{ asset('js/script-nav.js') }}'></script>
    @yield('scripts')


</body>

</html>
