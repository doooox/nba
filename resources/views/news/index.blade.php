@include('partials.navbar')
@foreach ($news as $singleNews )
    <div>
        <h4><a href="{{ route('show-news', [ 'id' => $singleNews->id ]) }}">{{ $singleNews->title }}</a></h4>
        <p>Posted by: {{ $singleNews->user->name }}</p>
    </div>
@endforeach
{{$news->links()}}
