@extends('layouts.app')

@section('content')

<section class="products">
  <div class="container">
    <h1>Nos produits</h1>
    <h2>Préparés chaque jour, sur place, avec des produits frais et de qualité</h2>

    <div class="accordion" id="productCards">

      @foreach($productCategories as $category)

        <div class="card">
          <div class="card-header collapsed" id="heading-{{ $category->id }}" data-toggle="collapse" data-target="#collapse-{{ $category->id }}" aria-expanded="true" aria-controls="collapse-{{ $category->id }}">
            {{ $category->name }}
            <small>{{ $category->description }}</small>
            <i class="fa fa-angle-up"></i>
          </div>

          <div id="collapse-{{ $category->id }}" class="collapse" aria-labelledby="heading-{{ $category->id }}" data-parent="#productCards">
            <div class="card-body">
              <ul>

                @if(count($products) > 0)

                  @foreach($products as $product)

                    @if($product->category_id == $category->id)

                      <li>
                        <div class="product-name">
                          {{ $product->name }}

                          @if(!empty($product->description))
                            <small>{{ $product->description }}</small>
                          @endif
                        </div>

                        <div class="product-price">
                          {{ $product->price }}€ 
                      
                          @if(!empty($product->portion))
        
                            / {{ $product->portion }}
        
                          @endif
                        </div>
                      </li>

                    @endif
                  
                  @endforeach

                @endif
              </ul>
            </div>
          </div>
        </div>

      @endforeach

    </div>
  </div>
</section>

@endsection