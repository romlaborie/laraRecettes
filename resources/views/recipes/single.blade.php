@extends('layouts/main')
@section('content')
<h2>{{ $recipe->title }}</h2>
<h3>Liste des ingrédients</h3>
  <form action="/{{$recipe->url}}/ingredients/create">
    @csrf
    <div>
        <button type="submit">Voir les ingredients et/ou ajouter un ingredient</button>
    </div>
  </form>
  @yield('ingredients')
<h3>Recette détaillée</h3>
  <p>{{$recipe->content}}</p>
<h3>Auteur</h3>
  <p>{{$recipe->author->name}}</p>
<img src='/storage/images/{{$recipe->media}}' alt="imagetest">
<a href="/admin/recettes/{{$recipe->id}}/edit">Edit la recette</a>
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
