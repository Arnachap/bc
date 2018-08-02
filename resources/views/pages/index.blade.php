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
        <div class="carousel-item active" style="background-image: url('../img/slide_1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h1>Boucherie Centrale</h1>
            <p>Boucher, charcutier, traiteur par passion depuis 19xx.</p>
            <a data-scroll href="#intro" class="btn btn-lg btn-primary js-trigger">Plus d'infos</a>
          </div>
        </div>
        
        <div class="carousel-item" style="background-image: url('../img/slide_2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Nos produit</h3>
            <p>Chaque jour, retrouvez nos produits frais et de qualité, élaboré sur place.</p>
            <a href="/nos-produits" class="btn btn-lg btn-primary">Voir nos produits</a>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('../img/slide_3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Service Traiteur</h3>
            <p>Un service unique pour toutes les occasions !</p>
            <a href="/service-traiteur" class="btn btn-lg btn-primary">Voir nos menus</a>
          </div>
        </div>
      </div>
    </div>
</header>

<section id="intro">
    <div class="container intro">
        <div class="row">
            <div class="col-md-5 align-self-start">
                <div id="frame1" class="frame">
                    <img src="./img/intro_1.jpg" class="img-fluid" alt="">
                </div>
            </div>
    
            <div class="col-md-7 align-self-center">
                <h2>Bienvenue !</h2>
                <p>La <i>Boucherie Centrale</i> de Malzéville vous propose chaque jours des produits frais, élaborés sur place. De la viande au fromage, en passant par les vins et accompagnements en tous genres, notre équipe met en oeuvre tout son savoir-faire pour créer des mets d'une qualité inégalable.</p>
            </div>
        </div>
    </div>
    
    <div class="container intro">
        <div class="row">
            <div class="col-md-7 align-self-center">
                <h2>Notre Service Traiteur</h2>
                <p>En plus de ses produits traditionnels, le service traiteur de la <i>Boucherie Centrale</i> vous permet d'ajouter une touche de saveur unique à chacun de vos évènements.</p>
                <a href="/service-traiteur" class="btn btn-secondary">Voir nos menus</a>
                <a href="/service-traiteur" class="btn btn-primary">Demander un devis</a>
            </div>
    
            <div class="col-md-5 align-self-start">
                <div id="frame2" class="frame">
                    <img src="./img/intro_2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

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

@include('inc.maps')

@endsection