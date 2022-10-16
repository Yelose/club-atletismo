<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CronologiaFactory extends Factory
{
    public function definition()
    {
        return [
            'fecha' => $this->faker->name,
            'resumen' => $this->faker->sentence(100),
        ];
    }
}
