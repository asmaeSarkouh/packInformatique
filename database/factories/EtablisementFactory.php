<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtablisementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codeEtablisement'=>$this->faker->unique()->sentence(1),
            'nom'=>$this->faker->word()
        ];
    }
}
