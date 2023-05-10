<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BunbouguFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText(10),
            'price' => $this->faker->numberBetween(1, 999),
            'class' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->realText(50),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null,
        ];
    }
}
