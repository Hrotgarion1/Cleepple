<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Profesion;
use App\Models\Especializacion;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //los id de profesión_id van en orden según aparecen aqui
        // Profesion::create(['name' => 'Diseñador']);
        // Profesion::create(['name' => 'Abogado']);
        // Profesion::create(['name' => 'Arquitecto']);

        // Especializacion::create(['profesion_id' => 1, 'name' => 'Diseño de Interiores']);
        // Especializacion::create(['profesion_id' => 1, 'name' => 'Diseño Industrial']);
        // Especializacion::create(['profesion_id' => 2, 'name' => 'Derecho Mercantil']);
        // Especializacion::create(['profesion_id' => 2, 'name' => 'Derecho Civil']);
        // Especializacion::create(['profesion_id' => 3, 'name' => 'Arquitectura de Interiores']);
        // Especializacion::create(['profesion_id' => 3, 'name' => 'Arquitectura Naval']);

         //tengo que hacer una relación con las profesiones
         DB::table('profesions')->delete();
        
         DB::table('profesions')->insert(array (
             0 => 
             array (
                 'id' => 1,
                 'name' => 'Abogado',
                 'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'green',
             ),
             1 => 
             array (
                 'id' => 2,
                 'name' => 'Académico',
                 'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'yellow',
             ),
             2 => 
             array (
                 'id' => 3,
                 'name' => 'Administrador',
                 'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'blue',
                 
             ),
             
         ));
    }
}
