@extends('layouts.app')

@section('content')

<div class="container-fluid p-0">
    <div class="position-relative overflow-hidden py-5 text-center text-light bg-dark" style="height: 60vh;">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Slider</h1>
            <p class="lead font-weight-normal">Vers autres pages, promos, plats du jour, etc...</p>
            <a class="btn btn-outline-light" href="#">Avec bouton</a>
        </div>
    </div>
</div>

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
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Hachi
                    <span class="badge-primary badge-pill">5€ / portion</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Entrecôte
                    <span class="badge-primary badge-pill">10€ les 100gr</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Filet de boeuf
                    <span class="badge-primary badge-pill">12€ les 150gr</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pinces de crabe
                    <span class="badge-primary badge-pill">7€ les deux</span>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection