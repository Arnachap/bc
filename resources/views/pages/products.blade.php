@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="text-center my-4">Nos produits</h1>

  @foreach($productCategories as $category)

    <table class="table bg-white table-hover my-4">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col" style="width: 88%;">{{ $category->name }} 
            <small class="ml-3">{{ $category->description }}</small>
          </th>

          <th class="text-right" style="width: 12%;">Prix</th>
        </tr>
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
              </tr>

            @endif

          @endforeach

        @endif

      </tbody>
    </table>

  @endforeach

</div>

@endsection