<?php

namespace Database\Factories;

use App\Models\Etablisement;
use App\Models\Material;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RapportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'etablisemnt_id'=>Etablisement::inRandomOrder()->first(),
            'user_id'=>User::inRandomOrder()->first(),
            'material_id'=>Material::inRandomOrder()->first(),
        ];
    }
}
