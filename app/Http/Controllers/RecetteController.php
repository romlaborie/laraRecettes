<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecetteRequest;
use App\Http\Requests\UpdateRecetteRequest;
use App\Models\Recette;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recipes = \App\Models\Recette::all(); //get all recipes

        return view('welcome', ['recipes'=>$recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecetteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecetteRequest $request)
    {
        //
        $recette=new Recette();
        $recette->author_id=1;
        $recette->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
        $recette->content = request('content');
        $recette->ingredients = request('ingredients');

        $recette->url = str_replace(' ', '_', request('title'));

        $recette->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $recipe = Recette::where('url',$url)->first();
        return view('recipes/single',array( //Pass the recipe to the view
            'recipe' => $recipe
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Recette $recette)
    {
        //

        return view('recipes.edition', ['recette' => $recette]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecetteRequest  $request
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecetteRequest $request, Recette $recette)
    {
        //
        $recette->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
        $recette->content = request('content');
        $recette->ingredients = request('ingredients');

        $recette->url = str_replace(' ', '_', request('title'));

        $recette->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette)
    {
        //
        $recette->delete();

        redirect("/");
    }
}
