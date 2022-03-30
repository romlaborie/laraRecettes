<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create()
        \App\Models\User::factory(5)->has(\App\Models\Recette::factory(5))->has(\App\Models\Comment::factory(5))->create();
        \App\Models\Ingredient::factory(20)->has(\App\Models\Ingredients_recette::factory(3))->create();
        \App\Models\Recette::factory()->count(20)->has(\App\Models\Ingredients_recette::factory()->count(3))->create();
    }
}
