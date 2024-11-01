@extends('adminlte::page')

@section('title', 'Lista de Compras')

@section('content_header')
    <h1>LISTA DE COMPRAS</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('compra.create') }}" class="btn btn-primary">NUEVA COMPRA</a>

    <table id="compras" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Proveedor</th>
            {{--   <th>Fecha</th>--}}
                <th>Monto Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $compra)
                <tr>
                    <td>{{ $compra->id }}</td>
                    <td>{{ $compra->proveedor->nombre }}</td>
                 {{--   <td>{{ $compra->fecha->format('d/m/Y H:i') }}</td>--}}
                 <td>{{ $compra->precio_total }}</td>                    <td>
                        <a href="{{ route('compra.show', $compra->id) }}" class="btn btn-info">Ver Detalles</a>
                        <a href="{{ route('compra.edit', $compra->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('compra.destroy', $compra->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

    <script>
        $(document).ready(function() {
            $('#compras').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
@stop
