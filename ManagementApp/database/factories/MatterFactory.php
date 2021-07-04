<?php

namespace Database\Factories;

use App\Models\Matter;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Matter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'     => $this->faker->realText($this->faker->numberBetween(10,25)),
            'url'       => $this->faker->url(),
            'content'   => $this->faker->realText($this->faker->numberBetween(100,200)),
            'attention' => $this->faker->realText($this->faker->numberBetween(10,50))
        ];
    }
}
