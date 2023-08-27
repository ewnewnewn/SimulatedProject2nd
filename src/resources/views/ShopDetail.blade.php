@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shopdetail.css') }}">
@endsection

@section('header')
@endsection


@section('content')
    <!-- 左側のコンテンツ -->
    <div class="content">
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
            <h2>予約</h2>
            <form action="/reservation/{{ $shop->id }}" method="POST">
                @csrf
                <input type="date" id="reservation_date" name="reservation_date" required>

                <select id="reservation_time" name="reservation_time" required>
                    @for ($i = 0; $i < 24 * 60; $i += 10)
                        @php
                            $hours = floor($i / 60);
                            $minutes = $i % 60;
                            $time = sprintf('%02d:%02d', $hours, $minutes);
                        @endphp
                    <option value="{{ $time }}">{{ $time }}</option>
                    @endfor
                </select>

                <select id="reservation_member" name="reservation_member" required>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}人</option>
                    @endfor
                </select>

                <!-- 入力確認画面 -->
                <div class="confirmation">
                    <p>Shop <span id="confirm_date"> {{ $shop->name }} </span></p>
                    <p>Date<span id="confirm_date"></span></p>
                    <p>Time<span id="confirm_time"></span></p>
                    <p>Number<span id="confirm_member"></span></p>
                </div>
                <button type="submit">予約する</button>
            </form>

        </div>
    </div>

@endsection
