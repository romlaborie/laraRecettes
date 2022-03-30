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
        $tab_recettes=\App\Models\Recette::factory(5)->create();
        $tab_comment=\App\Models\Comment::factory(5)->create();
        $tab_ingredient=\App\Models\Ingredient::factory(5)->create();
        foreach($tab_ingredient as $ingredient){
            $k=rand(0,count($tab_recettes));
            for($p=0; $p<$k; $p++){

                $ingredient->Recette()->attach($tab_recettes[$p]);
            }
        }
    }
}
