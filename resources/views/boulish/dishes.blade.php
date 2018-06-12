@extends('layouts.boulish')

@section('content')

<h1 class="border-bottom">Plats du jour</h1>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="../img/plate1.jpg">

            <div class="card-body">
                <h1 class="card-title pricing-card-title">Jeudi 31 mai</h1>

                <ul class="list-unstyled mt-3 mb-4">
                    <li>Foie gras d'oie truffé</li>
                    <li>10,80€ / portion</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="../img/plate1.jpg">

            <div class="card-body">
                <h1 class="card-title pricing-card-title">Vendredi 1 juin</h1>

                <ul class="list-unstyled mt-3 mb-4">
                    <li>Foie gras d'oie truffé</li>
                    <li>10,80€ / portion</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="../img/plate1.jpg">

            <div class="card-body">
                <h1 class="card-title pricing-card-title">Samedi 2 juin</h1>

                <ul class="list-unstyled mt-3 mb-4">
                    <li>Foie gras d'oie truffé</li>
                    <li>10,80€ / portion</li>
                </ul>
            </div>
        </div>
    </div>
</div>

    @endsection