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
        $title= $this->faker->word()." ".$this->faker->word()." ".$this->faker->word()." ".$this->faker->word();
        return [
            //
            'author_id'=>\App\Models\User::factory(),
            'title' => $title,
            'content' => $this->faker->unique()->paragraph(5),
            'ingredients' => $this->faker->unique()->paragraph(7),
            'url' => str_replace(' ', '_', $title),
            'tags' => $this->faker->unique()->sentence(5),
            'status' => $this->faker->word()." ".$this->faker->word(),

        ];
    }
}
