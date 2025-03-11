<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficina;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
        return view('empleados.index', compact('empleados', 'oficina'));
    }

    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }

    public function store(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|unique:empleados|regex:/^[0-9]{8}[A-Z]$/',
            'email' => 'required|email|unique:empleados',
        ]);

        $oficina->empleados()->create($request->all());
        return redirect()->route('oficinas.empleados.index', $oficina);
    }

    public function update(Request $request, $oficinaId, $empleadoId)
    {
        $empleado = Empleado::findOrFail($empleadoId);

        $request->validate([
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'dni' => 'required|unique:empleados,dni,' . $empleado->id . '|reg-Z]ex:/^[0-9]{8}[A$/',
            'email' => 'required|email|unique:empleados,email,' . $empleado->id,
        ]);

        $empleado->update($request->all());

        return redirect()->route('oficinas.empleados.show', [$oficinaId, $empleadoId]);
    }

    public function show($oficinaId, $empleadoId)
    {
        $empleado = Empleado::findOrFail($empleadoId);
        return view('empleados.show', compact('empleado'));
    }

    public function edit($oficinaId, $empleadoId)
    {
        $empleado = Empleado::findOrFail($empleadoId);
        return view('empleados.edit', compact('empleado'));
    }
}