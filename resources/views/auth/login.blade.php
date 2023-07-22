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
        color: white;
        font-weight: 500;
    }
    .login-here{
        width: 100%;
        padding: 50px 40px;

    }
</style>

@section('content')
<div class="login-content">
    <div class="container">
        <div class="login-here">
            <span class="main-title">{{__('Login Here')}}</span>
            <form action="{{ route('login') }}" method="POST">
            @csrf
    
    
    
            </form>
        </div>

    </div>
</div>


@endsection
