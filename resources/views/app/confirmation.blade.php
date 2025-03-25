@extends('index')
@section('contenu')

    <h1>Félicitations !</h1>
    <p>Votre réservation a été prise en compte avec succès. Nous vous remercions !</p>

    <div>
        <a href="{{ route('acceuil') }}">Acceuil</a>
    </div>

@endsection