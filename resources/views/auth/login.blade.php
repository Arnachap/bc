@extends('layouts.boulish')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-6 mx-auto text-center">
                <form class="form-signin" method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <h1 class="h3 mb-3 font-weight-normal">{{ __('Connexion') }}</h1>
            
                    <label for="mail" class="sr-only">{{ __('E-Mail') }}</label>
            
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
            
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            
                    <label for="inputPassword" class="sr-only">{{ __('Mot de passe') }}</label>
            
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            
                    <button class="btn btn-lg btn-secondary btn-block my-3" type="submit">{{ __('Connexion') }}</button>
                </form>
            </div>
    </div>
</div>
@endsection
