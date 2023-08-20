@extends('layouts.app')
    
@section('css')
    <link 
        rel="stylesheet" 
        href="{{ asset('css/register.css') }}"
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
        <span class="register__title">Registration</span>

        <form class="form" action="/register" method="POST">
            @csrf
            <div class="register-form__item">
                <img src="{{ asset('img/icon_img/person-fill.svg') }}">
                <input 
                    type="text" 
                    class="register-form__item-input"
                    name="name"
                    placeholder="Username"                
                    value="{{ old('name')}}"
                >
            </div>
            <div class="register-form__item">
                <img src="{{ asset('img/icon_img/envelope-fill.svg') }}">
                <input 
                    type="email" 
                    class="register-form__item-input"
                    name="email"
                    placeholder="Email"
                    value="{{old('email')}}"
                >
            </div>
            <div class="register-form__item">
                <img src="{{ asset('img/icon_img/lock.svg') }}">
                <input 
                    type="password" 
                    class="register-form__item-input"
                    name="password"
                    placeholder="Password"                
                >
            </div>

            <div class="register-form__button">
                <button class="register-form__button-submit">
                    登録
                </button>
            </div>
        </form>
    </div>
@endsection