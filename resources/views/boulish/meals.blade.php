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
                    <img class="card-img-top img-fluid" src="../img/plate1.jpg" alt="">

                    <div id="addDailyMealButton" class="card-body text-primary">
                        <i class="card-title pricing-card-title fa fa-4x fa-plus-circle"></i>
    
                        <h3>Ajouter un plat du jour</h3 >
                    </div>

                    <div id="addDailyMealForm" class="card-body text-center" style="display: none;">
                        {!! Form::open(['action' => 'DailyMealsController@store', 'method' => 'POST']) !!}
                            {{ Form::date('date', '', ['class' => 'form-control my-2']) }}
                            {{ Form::text('name', '', ['class' => 'form-control my-2', 'placeholder' => 'Nom du plat']) }}
                            <div class="row">
                                <div class="col">
                                    {{ Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Prix', 'step' => '0.01']) }}
                                </div>

                                <div class="col">
                                    {{ Form::text('portion', '', ['class' => 'form-control', 'placeholder' => 'Portion']) }}
                                </div>
                            </div>
                            {{ Form::submit('Ajouter aux Menus du jour', ['class' => 'btn btn-primary my-2']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection