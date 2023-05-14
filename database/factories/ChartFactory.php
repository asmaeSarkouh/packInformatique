<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChartFactory extends Factory
{
    public function definition()
    {
        return [
            'material_id'=>Material::inRandomOrder()->first()
        ];
    }
}
