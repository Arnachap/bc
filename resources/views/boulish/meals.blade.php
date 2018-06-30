@extends('layouts.boulish')

@section('content')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h1 class="border-bottom">Plats du jour</h1>

    <div class="container-fluid">
        <div class="row text-center">

            @if(count($dailyMeals) > 0)

                @foreach($dailyMeals as $meal)

                    <div class="col-md-3 p-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="../img/plate1.jpg" alt="">
            
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">{{ $meal->date }}</h1>
            
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>{{ $meal->name }}</li>
                                    <li>{{ $meal->price }}€ / {{ $meal->portion }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
                @endforeach

            @endif

            <div class="col-md-3 p-3">
                <div class="card">
                    <div class="card-body text-success">
                        <i class="card-title pricing-card-title fa fa-4x fa-plus-circle"></i>
    
                        <h3>Ajouter un plat du jour</h3 >
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection