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
    <div class="container">
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
                <a href="/contact" class="btn btn-primary">Demander un devis</a>
            </div>
    
            <div class="col-md-5 align-self-start">
                <div id="frame2" class="frame">
                    <img src="./img/intro_2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="banner">
    <div id="banner-img" class="js-parallax" style="background-image: url(/../img/banner.jpg);"></div>
</section>

<section id="offers">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Nos offres du moments</h2>
                <p class="intro">Chaque jour, retrouvez nos plats du jour et nos promotions !</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav>
                    <ul>
                        <li id="mealOffersLink" class="offersLink active">Plats du jour</li>
                        <li id="promoOffersLink" class="offersLink">Promotions</li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="mealOffers" class="row">

            @if(count($dailyMeals) > 0)

                @foreach($dailyMeals as $meal)
                
                    <div class="col-md-6 offset-md-3">
                        <div class="row mealRow">
                            <div class="col-3 mealDate">
                                {{ Carbon\Carbon::parse($meal->date)->format('d') }}
                                <br>{{ Carbon\Carbon::parse($meal->date)->format('F') }}
                            </div>

                            <div class="col-6 mealInfo">
                                <h4>{{ $meal->name }}</h4>
                                <p>Feuilleté, et accompagné de sa sauce béchamel</p>
                            </div>

                            <div class="col-3 mealPrice">
                                {{ $meal->price }}€ 
                                @if(!empty($meal->portion))
                                    / {{ $meal->portion }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                @endforeach
            
            @endif

        </div>

        <div id="promoOffers" class="row">

            @if(count($promotions) > 0)

                @foreach($promotions as $promo)
                
                    <div class="col-md-6 offset-md-3">
                        <div class="row promoRow">
                            <div class="col promoInfo">
                                <h4>{{ $promo->name }}</h4>
                                <p>{{ $promo->description }}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            
            @endif

        </div>
    </div>
</section>

@include('inc.maps')

@endsection