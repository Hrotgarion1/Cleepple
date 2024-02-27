<?php

namespace Database\Factories;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Link::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'youtube' => $this->faker->randomElement(['https://youtu.be/aNjuuLOVlwk', 'https://youtu.be/-TvBbdn-_XI', 'https://youtu.be/1K2PLOpaTqA']),
            'vimeo' => $this->faker->randomElement(['https://vimeo.com/413468691', 'https://vimeo.com/413450380', 'https://vimeo.com/413164411']),
            'facebook' => $this->faker->randomElement(['https://www.facebook.com/profile.php?id=100001802515444', 'https://www.facebook.com/hrotgar.ingemtium']),
            'linkedin' => $this->faker->randomElement(['www.linkedin.com/in/jose-nunez-diseño-industrial-project-manager-jefe-produccion-director-proyectos']),
            'website' => $this->faker->randomElement(['http://www.josenunez.eu/', 'http://www.cleepple.com/']),
            'user_id' => User::all()->random()->id,
        ];
    }
}
