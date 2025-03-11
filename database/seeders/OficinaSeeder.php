<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OficinaSeeder extends Seeder
{
    public function run()
    {
        DB::table('oficinas')->insert([
            'nombre' => 'Oficina Principal',
            'direccion' => 'Calle Ejemplo 123',
        ]);
    }
}
