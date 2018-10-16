@extends('layouts.boulish')

@section('content')

    <h1 class="border-bottom">Plats du jour</h1>

    <div class="container-fluid">
        <div class="row text-center">

            @if(count($dailyMeals) > 0)

                @foreach($dailyMeals as $meal)

                    <div class="col-md-3 p-3">
                        <div id="dailyMeal-{{ $meal->id }}" class="card">
                            <div class="card-body">
                                <h2 class="card-title pricing-card-title">{{ $meal->date }}</h2>
            
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>
                                        <h3>{{ $meal->name }}</h3>
                                    </li>

                                    @if(!empty($meal->description))
                                        <li>
                                            {{ $meal->description }}
                                        </li>
                                    @endif

                                    <li>{{ $meal->price }}€ 

                                        @if(!empty($meal->portion))

                                            / {{ $meal->portion }}</p>

                                        @endif

                                    </li>
                                </ul>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div id="editMealButton-{{ $meal->id }}" class="col">
                                        <i class="fa fa-2x fa-pencil text-primary pointer"></i>
                                    </div>

                                    <div class="col">
                                        {!! Form::open(['action' => ['DailyMealsController@destroy', $meal->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}

                                            {{ Form::button('<i class="fa fa-2x fa-trash text-danger pointer"></i>', ['type' => 'submit', 'class' => 'p-0 border-0 bg-white']) }}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="editMealForm-{{ $meal->id }}" class="card" style="display: none;">
                            <div class="card-body text-center">
                                {!! Form::open(['action' => ['DailyMealsController@update', $meal->id], 'method' => 'POST']) !!}
                                    {{ Form::date('date', $meal->date, ['class' => 'form-control my-2']) }}

                                    {{ Form::text('name', $meal->name, ['class' => 'form-control my-2', 'placeholder' => 'Nom du plat']) }}

                                    <div class="row">
                                        <div class="col">
                                            {{ Form::number('price', $meal->price, ['class' => 'form-control', 'placeholder' => 'Prix', 'step' => '0.01']) }}
                                        </div>
        
                                        <div class="col">
                                            {{ Form::text('portion', $meal->portion, ['class' => 'form-control', 'placeholder' => 'Portion']) }}
                                        </div>
                                    </div>
                                    
                                    {{ Form::hidden('_method', 'PUT') }}

                                    {{ Form::submit('Modifier le menu du jour', ['class' => 'btn btn-secondary my-2']) }}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                
                @endforeach

            @endif

            <div class="col-md-3 p-3">
                <div class="card">
                    <div id="addDailyMealButton" class="card-body text-primary pointer">
                        <h2 class="card-title">
                            <i class="fa fa-2x fa-plus"></i>
                        </h2>

                        <p class="card-text">Ajouter un plat du jour</p>
                    </div>

                    <div id="addDailyMealForm" class="card-body text-center" style="display: none;">
                        {!! Form::open(['action' => 'DailyMealsController@store', 'method' => 'POST']) !!}

                            {{ Form::date('date', '', ['class' => 'form-control my-2']) }}

                            {{ Form::text('name', '', ['class' => 'form-control my-2', 'placeholder' => 'Nom du plat']) }}

                            {{ Form::textarea('description', '', ['class' => 'form-control my-2', 'placeholder' => 'Description', 'rows' => '2']) }}

                            <div class="row">
                                <div class="col">
                                    {{ Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Prix', 'step' => '0.01']) }}
                                </div>

                                <div class="col">
                                    {{ Form::text('portion', '', ['class' => 'form-control', 'placeholder' => 'Portion']) }}
                                </div>
                            </div>

                            {{ Form::submit('Ajouter aux menus du jour', ['class' => 'btn btn-secondary mt-4']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection