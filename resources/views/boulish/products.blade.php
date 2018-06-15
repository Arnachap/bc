@extends('layouts.boulish')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h1 class="border-bottom">Nos Produits</h1>

    <table class="table bg-white table-hover my-4">
        <thead>
            <tr class="bg-dark text-white">
                <th scope="col" style="width: 80%;">Boeuf <small class="ml-3">Origine France, élaboré sur place</small></th>
                <th style="width: 10%;"></th>
                <th style="width: 5%;">Modifier</th>
                <th style="width: 5%;">Supprimer</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">Entrecôte</th>

                <td class="text-right">18,50€ / kg</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Roastbeef</th>

                <td class="text-right">15€ / kg</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Côte de boeuf</th>

                <td class="text-right">16,30€ / kg</td>

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
                <th scope="col" style="width: 80%;">Porc <small class="ml-3">Origine France, élaboré sur place</small></th>
                <th style="width: 10%;"></th>
                <th style="width: 5%;">Modifier</th>
                <th style="width: 5%;">Supprimer</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">Echine</th>

                <td class="text-right">9€ / kg</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Filet mignon</th>

                <td class="text-right">12,50€ / kg</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th scope="row">Poitrine</th>

                <td class="text-right">10€ / kg</td>

                <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
            </tr>

            <tr>
                <th colspan="4" scope="row" class="text-center">
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