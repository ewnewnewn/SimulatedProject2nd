@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shopall.css') }}">
@endsection

@section('header')
@endsection


@section('content')
    <!-- 左側のコンテンツ -->
    <div class="left-content">
        <div class="left-header">
            <a href="/"><</a>
            <h1>{{ $shop->name }}</h1>
        </div>
        <div class="shop-image">
            <img src="{{ asset('img/shop_img/' . $shop->image_path) }}" alt="{{ $shop->name }}">
        </div>
        <div class="shop-details">
            <p>#{{ $shop->area }} #{{ $shop->genre }}</p>
            <p>{{ $shop->detail }}</p>
        </div>
    </div>

    <!-- 右側のコンテンツ -->
    <div class="right-content">
        <h1>予約</h1>
        <form action="/reservation/{{ $shop->id }}" method="POST">
            @csrf
            <input type="date" id="reservation_date" name="reservation_date" required>
            <input type="time" id="reservation_time" name="reservation_time" required>
            <input type="number" id="reservation_member" name="reservation_member" required>
            <button type="submit">予約する</button>
        </form>
        <!-- 入力確認画面 -->
        <div class="confirmation">
            <h2>入力内容確認</h2>
            <p>予約日: <span id="confirm_date"></span></p>
            <p>予約時間: <span id="confirm_time"></span></p>
            <p>人数: <span id="confirm_member"></span></p>
            <button id="confirm_button">確認</button>
        </div>
    </div>
@endsection
