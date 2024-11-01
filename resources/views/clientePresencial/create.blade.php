@extends('adminlte::page')

@section('title', 'CrearCP')

@section('content_header')
    <h1>CREAR NUEVO CLIENTE PRESENVIAL</h1>
@stop

@section('content')

<form action="/clientePresencial" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre Completo</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="ci" class="form-label">Carnet de Identidad</label>
        <input id="ci" name="ci" type="text" class="form-control" tabindex="2">
    </div>

    <div class="mb-3">
        <label for="nit" class="form-label">Numero de NIT</label>
        <input id="nit" name="nit" type="text" class="form-control" tabindex="2">
    </div>


    <a href="/clientePresencial" class="btn btn-secondary" tabindex="7">Cancelar</a>
    
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop
