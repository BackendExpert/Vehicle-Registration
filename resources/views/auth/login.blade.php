@extends('layouts.app')

<style>
    .login-content{
        text-align: center;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.801), rgba(0, 0, 0, 0.959)), url('https://wallpapercave.com/dwp1x/wp8825444.jpg');
        margin-top: -20px;
        padding: 200px 0;
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;        
    }
    .main-title{
        font-size: 40px;
        color: black;
        font-weight: 500;
    }
    .login-here{
        width: 100%;
        padding: 50px 40px;
        background: white;
    }
</style>

@section('content')
    <div class="login-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="login-here">
                        <span class="main-title">{{__('Login Here')}}</span>
                        <form action="{{ route('login') }}" method="POST">
                        @csrf
                
                            <label for="email">{{__('Email Address')}}</label>
                
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>    
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
