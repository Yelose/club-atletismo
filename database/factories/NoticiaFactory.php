<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\noticia>
 */
class NoticiaFactory extends Factory
{
    public function definition()
    {
        return [
            'titular' => $this->faker->name,
            'imagen' => $this->faker->name,
            'piefoto' => $this->faker->name,
            'subtitulo' => $this->faker->paragraph(),
            'noticia' => $this->faker->sentence(300),
            'fecha' => $this->faker->name,
        ];
    }
}
