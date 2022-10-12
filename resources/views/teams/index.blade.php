@include('partials.navbar')
@foreach ($teams as $team )

    <h1><a href="{{ route('show-team', [ 'id' => $team->id ]) }}">{{ $team->name }}</a></h1>

@endforeach
