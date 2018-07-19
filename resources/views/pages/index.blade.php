@extends('layouts.app')

@section('content')

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/random')">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/random')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/random')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
    </div>
</header>

<div class="container">
    <div class="row py-5">
        <div class="col-md-4 px-5 text-center">
            <h2 class="pb-3">Plats du jour</h2>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    @if(count($dailyMeals) > 0)

                        @foreach($dailyMeals as $meal)

                            @if($loop->first)

                                <div class="carousel-item active">
                                    <div class="card">
                                        <img class="card-img-top" src="./img/plate1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ Carbon\Carbon::parse($meal->date)->format('d F') }}</h5>

                                            <p class="card-text">{{ $meal->name }}</p>
                                        </div>

                                        <div class="card-footer bg-light">
                                            <p class="text-muted">{{ $meal->price }}€ 
                                                @if(!empty($meal->portion))
                                                    / {{ $meal->portion }}</p>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                            @else

                                <div class="carousel-item">
                                    <div class="card">
                                        <img class="card-img-top" src="./img/plate1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ Carbon\Carbon::parse($meal->date)->format('d F') }}</h5>

                                            <p class="card-text">{{ $meal->name }}</p>
                                        </div>

                                        <div class="card-footer bg-light">
                                            <p class="text-muted">{{ $meal->price }}€ 
                                                @if(!empty($meal->portion))
                                                    / {{ $meal->portion }}</p>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                            @endif
                                    
                        @endforeach

                    @endif
                
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4 px-5">
            <h2 class="text-center">Bienvenue !</h2>
            <p>Message de bienvenue, présentation, infos, horaires, adresse...</p>
        </div>

        <div class="col-md-4 px-5">
            <ul class="list-group list-group-flush">

                @if(count($promotions) > 0)

                    @foreach($promotions as $promo)

                        <li class="list-group-item text-center">
                            <h3>{{ $promo->name }}</h3>
                            <p>{{ $promo->description }}</p>
                        </li>

                    @endforeach

                @endif

            </ul>
        </div>
    </div>
</div>

@endsection