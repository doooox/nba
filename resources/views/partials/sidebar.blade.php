<div>
    @foreach( $teamsWithNews as $team )
        <a href="{{ route('teamNews', ['teamName'=>$team->name]) }}">{{ $team->name }}</a>
    @endforeach
</div>
