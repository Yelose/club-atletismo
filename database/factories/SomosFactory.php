<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Somos>
 */
class SomosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo'=>$this-> fake->sentence,
            'imagen'=>$this->fake->image(1280,720),
            'resumen'=>$this->fake->text(800),
        ];
    }
}
