@extends('layouts.app')
    
@section('css')
    <link rel="stylesheet" href="{{ asset('css/date.css') }}">
@endsection

@section('content')
    <div class="login">
        <span class="login__title">ログイン</span>
        
        <form class="login-form" action="/login" method="POST">
            @csrf
            <div class="login-form__item">
                <input 
                    type="email" 
                    class="login-form__item-input"
                    name="email"
                    value="{{old('email','メールアドレス')}}"
                >
            </div>
            <div class="login-form__item">
                <input 
                    type="text" 
                    class="login-form__item-input"
                    name="password"
                    value="パスワード"
                >
            </div>
            <div class="login-form__button">
                <button class="login-form__button-submit">
                    ログイン
                </button>
            </div>
        </form>

        <div class="login-register">
            <p>アカウントをお持ちでない方はこちらから</p>
            <a href="/register" class="register__link">
                会員登録
            </a>
        </div>
    </div>
@endsection