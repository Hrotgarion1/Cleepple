<?php

namespace Database\Factories;

use App\Models\Expepyme;
use App\Models\User;
use App\Models\Curriculo;
use App\Models\Especializacion;
use App\Models\Province;
use App\Models\HorasExtra;
use App\Models\Jornada;
use App\Models\Empleado;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpepymeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expepyme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organization' => Organization::all()->random()->name,
            'status' => $this->faker->randomElement([Expepyme::PASADO, Expepyme::ACTUAL]),
            'description' => $this->faker->paragraph(),
            'volunego' => $this->faker->randomElement([10000,50000,72000,81000,9000,15000,24000,30000,18000,22000,34000,12000]),
            'cif' => $this->faker->randomElement(['B-62758198', 'B-78823961', 'G-37597412', 'A-23568912', 'G-4635987', 'A-12893561']),
            'fechaIni' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
            'curriculo_id' => Curriculo::all()->random()->id,
            'especializacion_id' => Especializacion::all()->random()->id,
            'province_id' => Province::all()->random()->id,
            'empleado_id' => Empleado::all()->random()->id,
            'jornada_id' => Jornada::all()->random()->id,
            'hora_extra_id' => HorasExtra::all()->random()->id,
        ];
    }
}
