<?php

namespace Database\Seeders;

use App\Models\Accisolid;
use App\Models\Autodidacta;
use App\Models\Capacidad;
use Illuminate\Database\Seeder;
use App\Models\Curriculo;
use App\Models\Expelabor;
use App\Models\Expepyme;
use App\Models\Study;
use App\Models\Logro;

class CurriculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curriculos = Curriculo::factory(9)->create();

        foreach ($curriculos as $curriculo) {

            $studys =Study::factory(4)->create([
                'curriculo_id' => $curriculo->id
            ]);

            foreach ($studys as $study) {
                Logro::factory(1)->create([
                    'logroable_id' => $study->id,
                    //Este necesita el modelo, asi que se lo asigno
                    'logroable_type' => Study::class
                ]);

            $expelabors = Expelabor::factory(1)->create([
                'curriculo_id' => $curriculo->id
            ]);

            foreach ($expelabors as $expelabor) {
                Logro::factory(1)->create([
                    'logroable_id' => $expelabor->id,
                    //Este necesita el modelo, asi que se lo asigno
                    'logroable_type' => Expelabor::class
                ]);
                $expelabor->refelabor()->attach([
                    rand(1, 5)
                    
                ]);
        
               }

            $capacidads = Capacidad::factory(4)->create([
                'curriculo_id' => $curriculo->id
            ]);

            foreach ($capacidads as $capacidad) {
                Logro::factory(1)->create([
                    'logroable_id' => $capacidad->id,
                    //Este necesita el modelo, asi que se lo asigno
                    'logroable_type' => Capacidad::class
                ]);
            }

            Autodidacta::factory(4)->create([
                'curriculo_id' => $curriculo->id
            ]);

            $accisolids = Accisolid::factory(4)->create([
                'curriculo_id' => $curriculo->id
            ]);

            foreach ($accisolids as $accisolid) {
               
                Logro::factory(1)->create([
                    'logroable_id' => $accisolid->id,
                    //Este necesita el modelo, asi que se lo asigno
                    'logroable_type' => Accisolid::class
                ]);
                
                $accisolid->refentity()->attach([
                    rand(1, 5)
                    
                ]);
            }

            $expepymes = Expepyme::factory(4)->create([
                'curriculo_id' => $curriculo->id
            ]);

            foreach ($expepymes as $expepyme) {
                
                Logro::factory(1)->create([
                    'logroable_id' => $expepyme->id,
                    //Este necesita el modelo, asi que se lo asigno
                    'logroable_type' => Expepyme::class
                ]);
                
                $expepyme->refecliente()->attach([
                    rand(1, 5)
                    
                ]);
            }
        }
      }

    }
}
