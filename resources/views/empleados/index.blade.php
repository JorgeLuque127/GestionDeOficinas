@extends('layouts.app')

@section('content')
    <h1 class="text-center">Listado de Empleados de {{ $oficina->nombre }}</h1>
    
    <ul class="list-group">
        @foreach ($empleados as $empleado)
            <li class="list-group-item">
                <a href="{{ route('oficinas.empleados.show', [$oficina->id, $empleado->id]) }}">{{ $empleado->nombre }} ({{ $empleado->dni }})</a>
            </li>
        @endforeach
    </ul>

    <a class="btn btn-primary mb-3" href="{{ route('oficinas.empleados.create', $oficina) }}">Añadir Empleado</a>
    <a class="btn btn-secondary mb-3" href="{{ route('oficinas.index') }}">Volver a la lista de Oficinas</a>
@endsection
