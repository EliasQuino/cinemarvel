@extends('adminlte::page')

@section('title', 'Crear Producto')

@section('content_header')
    <h1>CREAR NUEVO PRODUCTO</h1>
@stop

@section('content')
    <form action="{{ route('producto.store') }}" method="POST">
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
            <input type="text" name="Nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Fecha_Vencimiento">Fecha de vencimiento</label>
            <input type="date" name="Fecha_Vencimiento" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="Precio">Precio de venta</label>
            <input type="number" name="Precio" class="form-control" step="0.01" required>
        </div>


        <div class="form-group">
            <label for="IdCategoria">Categoría</label>
            <select name="IdCategoria" class="form-control" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">cantidad</label>
            <input type="cantidad" name="cantidad" id="cantidad" class="form-control"  step="0.01" required>
        </div>





        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
@stop
