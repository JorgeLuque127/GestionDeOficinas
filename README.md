@extends('layouts.app')

@section('content')
    <h1 class="text-center">Listado de Oficinas</h1>
    <a class="btn btn-primary mb-3" href="{{ route('oficinas.create') }}">Añadir Oficina</a>
    
    <ul class="list-group">
        @foreach ($oficinas as $oficina)
            <li class="list-group-item">
                <a href="{{ route('oficinas.empleados.index', $oficina) }}">{{ $oficina->nombre }}</a>
            </li>
        @endforeach
    </ul>
@endsection
