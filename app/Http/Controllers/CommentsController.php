<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Team;
use App\Models\Comment;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;


class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden-comment')->only('store');
    }

    public function store(CreateCommentRequest $request, $id)
    {
        $team = Team::find($id);
        $comment = new Comment();

        $comment->content = request('content');
        $comment->team_id = $id;
        $comment->user_id = auth()->user()->id;

        $comment->save();

        Mail::to($team)->send(new CommentReceived($team));


        return redirect()->back();
    }
}
