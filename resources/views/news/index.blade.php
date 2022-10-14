@extends('layouts.master')
@section('title', 'All News')

@section('content')
    @foreach ($news as $singleNews )
        <div class="container">
            <h4><a href="{{ route('show-news', [ 'id' => $singleNews->id ]) }}">{{ $singleNews->title }}</a></h4>
            <p>Posted by: {{ $singleNews->user->name }}</p>
        </div>
    @endforeach
    {{$news->links()}}
@endsection
