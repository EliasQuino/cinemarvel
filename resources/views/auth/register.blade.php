<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="/css/login.css"> <!-- Asegúrate de que este archivo CSS tenga el estilo deseado -->
</head>
<body>
    <div class="login-container">
        <div>
            <img src="/img/logo.png" alt="Logo" class="logo"> <!-- Añade el logo aquí -->
        </div>
        
        <h2>Crear Cuenta</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required autofocus autocomplete="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="lastname">Apellido</label>
                <input type="text" id="lastname" name="lastname" required autofocus autocomplete="lastname" value="{{ old('lastname') }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required autocomplete="username" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="form-group">
                    <label for="terms">
                        <input type="checkbox" name="terms" id="terms" required>
                        Acepto los <a href="{{ route('terms.show') }}" class="underline">Términos de Servicio</a> y la <a href="{{ route('policy.show') }}" class="underline">Política de Privacidad</a>
                    </label>
                </div>
            @endif

            <button type="submit">Registrarse</button>
        </form>
        <div class="links">
            <a href="{{ route('login') }}">¿Ya tienes una cuenta? Inicia sesión</a>
        </div>
    </div>
</body>
</html>
