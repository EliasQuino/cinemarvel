@extends('adminlte::page')

@section('title', 'Bitácora')

@section('content_header')
    <h1>Bitácora de Actividades</h1>
@stop

@section('content')
    <form method="GET" action="{{ route('bitacora.index') }}">
        <div class="input-group mb-3">
            <input type="text" name="ip_address" class="form-control" placeholder="Filtrar por IP" value="{{ request('ip_address') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtrar</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Acción</th>
                <th>Descripción</th>
                <th>IP Address</th>
                <th>Device Info</th>
                <th>Fecha y Hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->user_id }}</td>
                    <td>{{ $log->accion }}</td>
                    <td>{{ $log->descripcion }}</td>
                    <td>{{ $log->ip_address }}</td>
                    <td>{{ $log->device_info }}</td>
                    <td>{{ $log->fecha_hora }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $logs->links() }} <!-- Paginación -->
@stop