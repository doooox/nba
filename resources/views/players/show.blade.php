@extends('layouts.master')
@section('title', 'Single News')
@section('content')
    <div class="container">
        <h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
        <p>Team: {{ $player->team->name }}</p>
        <p>Email: {{ $player->email }} </p>
    </div>
@endsection
