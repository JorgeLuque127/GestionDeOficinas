<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('oficinas', OficinaController::class);
Route::resource('oficinas.empleados', EmpleadoController::class);