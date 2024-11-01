<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="login-container">
        <div>
            <img src="/img/logo.png" alt="Logo" class="logo"> <!-- Añade el logo aquí -->
        </div>
        
        <h2>Iniciar Sesión</h2>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
        
            <div class="form-group">
                <label for="email" value="{{ __('Email') }}">correo electronico</label>
                <input type="email" id="email" name="email" required   class="block mt-1 w-full"  name="email" :value="old('email')" required autofocus autocomplete="username">
                
            </div>
        
            <div class="form-group">
                <label for="password" value="{{ __('Password') }}" >Contraseña</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"  required>
                
                
            </div>
        
            <div >

                


                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    Recordarme
                </label>
            </div>
        
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
        
                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <div class="links">
            <a href="#">Olvidaste tu contraseña?</a>
            <a href="#">¿No tienes una cuenta? Regístrate</a>
        </div>
    </div>
</body>
</html>


