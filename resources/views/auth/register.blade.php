@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header text-center py-3">
                    <img src="{{ asset('img/pokeapi_256.png') }}" alt="Logo">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col my-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                            value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col my-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" placeholder="Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col d-grid mx-5 mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
