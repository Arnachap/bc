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
                        <th scope="row">
                            {{ $product->name }}

                            @if(!empty($product->description))
                                <small> ({{ $product->description }})</small>
                            @endif
                        </th>

                        <td class="text-right">{{ $product->price }}€ / {{ $product->portion }}</td>

                        <td id="{{ $product->id }}" class="editButton text-center text-primary">
                            <i class="fa fa-2x fa-pencil"></i>
                        </td>

                        <td class="text-center">
                            {!! Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::button('<i class="fa fa-2x fa-trash text-danger"></i>', ['type' => 'submit', 'class' => 'p-0 border-0 bg-white']) }}
                            {!! Form::close() !!}
                        </td>
                    </tr>

                    <tr id="editForm-{{ $product->id }}" style="display: none;">
                        {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST']) !!}
                            @include('boulish.inc.editForm')
                        {!! Form::close() !!}
                    </tr>
                @endforeach
            @else

            @endif

            <tr id="addButton">
                <th colspan="4" scope="row" class="text-center text-primary">
                    <i class="fa fa-2x fa-plus-circle"></i><br>
                    Ajouter un produit
                </th>
            </tr>

            <tr id="addForm" style="display: none;">
                {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
                    @include('boulish.inc.addForm')
                {!! Form::close() !!}
            </tr>
        </tbody>
    </table>

    <button class="btn btn-primary d-block mx-auto">Ajouter une catégorie</button>
</main>

@endsection