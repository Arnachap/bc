@extends('layouts.boulish')

@section('content')

    <h1 class="border-bottom">Nos Produits</h1>

    @if(count($productCategories) > 0)
        @foreach($productCategories as $category)
            <table class="table bg-white table-hover my-4">
                <thead id="tableHeader-{{ $category->id }}">
                    <tr class="bg-dark text-white">
                        <th scope="col" style="width: 80%;">{{ $category->name }} 
                            <small class="ml-3">{{ $category->description }}</small>
                        </th>

                        <th style="width: 10%;"></th>

                        <th style="width: 5%;">
                            <button id="categoryButton-{{ $category->id }}" class="btn btn-primary py-0">Modifier</button>
                        </th>

                        <th style="width: 5%;">
                            {!! Form::open(['action' => ['ProductCategoriesController@destroy', $category->id], 'method' => 'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Supprimer', ['class' => 'btn btn-danger py-0']) }}
                            {!! Form::close() !!}
                        </th>
                    </tr>
                </thead>

                <thead id="editCategory-{{ $category->id }}" style="display: none;">
                    {!! Form::open(['action' => ['ProductCategoriesController@update', $category->id], 'method' => 'POST']) !!}
                        @include('boulish.inc.editCategoryForm')
                    {!! Form::close() !!}
                </thead>

                <tbody>
                    @if(count($products) > 0)
                        @foreach($products as $product)
                            @if($product->category_id == $category->id)
                                <tr>
                                    <th scope="row">
                                        {{ $product->name }}
            
                                        @if(!empty($product->description))
                                            <small> ({{ $product->description }})</small>
                                        @endif
                                    </th>
            
                                    <td class="text-right">
                                        {{ $product->price }}€
            
                                        @if(!empty($product->portion)) 
                                            / {{ $product->portion }}
                                        @endif
                                    </td>
            
                                    <td id="{{ $product->id }}" class="editButton text-center text-primary">
                                        <i class="fa fa-2x fa-pencil pointer"></i>
                                    </td>
            
                                    <td class="text-center">
                                        {!! Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::button('<i class="fa fa-2x fa-trash text-danger pointer"></i>', ['type' => 'submit', 'class' => 'p-0 border-0 bg-white']) }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
            
                                <tr id="editForm-{{ $product->id }}" style="display: none;">
                                    {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST']) !!}
                                        @include('boulish.inc.editForm')
                                    {!! Form::close() !!}
                                </tr>
                            @endif
                        @endforeach
                    @endif
        
                    <tr id="addButton-{{ $category->id }}">
                        <th colspan="4" scope="row" class="text-center text-primary pointer">
                            <i class="fa fa-2x fa-plus-circle"></i><br>
                            Ajouter un produit
                        </th>
                    </tr>
        
                    <tr id="addForm-{{ $category->id }}" style="display: none;">
                        {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
                            @include('boulish.inc.addForm')
                        {!! Form::close() !!}
                    </tr>
                </tbody>
            </table>
        @endforeach
    @endif

    <button id="addCategoryButton" class="btn btn-secondary d-block mx-auto my-5">Ajouter une catégorie</button>

    <table id="addCategoryForm" class="table bg-white table-hover my-5" style="display: none;">
        {!! Form::open(['action' => 'ProductCategoriesController@store', 'method' => 'POST']) !!}
            @include('boulish.inc.addCategoryForm')
        {!! Form::close() !!}
    </table>

@endsection