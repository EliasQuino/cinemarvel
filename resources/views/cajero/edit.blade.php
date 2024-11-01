@extends('adminlte::page')

@section('title', 'Editar Cajero')

@section('content_header')
    <h1>Editar Cajero</h1>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cajero.update', $usuario->cajero->id) }}" method="POST">
        @csrf
        @method('PUT')  <!-- Asegúrate de incluir esto -->
        <input type="hidden" name="user_id" value="{{ $usuario->id }}"> <!-- Agregar el ID del usuario -->



        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $usuario->name }}" required>
        </div>

        <div class="form-group">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $usuario->lastname }}" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $usuario->email }}" required>
        </div>

        <div class="form-group">
            <label for="HoraEntrada">Hora de Entrada</label>
            <input type="time" name="HoraEntrada" id="HoraEntrada" class="form-control" value="{{ $usuario->cajero->HoraEntrada ?? '' }}" required>
       {{--    <input type="time" name="HoraEntrada" id="HoraEntrada" class="form-control" value="{{ $usuario->cajero->HoraEntrada ?? '' }}" required>--}}

        </div>

        <div class="form-group">
            <label for="HoraSalida">Hora de Salida</label>
            <input type="time" name="HoraSalida" id="HoraSalida" class="form-control" value="{{ $usuario->cajero->HoraSalida ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="Idpuesto">Puesto</label>
            <select name="Idpuesto" id="Idpuesto" class="form-control" required>
                @foreach ($puestos as $puesto)
                    <option value="{{ $puesto->id }}" {{ (optional($usuario->cajero)->Idpuesto == $puesto->id) ? 'selected' : '' }}>
                        {{ $puesto->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Idpuesto">Rol</label>
            <select name="Idpuesto" id="Idpuesto" class="form-control" required>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
@stop
