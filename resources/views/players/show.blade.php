<h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
<p>Team: {{ $player->team->name }}</p>
<p>Email: {{ $player->email }} </p>
<a href="/teams">Back</a>
