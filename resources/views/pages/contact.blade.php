@extends('layouts.app')

@section('content')

<section class="contact">
    <div class="container">
        <h1>Nous contacter</h1>
        <p class="intro">Une demande de devis ? Un renseignement ?
            <br> N'hésitez pas à nous contacter, nous répondrons à votre requête au plus vite.</p>
    
        <div class="row">
            <div class="col-8 mx-auto">
                <form class="needs-validation">
                    <div class="form-field">
                        <label for="name">Votre nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Nom" required>
                    </div>
    
                    <div class="form-field">
                        <label for="email">Votre email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
    
                    <div class="form-field">
                        <label for="subject">Sujet</label>
                        <input type="text" class="form-control" id="subject" placeholder="Sujet" required>
                    </div>
    
                    <div class="form-field">
                        <label for="message">Votre message</label>
                        <textarea type="text" rows="5" class="form-control" id="message" placeholder="Votre message"></textarea>
                    </div>
    
                    <hr>
    
                    <div class="button">
                        <input class="btn btn-secondary btn-lg" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection