<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    public function ingredientsRecette()
    {
        return $this->belongsTo(Ingredients_recette::class,'recette_id');
    }

}
