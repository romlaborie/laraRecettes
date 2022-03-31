@extends('recipes.single')
@section('ingredients')
<h3>Ingredients-ajout</h3>
<?php foreach($ingredients as $ing){?>
    <h4>Je suis l'ingredient : </h4>
    <p>{{$ing->nom_ingredient}}</p>
    <p>Quantité par personne:{{$ing->quantiteParPersonne}} </p>

    <a href="/{{$recipe->url}}/ingredients/{{$ing->id}}/edit">Editer l'ingredient</a>

<?php } ?>
<h4>création de l'ingrédient</h4>
<form method="POST" action="/{{$recipe->url}}/ingredients">
    @csrf
    <div>
        <textarea name="nom_ingredient" placeholder="nom de l'ingredient" cols="30" rows="2"></textarea>
    </div>
    <div>
        <input type="number" name="quantiteParPersonne" placeholder="quantité pour 1 personne">
    </div>
    <div>
        <button type="submit">Créer</button>
    </div>
</form>

@endsection
