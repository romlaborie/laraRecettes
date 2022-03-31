@extends('recipes.single')
@section('commentaire')
<h3>Commentaire</h3>
<?php foreach($comment as $com){?>
    <h4>Je suis un commentaire : </h4>
    <p>{{$com->content}}</p>

    <a href="/{{$recipe->url}}/comments/{{$com->id}}/edit">Editer le commentaire</a>

<?php } ?>
<h4>création du comment</h4>
<form method="POST" action="/{{$recipe->url}}/comments">
    @csrf
    <div>
        <textarea name="content" placeholder="contenu" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">Créer</button>
    </div>
</form>

@endsection
