@extends('layouts.main')


@section('content')

<h1>création de la recette</h1>
<form method="POST" action="/admin/recettes">
    @csrf
    <div>
        <input type="text" name="title" placeholder="titre">
    </div>
    <div>
        <textarea name="content" placeholder="contenu" cols="30" rows="10"></textarea>
    </div>
    <div>
        <textarea name="ingredients" placeholder="ingredients" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Créer</button>
    </div>
</form>

@endsection
