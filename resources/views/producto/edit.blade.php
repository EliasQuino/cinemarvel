@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>EDITAR PRODUCTO</h1>
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

    <form action="{{ route('producto.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Nombre">Nombre del producto</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ $producto->Nombre }}" required>
        </div>

        <div class="form-group">
            <label for="Fecha_Vencimiento">Fecha de Vencimiento</label>
            <input type="date" name="Fecha_Vencimiento" id="Fecha_Vencimiento" class="form-control" value="{{ $producto->Fecha_Vencimiento }}" required>
        </div>

        <div class="form-group">
            <label for="Precio">Precio de venta</label>
            <input type="number" name="Precio" id="Precio" class="form-control" value="{{ $producto->Precio }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="IdCategoria">Categoria</label>
            <select name="IdCategoria" id="IdCategoria" class="form-control" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ ($producto->IdCategoria == $categoria->id) ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">cantidad</label>
            <input type="cantidad" name="cantidad" id="cantidad" class="form-control" value="{{ $producto->cantidad }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
