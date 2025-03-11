<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    public function index()
    {
        $oficinas = Oficina::all();
        return view('oficinas.index', compact('oficinas'));
    }

    public function create()
    {
        return view('oficinas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:oficinas',
            'direccion' => 'required',
            'telefono' => 'nullable',
            'email' => 'nullable|email',
        ]);
    
        Oficina::create($request->all());
    
        return redirect()->route('oficinas.index')->with('success', 'Oficina creada exitosamente.');
    }

}
