@extends('layouts.boulish')

@section('content')

<div class="row">
    <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar border-right">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Plats du jour</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Promotions</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#">Produits</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Service-Traiteur</a>
            </li>
        </ul>
    </nav>
</div>
  
@endsection