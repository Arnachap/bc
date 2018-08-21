@extends('layouts.app')

@section('content')

<section class="products">
  <div class="container">

    <h1>Service Traiteur</h1>
    <h2>La carte des menus et produits</h2>

    <div class="accordion" id="productCards">

      @foreach($serviceCategories as $category)
  
        <div class="card">
          <div class="card-header collapsed" id="heading-{{ $category->id }}" data-toggle="collapse" data-target="#collapse-{{ $category->id }}" aria-expanded="true" aria-controls="collapse-{{ $category->id }}">
            {{ $category->name }}
            <small>{{ $category->description }}</small>
            <i class="fa fa-angle-up"></i>
          </div>
  
          <div id="collapse-{{ $category->id }}" class="collapse" aria-labelledby="heading-{{ $category->id }}" data-parent="#productCards">
            <div class="card-body">
              <ul>
  
                @if(count($services) > 0)
  
                  @foreach($services as $service)
  
                    @if($service->category_id == $category->id)
  
                      <li>
                        <div class="product-name">
                          {{ $service->name }}

                          @if(!empty($service->description))
                            <small> {{ $service->description }}</small>
                          @endif
                        </div>
  
                        <div class="product-price">
                          {{ $service->price }}€ 
                      
                          @if(!empty($service->portion))
        
                            / {{ $service->portion }}
        
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