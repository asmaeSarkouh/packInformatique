<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'=>$this->faker->paragraph(1),
            'dateLivrision'=>$this->faker->date(),
            'etat'=>$this->faker->boolean(),
            'lieu'=>$this->faker->randomElement(['Direction','Bibliotheque','SMM','Salle de eouvr','Labo']),
            'probleme'=>$this->faker->sentence(2),
            'type_id'=>Type::inRandomOrder()->first(),
            
        ];
    }
}
