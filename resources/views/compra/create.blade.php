@extends('adminlte::page')

@section('title', 'Crear Compra')

@section('content_header')
    <h1>Crear Nueva Compra</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Información de la Compra</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('compra.store') }}" method="POST">
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
                    <label for="proveedor">Proveedor</label>
                    <select name="proveedor_id" class="form-control" required>
                        @foreach($proveedores as $proveedor)
                            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <h4>Productos</h4>
                <div id="productos-container">
                    <div class="producto-item mb-3">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="producto">Producto</label>
                                <select name="productos[0][producto_id]" class="form-control" required>
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->Nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="productos[0][cantidad]" class="form-control" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="precio">Precio</label>
                                <input type="number" step="0.01" name="productos[0][precio]" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" class="form-control" required>
                </div>






                <button type="button" class="btn btn-secondary" id="add-producto-btn">Agregar Producto</button>
                <button type="submit" class="btn btn-primary">Crear Compra</button>
            </form>
        </div>
    </div>
@stop

@section('js')
<script>
    document.getElementById('add-producto-btn').addEventListener('click', function() {
        const container = document.getElementById('productos-container');
        const index = container.children.length;

        // Crear nuevo elemento para producto
        const productoItem = document.createElement('div');
        productoItem.classList.add('producto-item', 'mb-3');
        productoItem.innerHTML = `
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="producto">Producto</label>
                    <select name="productos[${index}][producto_id]" class="form-control" required>
                        @foreach($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->Nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="productos[${index}][cantidad]" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="precio">Precio</label>
                    <input type="number" step="0.01" name="productos[${index}][precio]" class="form-control" required>
                </div>
            </div>
        `;
        container.appendChild(productoItem);
    });
</script>
@stop
