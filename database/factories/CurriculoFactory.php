<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Especializacion;
use App\Models\Curriculo;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurriculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curriculo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'sector' => $this->faker->randomElement(['Turistico', 'Minero', 'Metalurgico', 'Transporte', 'Enseñanza']),
            'status' => $this->faker->randomElement([Curriculo::ACTIVO, Curriculo::INACTIVO]),
            'especializacion_id' => Especializacion::all()->random()->id,
            'user_id' => User::all()->random()->id,

        ];
    }
}
