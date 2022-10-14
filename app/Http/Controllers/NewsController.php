<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Team;
use App\Http\Requests\CreateNewsRequest;



class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::with('user')->simplePaginate(5);
        $news = News::with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('news.index', compact('news'));
    }
    public function show($id)
    {
        $news = News::find($id);

        return view('news.show', compact('news'));
    }
    public function filterNews($teamName)
    {
        $team = Team::where('name', $teamName)->first();
        $news = $team->news()->simplePaginate(5);

        return view('news.index', compact('team', 'news'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('news.create', compact('teams'));
    }

    public function store(CreateNewsRequest $request)
    {
        $validated = $request->validated();

        $news = News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => auth()->user()->id,
        ]);
        $news->teams()->attach($request['teams']);
        session()->flash('message', "Thank you for publishing the article on www.nba.com");

        return redirect('/news');
    }
}
