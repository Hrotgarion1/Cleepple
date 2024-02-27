<?php

namespace Database\Factories;

use App\Models\Expelabor;
use App\Models\Curriculo;
use App\Models\CategoriaProfesional;
use App\Models\Province;
use App\Models\HorasExtra;
use App\Models\Jornada;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpelaborFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expelabor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organization' => Organization::all()->random()->name,
            'status' => $this->faker->randomElement([Expelabor::PASADO, Expelabor::ACTUAL]),
            'description' => $this->faker->paragraph(),
            'logro' => $this->faker->randomElement(['1', '2']),
            'salary' => $this->faker->randomElement([10000,50000,72000,81000,9000,15000,24000,30000,18000,22000,34000,12000]),
            'fechaIni' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
            'curriculo_id' => Curriculo::all()->random()->id,
            'province_id' => Province::all()->random()->id,
            'cat_prof_id' => CategoriaProfesional::all()->random()->id,
            'jornada_id' => Jornada::all()->random()->id,
            'hora_extra_id' => HorasExtra::all()->random()->id,
        ];
    }
}
