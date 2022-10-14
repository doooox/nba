<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Team;



class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->simplePaginate(5);

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
        return view('../teams.show', compact('team', 'news'));
    }
}
