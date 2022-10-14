@extends('layouts.master')
@section('title', 'Single News')
@section('content')
    <div class="container">
        <h1>{{ $team->name }}</h1>
        <p>The team is from {{ $team->city}}, on the address {{ $team->address }}</p>
        <p>You can conntact us on: {{ $team->email }}</p>

        @foreach ( $team->players as $player )
            <li><a href="{{ route('show-player', [ 'id' => $player->id ]) }}">{{ $player->first_name }} {{ $player->last_name }} </a></li>
        @endforeach

        <h3>Comments</h3>
        <ul>
            @foreach ($team->comments as $comment )
                <p>Comment: {{ $comment->content }} </p>
                <small>Posted by: {{ $comment->user->name }} at {{ $comment->created_at }} </small>
            @endforeach

            <form method="POST" action="/teams/{{ $team->id }}/comments" class="form-group">
                @csrf

                <div class="form-group-item">
                    <label>Leave a comment:</label>
                    <textarea name="content" rows="5" cols="20" class="form-control"></textarea>
                </div>

                @error('content')
                    <div> {{ $message }} </div>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
@endsection
