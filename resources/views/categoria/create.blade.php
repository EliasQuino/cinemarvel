@extends('adminlte::page')

@section('title', 'CrearCP')

@section('content_header')
    <h1>CREAR NUEVA CATEGORIA</h1>
@stop

@section('content')

<form action="/categoria" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre </label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>


    <a href="/categoria" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop
