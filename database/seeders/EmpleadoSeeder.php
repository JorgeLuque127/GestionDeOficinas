<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'Juan',
            'primer_apellido' => 'Pérez',
            'dni' => '12345678A',
            'email' => 'juan.perez@example.com',
            'oficina_id' => 1,
        ]);
    }
}