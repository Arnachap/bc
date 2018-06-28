@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="text-center my-4">Service Traiteur</h1>
  <h2 class="text-center">La carte des menus et produits</h2>

  @foreach($serviceCategories as $category)

    <table class="table bg-white table-hover my-4">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col" style="width: 88%;">
            {{ $category->name }} 
            <small>{{ $category->description }}</small>
          </th>
          <th style="width: 12%;"></th>
        </tr>
      </thead>

      <tbody>

        @if(count($services) > 0)

          @foreach($services as $service)

            @if($service->category_id == $category->id)

              <tr>
                <th scope="row">
                  {{ $service->name }} 

                  @if(!empty($service->description))

                    <small>({{ $service->description }})</small>

                  @endif

                </th>
        
                <td class="text-right">
                  {{ $service->price }}€ 
                  
                  @if(!empty($service->portion))

                    / {{ $service->portion }}

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