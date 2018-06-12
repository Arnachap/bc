@extends('layouts.boulish')

@section('content')

<h1 class="border-bottom">Service Traiteur</h1>

<table class="table bg-white table-hover my-4">
    <thead>
        <tr class="bg-dark text-white">
        <th scope="col" style="width: 88%;">Apéritifs</th>
        <th style="width: 12%;"></th>
        </tr>
    </thead>

    <tbody>
        <tr>
        <th scope="row">Mini paté en Croûte 500g</th>

        <td class="text-right">10,00 €</td>
        </tr>

        <tr>
        <th scope="row">Plateau de 12 Verrines <small>(Légumes Poulet Pesto - Tartare de Légumes et Saumon - St-Jacques Avocat - Foie Gras et Pommes)</small></th>

        <td class="text-right">15,80 €</td>
        </tr>

        <tr>
        <th scope="row">Plateau 12 Mini Bouchées <small>(Escargot, Poisson, Reine)</small></th>

        <td class="text-right">9,80 €</td>
        </tr>
    </tbody>
</table>

<table class="table bg-white table-hover my-4">
    <thead>
        <tr class="bg-dark text-white">
        <th scope="col" style="width: 88%;">Entrées froides</th>
        <th style="width: 12%;"></th>
        </tr>
    </thead>

    <tbody>
        <tr>
        <th scope="row">1/2 Langouste à la Parisienne</th>

        <td class="text-right">19,80 € la pièce</td>
        </tr>

        <tr>
        <th scope="row">Sauce Fromagère Truffée</th>

        <td class="text-right">8,50 € la pièce</td>
        </tr>

        <tr>
        <th scope="row">Plateau de Charcuterie Fine <small>(4 personnes minimum)</small></th>

        <td class="text-right">4,50 € par pers.</td>
        </tr>
    </tbody>
</table>

@endsection