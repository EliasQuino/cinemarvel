@extends('adminlte::page')

@section('title', 'Detalles de Compra')

@section('content_header')
    <h1>Detalles de Compra</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Compra #{{ $compra->id }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Proveedor:</strong> {{ $compra->proveedor->nombre }}</p>
            <p><strong>Fecha:</strong> {{ $compra->fecha }}</p>
            <p><strong>Precio Total:</strong> {{ number_format($compra->precio_total, 2) }}</p>

            <h4>Productos:</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($compra->productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->pivot->cantidad }}</td>
                            <td>{{ number_format($producto->pivot->precio, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
