<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Level;
use App\Models\Category;
use App\Models\Especializacion;
use App\Models\Price;
use App\Models\Profesion;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([Course::BORRADOR, Course::REVISION, Course::PUBLICADO, Course::PAUSADO]),
            'status_on_cv' => $this->faker->randomElement([1,2]),
            'slug' => Str::slug($title),
            //Este user id es el que utilizo para indicar el profesor del curso, de momento...
            'user_id' => $this->faker->randomElement([1,5,7,8,9]),
            'level_id' => Level::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'price_id' => Price::all()->random()->id,
            'especializacion_id' => Especializacion::all()->random()->id,
            
        ];
    }
}
