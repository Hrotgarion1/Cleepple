<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoriapost;

class CategoriapostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoriapost::create([
            'name' => 'Ofertas',
            'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem'
        ]);

        Categoriapost::create([
            'name' => 'Demandas',
            'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec gravida tincidunt euismod. Mauris lacus mi, vulputate eget sem'
        ]);
    }
}
