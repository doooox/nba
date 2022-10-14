@extends('layouts.master')
@section('title', 'Create News')

@section('content')
<form action="/news" method="POST">
     @csrf
    <div>
        <label>Leave a comment:</label>
        <textarea name="content" rows="5" cols="20" class="form-control"></textarea>
     </div>

    @error('content')
        <div> {{ $message }} </div>
     @enderror

    <div>
        <label>Select teams:</label>
        @foreach($teams as $team)
        <div>
            <input type="checkbox" id="team-{{$team->id}}" name="teams[]" value="{{$team->id}}">
            <label for="team-{{$team->id}}">{{$team->name}}</label>
        </div>
        @endforeach
        @error('teams')
        <div>{{$message}}</div>
        @enderror
    </div>

    <button type="submit">Submit</button>
</form>
@endsection
