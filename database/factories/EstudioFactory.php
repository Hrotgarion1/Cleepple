<?php

namespace Database\Factories;

use App\Models\Estudio;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
use App\Models\Especializacion;
use App\Models\Organization;

class EstudioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organization' => Organization::all()->random()->name,
            'curso' => $this->faker->randomElement(['Arquitectura interior', 'Derecho Civil', 'Diseño de productos mecanizados', 'Restauración cocina internacional', 'Administración contabilidad y finanzas', 'Soldadura MIG MAG', 'Obras y restauraciones']),
            //Los status están definidos en el modelo Estudio
            'status' => $this->faker->randomElement([Estudio::PROPUESTO, Estudio::REVISION, Estudio::VERIFICADO, Estudio::DENEGADO]),
            'user_id' => User::all()->random()->id,
            'especializacion_id' => Especializacion::all()->random()->id,
            'fechaIni' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
