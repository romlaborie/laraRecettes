<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nom_ingredient'=> $this->faker->word()." ".$this->faker->word()." ".$this->faker->word()." ".$this->faker->word(),
            'quantiteParPersonne'=>$this->faker->numberBetween(1, 500),
        ];
    }
}
