<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crono>
 */
class CronoFactory extends Factory
{
    public function definition()
    {
        return [
            'fecha'=>$this->fake->name,
            'resumen'=>$this->fake->text(200),
        ];
    }
}
