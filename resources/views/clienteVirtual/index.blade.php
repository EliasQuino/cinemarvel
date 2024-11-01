@extends('adminlte::page')

@section('title', 'usuarioV')

@section('content_header')
    <h1>LISTA DE CLIENTES VIRTUALES</h1>
@stop

@section('content')
    <a href="{{ route('clienteVirtual.create') }}" class="btn btn-primary">NUEVO CLIENTE VIRTUAL</a>

    <table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usu)
                <tr>
                    <td>{{ $usu->id }}</td>
                    <td>{{ $usu->name }}</td>
                    <td>{{ $usu->email }}</td>
                    <td>
                        <form action="{{ route('clienteVirtual.destroy', $usu->id) }}" method="POST" style="display:inline;">
               {{--            <a href="{{ route('clienteVirtual.edit', $usu->id) }}" class="btn btn-info">Editar</a>--}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
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
            $('#usuarios').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>
@stop
