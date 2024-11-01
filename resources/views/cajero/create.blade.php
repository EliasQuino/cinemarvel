@extends('adminlte::page')

@section('title', 'Crear Cajero')

@section('content_header')
    <h1>Crear Nuevo Cajero</h1>
@stop

@section('content')
    <form action="{{ route('cajero.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="HoraEntrada">Hora de Entrada</label>
            <input type="time" name="HoraEntrada" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="HoraSalida">Hora de Salida</label>
            <input type="time" name="HoraSalida" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Idpuesto">Puesto</label>
            <select name="Idpuesto" class="form-control" required>
                @foreach($puestos as $puesto)
                    <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
                @endforeach
            </select>
        </div>

        
        
        <a href="/cajero" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary">Crear Cajero</button>
    </form>
@stop
