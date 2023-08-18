@extends('layouts.app')

@section('css')
    <link 
        rel="stylesheet" 
        href="{{ asset('css/date.css') }}"
    >
@endsection

@section('content')
    <div class="thanks-card">
        <div class="thanks-message">
            <span class="thanks-message__content">会員登録ありがとうございます</span>
        </div>
        <div class="login-button">
            <form action="" class="login-button__form" method="GET">
                @csrf
                <button class="login-button__submit">
                    ログインする
                </button>
            </form>
        </div>
    </div>
@endsection