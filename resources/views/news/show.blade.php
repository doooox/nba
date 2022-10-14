@include('partials.navbar')

<h1>{{ $news->title }}</h1>
<p> {{ $news->content }}</p>
<small>Posted by: {{ $news->user->name }} </small>
</ul>
