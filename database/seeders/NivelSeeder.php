<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::create([
            'name' => 'Aprendiz (menos de 1 año)',
            'value' => 5
        ]);

        Nivel::create([
            'name' => 'Operario (más de un año)',
            'value' => 10
        ]);

        Nivel::create([
            'name' => 'Profesional (más de 2 años)',
            'value' => 15
        ]);

        Nivel::create([
            'name' => 'Experto (más de 3 años)',
            'value' => 25
        ]);
    }
}
