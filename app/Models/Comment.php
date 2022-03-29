<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
    public function recette()
    {
        return $this->belongsTo(Recette::class,'recipe_id');
    }
}
