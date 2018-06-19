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
            @if(count($products) > 0)
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->name }}</th>

                        <td class="text-right">{{ $product->price }}€ / {{ $product->portion }}</td>

                        <td class="text-center text-primary"><i class="fa fa-2x fa-pencil"></i></td>

                        <td class="text-center text-danger"><i class="fa fa-2x fa-trash"></i></td>
                    </tr>
                @endforeach
            @else

            @endif

            <tr id="addProductButton">
                <th colspan="4" scope="row" class="text-center text-success">
                    <i class="fa fa-2x fa-plus-circle"></i><br>
                    Ajouter un produit
                </th>
            </tr>

            <tr id="addProductForm" style="display: none;">
                <form action="#">
                    <th scope="row">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Cotelettes">
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Marinés à la sauce au caramel">
                            </div>
                        </div>
                    </th>
                    
                    <td>
                        <input type="text" class="form-control w-50 ml-auto" placeholder="5,00">
                    </td>

                    <td>
                        <p style="font-size: 20px;">€ par</p>
                    </td>

                    <td>
                        <input type="text" class="form-control" placeholder="kg">
                    </td>
                </form>
            </tr>
        </tbody>
    </table>

    <button class="btn btn-success d-block mx-auto">Ajouter une catégorie</button>
</main>

@endsection