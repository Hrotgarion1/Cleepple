<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EspecializacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tengo que hacer una relación con las profesiones
        DB::table('especializacions')->delete();
        
        DB::table('especializacions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Derecho Laboral',
                'profesion_id' => 1,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'green',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Derecho penal',
                'profesion_id' => 1,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'yellow',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Derecho civil',
                'profesion_id' => 1,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'blue',
                
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Derecho mercantil',
                'profesion_id' => 1,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'orange',
                
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ciencias del Espacio',
                'profesion_id' => 2,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'red',
                
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Matemáticas',
                'profesion_id' => 2,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'purple',
                
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Física',
                'profesion_id' => 2,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'pink',
                
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Química',
                'profesion_id' => 2,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'indigo',
                
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Antropología',
                'profesion_id' => 2,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'green',
                
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Administración y finanzas',
                'profesion_id' => 3,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'purple',
                
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Administración y marketing',
                'profesion_id' => 3,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'green',
                
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Administración y negocios internacionales',
                'profesion_id' => 3,
                'extract' => 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho,.',
                'color' => 'blue',
                
            ),
           
        ));
    }
}
