@extends('layouts.app')
    
@section('css')
    <link 
        rel="stylesheet" 
        href="{{ asset('css/date.css') }}"
    >
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <li>{{ $errors->first('username') }}</li> 
                <!-- emailフィールドのエラーメッセージを表示 -->
                <li>{{ $errors->first('email') }}</li> 
                <!-- passwordフィールドのエラーメッセージを表示 -->
                <li>{{ $errors->first('password') }}</li> 
            </ul>
        </div>
    @endif 


    <div class="register">
        <span class="register__title">会員登録</span>

        <form class="form" action="/register" method="POST">
            @csrf
            <div class="register-form__item">
                <input 
                    type="text" 
                    class="register-form__item-input"
                    name="name"
                    value="{{ old('name')}}"
                >
            </div>
            <div class="register-form__item">
                <input 
                    type="email" 
                    class="register-form__item-input"
                    name="email"
                    value="{{old('email')}}"
                >
            </div>
            <div class="register-form__item">
                <input 
                    type="password" 
                    class="register-form__item-input"
                    name="password"
                >
            </div>
            <div class="register-form__item">
                <input 
                    type="password" 
                    class="register-form__item-input"
                    name="password_confirmation"
                >
            </div>
            <div class="register-form__button">
                <button class="register-form__button-submit">
                    会員登録
                </button>
            </div>
        </form>

        <div class="login-register">
            <p>アカウントをお持ちの方はこちらから</p>
            <a href="/login" class="login__link">
                ログイン
            </a>
        </div>

    </div>
@endsection