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
            'imagen' => $this->faker->randomElement(
                [
                    'https://static1.hoy.es/llerena/multimedia/201907/19/media/cortadas/seis-kUmH-U807953006188XH-624x385@Hoy.jpg',
                    'https://www.8directo.com/wp-content/uploads/2021/09/200293876_3978438302263555_1031880655553130637_n.jpg',
                    'https://www.radiorute.com/wp-content/uploads/2021/04/croos.jpg'
                ]
            ),
            'piefoto' => $this->faker->name,
            'subtitulo' => $this->faker->paragraph(),
            'noticia' => $this->faker->sentence(300),
            'fecha' => $this->faker->name,
        ];
    }
}
