<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredients_recetteRequest;
use App\Http\Requests\UpdateIngredients_recetteRequest;
use App\Models\Ingredients_recette;

class IngredientsRecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIngredients_recetteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredients_recetteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredients_recette  $ingredients_recette
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredients_recette $ingredients_recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredients_recette  $ingredients_recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredients_recette $ingredients_recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIngredients_recetteRequest  $request
     * @param  \App\Models\Ingredients_recette  $ingredients_recette
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIngredients_recetteRequest $request, Ingredients_recette $ingredients_recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredients_recette  $ingredients_recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredients_recette $ingredients_recette)
    {
        //
    }
}
