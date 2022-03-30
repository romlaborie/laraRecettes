<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Ingredients_recetteFactory extends Factory
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
            'recette_id' => \App\Models\Recette::factory(),
            'ingredient_id' => \App\Models\Ingredient::factory()
       ];
    }
}
