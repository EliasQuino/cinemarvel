@extends('adminlte::page')

@section('title', 'editCV')

@section('content_header')
    <h1>EDITAR DATOS DEL CLIENTE VIRTUAL</h1>
@stop

@section('content')


<form action="/pelicula/{{$pelicula->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="Nombre"" class="form-label">Nombre Completo</label>
        <input id="Nombre"" name="Nombre" type="text" class="form-control" value="{{$pelicula->Nombre}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="Clasificacion" class="form-label">Clacificacion</label>
        <input id="Clasificacion" name="Clasificacion" type="text" class="form-control" value="{{$pelicula->Clasificacion}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="Duracion" class="form-label">Duracion</label>
        <input id="Duracion" name="Duracion" type="time" class="form-control" value="{{$pelicula->Duracion}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="Idgenero" class="form-label">generos</label>
        <input id="Idgenero" name="Idgenero" type="text" class="form-control" value="{{$pelicula->Idgenero}}" tabindex="2">
    </div>

    <div class="mb-3">
        <label for="DireccionPelicula" class="fa-solid ">imagen</label>
        <input id="DireccionPelicula" name="DireccionPelicula" type="file" class="form-control" value="{{$pelicula->DireccionPelicula}}" tabindex="2">
    </div>







    
    
    <div class="m-3">
    <a href="/pelicula" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</div>
    
</form>@stop

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@stop

@section('js')
@stop
