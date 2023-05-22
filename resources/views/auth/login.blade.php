<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>

    <link rel="stylesheet" type="text/css" href={{ asset('css/style-sesion.css') }}>
    <link rel="stylesheet" href={{ asset('css/style-particles.css') }}>
</head>

<body>
    <div id="particles-js">


    </div>

    <div class="contenedor-sesion">
        <x-jet-authentication-card>
            <x-slot name="logo">
            </x-slot>
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <a href="{{route("welcome")}}" class="logo">UMSS</a>
                <h2>Iniciar sesión</h2>
                <x-jet-validation-errors class="mb-4 mensaje-error" />

                <input class="input-correo" type="text" placeholder="Correo Electronico" id="email"
                    type="email" name="email" :value="old('email')" required autofocus>
                <input class="input-password" type="password" placeholder="Contraseña" id="password" type="password"
                    name="password" required autocomplete="current-password">


                <div class="opcion-remenber">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <x-jet-button class="ml-4">
                    {{ __('Iniciar sesión') }}
                </x-jet-button>
            </form>
        </x-jet-authentication-card>
        
        <div class="register-link">
            ¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a>
        </div>
    </div>



    <script src={{ asset('js/particles.js') }}></script>
    <script src={{ asset('js/scrip-particles.js') }}></script>
</body>
</body>

</html>
