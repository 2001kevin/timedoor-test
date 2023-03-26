<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CattegoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Factory::create();
        return [
            'name' => $faker->title,
        ];
    }
}
