<?php

namespace App\Http\Controllers;

use App\Comment;
use App\UserQuestion;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function store(Request $request, UserQuestion $question)
    {
    	$comment = Comment::create([
    			'content' => $request['comment']
    		]);

    	$question->comments()->save($comment);

    	return redirect()->back();
    }
}
