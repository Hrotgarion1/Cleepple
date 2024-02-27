<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Curso no reglado (50 Eps)',
            'value' => 50
        ]);

        Category::create([
            'name' => 'E.G.B (10.656 Eps)',
            'value' => 10656
        ]);

        Category::create([
            'name' => 'E.S.O (2.664 Eps)',
            'value' => 2664
        ]);

        Category::create([
            'name' => 'Bachillerato (2.664 Eps)',
            'value' => 2664
        ]);

        Category::create([
            'name' => 'Grado medio 1 año (1.200 Eps)',
            'value' => 1200
        ]);

        Category::create([
            'name' => 'Grado medio 2 años (2.000 Eps)',
            'value' => 2000
        ]);

        Category::create([
            'name' => 'Grado superior 1 año (1.400 Eps)',
            'value' => 1400
        ]);

        Category::create([
            'name' => 'Grado superior 2 años (2.000 Eps)',
            'value' => 2000
        ]);

        Category::create([
            'name' => 'Universitarios (6.000 Eps)',
            'value' => 6000
        ]);

        Category::create([
            'name' => 'Máster 1 año (1.500 Eps)',
            'value' => 1500
        ]);

        Category::create([
            'name' => 'Máster 2 años (3.000 Eps)',
            'value' => 3000
        ]);

        Category::create([
            'name' => 'Doctorado (4.500 Eps)',
            'value' => 4500
        ]);
    }
}
