<?php

namespace Database\Seeders;

use App\Models\Estudio;
use Illuminate\Database\Seeder;

class EstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudios = Estudio::factory(60)->create();

        foreach ($estudios as $estudio) {
            
            //este método escoge al azar entre los números indicados
            $estudio->profesion()->attach([
                rand(1, 3)
                
            ]);
            //este método escoge al azar entre los números indicados
            $estudio->especializacion()->attach([
                rand(1, 12)
                
            ]);
        }
    }
}
