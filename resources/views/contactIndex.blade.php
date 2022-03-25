@extends('layouts/main')
@section('content')
    <h1>Contact</h1>
    <form method="post" action="/contact">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <textarea name="message" cols="30" rows="10"></textarea>
        <button style="background-color:blanchedalmond" type="submit">Bouton d'envoi du formulaire de contact</button>

    </form>

    @foreach ($contacts as $contact)
        <h2>Demande de contact de {{ $contact->name }}</h2>
        <li>{{ $contact->message }}</li>
        
    @endforeach
@endsection
