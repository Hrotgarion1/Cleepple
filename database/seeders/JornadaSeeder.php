<?php

namespace Database\Seeders;

use App\Models\Jornada;
use Illuminate\Database\Seeder;

class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jornada::create([
            'name' => 'Parcial 2 Horas',
            'value' => 2,
        ]);

        Jornada::create([
            'name' => 'Parcial 3 Horas',
            'value' => 3,
        ]);

        Jornada::create([
            'name' => 'Media jornada',
            'value' => 4,
        ]);

        Jornada::create([
            'name' => 'Jornada completa',
            'value' => 8,
        ]);
    }
}
