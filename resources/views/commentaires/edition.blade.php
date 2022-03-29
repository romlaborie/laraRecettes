@extends('layouts.main')
@section('commentaire')
<h1>Edition du comment</h1>
<form method="POST" action="/admin/recettes/{{$recipe->url}}/comments/{{$comment->id}}">
    @method("PUT")
    @csrf
    <div>
        <textarea name="content" cols="30" rows="10">{{$comment->content}}</textarea>
    </div>
    <div>
        <button type="submit">Editer</button>
    </div>
</form>
<h2>Suppression??</h2>
<form method="POST" action="/admin/recettes/{{$recipe->url}}/comments/{{$comment->id}}">
    @method("DELETE")
    @csrf
    <div>
        <button type="submit">Suppr le comment</button>
    </div>
</form>
@endsection
