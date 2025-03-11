@extends('layouts.app')

@section('content')
    <h1 class="text-center">Añadir Empleado a {{ $oficina->nombre }}</h1>
    <form action="{{ route('oficinas.empleados.store', $oficina) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre (obligatorio)</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="primer_apellido">Primer Apellido (obligatorio)</label>
            <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" required>
        </div>
        <div class="form-group">
            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido">
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <input type="text" class="form-control" id="rol" name="rol">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div class="form-group">
            <label for="dni">DNI (obligatorio)</label>
            <input type="text" class="form-control" id="dni" name="dni" required>
        </div>
        <div class="form-group">
            <label for="email">Email (obligatorio)</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
