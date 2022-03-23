@extends('layouts/main')
@section('content')
<h2>{{ $recipe->title }}</h2>
<h3>Liste des ingrédients</h3>
  <p>{{$recipe->ingredients}}</p>
<h3>Recette détaillée</h3>
  <p>{{$recipe->content}}</p>
<h3>Auteur</h3>
  <p>{{$recipe->author->name}}</p>
@endsection
