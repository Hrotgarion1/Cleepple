<?php

namespace Database\Seeders;

use App\Models\CategoriaProfesional;
use Illuminate\Database\Seeder;

class CategoriaProfesionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaProfesional::create([
            'name' => 'Aprendiz',
            'value' => 0.8,
        ]);

        CategoriaProfesional::create([
            'name' => 'Operario',
            'value' => 1,
        ]);

        CategoriaProfesional::create([
            'name' => 'Especialista',
            'value' => 1.05,
        ]);

        CategoriaProfesional::create([
            'name' => 'Jefe de Equipo',
            'value' => 1.07,
        ]);

        CategoriaProfesional::create([
            'name' => 'Encargado',
            'value' => 1.1,
        ]);

        CategoriaProfesional::create([
            'name' => 'Adjunto P.M',
            'value' => 1.12,
        ]);

        CategoriaProfesional::create([
            'name' => 'Project Manager',
            'value' => 1.15,
        ]);

        CategoriaProfesional::create([
            'name' => 'Ejecutivo',
            'value' => 1.17,
        ]);

        CategoriaProfesional::create([
            'name' => 'Director',
            'value' => 1.2,
        ]);
    }
}
