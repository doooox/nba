@include('partials.navbar')

<h1>{{ $team->name }}</h1>
<p>The team is from {{ $team->city}}, on the address {{ $team->address }}</p>
<p>You can conntact us on: {{ $team->email }}</p>

@foreach ( $team->players as $player )
    <li><a href="{{ route('show-player', [ 'id' => $player->id ]) }}">{{ $player->first_name }} {{ $player->last_name }} </a></li>
@endforeach

