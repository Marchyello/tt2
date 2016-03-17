<?php

namespace tt2\Http\Controllers;

use Illuminate\Http\Request;

use tt2\Comment;
use tt2\Http\Requests;

class CommentsController extends Controller
{
    public function store ($recipe, Request $request)
    {
        $somestring = "string";
        dd($somestring);
        $comment = new Comment($request->input('content'));

        $comment->recipe_id = $recipe;
        $comment->excerpt = Comment::generateExcerpt($comment->description);

        Auth::user()->comment()->save($comment);

        return redirect()->back();
    }
}
