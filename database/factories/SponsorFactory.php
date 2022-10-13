<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sponsor>
 */
class SponsorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => $this->faker->randomElement(
                [
                    'https://th.bing.com/th/id/R.afa640858007567b237a3e3ca59678c6?rik=k3IgFNwxtoIDyw&riu=http%3a%2f%2fchilmedia.org%2fv2%2ffile-preview%2fc9371568-fdec-408a-8447-26817b75d793.jpg&ehk=5zjjbG5TVQwChiuTcFIuvLYgT%2f9PFf9VIIfnXh5O0Xs%3d&risl=&pid=ImgRaw&r=0',
                    'https://www.todoslosayuntamientos.es/images/e/principado-de-asturias/asturias/villaviciosa.png'
                ]
            ),
            'name' => $this->faker->name,
            'link' => $this->faker->randomElement(
                [
                    'https://th.bing.com/th/id/R.afa640858007567b237a3e3ca59678c6?rik=k3IgFNwxtoIDyw&riu=http%3a%2f%2fchilmedia.org%2fv2%2ffile-preview%2fc9371568-fdec-408a-8447-26817b75d793.jpg&ehk=5zjjbG5TVQwChiuTcFIuvLYgT%2f9PFf9VIIfnXh5O0Xs%3d&risl=&pid=ImgRaw&r=0',
                    'https://www.todoslosayuntamientos.es/images/e/principado-de-asturias/asturias/villaviciosa.png'
                ]
            )
        ];
    }
}
