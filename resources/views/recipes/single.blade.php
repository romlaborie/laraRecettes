@extends('layouts/main')
@section('content')
<h2>{{ $recipe->title }}</h2>
<h3>Liste des ingrédients</h3>
  <p>{{$recipe->ingredients}}</p>
<h3>Recette détaillée</h3>
  <p>{{$recipe->content}}</p>
<h3>Auteur</h3>
  <p>{{$recipe->author->name}}</p>

<form method="POST" action="/admin/recettes/{{$recipe->id}}">
    @method("DELETE")
    @csrf
    <div>
        <button type="submit">Suppr la recette</button>
    </div>
</form>
<form action="/{{$recipe->url}}/comments/create">
    @csrf
    <div>
        <button type="submit">Voir les commentaires et/ou commenter la recette</button>
    </div>
</form>
@yield('commentaire')
@endsection
