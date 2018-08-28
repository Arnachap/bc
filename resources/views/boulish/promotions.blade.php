@extends('layouts.boulish')

@section('content')

    <h1 class="border-bottom">Promotions du moment</h1>

    <div class="container-fluid">
        <div class="row text-center">

            @if(count($promotions) > 0)
        
                @foreach($promotions as $promo)
        
                    <div class="col-md-3 p-3">
                        <div id="promo-{{ $promo->id }}" class="card">
                            <div class="card-body">
                                <h2 class="card-title">{{ $promo->name }}</h2>

                                <p class="card-text">{{ $promo->description }}</p>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <i id="editPromoButton-{{ $promo->id }}" class="fa fa-2x fa-pencil text-primary pointer"></i>
                                    </div>

                                    <div class="col">
                                        {!! Form::open(['action' => ['PromotionsController@destroy', $promo->id], 'method' => 'POST']) !!}

                                            {{ Form::hidden('_method', 'DELETE') }}

                                            {{ Form::button('<i class="fa fa-2x fa-trash text-danger pointer"></i>', ['type' => 'submit', 'class' => 'p-0 border-0 bg-white']) }}

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="editPromoForm-{{ $promo->id }}" class="card" style="display: none;">
                            <div class="card-body">
                                {!! Form::open(['action' => ['PromotionsController@update', $promo->id], 'method' => 'POST']) !!}

                                    {{ Form::text('name', $promo->name, ['class' => 'form-control my-2', 'placeholder' => 'Nom de la promotion']) }}
        
                                    {{ Form::textarea('description', $promo->description, ['class' => 'form-control my-2', 'placeholder' => 'Description', 'rows' => '2']) }}
        
                                    {{ Form::hidden('_method', 'PUT') }}
                                    
                                    {{ Form::submit('Ajouter la promotion', ['class' => 'btn btn-primary mt-3']) }}

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
        
                @endforeach
        
            @endif

            <div class="col-md-3 p-3">
                <div class="card">
                    <div id="addPromoButton" class="card-body text-primary pointer">
                        <h2 class="card-title">
                            <i class="fa fa-2x fa-plus"></i>
                        </h2>

                        <p class="card-text">Ajouter une promotions</p>
                    </div>

                    <div id="addPromoForm" class="card-body text-primary" style="display: none;">
                        {!! Form::open(['action' => 'PromotionsController@store', 'method' => 'POST']) !!}

                            {{ Form::text('name', '', ['class' => 'form-control my-2', 'placeholder' => 'Nom de la promotion']) }}

                            {{ Form::textarea('description', '', ['class' => 'form-control my-2', 'placeholder' => 'Description', 'rows' => '2']) }}

                            {{ Form::submit('Ajouter la promotion', ['class' => 'btn btn-secondary mt-3']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection