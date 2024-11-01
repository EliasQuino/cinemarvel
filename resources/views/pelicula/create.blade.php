@extends('adminlte::page')

@section('title', 'Crear Pelicula')

@section('content_header')
    <h1>CREAR NUEVA PELICULA</h1>
@stop


@section('content')

<form action="/pelicula" method="POST">
    @csrf
    <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre de Pelicula</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="Clasificacion" class="form-label">Clasificacion</label>
        <input id="Clasificacion" name="Clasificacion" type="text" class="form-control" tabindex="2">
    </div>


    <div class="mb-3">
        <label for="Duracion" class="form-label">Duracion de la pelicula</label>
        <input id="Duracion" name="Duracion" type="time" class="form-control" tabindex="3">
    </div>


    <div class="form-group">
        <label for="Idgenero">Genero</label>
        <select name="Idgenero" class="form-control" required>
            @foreach($generos as $genero)
                <option value="{{ $genero->id }}">{{ $genero->Nombre }}</option>
            @endforeach
        </select>
    </div>


    <a href="pelicula" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop
