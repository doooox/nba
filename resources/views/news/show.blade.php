@include('partials.navbar')
<div>
    <h1>{{ $news->title }}</h1>
    <p> {{ $news->content }}</p>
    <small>Posted by: {{ $news->user->name }} </small>
    </ul>
</div>
<div>
    @foreach ($news->teams as $team )
        <a href="{{ route('teamNews', ['teamName'=>$team->name]) }}">{{ $team->name }}</a>
    @endforeach
</div>
