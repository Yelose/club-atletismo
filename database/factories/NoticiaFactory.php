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
            'image' => $this->faker->randomElement(
                [
                    '2a-Jornada-Sub14-25-04-21-Lorca.jpg',
                    'Yalemzerf-Yehualaw-londres-maraton.png',
                    'podio-spain.jpg'
                ]
            ),
            'piefoto' => $this->faker->name,
            'subtitulo' => $this->faker->paragraph(1),
            'noticia' => $this->faker->sentence(200),
            'fecha' => $this->faker->name,
        ];
    }
}
