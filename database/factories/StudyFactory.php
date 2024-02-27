<?php

namespace Database\Factories;

use App\Models\Study;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curriculo;
use App\Models\Category;
use App\Models\Organization;
use App\Models\Province;

class StudyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Study::class;

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
            'status' => $this->faker->randomElement([Study::PROPUESTO, Study::REVISION, Study::VERIFICADO, Study::DENEGADO]),
            'logro' => $this->faker->randomElement(['1', '2']),
            'curriculo_id' => Curriculo::all()->random()->id,
            'province_id' => Province::all()->random()->id,
            'fechaIni' => $this->faker->date(),
            'fechaFin' => $this->faker->date(),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
