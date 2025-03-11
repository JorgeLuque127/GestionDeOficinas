@extends('layouts.app')

@section('content')
    <h1 class="text-center">Editar Empleado: {{ $empleado->nombre }}</h1>
    <form action="{{ route('oficinas.empleados.update', [$empleado->oficina_id, $empleado->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre (obligatorio)</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="primer_apellido">Primer Apellido (obligatorio)</label>
            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="{{ $empleado->primer_apellido }}" required>
        </div>
        <div class="form-group">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="{{ $empleado->segundo_apellido }}">
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <input type="text" class="form-control" id="rol" name="rol" value="{{ $empleado->rol }}">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $empleado->fecha_nacimiento }}">
        </div>
        <div class="form-group">
            <label for="dni">DNI (obligatorio)</label>
            <input type="text" class="form-control" id="dni" name="dni" value="{{ $empleado->dni }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email (obligatorio)</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $empleado->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
