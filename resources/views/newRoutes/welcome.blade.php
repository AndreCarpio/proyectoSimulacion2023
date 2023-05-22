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

    <link rel="stylesheet" href="{{ asset('css/style-index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-particles.css') }}">

    <title>Simulacion</title>
</head>

<body>

    <div id="particles-js">

    </div>

    <div class="contenerdorInicio">
        <a href="{{route('welcome')}}" class="logo">UMSS</a>
        <p class="titulo"> SIMULACION - PLAN DE NEGOCIOS </p>
        <p class="info">Herramienta que ayuda a los emprendedores y empresarios a evaluar la viabilidad, tomar
            decisiones estratégicas, identificar riesgos y oportunidades, optimizar recursos y presentar el plan a
            inversores y socios.</p>
        <div class="btns">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a class="btn btn-sregistrarse" href="{{ route('simulations') }}">
                            Volver
                        </a>
                    @else
                        <a class="btn btn-iniciar-sision" href="{{ route('login') }}">
                            Iniciar Sesion
                        </a>
                        <a class="btn btn-sregistrarse" href="{{ route('register') }}">
                            Resgistarse
                        </a>
                       
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <script src={{ asset('js/particles.js') }}></script>
    <script src={{ asset('js/scrip-particles.js') }}></script>

</body>

</html>
