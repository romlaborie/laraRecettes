<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
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
            'author_id' => \App\Models\User::factory(),
            'recipe_id' => \App\Models\Recipe::factory(),
            'content' => $this->faker->unique()->paragraph(4),

        ];
    }
}
