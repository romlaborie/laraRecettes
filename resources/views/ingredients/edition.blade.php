@extends('recipes.single')
@section('ingredients')
<h1>Edition de l'ingredient</h1>
<form method="POST" action="/{{$recipe->url}}/ingredients/{{$ing->id}}">
    @method("PUT")
    @csrf
    <div>
        <textarea name="nom_ingredient" cols="2" rows="10">{{$ing->nom_ingredient}}</textarea>
    </div>
    <div>
        <input type="number" name="quantiteParPersonne" value="{{$ing->quantiteParPersonne}}">
    </div>
    <div>
        <button type="submit">Editer</button>
    </div>
</form>
<h4>Suppression??</h4>
<form method="POST" action="/{{$recipe->url}}/ingredients/{{$ing->id}}">
    @method("DELETE")
    @csrf
    <div>
        <button type="submit">Supprimmer l'ingredient</button>
    </div>
</form>
@endsection
