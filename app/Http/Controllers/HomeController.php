<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        //
        $recipes = \App\Models\Recipe::all(); //get all recipes

        return view('welcome', ['recipes'=>$recipes]);
    }
}
