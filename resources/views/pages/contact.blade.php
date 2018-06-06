@extends('layouts.app')

@section('content')

<div class="container">
    <div class="py-5 text-center">
        <h1 class="text-center my-4">Nous contacter</h1>
        <p class="lead">Une demande de devis ? Un renseignement ?
            <br> N'hésitez pas à nous contacter, nous répondrons à votre requête au plus vite.</p>
    </div>

    <div class="row">
        <div class="col-8 mx-auto">
            <h4 class="mb-3">Vos coordonées</h4>
            <form class="needs-validation">
                <div class="mb-3">
                    <label for="name">Votre nom</label>
                    <input type="text" class="form-control" id="name" placeholder="Nom" required>
                </div>

                <div class="mb-3">
                    <label for="email">Votre email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <label for="subject">Sujet</label>
                    <input type="text" class="form-control" id="subject" placeholder="Sujet" required>
                </div>

                <div class="mb-3">
                    <label for="message">Votre message</label>
                    <textarea type="text" rows="5" class="form-control" id="message" placeholder="Votre message"></textarea>
                </div>

                <hr class="mb-4">

                <button class="btn btn-primary btn-lg d-block mx-auto" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>

@endsection