@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center my-4">Nos produits</h1>

    <table class="table bg-white table-hover my-4">
        <thead>
          <tr class="bg-dark text-white">
            <th scope="col" style="width: 90%;">Boeuf <small class="ml-3">Origine France, élaboré sur place</small></th>
            <th style="width: 10%;"></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th scope="row">Entrecôte</th>

            <td class="text-right">18,50€ / kg</td>
          </tr>

          <tr>
            <th scope="row">Roastbeef</th>

            <td class="text-right">15€ / kg</td>
          </tr>

          <tr>
            <th scope="row">Côte de boeuf</th>

            <td class="text-right">16,30€ / kg</td>
          </tr>
        </tbody>
      </table>

      <table class="table bg-white table-hover my-4">
          <thead>
            <tr class="bg-dark text-white">
              <th scope="col" style="width: 90%;">Porc <small class="ml-3">Origine France, élaboré sur place</small></th>
              <th style="width: 10%;"></th>
            </tr>
          </thead>
  
          <tbody>
            <tr>
              <th scope="row">Echine</th>
  
              <td class="text-right">9€ / kg</td>
            </tr>
  
            <tr>
              <th scope="row">Filet mignon</th>
  
              <td class="text-right">12,50€ / kg</td>
            </tr>
  
            <tr>
              <th scope="row">Poitrine</th>
  
              <td class="text-right">10€ / kg</td>
            </tr>
          </tbody>
        </table>
</div>

@endsection