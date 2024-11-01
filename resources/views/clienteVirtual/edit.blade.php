@extends('adminlte::page')

@section('title', 'editCV')

@section('content_header')
    <h1>EDITAR DATOS DEL CLIENTE VIRTUAL</h1>
@stop

@section('content')


<form action="/clienteVirtual/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nombre Completo</label>
        <input id="name" name="name" type="text" class="form-control" value="{{$usuario->name}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input id="email" name="email" type="email" class="form-control" value="{{$usuario->email}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" value="" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="horaEntrada" class="form-label">Hora de Entrada</label>
        <input id="horaEntrada" name="horaEntrada" type="time" class="form-control" value="{{$usuario->horaEntrada}}" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="horaSalida" class="form-label">Hora de Salida</label>
        <input id="horaSalida" name="horaSalida" type="time" class="form-control" value="{{$usuario->horaSalida}}" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="salario" class="form-label">Salario</label>
        <input id="salario" name="salario" type="number" step="any" class="form-control" value="{{$usuario->salario}}" tabindex="6">
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
