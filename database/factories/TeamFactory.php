<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'licence' => fake()->name(),
            'image' => $this->faker->randomElement(
                [
                    'https://previews.123rf.com/images/iimages/iimages1306/iimages130601429/20517633-ejemplo-de-una-cara-de-una-ni%C3%B1a-linda-en-un-blanco-apaisada.jpg',
                    'https://previews.123rf.com/images/iimages/iimages1306/iimages130601429/20517633-ejemplo-de-una-cara-de-una-ni%C3%B1a-linda-en-un-blanco-apaisada.jpg',
                    'https://previews.123rf.com/images/iimages/iimages1306/iimages130601429/20517633-ejemplo-de-una-cara-de-una-ni%C3%B1a-linda-en-un-blanco-apaisada.jpg',
                    'https://previews.123rf.com/images/iimages/iimages1306/iimages130601429/20517633-ejemplo-de-una-cara-de-una-ni%C3%B1a-linda-en-un-blanco-apaisada.jpg',
                    'https://previews.123rf.com/images/iimages/iimages1306/iimages130601429/20517633-ejemplo-de-una-cara-de-una-ni%C3%B1a-linda-en-un-blanco-apaisada.jpg',
                    'https://previews.123rf.com/images/iimages/iimages1306/iimages130601429/20517633-ejemplo-de-una-cara-de-una-ni%C3%B1a-linda-en-un-blanco-apaisada.jpg',
                ]),
            'category' => fake()->name(),
        ];
    }
}
