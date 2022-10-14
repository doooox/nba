<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    @foreach( $teamsWithNews as $team )
        <a href="{{ route('teamNews', ['teamName'=>$team->name]) }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">{{ $team->name }}</a>
    @endforeach
</div>
