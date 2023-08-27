@extends('layouts.app')

@section('css')
    <link 
        rel="stylesheet" 
        href="{{ asset('css/reservationdone.css') }}"
    >
@endsection

@section('content')
    <div class="reservation-card">
        <div class="reservation-message">
            <span class="reservation-message__content">ご予約ありがとうございます</span>
        </div>
        <div class="buck-button">
            <form action="/" class="buck-button__form" method="GET">
                @csrf
                <button class="buck-button__submit">
                    戻る
                </button>
            </form>
        </div>
    </div>
@endsection