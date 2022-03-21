<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
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
            'author_id'=>\App\Models\User::factory(),
            'title' => $this->faker->title(),
            'content' => $this->faker->unique()->paragraph(),
            'ingredients' => $this->faker->unique()->paragraph(),
            'url' => $this->faker->unique()->url(),
            'tags' => $this->faker->unique()->sentence(),
            'status' => $this->faker->unique()->word(),

        ];
    }
}
