@extends('layouts.app')

@section('content')
    <h1 class="text-center">Detalles del Empleado: {{ $empleado->nombre }}</h1>
    <ul class="list-group">
        <li class="list-group-item">Nombre: {{ $empleado->nombre }}</li>
        <li class="list-group-item">Primer Apellido: {{ $empleado->primer_apellido }}</li>
        <li class="list-group-item">Segundo Apellido: {{ $empleado->segundo_apellido }}</li>
        <li class="list-group-item">DNI: {{ $empleado->dni }}</li>
        <li class="list-group-item">Email: {{ $empleado->email }}</li>
        <li class="list-group-item">Rol: {{ $empleado->rol }}</li>
        <li class="list-group-item">Fecha de Nacimiento: {{ $empleado->fecha_nacimiento }}</li>
    </ul>
    <a href="{{ route('oficinas.empleados.edit', [$empleado->oficina_id, $empleado->id]) }}" class="btn btn-primary mt-3">Editar Datos</a>
    <a href="{{ route('oficinas.empleados.index', $empleado->oficina_id) }}" class="btn btn-secondary mt-3">Volver a la Oficina</a>
@endsection