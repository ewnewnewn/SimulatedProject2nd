@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shopall.css') }}">
@endsection

@section('header')
    <input type="text" id="area" placeholder="エリア">
    <input type="text" id="genre" placeholder="ジャンル">
    <input type="text" id="search" placeholder="店名で検索">
@endsection

@section('content')
    <div class="cards">
    @foreach($shops as $shop)
        <div class="card">
            <img src="{{ asset('images/' . $shop->image_path) }}" alt="{{ $shop->name }}">
            <h2>{{ $shop->name }}</h2>
            <p>#{{ $shop->area }} #{{ $shop->genre }}</p>
            <a href="{{ url('/detail/' . $shop->id) }}" class="detail-button">店舗詳細</a>
            <button class="favorite-button">❤</button>
        </div>
    @endforeach
    </div>
@endsection