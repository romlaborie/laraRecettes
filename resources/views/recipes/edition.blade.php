@extends('layouts.main')


@section('content')
    <h1>Edition de la recette</h1>
    {{-- pour editer lien image c'est ici --}}
    <form method="POST" action="/admin/recettes/{{ $recette->id }}">
        @method("PUT")
        @csrf
        <div>
            <input type="text" name="title" value="{{ $recette->title }}">
        </div>
        <div>
            <textarea name="content" cols="30" rows="10">{{ $recette->content }}</textarea>
        </div>
        <div>
            <textarea name="ingredients" cols="30" rows="10">{{ $recette->ingredients }}</textarea>
        </div>
        <div>
            <button type="submit">Editer</button>
        </div>
    </form>
@endsection
