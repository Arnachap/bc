@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="text-center my-4">Nos produits</h1>

  <table class="table bg-white table-hover my-4">
    <thead>
      <tr class="bg-dark text-white">
        <th scope="col" style="width: 90%;">Boeuf
          <small class="ml-3">Origine France, élaboré sur place</small>
        </th>

        <th style="width: 10%;"></th>
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
    
            <td class="text-right">
              {{ $product->price }}€ 
              
              @if(!empty($product->portion))
                / {{ $product->portion }}
              @endif
            </td>
          </tr>
        @endforeach
      @endif
    </tbody>
  </table>
</div>

@endsection