<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
    public function commentaire()
    {
        return $this->hasMany(Comment::class,'recipe_id');
    }

    public function Ingredients()
    {
        return $this->belongsToMany(Ingredients::class);
    }

}
