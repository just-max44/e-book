@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="jumbotron text-center">
            <h1><i class="text-success fa fa-check-circle"></i></h1>
            <p class="lead"><strong>Nous vous remercions de votre commande</strong></p>
            <p>Vous serez alerté par mail de la disponibilité de votre article, pour rappel, l'adresse de la médiathèque est: 7 rue de la librairie, 75000 Paris</p>
            <hr>
            <p>
                Vous rencontrez un problème? <a href="{{ route('contact-form') }}">Nous contacter</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}" role="button">Continuer vers la boutique</a>
            </p>
        </div>
    </div>
@endsection
