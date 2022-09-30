<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quien>
 */
class QuienFactory extends Factory
{
    public function definition()
    {
        return [
            'titulo' => $this->faker->name,
            'image' => $this->faker->name,
            'resumen' => $this->faker->name,
        ];
    }
}
