@extends('adminlte::page')

@section('title', 'showCV')

@section('content_header')
    <h1>DATOS DEL CLIENTE VIRTUAL</h1>
@stop

@section('content')

<div class="mb-3">
    <label for="name" class="form-label">Nombres </label>
    <p id="name" class="form-control-static">{{ $usuario->name }}</p>
</div>


<div class="mb-3">
    <label for="lastname" class="form-label">Apellidos</label>
    <p id="lastname" class="form-control-static">{{ $usuario->name }}</p>
</div>



<div class="mb-3">
    <label for="email" class="form-label">Correo Electronico</label>
    <p id="email" class="form-control-static">{{ $usuario->email }}</p>
</div>


<div class="mb-3">
    <label for="lastname" class="form-label">Apellidos</label>
    <p id="lastname" class="form-control-static">{{ $usuario->clien }}</p>
</div>



<div class="mb-3">
    <label for="email" class="form-label">Correo Electronico</label>
    <p id="email" class="form-control-static">{{ $usuario->email }}</p>
</div>


<a href="/clienteVirtual" class="btn btn-secondary" tabindex="7">Volver</a>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop
