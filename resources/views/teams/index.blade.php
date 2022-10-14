@extends('layouts.master')
@section('title', 'All News')

@section('content')
    <div class="container">
         @foreach ($teams as $team )
            <h1><a href="{{ route('show-team', [ 'id' => $team->id ]) }}">{{ $team->name }}</a></h1>
        @endforeach
@endsection
