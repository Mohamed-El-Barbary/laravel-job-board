<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index()
    {
        $comments = Comment::all();
        return view('comment.index', ['comments' => $comments]);
    }

    public function create(){
        // Comment::create([
        //     'author' => 'John Doe',
        //     'content' => 'This is a another comment',
        //     'post_id' => 5
        // ]);

        Comment::factory(10)->create();

        return redirect('/blog');
    }

    public function show($id){
        $comment = Comment::find($id);
        return view('comment.show', ['comment' => $comment]);
    }

}
