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
            'titulo'=>$this-> fake->name,
            'image'=>$this->fake->image(1280,720),
            'resumen'=>$this->fake->sentence(800),
        ];
    }
}
