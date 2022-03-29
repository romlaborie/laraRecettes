@extends('recipes.single')
@section('commentaire')
<h3>Commentaire</h3>
<?php foreach($comment as $com){?>
    <h1>Je suis un commentaire : </h1>
    <p>{{$com->content}}</p>

    <a href="/admin/recettes/{{$recipe->url}}/comments/{{$com->id}}/edit">Editer le commentaire</a>

<?php } ?>
<h4>création du comment</h4>
<form method="POST" action="/admin/recettes/{{$recipe->url}}/comments">
    @csrf
    <div>
        <textarea name="content" placeholder="contenu" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Créer</button>
    </div>
</form>

@endsection
