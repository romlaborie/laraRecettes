@extends('layouts/main')
@section('content')
<h1>Home</h1>
<ul>


    @for( $k=0; $k<3;$k++)
      <li>
        <a href="/admin/recettes/{{$recipes[$k]->url}}">{{ $recipes[$k]->title }}</a>
        <h3>Recette détaillée:</h3>
        <p>{{$recipes[$k]->content}}</p>

    </li>
    @endfor
    <h2>Autres recettes accessibles par titre</h2>
    @for( $k=3; $k<count($recipes);$k++ )
    <a href="/admin/recettes/{{$recipes[$k]->url}}"><li>{{ $recipes[$k]->title }}</li></a>

    @endfor

</ul>
@endsection
