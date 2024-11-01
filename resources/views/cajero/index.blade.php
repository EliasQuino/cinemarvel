@extends('adminlte::page')

@section('title', 'Trabajadores')

@section('content_header')
    <h1>LISTA DE TRABAJADORES</h1>
@stop

@section('content')
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('cajero.create') }}" class="btn btn-primary mb-3">NUEVO TRABAJADOR</a>

    <table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <!-- Mostrar ID del cajero -->
                <td>{{ optional($usuario->cajero)->id }}</td>

                <!-- Mostrar Nombre y Apellido del usuario -->
                <td>{{ $usuario->name }} {{ $usuario->lastname }}</td>

                <!-- Mostrar el nombre del puesto -->
                <td>{{ optional($usuario->cajero->puesto)->nombre }}</td>

                <td>
                    <a href="{{ route('cajero.edit', $usuario->id) }}" class="btn btn-info">Editar</a>
                    <form action="{{ route('cajero.destroy', $usuario->id) }}" method="POST" style="display:inline;">
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
<script src="https://cdn.datatables.net/2.1.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#usuarios').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });

    $(document).on("submit", "form", function(e) {
        if(!confirm("¿Estás seguro de que deseas eliminar este trabajador?")) {
            e.preventDefault();
        }
    });
</script>
@stop
