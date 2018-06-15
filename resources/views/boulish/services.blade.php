@extends('layouts.boulish')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h1 class="border-bottom">Service Traiteur</h1>

    <table class="table bg-white table-hover my-4">
        <thead>
            <tr class="bg-dark text-white">
                <th scope="col" style="width: 80%;">Apéritifs</th>
                <th style="width: 10%;"></th>
                <th style="width: 5%;">Modifier</th>
                <th style="width: 5%;">Supprimer</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">Mini paté en Croûte 500g</th>

                <td class="text-right">10,00 €</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Plateau de 12 Verrines <small>(Légumes Poulet Pesto - Tartare de Légumes et Saumon - St-Jacques Avocat - Foie Gras et Pommes)</small></th>

                <td class="text-right">15,80 €</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Plateau 12 Mini Bouchées <small>(Escargot, Poisson, Reine)</small></th>

                <td class="text-right">9,80 €</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th colspan="4" scope="row" class="text-center text-success">
                    <button class="btn btn-light text-success">
                        <i class="fa fa-2x fa-plus-circle"></i><br>
                        Ajouter un produit
                    </button>
                </th>
            </tr>
        </tbody>
    </table>

    <table class="table bg-white table-hover my-4">
        <thead>
            <tr class="bg-dark text-white">
                <th scope="col" style="width: 80%;">Entrées froides</th>
                <th style="width: 10%;"></th>
                <th style="width: 5%;">Modifier</th>
                <th style="width: 5%;">Supprimer</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1/2 Langouste à la Parisienne</th>

                <td class="text-right">19,80 € la pièce</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Sauce Fromagère Truffée</th>

                <td class="text-right">8,50 € la pièce</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Plateau de Charcuterie Fine <small>(4 personnes minimum)</small></th>

                <td class="text-right">4,50 € par pers.</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th colspan="4" scope="row" class="text-center text-success">
                    <button class="btn btn-light text-success">
                        <i class="fa fa-2x fa-plus-circle"></i><br>
                        Ajouter un produit
                    </button>
                </th>
            </tr>
        </tbody>
    </table>

    <button class="btn btn-success d-block mx-auto">Ajouter une catégorie</button>
</main>

@endsection