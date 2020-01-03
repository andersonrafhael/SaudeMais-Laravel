@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/Login.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container" id="geral">
    <div id="corpo_login">
        <h1>Entrar</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember" id="remember">
                                {{ __('Remember Me') }}
                            </label>
                    </div>
                </div>
            </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" id="acessar">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="igortroll" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?') }}
                            </a>
                        @endif
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
