<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesión</title>


    <link rel="stylesheet" type="text/css" href={{ asset('css/style-registro.css') }}>
    <link rel="stylesheet" href={{ asset('css/style-particles.css') }}>
</head>

<body>
    <div id="particles-js">

    </div>
    <div class="contenedor-sesion">

        <x-jet-authentication-card>
            <x-slot name="logo">

            </x-slot>

           

            <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf

                <a href="{{route('welcome')}}" class="logo">UMSS</a>
                <h2>Crear Cuenta</h2>
                <x-jet-validation-errors class="mb-4 mensaje-error" />
                <input id="name" class="input-nombre" type="text" placeholder="Nombre Completo"
                    name="name" :value="old('name')" required autofocus autocomplete="name">
                <input id="email" class="input-correo" placeholder="Correo Electronico" type="email"
                    name="email" :value="old('email')" required>
                <input id="password" class="input-password" type="password" placeholder="Contraseña" type="password"
                    name="password" required autocomplete="new-password">
                <input id="password_confirmation" class="input-password" placeholder="Confirmar Contraseña"
                    type="password" name="password_confirmation" required autocomplete="new-password">
             
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

              
                    <x-jet-button class="ml-4">
                        {{ __('Registrarse') }}
                    </x-jet-button>
            </form>
        </x-jet-authentication-card>
        <div class="register-link">
            ¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar Sesion</a>
        </div>

    </div>
    

    <script src={{ asset('js/particles.js') }}></script>
    <script src={{ asset('js/scrip-particles.js') }}></script>
</body>
</body>

</html>
