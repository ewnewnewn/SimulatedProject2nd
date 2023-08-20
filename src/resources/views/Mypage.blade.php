@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<body>
  <div class="container">
      <div class="reservations">
          <h2>予約状況</h2>
          @foreach($reservations as $reservation)
              <div class="reservation">
                  <span class="checkmark">✔</span> 予約{{ $loop->iteration }}
                  <button class="cancel-button">✖</button>
                  <div class="details">
                      <p>Shop: {{ $reservation->shop->name }}</p>
                      <p>Date: {{ $reservation->date }}</p>
                      <p>Time: {{ $reservation->time }}</p>
                      <p>Number: {{ $reservation->number }}</p>
                  </div>
              </div>
          @endforeach
      </div>
      <div class="favorites">
          <h2>お気に入り店舗</h2>
          <div class="cards">
              @foreach($favorites as $favorite)
                  <div class="card">
                      <img src="{{ asset('images/icon_img' . $favorite->shop->image) }}" alt="{{ $favorite->shop->name }}">
                      <h3>{{ $favorite->shop->name }}</h3>
                      <p>#{{ $favorite->shop->area }} #{{ $favorite->shop->genre }}</p>
                      <a href="{{ url('/detail/' . $favorite->shop->id) }}" class="detail-button">店舗詳細</a>
                      <button class="favorite-button">❤</button>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</body>
@endsection