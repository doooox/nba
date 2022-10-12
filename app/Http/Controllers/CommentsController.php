<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Team;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden-comment')->only('store');
    }

    public function store(CreateCommentRequest $request, $id)
    {
        $comment = new Comment();

        $comment->content = request('content');
        $comment->team_id = $id;
        $comment->user_id = auth()->user()->id;

        $comment->save();

        // koristio sam dva razlicita nacina za upisivanje u bazu jer mi je u ovom slucaju bilo lakse da na ovaj nacin izvucem user_id

        return redirect()->back();
    }
}
