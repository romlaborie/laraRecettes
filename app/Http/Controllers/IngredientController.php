<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        return view('ingredients.create', array('ingredients' =>$recette->Ingredients, 'recipe' => $recette));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $recette = \App\Models\Recette::where('url', request('url'))->first();

        return view('ingredients.create', array('ingredients' =>$recette->Ingredients, 'recipe' => $recette));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIngredientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredientRequest $request)
    {
        //
        $ingredient = new Ingredient;
        $ingredient->nom_ingredient = $request->nom_ingredient;
        $ingredient->quantiteParPersonne = $request->quantiteParPersonne;
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        $recette->Ingredients[]=$ingredient;
        $ingredient->Recette[]=$recette;
        $ingredient->save();
        $recette->save();
        return view('ingredients.create', array('ingredients' => $recette->Ingredients, 'recipe' => $recette));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show($url, Ingredient $ingredient)
    {
        //
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        return view('ingredients.create', array('ingredients' =>$recette->Ingredients, 'recipe' => $recette));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit($url, Ingredient $ingredient)
    {
        //
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        return view('ingredients.edition', array('ing' => $ingredient, 'recipe' => $recette));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIngredientRequest  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIngredientRequest $request, $url, Ingredient $ingredient)
    {
        //
        $ingredient->nom_ingredient = $request->nom_ingredient;
        $ingredient->quantiteParPersonne = $request->quantiteParPersonne;
        $recette = \App\Models\Recette::where('url', request('url'))->first();
        $ingredient->save();
        return view('ingredients.create', array('ingredients' => $recette->Ingredients, 'recipe' => $recette));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy($url, Ingredient $ingredient)
    {
        //
        $recette = \App\Models\Recette::where('url', request('url'))->first();

        $ingredient->delete();
        return view('ingredients.create', array('ingredients' => $recette->Ingredients, 'recipe' => $recette));
    }
}
