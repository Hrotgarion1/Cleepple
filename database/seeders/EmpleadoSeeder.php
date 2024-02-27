<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleado::create([
            'name' => 'Micro (hasta 10 trabajadores)',
            'value' => 1
        ]);

        Empleado::create([
            'name' => 'Pequeña (hasta 50 trabajadores)',
            'value' => 2
        ]);

        Empleado::create([
            'name' => 'Mediana (hasta 250 trabajadores)',
            'value' => 3
        ]);
    }
}
