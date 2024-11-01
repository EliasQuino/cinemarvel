@extends('adminlte::page')

@section('title', 'editProve')

@section('content_header')
    <h1>EDITAR DATOS DEL PROVEEDOR</h1>
@stop

@section('content')

<form action="/proveedor/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre Completo</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$usuario->nombre}}" tabindex="1">
    </div>


    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" value="{{$usuario->telefono}}" tabindex="1">
    </div>





    <div class="mb-3">
        <label for="email" class="form-label">Correo Electronico</label>
        <input id="email" name="email" type="email" class="form-control" value="{{$usuario->email}}" tabindex="2">
    </div>

    <a href="/clienteVirtual" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
</form>@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop
