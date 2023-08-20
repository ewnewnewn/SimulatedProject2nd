@extends('layouts.app')
    
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="login">
        <span class="login__title">Login</span>
        
        <form class="login-form" action="/login" method="POST">
            @csrf

            <div class="login-form__item">
                <img src="{{ asset('img/icon_img/envelope-fill.svg') }}">
                <input 
                    type="email" 
                    class="login-form__item-input"
                    name="email"
                    placeholder="Email"
                    value="{{old('email')}}"
                >
            </div>

            <div class="login-form__item">
                <img src="{{ asset('img/icon_img/lock.svg') }}">
                <input 
                    type="text" 
                    class="login-form__item-input"
                    name="password"
                    placeholder="Password"                
                >
            </div>

            <div class="login-form__button">
                <button class="login-form__button-submit">
                    ログイン
                </button>
            </div>
            
        </form>
    </div>
@endsection