@extends('layouts/main')
@section('content')
<h1>Home</h1>
<ul>


    @for( $k=0; $k<3;$k++)
      <li>
          <h2>{{ $recipes[$k]->title }}</h2>
        <h3>Liste des ingrédients</h3>
        <ol>
          <li>{{$recipes[$k]->ingredients}}</li>
        </ol>
        <h3>Recette détaillée:</h3>
          {{$recipes[$k]->content}}

    </li>
    @endfor
    <h2>Autres recettes accessibles par titre</h2>
    @for( $k=3; $k<count($recipes);$k++ )
    <a href="{{$recipes[$k]->url}}"><li>{{ $recipes[$k]->title }}</li></a>
    @endfor

</ul>
@endsection
